---
layout: default
title: MakeThornList
---
Generating ThornLists from Parameter Files
------------------------------------------

The [MakeThornList](makeThornList) script provides a way to generate a
ThornList with all the required CVS directives needed for the
[GetCactus](CVS.html#getcactus) script to check out the thorns needed to
run the parameter file.

Information on using a ThornList for checking out thorns including a
description of CVS directives in available in the
[Management-HOWTO](../Documentation/HOWTO/Management-HOWTO).

### To install the MakeThornList script:

1.  Write a *Master ThornList* containing all the thorns you have access
    to, along with directives for their CVS locations. As an example,
    here is [my master thornlist](MasterAllen.th).
2.  Create a directory `.cactus` in your home directory.
3.  Add your Master ThornList to the `.cactus` directory, as the file
    `MasterThornList`.
4.  Download the [MakeThornList](MakeThornList) script to a directory on
    your path.
5.  Keep your master thornlist up to date by adding and removing thorns
    as they become available to you.

### To use the MakeThornList script

1.  To generate a ThornList `MyRun.th` for the parameter file
    `MyRun.par` simply issue the command

        MakeThornList -o=MyRun.th MyRun.par

2.  Then checkout Cactus using 

        GetCactus MyRun.th
