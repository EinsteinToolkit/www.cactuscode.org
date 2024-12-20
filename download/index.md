---
layout: default
title: Download Cactus
sidebar: downloads.html
---
{% include base.html %}
<span id="requirements"></span>

### Requirements

| <span style="color:green">Required</span> | Optional    |
| Perl     | MPI         |
| C, C++   | F90         |
| CPP      | ctags/etags |
| GNU make | Python      |
| svn, git |             |

### Getting the Code

Cactus is maintained using [git](https://git-scm.com/).  The preferred method
is to use the <kbd>GetComponents</kbd> script along with a thornlist as
described below.  We maintain a
[page of basic thornlists](thorns/index.html), but you can
use your own customized thornlist.

Download
[GetComponents](https://github.com/gridaphobe/CRL) and make sure it is executable.

```
wget --no-check-certificate https://raw.github.com/gridaphobe/CRL/Cactus_4.3.0/GetComponents
chmod a+x GetComponents
```

To checkout the Cactus flesh and required thorns, choose and save one of our
[ThornLists](thorns/index.html) (or provide your own) and issue the command:

```
./GetComponents <thornlist-url>
```

### License

The Cactus Code is (C) Copyrighted by the individual Authors and
distributed under the [GNU Lesser General Public
License](https://www.gnu.org/licenses/old-licenses/lgpl-2.0.html). Most of the
computational packages that come with it follow this license, but the
authors of any thorn are free to follow any licensing they deem
appropriate as long as they state it explicitly in their thorn
distribution.
