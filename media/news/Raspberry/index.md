---
layout: default
title: Cactus runs on Raspberry Pi
---
![cactusraspberry](cactusraspberry.png){width="50"}

Cactus was ported to run on [Raspberry Pis](http://raspberrypi.org/).
These credit-card sized computers run
[Raspbian](http://www.raspbian.org/), a fork of
[Debian](http://www.debian.org), a wide-spread and supported [Linux
distribution](http://en.wikipedia.org/wiki/Linux_distribution). Owing to
the inherent portability of Cactus, the port to Raspberry Pi was
straightforward; however a few tweaks were necessary due to the uncommon
architecture (an ARMv6 32 bit core), which is anticipated to be
supported in the next release of Cactus.

Since Raspberry Pis are inexpensive and portable hardware, they provide
convenient tools for education. Though their clock rate is limited to a
mere 700 MHz with a current maximum supported memory of 512 MB, they
nevertheless are able to support Cactus runs for small-scale toy codes.

What has been demonstrated is a build of the
[Gauss](http://einsteintoolkit.org/about/releases/ET_2013_05_announcement.php)
release of the [Einstein Toolkit](http://einsteintoolkit.org/),
successfully passing all but a few test suites (apparently connected to
[HDF5](http://www.hdfgroup.org/HDF5/) recovery in
[Carpet](http://www.carpetcode.org/)) on one Raspberry Pi and a small
\"cluster\" of two Raspberry nodes.

Building is straightforward: [Simfactory](http://simfactory.org/) now
contains an optionlist
[raspbian.cfg](https://svn.cct.lsu.edu/repos/numrel/simfactory2/trunk/mdb/optionlists/raspbian.cfg),
which includes instructions and lists packages which reduce build-time
when installed.

### 14 October 2013 --- knarf {#october-2013-knarf .align-right}
