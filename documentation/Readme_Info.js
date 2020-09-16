const aSync = true;

class MakeReadmes {
  constructor(release_branch) {
    this.readmes = {}
    this.outstanding_requests = 0;
    this.release_branch = release_branch;
  }

  callback(xmlHttp) {
    var me = this;
    document.body.style.cursor = 'wait';
    this.outstanding_requests += 1;
    return function() {
      if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
          me.handle_repos(xmlHttp.responseText);
        }
        me.request_done();
      }
    }
  }

  handle_repos(content) {
    var readmes_list = document.getElementById("readmes");
  
    var resp = JSON.parse(content);
    var repos = resp.values;
    for (var repo in repos) {
      var repo_name = repos[repo].name;
      if (repo_name == "Cactus")
        continue; // skip "Cactus" repoangement
  
      var source = repos[repo].links.source.href;
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = this.branch_callback(xmlHttp, repo_name, source);
      var branch_url = repos[repo].links.branches.href+"/"+this.release_branch;
      xmlHttp.open("GET", branch_url, aSync);
      xmlHttp.send(null);
    }
  }

  branch_callback(xmlHttp, repo_name, source) {
    var me = this;
    this.outstanding_requests += 1;
    return function() {
      if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200)
          me.handle_branch(xmlHttp.responseText, repo_name, source);
        me.request_done();
      }
    }
  }

  handle_branch(content, repo_name, source) {
    var resp = JSON.parse(content);
    var commit = resp.target.hash;
    var listing = source+"/"+commit+"/";
  
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = this.listing_callback(xmlHttp, repo_name, listing);
    xmlHttp.open("GET", listing, aSync);
    xmlHttp.send(null);
  }

  listing_callback(xmlHttp, repo_name, listing) {
    var me = this;
    this.outstanding_requests += 1;
    return function() {
      if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200)
          me.handle_listing(xmlHttp.responseText, repo_name, listing);
        me.request_done();
      }
    }
  }

  handle_listing(content, repo_name, listing) {
    var resp = JSON.parse(content);
    var files = resp.values;
    for (var fn in files) {
      if (files[fn].type == "commit_directory") {
        var thorn = files[fn].path;
        var thornlisting = listing + thorn;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = this.thorn_callback(xmlHttp, repo_name, thorn, thornlisting);
        xmlHttp.open("GET", thornlisting, aSync);
        xmlHttp.send(null);
      }
    }
    if (resp.next) {
      var next = resp.next;
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = this.listing_callback(xmlHttp, repo_name, listing);
      xmlHttp.open("GET", next, aSync);
      xmlHttp.send(null);
    }
  }

  thorn_callback(xmlHttp, repo_name, thorn, thornlisting) {
    var me = this;
    this.outstanding_requests += 1;
    return function() {
      if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200)
          me.handle_thorn(xmlHttp.responseText, repo_name, thorn, thornlisting);
        me.request_done();
      }
    }
  }

  handle_thorn(content, repo_name, thorn, thornlisting) {
    var resp = JSON.parse(content);
    var files = resp.values;
    for (var fn in files) {
      if (files[fn].type == "commit_file" && files[fn].path == thorn + "/README") {
        var readme = thornlisting + "/README";
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = this.readme_callback(xmlHttp, repo_name, thorn);
        xmlHttp.open("GET", readme, aSync);
        xmlHttp.send(null);
      }
    }
    if (resp.next) {
      var next = resp.next;
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = this.thorn_callback(xmlHttp, repo_name, thorn, thornlisting);
      xmlHttp.open("GET", next, aSync);
      xmlHttp.send(null);
    }
  }

  readme_callback(xmlHttp, repo_name, thorn) {
    var me = this;
    this.outstanding_requests += 1;
    return function() {
      if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200)
          me.handle_readme(xmlHttp.responseText, repo_name, thorn);
        me.request_done();
      }
    }
  }

  handle_readme(response, repo_name, thorn) {
    if(this.readmes[repo_name] === undefined)
      this.readmes[repo_name] = {};
    this.readmes[repo_name][thorn] = response;
  }

  request_done() {
    this.outstanding_requests -= 1;
    console.assert(this.outstanding_requests >= 0);
    if(this.outstanding_requests == 0) {
      document.body.style.cursor = 'default';
      /* add to document */
      var div = document.getElementById("readmes");
      for(const arr of Object.keys(this.readmes).sort()) {
        var readmes = this.readmes[arr];
        var heading = document.createElement("h3");
        heading.appendChild(document.createTextNode(arr));
        div.appendChild(heading);
        var table = document.createElement("table");
        div.appendChild(table);
        var header = table.appendChild(document.createElement("tr"));
        header.appendChild(document.createElement("th"))
              .appendChild(document.createTextNode("Thorn"));
        header.appendChild(document.createElement("th"))
              .appendChild(document.createTextNode("Author(s)"));
        header.appendChild(document.createElement("th"))
              .appendChild(document.createTextNode("Purpose"));
        //readmes_list.appendChild(txt);
        for(const thorn of Object.keys(readmes).sort()) {
          var res = MakeReadmes.parse_readme(readmes[thorn]);
          var row = table.appendChild(document.createElement("tr"));
          row.appendChild(document.createElement("td"))
             .appendChild(document.createTextNode(thorn));
          var authors = row.appendChild(document.createElement("td"));
          for(var author in res.authors) {
             var nbsp = String.fromCharCode(160); // maybe overkill
             authors.appendChild(document.createTextNode(res.authors[author].replace(" ", nbsp)));
             authors.appendChild(document.createElement("br"));
          }
          row.appendChild(document.createElement("td"))
             .appendChild(document.createTextNode(res.purpose));
        }
      }
    }
  }

  static parse_readme(readme) {
    // gets Authors
    // gets first paragraph of Purpose
    var authors = [];
    var maintainers = [];
    var purpose = [];
    var in_authors = false;
    var in_maintainers = false;
    var in_purpose = false;
    var lines = readme.split("\n");
    for(var i in lines) {
      var line = lines[i].trim();
      if(in_authors && (/:/.test(line) || /^--*$/.test(line) || /^==*$/.test(line))) {
        in_authors = false;
      } else if(in_maintainers && (/:/.test(line) || /^--*$/.test(line) || /^==*$/.test(line))) {
        in_maintainers = false;
      } else if(in_purpose && purpose.length > 0 && line == "") {
        in_purpose = false;
        break; // this avoids being tricked into multiple purposes etc.
      }

      if(/Author.*:/.test(line)) {
        in_authors = true;
      }

      if(/Maintainer.*:/.test(line)) {
        in_maintainers = true;
      }

      if(/Purpose *$/i.test(line) || /Purpose of the thorn.*/i.test(line)) {
        in_purpose = true;
        continue; // skip line saying "Purpose"
      }

      console.assert(in_authors + in_maintainers + in_purpose <= 1);

      if(in_authors) {
        var author = line.replace(/.*Author.*: */,'')
                         .replace(/<[^>]*>/,'').trim();
        authors.push(author);
      } else if(in_maintainers) {
        var maintainer = line.replace(/.*Maintainer.*:/,'')
                             .replace(/<[^>]*>/,'').trim();
        maintainers.push(maintainer);
      } else if(in_purpose) {
        if(purpose.lenth > 0 || (line.length > 0 && !/^--*$/.test(line) && !/^==*$/.test(line))) {
          purpose.push(line);
        }
      }
    }

    if(authors.length == 0 && maintainers.length > 0)
      authors = maintainers;
    
    return {authors: authors, purpose: purpose.join("\n")};
  }
}

function getReadmes(release_branch)
{
  var apiBase = "https://api.bitbucket.org/2.0";
  var makeReadmes = new MakeReadmes(release_branch);
  var xmlHttp = new XMLHttpRequest();
  var theURL = apiBase+"/repositories/cactuscode?pagelen=20";
  xmlHttp.onreadystatechange = makeReadmes.callback(xmlHttp);
  xmlHttp.open("GET", theURL, true); // true for asynchronous 
  xmlHttp.send(null);
}
