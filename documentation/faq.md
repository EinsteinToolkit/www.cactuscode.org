---
layout: default
title: Frequently Asked Questions
---
Please send suggestions and questions for the FAQ to [the CactusMaint
mailing list](mailto:cactusmaint@cactuscode.org).

The Questions:
--------------

1.  ### Configuring and Building

    1.  [The make system says "Checking status of libXXX.a" and then
        just sits there. What can I do ?](#C1)
    2.  [Compilation of Cactus fails with the error: identifier
        "DECLARE\_CCTK\_PARAMETERS" is undefined?](#C2)
    3.  [(Linux) I get 'g77: cannot specify -o with -c or -S and
        multiple compilations' when compiling with the Pacific VAST90
        compiler.](#C3)
    4.  [How do I compile with MPI? Why isn't it automatic like in
        Cactus 3?](#C4)
    5.  [I can't compile because the compiler complains that a routine
        name has been previously defined ... but I can't find it
        repeated?](#C5)
    6.  [How can I make sure that one thorn is compiled before another?
        For example to make sure that F90 module files from
        ArrangementA/ThornA are available for ArrangementB/ThornB.](#C6)
    7.  [(Solaris) I start a configuration process with gmake, but on
        the second gmake it wants to set up the configuration again and
        again ....](#C7)
    8.  [How do I compile Cactus in 32 bit mode on a 64 bit irix
        machine?](#C8)
    9.  [What can I do if I don't have enough disk space to compile
        Cactus?](#C9)
    10. [When I compile Cactus I get an error with  
        "unterminated character constants"  
        , but on typing gmake again it proceeds without problem.](#C10)
    11. [Sometimes when I compile in parallel with `TJOBS` or `FJOBS`
        the compilation stops halfway through.](#C11)
    12. [I get the following error when compiling?](#C12)  
        Checking status of libIOJpeg.a  
        gmake\[3\]: \*\*\* No rule to make target \\  
           \`/u1/allen/scratch/Cactus/arrangements/  
           CactusIO/IOJpeg/src/IOJpeg.h', needed by \`JPEG.c.d'. Stop.  
        gmake\[2\]: \*\*\* \[make.checked\] Error 2  
        gmake\[1\]: \*\*\*
        \[/u1/allen/scratch/Cactus/configs/wave/lib/libIOJpeg.a\] \\  
           Error 2  
        gmake: \*\*\* \[wave\] Error 2
    13. [Compiling files in Cactus seems to involve three steps,
        preprocessing, compiling, and then postprocessing. What are they
        doing?](#C13)
    14. [When trying to create the Cactus executable I get the error
        Unresolved text symbol "SetCartSymVN" -- 1st referenced by
        /data2/Cactus/configs/origin/lib/libADMBase.a](#C14)
    15. [My thorn is calling directly a function from another thorn.
        Both thorns are in my ThornList, but on linking I get the error
        Startup.c.o(.text+0x4d): undefined reference to
        \`OtherThornsFunction'](#C15)
    16. [(Linux) When trying the new gcc 3.1.1 compiler, I received a
        lot of warnings about the compiler flag
        "-I/usr/local/include".](#C16)
    17. [(OpenBSD) The system linker /usr/bin/ld crashes when linking
        C++ thorns.](#C17)
    18. [(Linux) When I compile Fortran I get errors because characters
        are in the first 5 columns, but I can't see anything wrong in
        the source code.](#C18)
    19. [(Linux) I get internal errors using the Pacific-Sierra Fortran
        90 compiler](#C19)
    20. [(Linux) I get the linking error "/usr/bin/ld: cannot find
        -lIEPCF90" with the Intel Fortran compiler.](#C20)
    21. [(Solaris) Building PUGHReduce under Solaris 2.8 gives several
        errors with macro recursion.](#C21)
    22. [(MacOS) Compiling with the Absoft F90 compiler I get error
        messages about large "fixups"](#C22)
    23. [How can I see the commands which Cactus is actually using to
        build the executable?](#C23)
    24. [My configuration takes forever to build, are there any ways to
        speed this up?](#C24)
    25. [On compiling Fortran code I get errors like "dummy argument
        CCTK\_DIM has not been given a type", but I'm not using
        `CCTK_DIM` in the routine?](#C25)
    26. [I'm passing arguments to my scheduled routine using
        `CCTK_ARGUMENTS` and I get the compile error "identifier
        DECLARE\_CCTK\_ARGUMENTS is undefined"](#C26)
    27. [I have a code block commented out by
        `'#if 0         ... #endif`' in a C/C++ routine which uses the
        `DECLARE_CCTK_ARGUMENTS` and/or `DECLARE_CCTK_PARAMETERS` macro.
        The compiler stops with a parsing error on this piece of
        code.](#C27)
    28. [(Linux IA64) I get a segmentation violation compiling
        snprintf.c in the Cactus flesh?](#C28)
    29. [On linking I get an "unresolved text symbol" for a scheduled
        function called from libCactusBindings.a](#C29)
    30. [(Linux) Using the Intel Fortran compiler I get the error
        "/usr/bin/ld cannot find -lintrins" on linking.](#C30)
    31. [I just want to check that one thorn compiles correctly, can I
        test this without compiling all the thorns which come before
        it?](#C31)
    32. [What is the Cactus c-preprocessor (Cactus cpp) ?](#C32)
    33. [I'm working on a machine where a compiler problem means that I
        need to compile a particular thorn with a lower optimisation
        level. Is there an easy way to do this?](#C33)
    34. [How can I make sure that one file is compiled before another?
        For example to make sure that an F90 module file "module.F90" is
        available for other file "using.F90".](#C34)
    35. [I started building a Cactus configuration and it asked me if I
        wanted to edit the thornlist, I pressed 'y' and then 'enter' but
        nothing happened?](#C35)
    36. [(Linux) Compiling Cactus with Redhat 8 or 9 it fails in
        CactusBase/IOUtil because the system failed to find
        &lt;sys/stat.h&gt;](#C36)
    37. [Why can't I use different F90 and F77 compilers with
        Cactus?](#C37)
    38. [What can I do about \_\_builtin errors reported by Intel
        9.0?](#C38)

2.  ### Running

    1.  [I'm trying to run Cactus with MPI using "mpirun", but I just
        get an error "Unknown option -np"?](#D1)
    2.  [I'm running Cactus on a parallel system with missing C++
        libraries on some nodes. Cactus compiles but it won't run?](#D2)
    3.  [I can build a Cactus configuration using some external
        libraries (e.g. HDF5, PETSc) but get errors with shared
        libraries on running the executable.](#D3)
    4.  [I can run my non-MPI executable using shared libraries without
        problems now but still get the same error as in FAQ D3 for MPI
        jobs started with mpirun.](#D4)
    5.  [(Irix) I'm using the web server thorn CactusConnect/HTTPD, I
        compiled with `PTHREADS=yes` to get better response, but the
        executable just hangs.](#D5)
    6.  [I get a segmentation fault running Cactus, right after the
        schedule tree is printed to screen?](#D6)
    7.  [(Linux) I'm using the NaNChecker thorn and seeing very strange
        results.](#D7)
    8.  [(Linux) Testsuites for CactusEinstein/AHFinder and
        CactusBench/BenchADM are failing, but the release notices say
        that they pass.](#D8)
    9.  [How do I run Cactus until a given coordinate time instead of to
        a given iteration number?](#D9)
    10. [Output to screen using the Info IO method of IOBasic doesn't
        work.](#D10)
    11. [I get an error saying "CCTK\_Equals: First string null".](#D11)
    12. [I have a Cactus executable compiled with MPI. When running it
        on a single processor (without using mpirun) I get an error
        saying "Unable to open parameter file ...".](#D12)

3.  ### Thorn Writing

    1.  [While implementing some MPI code in Cactus, I came across the
        problem of getting an MPI communicator. I basically have the
        choice between using `MPI_COMM_WORLD`, assuming that no
        processors have been set aside by the driver, or tying myself to
        a certain driver, such as PUGH, and using the driver's internal
        data structures. Both choices are clearly not desirable.](#E1)
    2.  [How can I communicate the value of a local scalar on one
        processor to all processors? There doesn't seem to be an API for
        this in Cactus.](#E2)
    3.  [What about if I only want to send a local scalar to a single
        processor?](#E3)
    4.  [Why shouldn't I make direct calls to MPI from my thorns? Your
        default driver uses MPI.](#E4)
    5.  [What is the difference between using
        "`const cGH         *cctkGH`" and "`cGH *cctkGH`" for argument
        declarations? What about
        "`const cGH* const       cctkGH`"?](#E5)
    6.  [On compiling Fortran code I get errors like "dummy argument
        CCTK\_DIM has not been given a type", but I'm not using
        `CCTK_DIM` in the routine?](#E6)
    7.  [If I have two grid array groups with identical sizes (and ghost
        zones, distributions, etc.), are they guaranteed to be
        distributed in the same way? That is, can I count on the fact
        that their local shapes (`lsh`) will be the same? It is true
        empirically. What if the grid arrays have different variable
        types or numbers of time levels?](#E7)
    8.  [Is there anyway to only compile certain lines of source code if
        a particular thorn is in the compiled ThornList?](#E8)
    9.  [How can I find out in make.configuration.defn, whether MPI is
        being used or not?](#E9)
    10. [How can I see in source code whether MPI is being used?](#E10)
    11. [The functions `CCTK_Exit` and `CCTK_Abort` require `cctkGH` as
        an argument. How can I call these functions deep inside my
        thorns where this pointer is not available?](#E11)
    12. [I'm getting weird syntax errors in Fortran code, with an extra
        garbage character (often `$` or `&`) stuck in the middle of a
        `CCTK_INFO()` or `CCTK_WARN()` or `CCTK_EQUALS()` call after it
        has been processed.](#E12)
    13. [I want to write the value of a `KEYWORD` parameter in Fortran
        code to a file, but nothing I try works.](#E13)
    14. [I write my thorns with Fortran, do you have any general
        advice?](#E14)
    15. [In my Fortran thorn the value of a Cactus integer parameter is
        totally wrong when I print it, but when I print it from C it is
        fine.](#E15)
    16. [I write my thorns with C, do you have any general
        advice?](#E16)
    17. [Why is it that when I schedule more than one routine in the
        same thorn at `ANALYSIS` only the first routine is executed and
        the second one is ignored?](#E17)
    18. [Is there a way to synchronize individual grid variables in a
        group?](#E18)
    19. [Is there a way to synchronize just one time level of a grid
        variable?](#E19) Right now only one time level is synchronized,
        that is the "current" level. Other time levels cannot be
        synchronized and are assumed to be fixed or read only.
    20. [I'm using the `CCTK_ParameterSet` function to change a
        parameter, but after calling it the parameters value doesn't
        change?](#E20)

4.  ### General

    1.  [Why do I have to use e.g.
        "`mpirun -np 1         ./exe/cactus_myconfig -O`" to see the
        compiled parameters, can't the parameters be output before MPI
        is initialised?](#F1)
    2.  [Why isn't a `BOOLEAN` parameter a `LOGICAL` in Fortran?](#F2)
    3.  [Why is there an MPI call in the Flesh (`MPI_Init`)? I thought
        that the Cactus flesh was independent of any parallel protocol,
        why isn't this call made from a driver thorn?](#F3)
    4.  [Why is the main routine of Cactus written in C++
        (src/main/flesh.cc) when the rest of the flesh is standard ANSI
        C? More strangely, why does Cactus still compile when I have no
        C++ compiler on my system?](#F4)
    5.  [Are there grid scalars of type `STRING` ?](#F5)
    6.  [Why don't you use compilers mpicc, mpiCC etc when they exist on
        parallel machines?](#F6)
    7.  [How does Cactus manage to so seamlessly call Fortran routines
        from C, and vice versa?](#F7)
    8.  [The documentation says that Cactus parameters are read-only,
        but I can trivially change the value of a parameter in the
        Fortran source code of my thorn.](#F8)

5.  ### Documentation

    1.  [How can I build the ThornGuide documentation for single thorns
        or arrangements?](#G1)
    2.  [I have a configuration with over ten thorns, but when I make
        the ThornGuide I only see the first few of them.](#G2)

6.  ### I/O

    1.  [I want to run an old parameter file, but none of the I/O
        parameters are recognised!](#H1)
    2.  [I would like to use checkpointing for a thorn which has complex
        grid arrays. I tried to use the `IOFlexIO` thorn and received
        the error: Unsupported CCTK variable datatype 10. Is there a way
        to checkpoint complex variables?](#H2)

7.  ### Configuration Files

    1.  [The size of array parameters is specified by a integer number
        in the param.ccl file. Why can't a parameter itself be used
        here?](#I1)

The Answers
-----------

1.  ### Configuring and Building

    1.  <span id="C1">The make system says "Checking status of libXXX.a"
        and then just sits there. What can I do ?</span>

        The first thing to do whenever a problem arises from the make
        system is to run with the "`SILENT=no`" option.

        In this case, though, first check that the clocks on the machine
        on which you are editing files and the clock on the machine you
        are compiling on are synchronised. If the compilation machine's
        clock is slow, then the newly made dependency files will still
        be \`older' than the file you edited, and the system will loop
        until this situation changes.

    2.  <span id="C2">Compilation of Cactus fails with the error:
        identifier "DECLARE\_CCTK\_PARAMETERS" is undefined?</span>

        You need to include the header:
        `#include         "cctk_Parameters.h`"

    3.  <span id="C3">(Linux) I get 'g77: cannot specify -o with -c or
        -S and multiple compilations' when compiling with the Pacific
        VAST90 compiler.</span>

        If the libvast90.a library is in the same directory as your F90
        script, F90 passes `-lvast90` to the underlying G77 compile,
        which is of course only a valid switch when linking. The
        solution is to separate these files, e.g. into bin and lib
        directories.

    4.  <span id="C4">How do I compile with MPI? Why isn't it automatic
        like in Cactus 3?</span>

        The standard MPI driver (PUGH) is in a thorn now
        (CactusPUGH/PUGH), so there is now the possibility to add other
        parallel drivers using alternative message passing schemes as
        separate thorns. To compile with MPI, when you make a
        configuration, use

        `gmake <configuration>-config         MPI=<MPI_TYPE>`

        where the allowed values of `MPI_TYPE` are discussed in the
        documentation. For machines where Cactus 3 used to use MPI by
        default, the correct option is probably `MPI=NATIVE`

    5.  <span id="C5">I can't compile because the compiler complains
        that a routine name has been previously defined ... but I can't
        find it repeated?</span>

        If it is a C routine, whose name is either all in capitals or
        all in lowercase, and the routine has a Fortran wrapper, then it
        could be that the compiler doesn't attach underscores to the
        Fortran name and there is a conflict. To remove this possibility
        always use mixed case names for C routines with Fortran
        wrappers.

    6.  <span id="C6">How can I make sure that one thorn is compiled
        before another? For example to make sure that F90 module files
        from ArrangementA/ThornA are available for
        ArrangementB/ThornB.</span>

        Add a dependency to a ThornB's make.configuration.deps file, for
        example

        `ifneq (,$(findstring ArrangementA/ThornA,$(THORNS))) $(CCTK_LIBDIR)$(DIRSEP)libThornB.a : $(CCTK_LIBDIR)$(DIRSEP)libThornA.a endif`

        we will try to modify the make system to make this more
        automatic in the future.

    7.  <span id="C7">(Solaris) I start a configuration process with
        gmake, but on the second gmake it wants to set up the
        configuration again and again ....</span>

        You are using a version of gmake which is too outdated (even
        though this version may work perfectly on other architectures).
        We found that GNU Make version 3.79 works fine.

    8.  <span id="C8">How do I compile Cactus in 32 bit mode on a 64 bit
        irix machine?</span>

        `gmake <config>-config         IRIX_BITS=32`

    9.  <span id="C9">What can I do if I don't have enough disk space to
        compile Cactus?</span>

        If you have access to some scratch space, or temporary space,
        you can instruct Cactus to put the "configs" directory there
        (with all the object files and intermediate files).

        For example, to use the directory /scratch/myconfigs with csh or
        tcsh,

        `setenv CACTUS_CONFIGS_DIR /scratch/myconfigs`

        or with bash

        `CACTUS_CONFIGS_DIR=/scratch/myconfigs export         CACTUS_CONFIGS_DIR`

    10. <span id="C10">When I compile Cactus I get an error like</span>

        /home/allen/Cactus/arrangements/MineStuff/Test/src/metric.F90:3:  
        unterminated character constant  
        make\[2\]: \*\*\* \[metric.F90.d\] Error 33

        But then when I type gmake again the compilation proceeds
        without problem.

        You are probably using Linux, and the C preprocessor is
        complaining about single apostrophes in a Fortran comment line
        when it is creating the dependency file for metric.F90. Make
        continues the second time because the dependency file now exists
        (although it won't necessarily contain the right information).

        We could remove this problem by removing comments from Fortran
        files before using the C preprocessor, but we don't want to add
        this overhead at the moment, since we are writing a Cactus
        preprocessor which won't have this problem (and will solve a
        number of other preprocessing problems).

        Your choices for getting past this for now are

        -   try and remove any single apostrophes in Fortran comments
        -   use gmake twice and live with possibly bad dependency
            information for these files
        -   if you are using Linux, try using the option
            "`-traditional`" with the GNU cpp which does ignore the
            apostrophes.

        Unfortunately, cpp is broken in Red Hat's version 2.96, and in
        the official releases 3.0 up to 3.0.3. The versions 2.95.x and
        3.0.4 do work fine.

        In order to use a different cpp and to pass the option
        "`-traditional`", use for example

        `FPP = /home/user/gcc/bin/cpp -traditional`

        when you configure your application.

    11. <span id="C11">Sometimes when I compile in parallel with `TJOBS`
        or `FJOBS` the compilation stops halfway through.</span>

        Compiling in parallel using `TJOBS`/`FJOBS` is not always
        failsafe. Usually simply issuing your gmake command again will
        complete the compilation and produce an executable. Occasionally
        you may see link errors in the last stage of compilation, if
        this happens remove the libraries

        `rm configs/<config>/lib/*`

        and issue gmake once more.

        Problems with `TJOBS`/`FJOBS` can be avoided if your version of
        gmake supports parallel make (this happened somewhere between
        3.74 and3.78.1), in which case you can use instead the more
        robust:

        `gmake <config> -j <number of         processors>`

    12. <span id="C12">I get the following error when compiling?</span>

        Checking status of libIOJpeg.a  
        gmake\[3\]: \*\*\* No rule to make target \\  
           \`/u1/allen/scratch/Cactus/arrangements/  
           CactusIO/IOJpeg/src/IOJpeg.h', needed by \`JPEG.c.d'. Stop.  
        gmake\[2\]: \*\*\* \[make.checked\] Error 2  
        gmake\[1\]: \*\*\*
        \[/u1/allen/scratch/Cactus/configs/wave/lib/libIOJpeg.a\] \\  
           Error 2  
        gmake: \*\*\* \[wave\] Error 2

        This is because an include file which was used in your previous
        compile is no longer there (in this case the file IOJpeg.h was
        renamed ioJpeg.h). To solve this, delete the dependency
        information by issuing

        `gmake <config>-cleandeps`

        before compiling again.

    13. <span id="C13">Compiling files in Cactus seems to involve three
        steps, preprocessing, compiling, and then postprocessing. What
        are they doing?</span>

        Cactus specific preprocessing is performed for most source
        files, for example to expand c-preprocessor macros (e.g.
        `DECLARE_CCTK_PARAMETERS`) in .F, .F90 and .F77 files or to set
        correct names for calling Fortran functions in C files. At the
        end of the preprocessing stage the resulting source file is
        placed into the

        configs/&lt;config&gt;/build/&lt;thorn&gt; directory and if
        ready to be passed to the compiler.

        Once a file has been preprocessed, the resulting source file is
        compiled, with the working directory set to

        configs/&lt;config&gt;/scratch

        (which ensures, for example, that all F90 modules can be found
        by the compiler).

        After the file is compiled, some architectures may require
        postprocessing of the object files, for example,some machines
        don't allow the use of a "`-o`" flag for naming the resulting
        object file, in which case part of postprocessing would involve
        renaming and moving the file.

    14. <span id="C14">When trying to create the Cactus executable I get
        the error</span>

        Creating cactus\_origin in /data2/convCactus/exe from  
        CactusBase/IOASCII CactusBase/Boundary CactusPUGH/PUGHInterp  
        CactusBase/CartGrid3D CactusEinstein/StaticConformal  
        CactusPUGH/PUGHReduce CactusEinstein/ADMBase CactusBase/Time  
        CactusPUGH/PUGH CactusPUGH/PUGHSlab CactusBase/IOUtil  
        CactusElliptic/EllBase CactusBase/IOBasic  
        ld64: ERROR 33 : Unresolved text symbol "SetCartSymVN" -- 1st
        referenced by /data2/Cactus/configs/origin/lib/libADMBase.a\\  
        (InitSymBound.c.o)

        In this case ADMBase is probably not inheriting from the thorn
        which contains the `SetCartSymVN` function which it is using.
        When Cactus makes up the link line order it then doesn't know to
        list the ADMBase library before the library containing this
        function. To test this and/or to get an executable, find the
        link line used by issuing

        `gmake origin SILENT=no`

        and add the missing library to the end of the link line.

    15. <span id="C15">My thorn is calling directly a function from
        another thorn. Both thorns are in my ThornList, but on linking I
        get the error</span>

        Startup.c.o(.text+0x4d): undefined reference to
        \`OtherThornsFunction'

        Make sure that your thorn inherits from the implementation
        provided by the other thorn. If you don't do this, the end link
        line may not list the libraries in the right order for linking.

    16. <span id="C16">(Linux) When trying the new gcc 3.1.1 compiler, I
        received a lot of warnings about the compiler flag
        "-I/usr/local/include".</span>

        This is because HDF5 is installed on this machine in what we
        would consider to be a sub-optimal place. HDF5 is preferably
        installed in own installation directory with (optionally)
        sym-links to the system directories. Cactus configurations
        should use the HDF5 installation directory itself.

        It is a matter of office debate as to whether it would be really
        be a good idea or not to check for and remove system
        directories, we can come up with pathological examples both if
        they are left or if they are removed.

    17. <span id="C17">(OpenBSD) The system linker /usr/bin/ld (called
        by gcc's collect2) crashes when linking C++ thorns if GNU ar is
        used to create the libraries.</span>

        collect2: ld terminated with signal 11 \[Segmentation fault\]
        ld: /home/jonathan/cactus/Cactus/configs/test-interp2/lib/ \\
        libTestInterp2.a(driver.cc.o): unexpected multiple definitions
        \\ of symbol \`axis\_list::string(void) const', type 0xf

        The workaround is to use the system's ar if you have any C++
        thorns.

    18. <span id="C18">(Linux) When I compile Fortran I get errors
        because characters are in the first 5 columns, but I can't see
        anything wrong in the source code.</span>

        The C preprocessor /lib/cpp distributed with Redhat 7.x causes
        problems with Fortran code (Fortran source code is by default
        passed through a preprocessor). The C preprocessor can change
        the spacings in a file, which is fine for C but can seriously
        affect Fortran code. If this is happening, you will see errors
        such as

        \*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*  
        Preprocessing  
        /Cactus\_hydratest/arrangements/CactusPUGH/Interp/src/interp3.F  
        Compiling  
        /Cactus\_hydratest/arrangements/CactusPUGH/Interp/src/interp3.F  
        Pacific-Sierra Research vf90 Personal V3.4N5 12:49:17 10/31/01
        f90 to f77  
         subroutine INTERP3\_CCTK\_REAL  
        Syntax, line 140: Non-blank characters in columns 1-5 of
        continuation  line subroutine INTERP3\_CCTK\_COMPLEX  
        Syntax, line 319: Non-blank characters in columns 1-5 of
        continuation line  
         function LINEAR  
         function INTERP\_QUAD  
         function CUBIC  
        gmake\[3\]: \*\*\* \[interp3.F.o\] Error 16  
        gmake\[2\]: \*\*\* \[make.checked\] Error 2 gmake\[1\]: \*\*\*

        There are two suggested ways to get around this problem:

        1. If you are using Beta 11 or higher, try using the
        architecture independent Cactus preprocessor which we are
        developing by configuring with

        `make <config>-config FPP='$${PERL}         $${CCTK_HOME}/lib/sbin/cpp.pl'`

        2. Another way around this problem is to get hold of a copy of
        cpp from an earlier RedHat distribution (here is cpp from 6.2)
        and either replace the original cpp, or place it somewhere else
        and add the option `FPP=<location of new cpp>` when you
        configure Cactus.

    19. <span id="C19">(Linux) I get internal errors using the
        Pacific-Sierra Fortran 90 compiler</span>

        The free version of the Pacific Sierra compiler can generate
        uncompilable code, this is a problem with the translator. The
        error messages look something like:

        Compiling  
        /home/Cactus/arrangements/CactusEinstein/AHFinder/src/AHFinder\_pow.F
        \\  
        Pacific-Sierra Research vf90 Personal V3.4N5 19:44:34 11/20/01
        f90 to f77  
         module F1COM  
         subroutine POWELL  
        Warning, line 167:  
         Too large to translate -- reduce program or loop size
        (RPNGEN)  
        Fatal, line 198: Internal error detected -- please report
        (EXPGET)  
        Syntax, line 198: Duplicate I/O specifier.  
         subroutine LINMIN  
        Warning, line 497: Too large to translate -- reduce program or
        loop size (RPNGEN)  
         function F1DIM

        The fix is to either do what the message says and reduce the
        code size, or move to a different compiler.

    20. <span id="C20">(Linux) I get the linking error "/usr/bin/ld:
        cannot find -lIEPCF90" with the Intel Fortran compiler.</span>

        If you get the linking error

        /usr/bin/ld: cannot find -lIEPCF90

        Then you need to append `${IA32ROOT}/lib` to your
        `LD_LIBRARY_PATH` environment variable. You can do this directly
        in your shell setup file (e.g. .cshrc) or alternatively there is
        a script $IA32ROOT/bin/iccvars.csh which does this for you.

    21. <span id="C21">(Solaris) Building PUGHReduce under Solaris 2.8
        gives several errors with macro recursion.</span>

        Checking status of libPUGHReduce.a
        "/home/CCTK/Cactus\_beta13/Cactus/arrangements/CactusPUGH/PUGHReduce/src
        line 323: CCTK\_Cmplx\_: macro recursion

        This problem occurs only in the dependency generation part of
        the Cactus build. The Sun's /lib/cpp preprocessor cannot handle
        macro recursion levels of more than 3. Since we are loath to
        rewrite our macros just for Solaris, we would rather wait for a
        better system preprocessor, or for a fuller version of the
        Cactus cpp sometime in the future.

        As a solution, you could try using the Cactus preprocessor:

        `make -config FPP='$${PERL}         $${CCTK_HOME}/lib/sbin/cpp.pl'`

        which has the advantage that it doesn't stop for errors but
        prints a warning message. Be wary though, it isn't perfect yet
        and may fail for some thorns.

        Otherwise, you can keep rerunning your make command to skip past
        the problem files (since only the dependency generation is
        failing). Of course, dependencies (for just these files), will
        then not work.

    22. <span id="C22">(MacOS) Compiling with the Absoft F90 compiler I
        get error messages about large "fixups"</span>

        Compiling
        /home/Cactus/arrangements/AEIThorns/ADM\_BSSN/src/Sources.F  
        Sources.f:unknown:Fixup of -44148 too large for field width of
        16 bits  
        Sources.f:unknown:Fixup of -42232 too large for field width of
        16 bits  
        Sources.f:unknown:Fixup of -33028 too large for field width of
        16 bits

        Add the following text to the thorn's make.code.defn file:

        `ifeq ($(shell uname), Darwin) F90FLAGS += -N11         endif`

    23. <span id="C23">How can I see the commands which Cactus is
        actually using to build the executable?</span>

        Add `SILENT=no` to the end of the compile command and the actual
        commands will be echoed to standard output.

    24. <span id="C24">My configuration takes forever to build, are
        there any ways to speed this up?</span>

        If you are developing and testing, you could build executables
        without using optimisation ... but remember that they will run
        much slower. To do this configure Cactus with `OPTIMISE=no`.

    25. <span id="C25">On compiling Fortran code I get errors like
        "dummy argument CCTK\_DIM has not been given a type", but I'm
        not using `CCTK_DIM` in the routine?</span>

        Look to see if you are passing `CCTK_ARGUMENTS` into your
        routine, if so you need to use `DECLARE_CCTK_ARGUMENTS` in the
        declarations for the routine.

    26. <span id="C26">I'm passing arguments to my scheduled routine
        using `CCTK_ARGUMENTS` and I get the compile error "identifier
        DECLARE\_CCTK\_ARGUMENTS is undefined"</span>

        Make sure you have the lines

        `#include "cctk.h"         #include "cctk_Arguments.h"`

        at the top of your source file

    27. <span id="C27">I have a code block commented out by
        '`#if 0         ... #endif`' in a C/C++ routine which uses the
        `DECLARE_CCTK_ARGUMENTS` and/or `DECLARE_CCTK_PARAMETERS` macro.
        The compiler stops with a parsing error on this piece of
        code.</span>

        For C/C++ code, these two macros expand into (a list of)
        declarations of local variables, with the same names of the
        arguments/parameters, and their initialization statements, plus
        a single opening curly bracket. This bracket starts a new block
        for the statements following the macros. The matching closing
        bracket is automatically inserted during the preprocessing phase
        by the CST's c\_file\_preprocessor.pl program at the end of a
        routine's body. This is simply determined as the closing bracket
        matching the opening bracket of the routine's body. Because the
        c\_file\_preprocessor.pl program is run before $CPP and doesn't
        understand $CPP directives itself, it would not correctly detect
        the end of the routine's body in the following (legal C code)
        example:

        `int bla(void) {   DECLARE_CCTK_PARAMETERS   #if 0     if (1) {   #endif     return (0); }`
        The automatically inserted closing bracket would be added
        outside of the routine's body and thus cause a syntax error in
        the code following.

        As a solution, you should make sure that all the statements in
        your routine (including those which you have commented out via
        '`#if 0 ...  #endif`') are always properly enclosed in blocks of
        matching curly brackets.

    28. <span id="C28">(Linux IA64) I get a segmentation violation
        compiling snprintf.c in the Cactus flesh?</span>

        Compiling /home/Cactus/src/util//snprintf.c  
        /home/Cactus/configs/admeccy/build/Cactus/util/snprintf.c  
        ecc: error: Fatal error in
        /usr/local/intel/compiler60/ia64/bin/mcpcom,  
        terminated by segmentation violation  
        compilation aborted for  
        /home/Cactus/configs/admeccy/build/Cactus/util/snprintf.c
        (code 1)

        The Intel C++ compiler (Version 6.0, Build 20020320) has
        problems dealing with this file, which needs to be compiled
        without the -ip option. Either run gmake with the option
        `SILENT=no` then cut and paste the compile statement to the
        command line and remove the `-ip` option before executing it,
        and then continue to build the executable as normal.

        Alternatively configure with the `-O1` option. (Note, so far our
        benchmarks have indicated that `-O1` actually executes faster
        than `-O3`, although this may be just for our particular
        benchmarks).

    29. <span id="C29">On linking I get an "unresolved text symbol" for
        a scheduled function called from libCactusBindings.a</span>

        Check the size of the object file which was created for the
        source file containing this function in
        configs/&lt;config&gt;/build/&lt;thorn&gt;. With some compilers,
        making object files for complicated source files can fail
        because it takes too much memory, and an empty object file will
        be created and the make process will fail. If you continue the
        make process Cactus will not realise that the object file is
        empty.

        If this is what happened, touch the relevant source file and try
        compiling again. It may be that you will need to switch
        optimisations off for this file, or split up the troublesome
        code into smaller components.

    30. <span id="C30">(Linux) Using the Intel Fortran compiler I get
        the error "/usr/bin/ld cannot find -lintrins" on linking.</span>

        Set the environment variable `IA32ROOT` to point to the location
        of your Intel compiler installation (eg
        /opt/intel/compiler60/ia32). You will need to reconfigure, and
        then try building your executable again.

    31. <span id="C31">I just want to check that one thorn compiles
        correctly, can I test this without compiling all the thorns
        which come before it?</span>

        `make <config>-build         BUILDLIST="<list of thorns>"`

        builds thorns in the order they appear in the list. (Note, this
        does not link any thorn libraries together).

    32. <span id="C32">What is the Cactus preprocessor (Cactus cpp)
        ?</span>

        Part of the pre-processing step for Fortran files involves the
        use of a C-preprocessor. On some architectures the native CPP
        does not correctly handle spaces in source files, and thus
        corrupts the resulting file. On other machines there is no
        native way to generate dependency information for files. In an
        attempt to solve these problems we have written a replacement of
        CPP in perl, which you may use for all Fortran code if you
        configure with

        `FPP='$${PERL} $${CCTK_HOME}/lib/sbin/cpp.pl'`

        or in an options file without the quotes

        `FPP=$${PERL} $${CCTK_HOME}/lib/sbin/cpp.pl`

        The Cactus preprocessor may also be used for C files by
        replacing `FPP` with `CPP` in the above statements.

        The Cactus preprocessor is still being developed and improved,
        known problems include

        -   only currently supports `#ifdef, #if` defined for a single
            token and not operations involving more than one token
            connected by `&&` and `||`, etc
        -   problems with macros whose overall expansion contains the
            original macro name

        The Cactus make system does not use the standalone CPP to
        preprocess C source files, as the first step of a C compilation
        involves the use of a CPP (normally internal). In any case we do
        not recommend the use of this perl CPP to process C files,
        partly due to the above problems, and partly as the preprocessor
        does not pre-define certain symbols which the native
        preprocessor would..

    33. <span id="C33">I'm working on a machine where a compiler problem
        means that I need to compile a particular thorn with a lower
        optimisation level. Is there an easy way to do this?</span>

        Yes, if you want to change the optimisation for one thorn, you
        can add to the make.code.defn in the thorn, e.g.

        `C_OPTIMISE_FLAGS = <new flags>         CXX_OPTIMISE_FLAGS = <new         flags> F77_OPTIMISE_FLAGS = <new flags>         F90_OPTIMISE_FLAGS = <new flags>`

        These flags will then only apply for the particular thorn. These
        flags will be machine/compiler specific, so you only want to add
        them for the problematic machine.

    34. <span id="C34">How can I make sure that one file is compiled
        before another? For example to make sure that an F90 module file
        "module.F90" is available for other file "using.F90".</span>

        Add dependency declarations to the thorn's make.code.deps file,
        for example

        `using.F90.o: module.F90.o`

        Note that you have to use the source file names and append the
        suffix ".o". This convention is different from the default
        Makefile rules.

    35. <span id="C35">I started building a Cactus configuration and it
        asked me if I wanted to edit the thornlist, I pressed 'y' and
        then 'enter' but nothing happened?</span>

        Cactus uses the program defined by the standard `EDITOR`
        environment variable as an editor at this point, check that this
        variable is defined and is actually a working editor.

    36. <span id="C36">(Linux) Compiling Cactus with Redhat 8 or 9 with
        Intel compilers my build fails in CactusBase/IOUtil because
        configure failed to find &lt;sys/stat.h&gt;</span>

        Intel supports their compilers only for RedHat 7.x, and gives no
        guarantees for their compilers to work properly with newer
        releases. On RH 8/9.x there is a problem with the include order
        of system header files with the new glibc (you should see this
        in your configuration's config.log file) and some other header
        needs to be included before &lt;sys/stat.h &gt;. The same
        problem occurs with Debian Sarge. One way to fix this is to ask
        your sys admin to edit the corresponding Intel header file, or
        wait until Intel provides a patch. As a starting point, here is
        a diff which worked for one user ...

            --- /opt/intel/compiler70/ia32/substitute_headers/sys/stat.h~   2003-05-09 20:45:49.000000000 +0200
            +++ /opt/intel/compiler70/ia32/substitute_headers/sys/stat.h    2003-09-23 23:26:42.000000000 +0200
            @@ -27,10 +27,17 @@
             
             #include <bits/types.h >                /* For __mode_t and __dev_t.  */
             
            -#ifdef __USE_XOPEN
            -# define __need_time_t
            -# include <time.h>             /* For time_t.  */
            +#if defined __USE_XOPEN || defined __USE_MISC
            +# ifdef __USE_XOPEN
            +#  define __need_time_t
            +# endif
            +# ifdef __USE_MISC
            +#  define __need_timespec
            +# endif
            +# include <time.h>             /* For time_t resp. timespec.  */
            +#endif
             
            +#ifdef __USE_XOPEN
             /* The Single Unix specification says that some more types are
                available here.  */
             # ifndef __dev_t_defined

    37. <span id="C37">Why can't I use different F90 and F77 compilers
        with Cactus?</span>

        Because Cactus does some automatic name mangling to allow you to
        call Fortran routines from C and vice-versa, and different
        compilers will use different conventions for the way that they
        generate routine names in the object files. This means that you
        would only be able to use different compilers for F90 and F77 if
        they used the same conventions. In principle we could check to
        make sure that they are compatible, but for now we require you
        to use the same compiler for both F77 and F90 code.

    38. <span id="C38">What can I do about \_\_builtin errors reported
        by Intel 9.0?</span>

        This problem is solved with the Intel 9.1 compilers. The rest of
        this is for those who are still using Intel 9.0.

        The documentation for Intel 9.0 C/C++ claims only that it is
        compatible with Gcc 3.x; in fact Intel 9.0 is not compatible
        with Gcc 4.x. It tries to read the Gcc C++ header files, but
        fails in the case of Gcc 4.x

        We have submitted a feature request to Intel, and we hear that
        they intend to fix the problem in the 9.1 release. Until then,
        configure with

        `SYS_INC_DIRS = /opt/intel/compiler90/include/c++         LD = icpc -L/opt/intel/compiler90/lib/ -lcprts -lunwind -lcxa`

        (where the paths point to your Intel compiler installation, of
        course). This will cause the compiler to use its own C++ header
        files, and associated libraries.

2.  ### Running

    1.  <span id="D1">I'm trying to run Cactus with MPI using
        "`mpirun`", but I just get an error "Unknown option -np", what's
        the problem?</span>

        It looks like the MPI implementation on the machine you're using
        isn't removing its arguments correctly, so they are being passed
        to the Cactus run. You need to use the "`-i`" command line
        option for Cactus to ignore the MPI arguments, e.g.

        `mpirun ./cactus_foo foobar.par -i -np 8`

    2.  <span id="D2">I'm running Cactus on a parallel system with
        missing C++ libraries on some nodes. Cactus compiles but it
        won't run. Is there anything I can do?</span>

        If C++ isn't being used in any thorn, you can compile Cactus
        without using C++ using the configure option `CXX=none`.

    3.  <span id="D3">I can build a Cactus configuration using some
        external libraries such as HDF5 or PETSc without any problems
        but when I run the executable I get the following error:</span>

        ./cactus\_WaveDemo: error while loading shared libraries:
        libhdf5.so.0: cannot load shared object file: No such file or
        directory

        This is a problem with using shared libraries on your system:
        the dynamic loader couldn't locate a shared library on the
        system you are trying to run on.

        You can set the `LD_LIBRARY_PATH` environment variable in your
        shell setup to point to your local installation of HDF5. For
        global installations located in a standard place (such as
        /usr/local/lib), this should ideally be done by your system
        administrator for you.

        Another possibility to get around the above problem is to use
        static libraries in favor of shared ones. For this you need to
        remove the \*.so files from your installation directory (leaving
        the \*.a files). Cactus would then link against the static
        libraries automatically.

    4.  <span id="D4">I can run my non-MPI executable using shared
        libraries without problems now but still get the same error as
        in FAQ D3 for MPI jobs started with mpirun.</span>

        This indicates a misconfigured mpirun script. When it starts a
        shell on other nodes it probably doesn't read in the user's
        shell setup so that the `LD_LIBRARY_PATH` environment is not set
        properly. You should contact your system administrator to get
        this fixed.

    5.  <span id="D5">I'm using the web server thorn CactusConnect/HTTPD
        on an Irix machine, I compiled with `PTHREADS=yes` to get better
        response, but the executable just hangs (even with the
        `httpd::use_pthreads="no"` in the parameter file)</span>

        SGI/Irix machines with native MPI cannot make use of Pthreads
        (the native MPI uses some Irix threads which are incompatible
        with Pthreads), and the executable hangs on the first call to a
        pthread routine.

        You could instead use MPICH on your Irix machine instead of
        native MPI. Note that native MPI will probably be better
        optimised for you application than MPICH though.

    6.  <span id="D6">I get a segmentation fault running Cactus, right
        after the schedule tree is printed to screen?</span>

        Check to see if you are passing `CCTK_ARGUMENTS` into any
        routines registered at `CCTK_STARTUP`, if so these need to be
        removed and void used instead. The `STARTUP` timebin is run
        before the driver sets up any grid variables, and the
        segmentation fault occurs in `CCTK_DECLARE_ARGUMENTS` when these
        undefined variables are accessed. Parameters can however be used
        in `STARTUP` routines.

    7.  <span id="D7">(Linux) I'm using the NaNChecker thorn and seeing
        very strange results.</span>

        There is a bug in the isnan function with the Fortran Intel
        compiler (for IA32 and IA64). This bug means that any thorn
        using isnan (for example CactusUtils/NaNChecker) will produce
        inconsistent results.

    8.  <span id="D8">(Linux) The testsuites for CactusEinstein/AHFinder
        and CactusBench/BenchADM fail for me, but the release notices
        say that they pass.</span>

        The Absoft Fortran compiler (Version 6) produces the wrong
        answers for CactusEinstein/AHFinder and CactusBench/BenchADM if
        optimisation is not used.

    9.  <span id="D9">How do I run Cactus until a given coordinate time
        instead of to a given iteration number?</span>

        Instead of setting `cactus::cctk_itlast` set
        `cactus::cctk_final_time` to the required coordinate time, and
        also set `cactus::terminate = "time"`.

    10. <span id="D10">Output to screen using the Info IO method of
        IOBasic doesn't work.</span>

        I want to watch min/max values for '`wavetoy::phi`' during a
        cactus run on stdout. For that, I added

        `IOBasic::outInfo_every = 10         IOBasic::outInfo_vars  = "wavetoy::phi"`

        to my parameter file. Thorn IOBasic is active, but I only get
        the iteration number and coordinate time printed to screen.

        You need to activate a thorn which implements the min/max
        reductions, for example CactusPUGH/PUGHReduce.

    11. <span id="D11">I get an error saying "CCTK\_Equals: First string
        null".</span>

        The routine `CCTK_Equals` tries to look at the value of a
        keyword or a string parameter. The value "`null`" indicates that
        this parameter has never been set.

        The problem could be that Cactus mis-detected the way the
        Fortran compiler does its name mangling. The linker then creates
        two tables that contain parameter values, where one is set by
        the flesh and the other is accessed by Fortran code.

        Try to re-configure your application, perform a
        "`make         CONFIG-realclean`", and then recompile.

    12. <span id="D12">I have a Cactus executable compiled with MPI.
        When running it on a single processor (without using mpirun) I
        get an error saying "Unable to open parameter file ...".</span>

        If you built Cactus with the ch\_p4 device of the MPICH
        distribution and then execute the program directly (without
        using mpirun), it will start in the directory where the
        executable resides. If you specified a relative path to your
        parameter file Cactus would start searching for it from that
        directory (rather than the directory you are currently working
        in) and then potentially not find it.

        The solution is to never run an MPICH ch\_p4 executable directly
        but always use mpirun. This will make sure that the program will
        start in your current working directory.

3.  ### Thorn Writing

    1.  <span id="E1">While implementing some MPI code in Cactus, I came
        across the problem of getting an MPI communicator. I basically
        have the choice between using `MPI_COMM_WORLD`, assuming that no
        processors have been set aside by the driver, or tying myself to
        a certain driver, such as PUGH, and using the driver's internal
        data structures. Both choices are clearly not desirable.</span>

        We are aware of this, and in fact, it is the reason why some of
        the I/O thorns are directly dependent on the PUGH driver. The
        solution for all this will be the [Cactus Communication
        Infrastructure (CCI)](http://www.cactuscode.org/Development/Specs/CCI.txt)
        which will eventually be integrated into the flesh and will
        provide a generic function interface for communicating data.
        Thus when you plug in different communication drivers, I/O
        thorns won't need to be changed if they use the CCI routines.

    2.  <span id="E2">How can I communicate the value of a local scalar
        on one processor to all processors? There doesn't seem to be an
        API for this in Cactus.</span>

        There isn't a general broadcast API in Cactus at the moment,
        this is planned as part of a new Cactus Communication Interface
        (CCI) layer in the 4.1 release (see the Specs web page for more
        information about this).

        Until then, the best way to communicate your variable is to use
        the the CCTK reduction API. For example, make a call to
        `CCTK_ReduceLocalScalar()` with the "`sum`" reduction operator,
        and set your local variable to zero on all processors except for
        the one with the value you want to have communicated.

    3.  <span id="E3">What about if I only want to send a local scalar
        to a single processor?</span>

        This type of point-to-point communication is not possible with
        Cactus APIs right now. Any `CCTK_Reduce*()` is a global
        communication so far, and all processors must take part in that
        communication.

        For doing point-to-point communication you should use the
        appropriate API of an underlying communication layer like MPI.

    4.  <span id="E4">Why shouldn't I make direct calls to MPI from my
        thorns? Your default driver uses MPI.</span>

        Keeping all MPI calls in the driver thorn keeps the code
        modular, allowing for you to use alternate drivers when they
        become available, for example using PVM or some other
        communication layer.

        Also, since not all underlying MPI implementations provide the
        same Fortran bindings it is best to use a C wrapper for making
        MPI calls, and this is automatically done for you if you use the
        Cactus APIs.

    5.  <span id="E5">I am writing a thorn, what is the difference
        between using "`const cGH *cctkGH`" and "`cGH *cctkGH`" for
        argument declarations? And what about
        "`const cGH* const         cctkGH`"?</span>

        '`cGH *`' is a pointer to a `cGH` structure which can be
        modified. This is necessary eg. in routines which initialize a
        `cGH`.

        '`const cGH *`' is a pointer to a `cGH` structure which is
        marked as constant (i.e. read-only). The code is not allowed to
        change the `cGH` using such a pointer. The compiler should
        refuse to compile it otherwise, or at least print a warning.

        Our policy now is to use "`const cGH*`" for all `CCTK_` calls,
        and it is recommended that this is also implemented in all
        thorns. (It is being implemented in all the released Cactus
        thorns, but you may still find some exceptions).

        \[Note: August 2002: We have still to implement
        `const         cGH*` in a few `CCTK_` calls, namely

        -   calls to `CCTK_Sync()`
        -   calls to `CCTK_Reduce()`
        -   calls to `CCTK_Interp()` (the old API)

        and it is still a matter of debate whether the const qualifier
        should be used for `CCTK_Sync` calls.\]

        Finally, the additional const qualifier in
        '`const cGH *         const GH`' says that the pointer variable
        itself cannot be changed (it's just a one-time-only assignment).
        For instance, no pointer arithmetic is allowed on such a
        pointer. In principle, one could declare all local variables as
        const if they aren't changed afterwards. But it's doesn't have
        any benefit in writing cleaner code. I think this is just
        overkill and using just '`const cGH         *`' is fine.

    6.  <span id="E6">On compiling Fortran code I get errors like "dummy
        argument CCTK\_DIM has not been given a type", but I'm not using
        `CCTK_DIM` in the routine?</span>

        Check if you have passed `CCTK_ARGUMENTS` in the argument list
        for the routine, is do you must have a line

        `DECLARE_CCTK_ARGUMENTS`

        in your declarations section.

    7.  <span id="E7">If I have two grid array groups with identical
        sizes (and ghost zones, distributions, etc.), are they
        guaranteed to be distributed in the same way? That is, can I
        count on the fact that their local shapes (lsh) will be the
        same? It is true empirically. What if the grid arrays have
        different variable types or numbers of time levels?</span>

        Yes to all.

    8.  <span id="E8">Is there anyway to only compile certain lines of
        source code if a particular thorn is in the compiled
        ThornList?</span>

        Yes, but this is not a good idea for a number of reasons

        -   it adds hidden dependencies between thorns, and can easily
            lead to unexpected and hard to track down behaviour when a
            thorn is compiled but not active
        -   it breaks all kinds of modularity infrastructure in Cactus
        -   the include file you need to use will cause your source code
            to be recompiled when other thorns change

        But if you insist, and accept the consequences, this is how you
        do it,

        Include the header file cctk\_DefineThorn.h

        In your code use

        `#ifdef ARRANGEMENTNAME_THORNNAME`

        `<your source code>`

        `#endif`

        If appropriate, to give yourself some protection, use the
        function `CCTK_IsThornActive` to only execute the source code if
        the thorn was actually activated (and not just compiled in).

        Add a comment to your README/Documentation.tex to remind
        yourself, and others of what you have done.

    9.  <span id="E9">How can I find out in make.configuration.defn,
        whether MPI is being used or not? The thorn EllPETSc checks
        whether the makefile variable `MPI_LIBS` is empty. This doesn't
        work on systems where using MPI does not require any explicitely
        specified libraries, such as when using the mpicc script to
        compile. Is there a better way?</span>

        You can grep for MPI in the file

        configs/&lt;your\_config&gt;/config-data/cctk\_Extradefs.h

        see for example CactusPUGHIO/IOPanda/src/make.configuration.deps

        ``      if test -z "`grep CCTK_MPI $(CONFIG)/cctk_Extradefs.h`" ; then       echo "IOPanda requires MPI";   \       exit 2;                        \       fi ``

    10. <span id="E10">How can I see in source code whether MPI is being
        used?</span>

        Check whether the preprocessor macro `CCTK_MPI` exists, for
        example,

        `#ifdef CCTK_MPI         /* Only included if MPI is being used */          #else          /* Only included if MPI is *not* being used */          #endif`

    11. <span id="E11">The functions `CCTK_Exit` and `CCTK_Abort`
        require `cctkGH` as an argument. How can I call these functions
        deep inside my thorns where this pointer is not
        available?</span>

        These routines are overloaded by a driver, and the reason for
        passing in a `cctkGH` is to allow the driver to tidy up before
        exiting. If the particular driver you are using allows a `NULL`
        pointer to be passed you can pass this instead of the `cctkGH`
        pointer. (The worst that will happen should be a segfault if the
        driver cannot handle `NULL`). Alternatively, you need to include
        a mechanism to obtain the `cctkGH` deep inside your thorns code.

    12. <span id="E12">I'm getting wierd syntax errors in Fortran code,
        with an extra garbage character (often `$` or `&`) stuck in the
        middle of a `CCTK_INFO()` or `CCTK_WARN()` or `CCTK_EQUALS()`
        call after it has been processed.</span>

        You have probably used Fortran (either 77 or 90) line
        continuation in a macro call

                  c example of broken Fortran code fragment
                  if      (CCTK_EQUALS(test,"on")) then
                     test_state = 1
                  else if (CCTK_EQUALS(test,
            $                          "off")) then
                     test_state = 3
                  end if

        The `$` is in column 6 is the Fortran 77 standard way of doing a
        line continuation. This doesn't work, because `CCTK_EQUALS(`) is
        a macro, and macros use C lexical conventions (regardless of
        what language your code is written in). To continue a line in a
        macro, use the same technique you would in C, i.e. put a
        backslash ( `\` ) at the end of the line to be continued (note
        there must \*not\* be any whitespace after the `\` !!). For
        example, the above code should be written

                  c example of valid Fortran code fragment 
                  if      (CCTK_EQUALS(test,"on")) then 
                     test_state = 1 
                  else if (CCTK_EQUALS(test, \
                                  "off")) then 
                     test_state = 0 
                  end if

    13. <span id="E13">I want to write the value of a `KEYWORD`
        parameter in Fortran code to a file, but nothing I try
        works.</span>

        Cactus `KEYWORD` and `STRING` parameters are not stored as
        Fortran strings (they are pointers to C strings) so you need to
        convert them first. Use the routine `CCTK_FortranString` to copy
        them to a locally defined Fortran string, then you can
        manipulate them as usual. If you just want to print the value to
        the standard output there is also the routine
        `CCTK_PrintString`.

    14. <span id="E14">I write my thorns with Fortran, do you have any
        general advice?</span>

        Yes. Read the section "Fortran Thorn Writers" in the Users
        Guide, and follow these general recommendations

        -   use `IMPLICIT NONE` in your Cactus subroutines and
            functions, this will help in finding errors at compile time.

    15. <span id="E15">In my Fortran thorn the value of a Cactus integer
        parameter is totally wrong when I print it, but when I print it
        from C it is fine.</span>

        Check that you remembered to add `DECLARE_CCTK_PARAMETERS` to
        the declaration area of the subroutine.

    16. <span id="E16">I write my thorns with C, do you have any general
        advice?</span>

        Yes, hopefully this list will grow, but for now

        -   don't use C++ comments (`//`) in C code this will cause
            difficulties on some platforms

    17. <span id="E17">Why is it that when I schedule more than one
        routine in the same thorn at `ANALYSIS` only the first routine
        is executed and the second one is ignored?</span>

        Are you triggering on different variables with the two routines?
        If not, it doesn't matter which thorns they come from, only the
        first scheduled routine will be called. This is part of the
        special design of the `ANALYSIS` bin.

    18. <span id="E18">Is there a way to synchronize individual grid
        variables in a group?</span>

        Not at the moment. This was a design decision partly to be able
        to support "compact" groups of variables in the future (that is,
        groups where the group members at any grid point are stored
        contiguously in memory ... compared to the "normal" way we have
        now where each group member is stored as a different array).
        With compact groups synchronizing single members would be more
        computationally expensive. Currently the infrastructure is
        mainly built around the concept of groups of variables, and
        changing this would involve changes to the driver interface.

    19. <span id="E19">Is there a way to synchronize just one time level
        of a grid variable?</span>

        Right now only one time level is sychronized, that is the
        "current" level. Other time levels cannot be synchronized and
        are assumed to be fixed or read only.

    20. <span id="E20">I'm using the
        `CCTK_ParameterSet         function` to change a parameter, but
        after calling it the parameters value doesn't change?</span>

        First make sure that you really want to change a parameters
        value and that you really know what you are doing. In general
        parameters are fixed thoughout a run, and should only be changed
        by steering thorns.

        If you change a parameter with `CCTK_ParameterSet` it won't
        change in the routine you call it from, because the
        `DECLARE_CCTK_PARAMETERS` macro currently expands to define all
        a thorns parameters as local variables with a const qualifier
        (in C) and sets them to the current values of the parameters.
        Thus calling `CCTK_ParameterSet` will not affect the value of
        the local copy.

4.  ### General

    1.  <span id="F1">Why do I have to use e.g.
        "`mpirun -np 1         ./exe/cactus_myconfig -O`" to see the
        compiled parameters, can't the parameters be output before MPI
        is initialised?</span>

        Alas some MPIs add their own command-line options, so we need to
        do MPI\_Init before parsing the command line, or parse it twice,
        once before the `MPI_Init` and once after, to detect invalid
        options.

    2.  <span id="F2">Why isn't a `BOOLEAN` parameter a `LOGICAL` in
        Fortran?</span>

        There is no way we can guarantee the way the Fortran logical
        type is represented at machine level, and since all Fortran
        variables need to be mapped internally to C data structures, we
        use integers to ensure portability.

    3.  <span id="F3">Why is there an MPI call in the Flesh
        (`MPI_Init`)? I thought that the Cactus flesh was independent of
        any parallel protocol, why isn't this call made from a driver
        thorn?</span>

        We would love to get rid of the last remaining MPI calls from
        the flesh, unfortunately in MPI 1, MPI implementations are
        allowed to play around with the argument list, so we need to
        call MPI\_Init before parsing the command line argument, and
        this makes it very difficult to have it called from the driver,
        since we don't even know what the parameter file is at that
        stage, so we don't even know which driver to activate!

        MPI 2 allows `NULL` to be passed to `MPI_Init`, which gets
        around the problem, but the only machines currently with MPI 2
        are Japanese supercomputers.

        It is the only MPI call made before the driver is activated, and
        it sets a global variable to tell you it's been done, so it
        isn't a major problem apart from being extremely ugly. You can
        even turn it off with an environment variable, but then if you
        run with MPICH you'll find the code complaining about unknown
        command line arguments like -p4grp. If we had a precise list of
        the arguments passed by each MPI implementation we could guard
        against them, but that's an even uglier option.

    4.  <span id="F4">Why is the main routine of Cactus written in C++
        (src/main/flesh.cc) when the rest of the flesh is standard ANSI
        C? More strangely, why does Cactus still compile when I have no
        C++ compiler on my system?</span>

        The main routine of the flesh is written in C++, since any
        static C++ classes need to be initialised before the main
        routine is called. So if there is a C++ compiler available we
        use this for compiling flesh.cc. Since we use only ANSI C in
        flesh.cc, if there is no C++ compiler available on your machine
        (and so you are not trying to compile any thorns containing
        C++), we use the C compiler instead.

    5.  <span id="F5">Are there grid scalars of type `STRING` ?</span>

        No, there is only a `CCTK_CHAR` type. You can however define an
        array with `DISTRIB=CONSTANT` with a maximum length.

    6.  <span id="F6">Why don't you use compilers mpicc, mpiCC etc when
        they exist on parallel machines?</span>

        The compilers mpicc etc are scripts for compilation which are
        site dependent and whose contents can change. The major reason
        we don't use these is that in general it is difficult to work
        out what underlying compiler is being used, which in turn leads
        to problems adding the correct compilation flags.

        So far we have found it more convenient and transparent to
        manually add libraries and options to the configure system than
        to rely on mpicc behaving well on all platforms. At some point
        we will be reinvestigating this.

    7.  <span id="F7">How does Cactus manage to so seamlessly call
        Fortran routines from C, and vice versa?</span>

        Part of the configuration step on a machine involves
        automatically deducing the convention which the fortran compiler
        uses for its symbols (for example, upper or lower case and the
        addition of underscores).

        This information is then used to construct the macros which are
        used at preprocessing to translate Fortran names to C-callable
        routines.

        We also use macros to facilitate passing strings from Fortran
        into C. Strings must always be at the end of argument lists for
        this (which is why some of our choices of order in argument
        lists may seem strange), and the architecture details of string
        passing are maintained in the file
        src/include/cctk\_FortranString.h. At the moment we have macros
        for one, two or three strings in an argument list.

    8.  <span id="F8">The documentation says that Cactus parameters are
        read-only, but I can trivially change the value of a parameter
        in the Fortran source code of my thorn.</span>

        Although changing parameters in Fortran is possible (we haven't
        thought of an easy way to enforce read-only parameters) it is
        not supported and should not be done!

5.  ### Documentation

    1.  <span id="G1">How can I build the ThornGuide documentation for
        single thorns or arrangements?</span>

        Give the names of the thorns or arrangements on the make line,
        e.g.

        `gmake ThornGuide THORNS="CactusBase/Boundary"`

        `gmake ThornGuide ARRANGEMENTS="CactusBase"`

    2.  <span id="G2">I have a configuration with over ten thorns, but
        when I make the ThornGuide I only see the first few of
        them.</span>

        It could be that the documentation in one of the thorns is not
        following the Cactus ThornGuide coding convention, for example
        see the file doc/ThornGuide/template.tex.

6.  ### I/O

    1.  <span id="H1">I want to run an old parameter file, but none of
        the I/O parameters are recognised!</span>

        In Beta 13 the "old" I/O parameter names were finally fully
        removed in favour of "new" more consister parameter names across
        the I/O thorns in the computational toolkit. A complete list of
        I/O parameters which changed is contained in [this mail
        message](http://www.cactuscode.org/archives_html/users/msg00278.html)

        Note that there is a perl script for which can automatically
        update parameter files for these changes.

        [FixParametersForBETA13.p](http://www.cactuscode.org/Development/Release/FixParametersForBETA13.pl)

    2.  <span id="H2">I would like to use checkpointing for a thorn
        which has complex grid arrays. I tried to use the IOFlexIO thorn
        and received the error: Unsupported CCTK variable datatype 10.
        Is there a way to checkpoint complex variables?</span>

        Yes there is: use IOHDF5 instead of IOFlexIO. The FlexIO library
        doesn't support a native complex datatype, and we decided not to
        add extra logic complex numbers in IOFlexIO. HDF5 does not have
        this limitation, it natively supports all Cactus datatypes.

7.  ### Configuration Files

    1.  <span id="I1">The size of array parameters is specified by a
        integer number in the param.ccl file. Why can't a parameter
        itself be used here?</span>

        The size of the array has to be fixed at compile time to
        accomodate the use of parameters in Fortran thorns.

        LocalWords: Absoft fixups endif snprintf libCactusBindings
        lintrins cpp
