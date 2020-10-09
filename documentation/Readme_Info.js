const aSync = true;
const rootOrg = "cactuscode";
const apiBase = "https://api.bitbucket.org/2.0";
// either not really thorns or wrong license (not LGPL)
const ignoreRepos = ["Cactus", "Numerical", "Utilities"];

class MakeReadmes {
  /* helper class to construct a list of all Readme files in branch
   * release_branch of all repositories contained in rootOrg.
   * Except: ignroeRepos
   * Once all data is collected it is injected into a the div marked by
   * id="readmes" */
  constructor(rootOrg, release_branch) {
    /* collects the Readme files for each repository */
    this.readmes = {} /* [repository][thorn] */
    /* since everything is asynchronous and we always start child requests
     * before action on a parent request, we are done when there are no more
      * outstanding requests */
    this.outstanding_requests = 0;
    /* constructor arguments */
    this.release_branch = release_branch;
    this.rootOrg = rootOrg;
  }

  run() {
    /* starts the chain of requests and eventually updates the page */
    document.body.style.cursor = 'wait';

    var xmlHttp = new XMLHttpRequest();
    var theURL = apiBase+"/repositories/"+this.rootOrg;
    xmlHttp.onreadystatechange = this.repos_callback(xmlHttp);
    xmlHttp.open("GET", theURL, aSync);
    xmlHttp.send(null);
  }

  repos_callback(xmlHttp) {
    /* called once we have obtained the list of repositories */
    var me = this;
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
    /* walk over list of repositories and get all thorns in them */
    var resp = JSON.parse(content);
    var repos = resp.values;
    for (var repo in repos) {
      var repo_name = repos[repo].name;
      if (ignoreRepos.includes(repo_name))
        continue;
  
      /* API endpoint to download data from repository */
      var source = repos[repo].links.source.href;

      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = this.branch_callback(xmlHttp, repo_name, source);
      var branch_url = repos[repo].links.branches.href+"/"+this.release_branch;
      xmlHttp.open("GET", branch_url, aSync);
      xmlHttp.send(null);
    }
    if (resp.next) {
      var next = resp.next;
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = this.repos_callback(xmlHttp);
      xmlHttp.open("GET", next, aSync);
      xmlHttp.send(null);
    }
  }

  branch_callback(xmlHttp, repo_name, source) {
    /* called once we have the list of branches */
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
    /* get all files / directories in root directory of repository */
    var resp = JSON.parse(content);

    /* URL to get content at the commit the branch head points to */
    var commit = resp.target.hash;
    var listing = source+"/"+commit+"/";
  
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = this.listing_callback(xmlHttp, repo_name, listing);
    xmlHttp.open("GET", listing, aSync);
    xmlHttp.send(null);
  }

  listing_callback(xmlHttp, repo_name, listing) {
    /* called once we have the list of files present */
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
    /* loop over all files, and enter each directory found looking for a README file */
    var resp = JSON.parse(content);
    var files = resp.values;
    for (var fn in files) {
      if (files[fn].type == "commit_directory") {
        /* API endpoint to list content of thorn directory */
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
    /* called once we have list of files in thorn directory */
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
    /* check for README file, and get its content if found */
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
    /* called once we have the cotent of the README file */
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
    /* get readme file content, store in readmes dictionary */
    if(this.readmes[repo_name] === undefined)
      this.readmes[repo_name] = {};
    this.readmes[repo_name][thorn] = response;
  }

  request_done() {
    /* after handling each request, we check if this was the last outstanding
     * one, if so we can now process the collected information into HTML
     * content */
    this.outstanding_requests -= 1;
    console.assert(this.outstanding_requests >= 0);
    if(this.outstanding_requests == 0) {
      /* done waiting, wake up cursor */
      document.body.style.cursor = 'default';
      /* add to document */
      var div = document.getElementById("readmes");
      // loops over all repositories (keys to readmes)
      for(const arr of Object.keys(this.readmes).sort()) {
        var readmes = this.readmes[arr]; // all readmes in a repository
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
        // now loop over all thorns in the repository
        for(const thorn of Object.keys(readmes).sort()) {
          /* res has keys: "authors" (a list) and "purpose" (a string) */
          var res = MakeReadmes.parse_readme(readmes[thorn]);
          var row = table.appendChild(document.createElement("tr"));
          row.appendChild(document.createElement("td"))
             .appendChild(document.createTextNode(thorn));
          var authors = row.appendChild(document.createElement("td"));
          for(var author in res.authors) {
             // use non-breaking space in between name components of a single
             // author so that it is not broken into multiple lines
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
    // authors are either the actual authors listed, or if those are not found
    // he maintainers
    // this tries to be generous parsing various README like files that show up
    // in Cactus
    var authors = [];
    var maintainers = [];
    var purpose = [];
    var in_authors = false;
    var in_maintainers = false;
    var in_purpose = false;
    var lines = readme.split("\n");
    // Parsing rules are:
    // * collect all lines following "Authors:" or "Maintainers:" into the
    //   respective lists
    // * stop collecting if encountering an line of == or -- or a new tag
    // * collect first paragraph of purpse after a line indicating that
    //   "Purpose" starts now. Skip empty lines just before Purpose text.
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
  var makeReadmes = new MakeReadmes(rootOrg, release_branch);
  makeReadmes.run();
}
