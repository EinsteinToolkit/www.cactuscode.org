<?php $title='Frequently Asked Questions';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

//
//include the faq.html from the latest checkout folder for cactus?
//
?>

<style type="text/css">
    .FAQ pre{ color: #236; background: transparent; border: none; overflow: auto; }
    .FAQ code{ font-family: monospace; color: #236; background: transparent; border: none; }
    .FAQ a{ text-decoration: none; }
    .FAQ a[id]{ text-decoration: none; color: black; }
    .FAQ kbd { color: green; font-family: sans-serif; font-style: italic; }
    .FAQ samp { color: #236; font-family: sans-serif; font-style: italic; }
    .FAQ div.ANS { border: thin green solid; padding: none; }
</style>

<p>Please send suggestions and questions for the FAQ to  <a
href="mailto:cactusmaint@cactuscode.org">the CactusMaint mailing list</a>.</p>

<div class="FAQ">

<h2>The Questions:</h2>
<ol type="A">

  <li><h3>Background</h3>
    <ol type="1">
      <li><a href="#A1">How did Cactus start?</a></li>
      <li><a href="#A2">Who develops and maintains Cactus?</a></li>
      <li><a href="#A3">How can I get involved?</a></li>
    </ol>
  </li>

  <li><h3>Distributions and CVS Checkout</h3>
    <ol type="1">
      <li><a href="#B1">When doing a cvs update I get '<samp>not enough
        slashes in ...</samp>' .</a></li>
      <li><a href="#B2">I want to recreate a Cactus executable from last
        year, I have a thorn list but when I try and check it out from the
        <kbd>/cactus</kbd> or <kbd>/cactusdevcvs</kbd> repository I don't get
        some of the thorns.</a></li>
      <li><a href="#B3">How do I checkout an earlier version of Cactus
      ?</a></li>
      <li><a href="#B4">When running GetCactus it tells me it is refusing to
        update my thorn because it is installed from a different
        repository.</a></li>
      <li><a href="#B5">Tell me how I can get thorns?</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>Configuring and Building</h3>
    <ol type="1">
      <li><a href="#C1">The make system says "<samp>Checking status of
        libXXX.a</samp>" and then just sits there.  What can I do ?</a></li>
      <li><a href="#C2">Compilation of Cactus fails with the error:
        identifier "<samp>DECLARE_CCTK_PARAMETERS</samp>" is
      undefined?</a></li>
      <li><a href="#C3">(Linux) I get '<samp>g77: cannot specify -o with -c
        or -S and multiple compilations</samp>' when compiling with the
        Pacific VAST90 compiler.</a></li>
      <li><a href="#C4">How do I compile with MPI? Why isn't it automatic
        like in Cactus 3?</a></li>
      <li><a href="#C5">I can't compile because the compiler complains that a
        routine name has been previously defined ... but I can't find it
        repeated?</a></li>
      <li><a href="#C6">How can I make sure that one thorn is compiled before
        another? For example to make sure that F90 module files from
        <kbd>ArrangementA/ThornA</kbd> are available for
        <kbd>ArrangementB/ThornB</kbd>.</a></li>
      <li><a href="#C7">(Solaris) I start a configuration process with gmake,
        but on the second gmake it wants to set up the configuration again
        and again ....</a></li>
      <li><a href="#C8">How do I compile Cactus in 32 bit mode on a 64 bit
        irix machine?</a></li>
      <li><a href="#C9">What can I do if I don't have enough disk space to
        compile Cactus?</a></li>
      <li><a href="#C10">When I compile Cactus I get an error with<br>
        "<samp>unterminated character constants</samp>"<br>
        , but on typing gmake again it proceeds without problem.</a></li>
      <li><a href="#C11">Sometimes when I compile in parallel with
        <code>TJOBS</code> or <code>FJOBS</code> the compilation stops
        halfway through.</a></li>
      <li><a href="#C12">I get the following error when compiling?</a><br><samp>
	Checking status of libIOJpeg.a<br>
	gmake[3]: *** No rule to make target \<br>
	&nbsp;&nbsp;&nbsp;`/u1/allen/scratch/Cactus/arrangements/<br>
	&nbsp;&nbsp;&nbsp;CactusIO/IOJpeg/src/IOJpeg.h', needed by `JPEG.c.d'.  Stop.<br>
	gmake[2]: *** [make.checked] Error 2<br>
	gmake[1]: *** [/u1/allen/scratch/Cactus/configs/wave/lib/libIOJpeg.a] \<br>
	&nbsp;&nbsp;&nbsp;Error 2<br>
	gmake: *** [wave] Error 2</samp>
      </li>
      <li><a href="#C13">Compiling files in Cactus seems to involve three
        steps, preprocessing, compiling, and then postprocessing. What are
        they doing?</a></li>
      <li><a href="#C14">When trying to create the Cactus executable I get
        the error <samp>Unresolved text symbol "SetCartSymVN" -- 1st
        referenced by
      /data2/Cactus/configs/origin/lib/libADMBase.a</samp></a></li>
      <li><a href="#C15">My thorn is calling directly a function from another
        thorn. Both thorns are in my ThornList, but on linking I get the
        error <samp> Startup.c.o(.text+0x4d): undefined reference to
        `OtherThornsFunction'</samp></a></li>
      <li><a href="#C16">(Linux) When trying the new gcc 3.1.1 compiler, I
        received a lot of warnings about the compiler flag
        "<samp>-I/usr/local/include</samp>".</a></li>
      <li><a href="#C17">(OpenBSD) The system linker <kbd>/usr/bin/ld</kbd>
        crashes when linking C++ thorns.</a></li>
      <li><a href="#C18">(Linux) When I compile Fortran I get errors because
        characters are in the first 5 columns, but I can't see anything wrong
        in the source code.</a></li>
      <li><a href="#C19">(Linux) I get internal errors using the
        Pacific-Sierra Fortran 90 compiler</a></li>
      <li><a href="#C20">(Linux) I get the linking error "<samp>/usr/bin/ld:
        cannot find -lIEPCF90</samp>" with the Intel Fortran
      compiler.</a></li>
      <li><a href="#C21">(Solaris) Building <kbd>PUGHReduce</kbd> under
        Solaris 2.8 gives several errors with macro recursion.</a></li>
      <li><a href="#C22">(MacOS) Compiling with the Absoft F90 compiler I get
        error messages about large "fixups"</a></li>
      <li><a href="#C23">How can I see the commands which Cactus is actually
        using to build the executable?</a></li>
      <li><a href="#C24">My configuration takes forever to build, are there
        any ways to speed this up?</a></li>
      <li><a href="#C25">On compiling Fortran code I get errors like
        "<samp>dummy argument CCTK_DIM has not been given a type</samp>", but
        I'm not using <code>CCTK_DIM</code> in the routine?</a></li>
      <li><a href="#C26">I'm passing arguments to my scheduled routine using
        <code>CCTK_ARGUMENTS</code> and I get the compile error
        "<samp>identifier DECLARE_CCTK_ARGUMENTS is undefined</samp>"</a></li>
      <li><a href="#C27">I have a code block commented out by <code>'#if 0
        ... #endif</code>' in a C/C++ routine which uses the
        <code>DECLARE_CCTK_ARGUMENTS</code> and/or
        <code>DECLARE_CCTK_PARAMETERS</code> macro.  The compiler stops with
        a parsing error on this piece of code.</a></li>
      <li><a href="#C28">(Linux IA64) I get a segmentation violation
        compiling <kbd>snprintf.c</kbd> in the Cactus flesh?</a></li>
      <li><a href="#C29">On linking I get an "<samp>unresolved text
        symbol</samp>" for a scheduled function called from
        <kbd>libCactusBindings.a</kbd></a></li>
      <li><a href="#C30">(Linux) Using the Intel Fortran compiler I get the
        error "<samp>/usr/bin/ld cannot find -lintrins</samp>" on
      linking.</a></li>
      <li><a href="#C31">I just want to check that one thorn compiles
        correctly, can I test this without compiling all the thorns which
        come before it?</a></li>
      <li><a href="#C32">What is the Cactus c-preprocessor (Cactus cpp)
      ?</a></li>
      <li><a href="#C33">I'm working on a machine where a compiler problem
        means that I need to compile a particular thorn with a lower
        optimisation level. Is there an easy way to do this?</a></li>
      <li><a href="#C34">How can I make sure that one file is compiled before
        another? For example to make sure that an F90 module file
        "module.F90" is available for other file "using.F90".</a></li>
      <li><a href="#C35">I started building a Cactus configuration and it
        asked me if I wanted to edit the thornlist, I pressed '<kbd>y</kbd>'
        and then '<kbd>enter</kbd>' but nothing happened?</a></li>
      <li><a href="#C36">(Linux) Compiling Cactus with Redhat 8 or 9 it fails
        in <kbd>CactusBase/IOUtil</kbd> because the system failed to find
        &lt;<kbd>sys/stat.h</kbd>&gt;</a></li>
      <li><a href="#C37">Why can't I use different F90 and F77 compilers with
        Cactus?</a></li>
      <li><a href="#C38">What can I do about <kbd>__builtin</kbd> errors 
        reported by Intel 9.0?</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>Running</h3>
    <ol type="1">
      <li><a href="#D1">I'm trying to run Cactus with MPI using
        "<kbd>mpirun</kbd>", but I just get an error "<samp>Unknown option
        -np</samp>"?</a></li>
      <li><a href="#D2">I'm running Cactus on a parallel system with missing
        C++ libraries on some nodes. Cactus compiles but it won't
      run?</a></li>
      <li><a href="#D3">I can build a Cactus configuration using some
        external libraries (e.g. HDF5, PETSc) but get errors with shared
        libraries on running the executable.</a></li>
      <li><a href="#D4">I can run my non-MPI executable using shared
        libraries without problems now but still get the same error as in FAQ
        D3 for MPI jobs started with mpirun.</a></li>
      <li><a href="#D5">(Irix) I'm using the web server thorn
        <kbd>CactusConnect/HTTPD</kbd>, I compiled with
        <code>PTHREADS=yes</code> to get better response, but the executable
        just hangs.</a></li>
      <li><a href="#D6">I get a segmentation fault running Cactus, right
        after the schedule tree is printed to screen?</a></li>
      <li><a href="#D7">(Linux) I'm using the
        <kbd>NaNChecker</kbd> thorn and seeing very strange
        results.</a></li>
      <li><a href="#D8">(Linux) Testsuites for
        <kbd>CactusEinstein/AHFinder</kbd> and
        <kbd>CactusBench/BenchADM</kbd> are failing, but the release notices
        say that they pass.</a></li>
      <li><a href="#D9">How do I run Cactus until a given coordinate time
        instead of to a given iteration number?</a></li>
      <li><a href="#D10">Output to screen using the Info IO method of
        <kbd>IOBasic</kbd> doesn't work.</a></li>
      <li><a href="#D11">I get an error saying "<samp>CCTK_Equals: First
        string null</samp>".</a></li>
      <li><a href="#D12">I have a Cactus executable compiled with MPI. When
        running it on a single processor (without using mpirun) I get an
        error saying "<samp>Unable to open parameter file
      ...</samp>".</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>Thorn Writing</h3>
    <ol type="1">
      <li><a href="#E1">While implementing some MPI code in Cactus, I came
        across the problem of getting an MPI communicator.  I basically have
        the choice between using <code>MPI_COMM_WORLD</code>, assuming that
        no processors have been set aside by the driver, or tying myself to a
        certain driver, such as <kbd>PUGH</kbd>, and using the driver's
        internal data structures.  Both choices are clearly not
      desirable.</a></li>
      <li><a href="#E2">How can I communicate the value of a local scalar on
        one processor to all processors? There doesn't seem to be an API for
        this in Cactus.</a></li>
      <li><a href="#E3">What about if I only want to send a local scalar to a
        single processor?</a></li>
      <li><a href="#E4">Why shouldn't I make direct calls to MPI from my
        thorns? Your default driver uses MPI.</a></li>
      <li><a href="#E5">What is the difference between using "<code>const cGH
        *cctkGH</code>" and "<code>cGH *cctkGH</code>" for argument
        declarations? What about "<code>const cGH* const
      cctkGH</code>"?</a></li>
      <li><a href="#E6">On compiling Fortran code I get errors like
        "<samp>dummy argument CCTK_DIM has not been given a type</samp>", but
        I'm not using <code>CCTK_DIM</code> in the routine?</a></li>
      <li><a href="#E7">If I have two grid array groups with identical sizes
        (and ghost zones, distributions, etc.), are they guaranteed to be
        distributed in the same way?  That is, can I count on the fact that
        their local shapes (<code>lsh</code>) will be the same?  It is true
        empirically. What if the grid arrays have different variable types or
        numbers of time levels?</a></li>
      <li><a href="#E8">Is there anyway to only compile certain lines of
        source code if a particular thorn is in the compiled
      ThornList?</a></li>
      <li><a href="#E9">How can I find out in
        <kbd>make.configuration.defn</kbd>, whether MPI is being used or
        not?</a></li>
      <li><a href="#E10">How can I see in source code whether MPI is being
        used?</a></li>
      <li><a href="#E11">The functions <code>CCTK_Exit</code> and
        <code>CCTK_Abort</code> require <code>cctkGH</code> as an argument.
        How can I call these functions deep inside my thorns where this
        pointer is not available?</a></li>
      <li><a href="#E12">I'm getting weird syntax errors in Fortran code,
        with an extra garbage character (often <code>$</code> or
        <code>&amp;</code>) stuck in the middle of a <code>CCTK_INFO()</code>
        or <code>CCTK_WARN()</code> or <code>CCTK_EQUALS()</code> call after
        it has been processed.</a></li>
      <li><a href="#E13">I want to write the value of a <code>KEYWORD</code>
        parameter in Fortran code to a file, but nothing I try works.</a></li>
      <li><a href="#E14">I write my thorns with Fortran, do you have any
        general advice?</a></li>
      <li><a href="#E15">In my Fortran thorn the value of a Cactus integer
        parameter is totally wrong when I print it, but when I print it from
        C it is fine.</a></li>
      <li><a href="#E16">I write my thorns with C, do you have any general
        advice?</a></li>
      <li><a href="#E17">Why is it that when I schedule more than one routine
        in the same thorn at <code>ANALYSIS</code> only the first routine is
        executed and the second one is ignored?</a></li>
      <li><a href="#E18">Is there a way to synchronize individual grid
        variables in a group?</a></li>
      <li><a href="#E19">Is there a way to synchronize just one time level of
        a grid variable?</a> Right now only one time level is synchronized,
        that is the "current" level. Other time levels cannot be synchronized
        and are assumed to be fixed or read only.</li>
      <li><a href="#E20">I'm using the <code>CCTK_ParameterSet</code>
        function to change a parameter, but after calling it the parameters
        value doesn't change?</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>General</h3>
    <ol type="1">
      <li><a href="#F1">Why do I have to use e.g. "<code>mpirun -np 1
        ./exe/cactus_myconfig -O</code>" to see the compiled parameters,
        can't the parameters be output before MPI is initialised?</a></li>
      <li><a href="#F2">Why isn't a <code>BOOLEAN</code> parameter a
        <code>LOGICAL</code> in Fortran?</a></li>
      <li><a href="#F3">Why is there an MPI call in the Flesh
        (<code>MPI_Init</code>)? I thought that the Cactus flesh was
        independent of any parallel protocol, why isn't this call made from a
        driver thorn?</a></li>
      <li><a href="#F4">Is there any way to tell what CVS version of
        individual source files was used to build an executable?</a></li>
      <li><a href="#F5">Why is the main routine of Cactus written in C++
        (<kbd>src/main/flesh.cc</kbd>) when the rest of the flesh is standard
        ANSI C? More strangely, why does Cactus still compile when I have no
        C++ compiler on my system?</a></li>
      <li><a href="#F6">Are there grid scalars of type <code>STRING</code>
        ?</a></li>
      <li><a href="#F7">Why don't you use compilers <kbd>mpicc</kbd>,
        <kbd>mpiCC</kbd> etc when they exist on parallel machines?</a></li>
      <li><a href="#F8">How does Cactus manage to so seamlessly call Fortran
        routines from C, and vice versa?</a></li>
      <li><a href="#F9">The documentation says that Cactus parameters are
        read-only, but I can trivially change the value of a parameter in the
        Fortran source code of my thorn.</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>Documentation</h3>
    <ol type="1">
      <li><a href="#G1">How can I build the ThornGuide documentation for
        single thorns or arrangements?</a></li>
      <li><a href="#G2">I have a configuration with over ten thorns, but when
        I make the ThornGuide I only see the first few of them.</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>I/O</h3>
    <ol type="1">
      <li><a href="#H1">I want to run an old parameter file, but none of the
        I/O parameters are recognised!</a></li>
      <li><a href="#H2">I would like to use checkpointing for a thorn which
        has complex grid arrays. I tried to use the
        <code><kbd>IOFlexIO</kbd></code> thorn and received the error:
        <samp>Unsupported CCTK variable datatype 10</samp>. Is there a way to
        checkpoint complex variables?</a></li>
    </ol>
  </li>
  <!-- ====================================================================== -->
  <li><h3>Configuration Files</h3>
    <ol type="1">
      <li><a href="#I1">The size of array parameters is specified by a
        integer number in the <kbd>param.ccl</kbd> file. Why can't a
        parameter itself be used here?</a></li>
    </ol>
  </li>
</ol>
<!-- ====================================================================== -->

<h2>The Answers</h2>
<ol type="A">
  <!-- ====================================================================== -->
  <li><h3>Background</h3>
    <ol type="1">
      <li><p><a id="A1">How did Cactus start?</a></p>

        <div class="ANS">
        <p>Cactus originated in the Numerical Relativity community to realise
        the large scale computing needs and collaborative working practices
        required to model objects such as black holes, neutron stars and and
        gravitational waves using Einsteins Theory of General Relativity.</p>
        <p>In particular, Cactus grew out of codes, experiences, and ideas of
        members of the NCSA and AEI numerical relativity groups together with
        a number of friends and collaborators. Since the first Beta release
        of Cactus 4.0 many suggestions and contributions have also been made
        by the users.</p>
        </div>
      </li>
      <li><p><a id="A2">Who develops and maintains Cactus?</a></p>

        <div class="ANS">
        <p>Cactus is primarily developed and maintained at the Max Planck
        Institute for Gravitational Physics (Albert Einstein Institute) in
        Potsdam, Germany. The funding for this support is mainly obtained
        through independent grants for projects in both computer science and
        physics which focus around Cactus.</p>
        </div>
      </li>
      <li><p><a id="A3">How can I get involved?</a></p>

        <div class="ANS">
        <p>First, if you use Cactus, send bug reports, bug fixes, comments,
        suggestions, documentation to cactusmaint@cactuscode.org, or use the
        bug tracking/feature request system.</p>
        <p>If you have written thorns which could be useful to other people,
        make them available for others to use (if you have a web page, send
        us the link to put on our page).</p>
        <p>To find out about any existing or upcoming research programmer or
        student positions associated with Cactus development please contact
        Ed Seidel (eseidel@aei.mpg.de).</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
    -</li>
  <li><h3>Distributions and CVS Checkout</h3>
    <ol type="1">
      <li><p><a id="B1">When doing a cvs update I get '<samp>not enough
        slashes in ...</samp>' .</a></p>

        <div class="ANS">
        <p>It seems that CVS sometimes gets confused with multiple
        repositories. Check that you are using the latest version of CVS,
        otherwise moving into the arrangements directory and performing
        another '<code>cvs update</code>', followed by a final one in the
        top-level directory should complete your update.</p>
        <p>There is now a Cactus make target "<code>gmake cvsupdate</code>"
        which avoids this problem by updating the flesh and checked out
        thorns explicitly.</p>
        </div>
      </li>
      <li><p><a id="B2">I want to recreate a Cactus executable from last
        year, I have a thorn list but when I try and check it out from the
        <kbd>/cactus</kbd> or <kbd>/cactusdevcvs</kbd> repository I don't get
        some of the thorns.</a></p>

        <div class="ANS">
        <p>This is probably because the thorns moved arrangement, or were
        rewritten. To checkout the right code, look in doc/ReleaseNotes to
        decide which release the thorn was in, and then checkout the thorn
        from the <kbd>/cactus</kbd> repository, eg. if the thorn "OldThorn"
        was last in the Beta 7 release use:</p>
        <p><code>cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus co -d
        OldThorn \ beta7/OldThorn</code></p>
        </div>
      </li>
      <li><p><a id="B3">How do I checkout an earlier version of Cactus
        ?</a></p>

        <div class="ANS">
        <p>Cactus is "tagged" in CVS for each release, so to checkout for
        example the flesh for Beta 10 use:</p>
        <p><code>cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout
        -r \ Cactus_4_0_Beta_10 Cactus</code></p>
        <p>[to see a list of possible tags go to the Cactus home directory
        and type "<code>cvs status -v Makefile</code>"]</p>
        <p>To checkout from a particular date, for example the 7th July 2000,
        use</p>
        <p><code>cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout
        -D \ "7 July 2000"</code></p>
        <p>Also look at FAQ B2.</p>
        </div>
      </li>
      <li><p><a id="B4">When running GetCactus it tells me it is refusing to
        update my thorn because it is installed from a different
        repository.</a></p>

        <div class="ANS">
        <p>What GetCactus does is look in the thorn's <kbd>CVS/Root</kbd> to
        get the repository that it was originally installed from.  If the
        repository specified in your thornlist (using the
        <code>!REPOSITORY_LOCATION</code> directive) is not the same, then
        <kbd>GetCactus</kbd> will refuse to update your thorn.</p>
        <p>This problem commonly occurs when people interchange repository
        locations that actually point to the same place.  For example, using
        cvs.aei.mpg.de for the initial checkout, and then using
        cvs.cactuscode.org for an update.</p>
        <p>To fix this problem, simply be consistent with repository
        locations.</p>
        </div>
      </li>
      <li><p><a id="B5">Tell me how I can get thorns?</a></p>

        <div class="ANS">
        <p>The best way is to use CVS, all the Cactus thorns and most other
        public community thorns are distributed this way.</p>
        <ul>
          <li><p>If you already have the Cactus flesh installed and want to
            install a standard Cactus thorn just type</p>
            <p><code>gmake checkout</code></p>
            <p>for a list of thorns you can then download</p>
          </li>
          <li><p>If you have a thornlist annotated with CVS information get
            hold of the GetCactus script, e.g.</p>
            <p><code>wget
            http://www.cactuscode.org/Download/GetCactus</code></p>
          </li>
        </ul>
        <p>and use this with your thornlist, if you already have the flesh
        installed it will just checkout the thorns (the script needs to be
        run in the directory above your checked out Cactus at the moment)</p>
        <p><code>GetCactus &lt;<var>thornlist</var>&gt;</code></p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>Configuring and Building</h3>
    <ol type="1">
      <li><p><a id="C1">The make system says "<samp>Checking status of
        libXXX.a</samp>" and then just sits there.  What can I do ?</a></p>

        <div class="ANS">
        <p>The first thing to do whenever a problem arises from the make
        system is to run with the "<code>SILENT=no</code>" option.</p>
        <p>In this case, though, first check that the clocks on the machine
        on which you are editing files and the clock on the machine you are
        compiling on are synchronised.  If the compilation machine's clock is
        slow, then the newly made dependency files will still be `older' than
        the file you edited, and the system will loop until this situation
        changes.</p>
        </div>
      </li>
      <li><p><a id="C2">Compilation of Cactus fails with the error:
        <samp>identifier "DECLARE_CCTK_PARAMETERS" is
        undefined</samp>?</a></p>

        <div class="ANS">
        <p>You need to include the header: <code>#include
        "cctk_Parameters.h</code>"</p>
        </div>
      </li>
      <li><p><a id="C3">(Linux) I get '<samp>g77: cannot specify -o with -c
        or -S and multiple compilations</samp>' when compiling with the
        Pacific VAST90 compiler.</a></p>

        <div class="ANS">
        <p>If the <kbd>libvast90.a</kbd> library is in the same directory as
        your F90 script, F90 passes <code>-lvast90</code> to the underlying
        G77 compile, which is of course only a valid switch when linking. The
        solution is to separate these files, e.g. into bin and lib
        directories.</p>
        </div>
      </li>
      <li><p><a id="C4">How do I compile with MPI? Why isn't it automatic
        like in Cactus 3?</a></p>

        <div class="ANS">
        <p>The standard MPI driver (<kbd>PUGH</kbd>) is in a thorn now
        (<kbd>CactusPUGH/PUGH</kbd>), so there is now the possibility to add
        other parallel drivers using alternative message passing schemes as
        separate thorns. To compile with MPI, when you make a configuration,
        use</p>
        <p><code>gmake &lt;<var>configuration</var>&gt;-config
        MPI=&lt;<var>MPI_TYPE</var>&gt;</code></p>
        <p>where the allowed values of <code><var>MPI_TYPE</var></code> are
        discussed in the documentation. For machines where Cactus 3 used to
        use MPI by default, the correct option is probably
        <code>MPI=NATIVE</code></p>
        </div>
      </li>
      <li><p><a id="C5">I can't compile because the compiler complains that a
        routine name has been previously defined ... but I can't find it
        repeated?</a></p>

        <div class="ANS">
        <p>If it is a C routine, whose name is either all in capitals or all
        in lowercase, and the routine has a Fortran wrapper, then it could be
        that the compiler doesn't attach underscores to the Fortran name and
        there is a conflict. To remove this possibility always use mixed case
        names for C routines with Fortran wrappers.</p>
        </div>
      </li>
      <li><p><a id="C6">How can I make sure that one thorn is compiled before
        another? For example to make sure that F90 module files from
        <kbd>ArrangementA/ThornA</kbd> are available for
        <kbd>ArrangementB/ThornB</kbd>.</a></p>

        <div class="ANS">
        <p>Add a dependency to a <kbd>ThornB</kbd>'s make.configuration.deps
	file, for example</p>
	<p>
	<code>ifneq (,$(findstring ArrangementA/ThornA,$(THORNS)))<br>
$(CCTK_LIBDIR)$(DIRSEP)libThornB.a : $(CCTK_LIBDIR)$(DIRSEP)libThornA.a<br>
endif</code>
	</p>
        <p>we will try to modify the make system to make this more automatic
        in the future.</p>
        </div>
      </li>
      <li><p><a id="C7">(Solaris) I start a configuration process with gmake,
        but on the second gmake it wants to set up the configuration again
        and again ....</a></p>

        <div class="ANS">
        <p>You are using a version of gmake which is too outdated (even
        though this version may work perfectly on other architectures). We
        found that GNU Make version 3.79 works fine.</p>
        </div>
      </li>
      <li><p><a id="C8">How do I compile Cactus in 32 bit mode on a 64 bit
        irix machine?</a></p>

        <div class="ANS">
        <p><code>gmake &lt;<var>config</var>&gt;-config
        IRIX_BITS=32</code></p>
        </div>
      </li>
      <li><p><a id="C9">What can I do if I don't have enough disk space to
        compile Cactus?</a></p>

        <div class="ANS">
        <p>If you have access to some scratch space, or temporary space, you
        can instruct Cactus to put the "<kbd>configs</kbd>" directory there
        (with all the object files and intermediate files).</p>
        <p>For example, to use the directory <kbd>/scratch/myconfigs</kbd>
        with <kbd>csh</kbd> or <kbd>tcsh</kbd>,</p>
        <p><code>setenv CACTUS_CONFIGS_DIR /scratch/myconfigs</code></p>
        <p>or with bash</p>
        <p><code>CACTUS_CONFIGS_DIR=/scratch/myconfigs export
        CACTUS_CONFIGS_DIR</code></p>
        </div>
      </li>
      <li><p><a id="C10">When I compile Cactus I get an error like</a></p>
        <p><samp>/home/allen/Cactus/arrangements/MineStuff/Test/src/metric.F90:3:<br>
        unterminated character constant<br>
        make[2]: *** [metric.F90.d] Error 33</samp></p>
        <p>But then when I type gmake again the compilation proceeds without
        problem.</p>

        <div class="ANS">
        <p>You are probably using Linux, and the C preprocessor is
        complaining about single apostrophes in a Fortran comment line when
        it is creating the dependency file for metric.F90. Make continues the
        second time because the dependency file now exists (although it won't
        necessarily contain the right information).</p>
        <p>We could remove this problem by removing comments from Fortran
        files before using the C preprocessor, but we don't want to add this
        overhead at the moment, since we are writing a Cactus preprocessor
        which won't have this problem (and will solve a number of other
        preprocessing problems).</p>
        <p>Your choices for getting past this for now are</p>
        <ul>
          <li>try and remove any single apostrophes in Fortran comments</li>
          <li>use gmake twice and live with possibly bad dependency
            information for these files</li>
          <li>if you are using Linux, try using the option
            "<code>-traditional</code>" with the GNU cpp which does ignore
            the apostrophes.</li>
        </ul>
        <p>Unfortunately, cpp is broken in Red Hat's version 2.96, and in the
        official releases 3.0 up to 3.0.3.  The versions 2.95.x and 3.0.4 do
        work fine.</p>
        <p>In order to use a different cpp and to pass the option
        "<code>-traditional</code>", use for example</p>
        <p><code>FPP = /home/user/gcc/bin/cpp -traditional</code></p>
        <p>when you configure your application.</p>
        </div>
      </li>
      <li><p><a id="C11">Sometimes when I compile in parallel with
        <code>TJOBS</code> or <code>FJOBS</code> the compilation stops
        halfway through.</a></p>

        <div class="ANS">
        <p>Compiling in parallel using <code>TJOBS</code>/<code>FJOBS</code>
        is not always failsafe. Usually simply issuing your gmake command
        again will complete the compilation and produce an executable.
        Occasionally you may see link errors in the last stage of
        compilation, if this happens remove the libraries</p>
        <p><code>rm configs/&lt;<var>config</var>&gt;/lib/*</code></p>
        <p>and issue gmake once more.</p>
        <p>Problems with <code>TJOBS</code>/<code>FJOBS</code> can be avoided
        if your version of gmake supports parallel make (this happened
        somewhere between 3.74 and3.78.1), in which case you can use instead
        the more robust:</p>
        <p><code>gmake &lt;<var>config</var>&gt; -j &lt;<var>number of
        processors</var>&gt;</code></p>
        </div>
      </li>
      <li><p><a id="C12">I get the following error when compiling?</a></p>
      <p><samp>
	Checking status of libIOJpeg.a<br>
	gmake[3]: *** No rule to make target \<br>
	&nbsp;&nbsp;&nbsp;`/u1/allen/scratch/Cactus/arrangements/<br>
	&nbsp;&nbsp;&nbsp;CactusIO/IOJpeg/src/IOJpeg.h', needed by `JPEG.c.d'.  Stop.<br>
	gmake[2]: *** [make.checked] Error 2<br>
	gmake[1]: *** [/u1/allen/scratch/Cactus/configs/wave/lib/libIOJpeg.a] \<br>
	&nbsp;&nbsp;&nbsp;Error 2<br>
	gmake: *** [wave] Error 2</samp></p>

        <div class="ANS">
        <p>This is because an include file which was used in your previous
        compile is no longer there (in this case the file <kbd>IOJpeg.h</kbd>
        was renamed <kbd>ioJpeg.h</kbd>). To solve this, delete the
        dependency information by issuing</p>
        <p><code>gmake &lt;<var>config</var>&gt;-cleandeps</code></p>
        <p>before compiling again.</p>
        </div>
      </li>
      <li><p><a id="C13">Compiling files in Cactus seems to involve three
        steps, preprocessing, compiling, and then postprocessing. What are
        they doing?</a></p>

        <div class="ANS">
        <p>Cactus specific preprocessing is performed for most source files,
        for example to expand c-preprocessor macros (e.g.
        <code>DECLARE_CCTK_PARAMETERS</code>) in <kbd>.F</kbd>,
        <kbd>.F90</kbd> and <kbd>.F77</kbd> files or to set correct names for
        calling Fortran functions in C files.  At the end of the
        preprocessing stage the resulting source file is placed into the</p>
        <p><kbd>configs/&lt;<var>config</var>&gt;/build/&lt;<var>thorn</var>&gt;</kbd>
        directory and if ready to be passed to the compiler.</p>
        <p>Once a file has been preprocessed, the resulting source file is
        compiled, with the working directory set to</p>
        <p><kbd>configs/&lt;<var>config</var>&gt;/scratch</kbd></p>
        <p>(which ensures, for example, that all F90 modules can be found by
        the compiler).</p>
        <p>After the file is compiled, some architectures may require
        postprocessing of the object files, for example,some machines don't
        allow the use of a "<code>-o</code>" flag for naming the resulting
        object file, in which case part of postprocessing would involve
        renaming and moving the file.</p>
        </div>
      </li>
      <li><p><a id="C14">When trying to create the Cactus executable I get
        the error</a></p>
        <p><samp>Creating cactus_origin in /data2/convCactus/exe from<br>
        CactusBase/IOASCII CactusBase/Boundary CactusPUGH/PUGHInterp<br>
        CactusBase/CartGrid3D CactusEinstein/StaticConformal<br>
        CactusPUGH/PUGHReduce CactusEinstein/ADMBase CactusBase/Time<br>
        CactusPUGH/PUGH CactusPUGH/PUGHSlab CactusBase/IOUtil<br>
        CactusElliptic/EllBase CactusBase/IOBasic<br>
        ld64: ERROR   33 : Unresolved text symbol "SetCartSymVN" -- 1st
        referenced by /data2/Cactus/configs/origin/lib/libADMBase.a\<br>
        (InitSymBound.c.o)</samp></p>

        <div class="ANS">
        <p>In this case <kbd>ADMBase</kbd> is probably not inheriting from
        the thorn which contains the <code>SetCartSymVN</code> function which
        it is using. When Cactus makes up the link line order it then doesn't
        know to list the <kbd>ADMBase</kbd> library before the library
        containing this function. To test this and/or to get an executable,
        find the link line used by issuing</p>
        <p><code>gmake origin SILENT=no</code></p>
        <p>and add the missing library to the end of the link line.</p>
        </div>
      </li>
      <li><p><a id="C15">My thorn is calling directly a function from another
        thorn. Both thorns are in my ThornList, but on linking I get the
        error</a></p>
        <p><samp>Startup.c.o(.text+0x4d): undefined reference to
        `OtherThornsFunction'</samp></p>

        <div class="ANS">
        <p>Make sure that your thorn inherits from the implementation
        provided by the other thorn. If you don't do this, the end link line
        may not list the libraries in the right order for linking.</p>
        </div>
      </li>
      <li><p><a id="C16">(Linux) When trying the new gcc 3.1.1 compiler, I
        received a lot of warnings about the compiler flag
        "<samp>-I/usr/local/include</samp>".</a></p>

        <div class="ANS">
        <p>This is because HDF5 is installed on this machine in what we would
        consider to be a sub-optimal place. HDF5 is preferably installed in
        own installation directory with (optionally) sym-links to the system
        directories. Cactus configurations should use the HDF5 installation
        directory itself.</p>
        <p>It is a matter of office debate as to whether it would be really
        be a good idea or not to check for and remove system directories, we
        can come up with pathological examples both if they are left or if
        they are removed.</p>
        </div>
      </li>
      <li><p><a id="C17">(OpenBSD) The system linker <kbd>/usr/bin/ld</kbd>
        (called by gcc's collect2) crashes when linking C++ thorns if GNU ar
        is used to create the libraries.</a></p>
        <p><samp>collect2: ld terminated with signal 11 [Segmentation fault]
        ld: /home/jonathan/cactus/Cactus/configs/test-interp2/lib/ \
        libTestInterp2.a(driver.cc.o): unexpected multiple definitions \ of
        symbol `axis_list::string(void) const', type 0xf</samp></p>

        <div class="ANS">
        <p>The workaround is to use the system's ar if you have any C++
        thorns.</p>
        </div>
      </li>
      <li><p><a id="C18">(Linux) When I compile Fortran I get errors because
        characters are in the first 5 columns, but I can't see anything wrong
        in the source code.</a></p>

        <div class="ANS">
        <p>The C preprocessor <kbd>/lib/cpp</kbd> distributed with Redhat 7.x
        causes problems with Fortran code (Fortran source code is by default
        passed through a preprocessor). The C preprocessor can change the
        spacings in a file, which is fine for C but can seriously affect
        Fortran code. If this is happening, you will see errors such as</p>
	<p><samp>************************************************************************<br />
        Preprocessing<br />
        /Cactus_hydratest/arrangements/CactusPUGH/Interp/src/interp3.F<br />
        Compiling<br />
        /Cactus_hydratest/arrangements/CactusPUGH/Interp/src/interp3.F<br />
        Pacific-Sierra Research vf90 Personal V3.4N5 12:49:17 10/31/01 f90 to
	f77<br>
	&nbsp;subroutine INTERP3_CCTK_REAL <br />
        Syntax, line 140: Non-blank characters in columns 1-5 of continuation
        &nbsp;line subroutine INTERP3_CCTK_COMPLEX<br />
        Syntax, line 319: Non-blank characters in columns 1-5 of continuation
        line<br />
        &nbsp;function LINEAR<br />
        &nbsp;function INTERP_QUAD<br />
        &nbsp;function CUBIC<br />
        gmake[3]: *** [interp3.F.o] Error 16<br>
        gmake[2]: *** [make.checked] Error 2 gmake[1]: ***</samp></p>
        <p>There are two suggested ways to get around this problem:</p>
        <p>1.  If you are using Beta 11 or higher, try using the architecture
        independent Cactus preprocessor which we are developing by
        configuring with</p>
        <p><code>make &lt;<var>config</var>&gt;-config FPP='$${PERL}
        $${CCTK_HOME}/lib/sbin/cpp.pl'</code></p>
        <p>2. Another way around this problem is to get hold of a copy of cpp
        from an earlier RedHat distribution (here is cpp from 6.2) and either
        replace the original cpp, or place it somewhere else and add the
        option <code>FPP=&lt;<var>location of new cpp</var>&gt;</code> when
        you configure Cactus.</p>
        </div>
      </li>
      <li><p><a id="C19">(Linux) I get internal errors using the
        Pacific-Sierra Fortran 90 compiler</a></p>

        <div class="ANS">
        <p>The free version of the Pacific Sierra compiler can generate
        uncompilable code, this is a problem with the translator. The error
        messages look something like:</p>
	<p><samp>Compiling<br>
		/home/Cactus/arrangements/CactusEinstein/AHFinder/src/AHFinder_pow.F \<br>
		Pacific-Sierra Research vf90 Personal V3.4N5 19:44:34 11/20/01 f90 to f77<br>
		&nbsp;module  F1COM<br>
		&nbsp;subroutine POWELL<br>
		Warning, line 167:<br>
		&nbsp;Too large to translate -- reduce program or loop size (RPNGEN)<br>
		Fatal, line 198: Internal error detected -- please report (EXPGET)<br>
		Syntax, line 198: Duplicate I/O specifier.<br>
		&nbsp;subroutine LINMIN<br>
		Warning, line 497: Too large to translate -- reduce program or loop size (RPNGEN)<br>
	&nbsp;function F1DIM</samp></p>
        <p>The fix is to either do what the message says and reduce the code
        size, or move to a different compiler.</p>
        </div>
      </li>
      <li><p><a id="C20">(Linux) I get the linking error "<samp>/usr/bin/ld:
        cannot find -lIEPCF90</samp>" with the Intel Fortran compiler.</a></p>

        <div class="ANS">
        <p>If you get the linking error</p>
        <p><samp>/usr/bin/ld: cannot find -lIEPCF90</samp></p>
        <p>Then you need to append <code>${IA32ROOT}/lib</code> to your
        <code>LD_LIBRARY_PATH</code> environment variable. You can do this
        directly in your shell setup file (e.g. .cshrc) or alternatively
        there is a script <kbd>$IA32ROOT/bin/iccvars.csh</kbd> which does
        this for you.</p>
        </div>
      </li>
      <li><p><a id="C21">(Solaris) Building <kbd>PUGHReduce</kbd> under
        Solaris 2.8 gives several errors with macro recursion.</a></p>
        <p><samp>Checking status of libPUGHReduce.a
        "/home/CCTK/Cactus_beta13/Cactus/arrangements/CactusPUGH/PUGHReduce/src
        line 323: CCTK_Cmplx_: macro recursion</samp></p>

        <div class="ANS">
        <p>This problem occurs only in the dependency generation part of the
        Cactus build. The Sun's <kbd>/lib/cpp</kbd> preprocessor cannot
        handle macro recursion levels of more than 3. Since we are loath to
        rewrite our macros just for Solaris, we would rather wait for a
        better system preprocessor, or for a fuller version of the Cactus cpp
        sometime in the future.</p>
        <p>As a solution, you could try using the Cactus preprocessor:</p>
        <p><code>make -config FPP='$${PERL}
        $${CCTK_HOME}/lib/sbin/cpp.pl'</code></p>
        <p>which has the advantage that it doesn't stop for errors but prints
        a warning message. Be wary though, it isn't perfect yet and may fail
        for some thorns.</p>
        <p>Otherwise, you can keep rerunning your make command to skip past
        the problem files (since only the dependency generation is failing).
        Of course, dependencies (for just these files), will then not
        work.</p>
        </div>
      </li>
      <li><p><a id="C22">(MacOS) Compiling with the Absoft F90 compiler I get
        error messages about large "fixups"</a></p>
        <p><samp>Compiling
        /home/Cactus/arrangements/AEIThorns/ADM_BSSN/src/Sources.F<br>
        Sources.f:unknown:Fixup of -44148 too large for field width of 16
        bits<br>
        Sources.f:unknown:Fixup of -42232 too large for field width of 16
        bits<br>
        Sources.f:unknown:Fixup of -33028 too large for field width of 16
        bits</samp></p>

        <div class="ANS">
        <p>Add the following text to the thorn's make.code.defn file:</p>
        <p><code>ifeq ($(shell uname), Darwin) F90FLAGS += -N11
        endif</code></p>
        </div>
      </li>
      <li><p><a id="C23">How can I see the commands which Cactus is actually
        using to build the executable?</a></p>

        <div class="ANS">
        <p>Add <code>SILENT=no</code> to the end of the compile command and
        the actual commands will be echoed to standard output.</p>
        </div>
      </li>
      <li><p><a id="C24">My configuration takes forever to build, are there
        any ways to speed this up?</a></p>

        <div class="ANS">
        <p>If you are developing and testing, you could build executables
        without using optimisation ... but remember that they will run much
        slower. To do this configure Cactus with <code>OPTIMISE=no</code>.</p>
        </div>
      </li>
      <li><p><a id="C25">On compiling Fortran code I get errors like
        "<samp>dummy argument CCTK_DIM has not been given a type</samp>", but
        I'm not using <code>CCTK_DIM</code> in the routine?</a></p>

        <div class="ANS">
        <p>Look to see if you are passing <code>CCTK_ARGUMENTS</code> into
        your routine, if so you need to use
        <code>DECLARE_CCTK_ARGUMENTS</code> in the declarations for the
        routine.</p>
        </div>
      </li>
      <li><p><a id="C26">I'm passing arguments to my scheduled routine using
        <code>CCTK_ARGUMENTS</code> and I get the compile error
        "<samp>identifier DECLARE_CCTK_ARGUMENTS is undefined</samp>"</a></p>

        <div class="ANS">
        <p>Make sure you have the lines</p>
        <p><code>#include "cctk.h"<br>
        #include "cctk_Arguments.h"</code></p>
        <p>at the top of your source file</p>
        </div>
      </li>
      <li><p><a id="C27">I have a code block commented out by '<code>#if 0
        ... #endif</code>' in a C/C++ routine which uses the
        <code>DECLARE_CCTK_ARGUMENTS</code> and/or
        <code>DECLARE_CCTK_PARAMETERS</code> macro.  The compiler stops with
        a parsing error on this piece of code.</a></p>

        <div class="ANS">
        <p>For C/C++ code, these two macros expand into (a list of)
        declarations of local variables, with the same names of the
        arguments/parameters, and their initialization statements, plus a
        single opening curly bracket. This bracket starts a new block for the
        statements following the macros. The matching closing bracket is
        automatically inserted during the preprocessing phase by the CST's
        c_file_preprocessor.pl program at the end of a routine's body. This
        is simply determined as the closing bracket matching the opening
        bracket of the routine's body. Because the
        <kbd>c_file_preprocessor.pl</kbd> program is run before $CPP and
        doesn't understand $CPP directives itself, it would not correctly
        detect the end of the routine's body in the following (legal C code)
        example:</p>
	<code>int bla(void)<br>
{<br>
&nbsp;&nbsp;DECLARE_CCTK_PARAMETERS<br>
&nbsp;&nbsp;#if 0<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (1) {<br>
&nbsp;&nbsp;#endif<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (0);<br>
}</code>
        <p>The automatically inserted closing bracket would be added outside
        of the routine's body and thus cause a syntax error in the code
        following.</p>
        <p>As a solution, you should make sure that all the statements in
        your routine (including those which you have commented out via
        '<code>#if 0 ...  #endif</code>') are always properly enclosed in
        blocks of matching curly brackets.</p>
        </div>
      </li>
      <li><p><a id="C28">(Linux IA64) I get a segmentation violation
        compiling <kbd>snprintf.c</kbd> in the Cactus flesh?</a></p>
        <p><samp>Compiling /home/Cactus/src/util//snprintf.c<br>
        /home/Cactus/configs/admeccy/build/Cactus/util/snprintf.c <br>
        ecc: error: Fatal error in
        /usr/local/intel/compiler60/ia64/bin/mcpcom,<br>
        terminated by segmentation violation <br>
        compilation aborted for <br>
        /home/Cactus/configs/admeccy/build/Cactus/util/snprintf.c (code
        1)</samp></p>

        <div class="ANS">
        <p>The Intel C++ compiler (Version 6.0, Build 20020320) has problems
        dealing with this file, which needs to be compiled without the -ip
        option. Either run gmake with the option <code>SILENT=no</code> then
        cut and paste the compile statement to the command line and remove
        the <code>-ip</code> option before executing it, and then continue to
        build the executable as normal.</p>
        <p>Alternatively configure with the <code>-O1</code> option. (Note,
        so far our benchmarks have indicated that <code>-O1</code> actually
        executes faster than <code>-O3</code>, although this may be just for
        our particular benchmarks).</p>
        </div>
      </li>
      <li><p><a id="C29">On linking I get an "<samp>unresolved text
        symbol</samp>" for a scheduled function called from
        <kbd>libCactusBindings.a</kbd></a></p>

        <div class="ANS">
        <p>Check the size of the object file which was created for the source
        file containing this function in
        <kbd>configs/&lt;config&gt;/build/&lt;thorn&gt;</kbd>. With some
        compilers, making object files for complicated source files can fail
        because it takes too much memory, and an empty object file will be
        created and the make process will fail. If you continue the make
        process Cactus will not realise that the object file is empty.</p>
        <p>If this is what happened, touch the relevant source file and try
        compiling again. It may be that you will need to switch optimisations
        off for this file, or split up the troublesome code into smaller
        components.</p>
        </div>
      </li>
      <li><p><a id="C30">(Linux) Using the Intel Fortran compiler I get the
        error "<samp>/usr/bin/ld cannot find -lintrins</samp>" on
        linking.</a></p>

        <div class="ANS">
        <p>Set the environment variable <code>IA32ROOT</code> to point to the
        location of your Intel compiler installation (eg
        <kbd>/opt/intel/compiler60/ia32</kbd>). You will need to reconfigure,
        and then try building your executable again.</p>
        </div>
      </li>
      <li><p><a id="C31">I just want to check that one thorn compiles
        correctly, can I test this without compiling all the thorns which
        come before it?</a></p>

        <div class="ANS">
        <p><code>make &lt;<var>config</var>&gt;-build
        BUILDLIST="&lt;<var>list of thorns</var>&gt;"</code></p>
        <p>builds thorns in the order they appear in the list. (Note, this
        does not link any thorn libraries together).</p>
        </div>
      </li>
      <li><p><a id="C32">What is the Cactus preprocessor (Cactus cpp)
        ?</a></p>

        <div class="ANS">
        <p>Part of the pre-processing step for Fortran files involves the use
        of a C-preprocessor.  On some architectures the native CPP does not
        correctly handle spaces in source files, and thus corrupts the
        resulting file.  On other machines there is no native way to generate
        dependency information for files.  In an attempt to solve these
        problems we have written a replacement of CPP in perl, which you may
        use for all Fortran code if you configure with</p>
        <p><code>FPP='$${PERL} $${CCTK_HOME}/lib/sbin/cpp.pl'</code></p>
        <p>or in an options file without the quotes</p>
        <p><code>FPP=$${PERL} $${CCTK_HOME}/lib/sbin/cpp.pl</code></p>
        <p>The Cactus preprocessor may also be used for C files by replacing
        <code>FPP</code> with <code>CPP</code> in the above statements.</p>
        <p>The Cactus preprocessor is still being developed and improved,
        known problems include</p>
        <ul>
          <li>only currently supports <code>#ifdef, #if</code> defined for a
            single token and not operations involving more than one token
            connected by <code>&amp;&amp;</code> and <code>||</code>, etc</li>
          <li>problems with macros whose overall expansion contains the
            original macro name</li>
        </ul>
        <p>The Cactus make system does not use the standalone CPP to
        preprocess C source files, as the first step of a C compilation
        involves the use of a CPP (normally internal).  In any case we do not
        recommend the use of this perl CPP to process C files, partly due to
        the above problems, and partly as the preprocessor does not
        pre-define certain symbols which the native preprocessor would..</p>
        </div>
      </li>
      <li><p><a id="C33">I'm working on a machine where a compiler problem
        means that I need to compile a particular thorn with a lower
        optimisation level. Is there an easy way to do this?</a></p>

        <div class="ANS">
        <p>Yes, if you want to change the optimisation for one thorn, you can
        add to the make.code.defn in the thorn, e.g.</p>
        <p><code>C_OPTIMISE_FLAGS = &lt;new flags&gt;<br>
        CXX_OPTIMISE_FLAGS = &lt;new<br>
        flags&gt; F77_OPTIMISE_FLAGS = &lt;new flags&gt;<br>
        F90_OPTIMISE_FLAGS = &lt;new flags&gt;</code></p>
        <p>These flags will then only apply for the particular thorn. These
        flags will be machine/compiler specific, so you only want to add them
        for the problematic machine.</p>
        </div>
      </li>
      <li><p><a id="C34">How can I make sure that one file is compiled before
        another? For example to make sure that an F90 module file
        "<kbd>module.F90</kbd>" is available for other file
        "using.F90".</a></p>

        <div class="ANS">
        <p>Add dependency declarations to the thorn's make.code.deps file,
        for example</p>
        <p><code>using.F90.o: module.F90.o</code></p>
        <p>Note that you have to use the source file names and append the
        suffix "<kbd>.o</kbd>". This convention is different from the default
        Makefile rules.</p>
        </div>
      </li>
      <li><p><a id="C35">I started building a Cactus configuration and it
        asked me if I wanted to edit the thornlist, I pressed '<kbd>y</kbd>'
        and then '<kbd>enter</kbd>' but nothing happened?</a></p>

        <div class="ANS">
        <p>Cactus uses the program defined by the standard
        <code>EDITOR</code> environment variable as an editor at this point,
        check that this variable is defined and is actually a working
        editor.</p>
        </div>
      </li>
      <li><p><a id="C36">(Linux) Compiling Cactus with Redhat 8 or 9 with
        Intel compilers my build fails in <kbd>CactusBase/IOUtil</kbd>
        because configure failed to find &lt;<kbd>sys/stat.h</kbd>&gt;</a></p>

        <div class="ANS">
        <p>Intel supports their compilers only for RedHat 7.x, and gives no
        guarantees for their compilers to work properly with newer releases.
        On RH 8/9.x there is a problem with the include order of system
        header files with the new glibc (you should see this in your
        configuration's <kbd>config.log</kbd> file) and some other header
        needs to be included before  &lt;<kbd>sys/stat.h</kbd> &gt;. The same
        problem occurs with Debian Sarge. One way to fix this is to ask your
        sys admin to edit the corresponding Intel header file, or wait until
        Intel provides a patch. As a starting point, here is a diff which
        worked for one user ...</p>
        <pre>--- /opt/intel/compiler70/ia32/substitute_headers/sys/stat.h~   2003-05-09 20:45:49.000000000 +0200
+++ /opt/intel/compiler70/ia32/substitute_headers/sys/stat.h    2003-09-23 23:26:42.000000000 +0200
@@ -27,10 +27,17 @@
 
 #include &lt;bits/types.h &gt;                /* For __mode_t and __dev_t.  */
 
-#ifdef __USE_XOPEN
-# define __need_time_t
-# include &lt;time.h&gt;             /* For time_t.  */
+#if defined __USE_XOPEN || defined __USE_MISC
+# ifdef __USE_XOPEN
+#  define __need_time_t
+# endif
+# ifdef __USE_MISC
+#  define __need_timespec
+# endif
+# include &lt;time.h&gt;             /* For time_t resp. timespec.  */
+#endif
 
+#ifdef __USE_XOPEN
 /* The Single Unix specification says that some more types are
    available here.  */
 # ifndef __dev_t_defined</pre>
        </div>
      </li>
      <li><p><a id="C37">Why can't I use different F90 and F77 compilers with
        Cactus?</a></p>

        <div class="ANS">
        <p>Because Cactus does some automatic name mangling to allow you to
        call Fortran routines from C and vice-versa, and different compilers
        will use different conventions for the way that they generate routine
        names in the object files. This means that you would only be able to
        use different compilers for F90 and F77 if they used the same
        conventions. In principle we could check to make sure that they are
        compatible, but for now we require you to use the same compiler for
        both F77 and F90 code.</p>
        </div>
      </li>
      <li><p><a id="C38">What can I do about <kbd>__builtin</kbd> errors 
        reported by Intel 9.0?</a></p>

        <div class="ANS">
        <p>This problem is solved with the Intel 9.1 compilers.  The rest of this is
        for those who are still using Intel 9.0.</p>
        <p>The documentation for Intel 9.0 C/C++ claims only that it is compatible 
        with Gcc 3.x; in fact Intel 9.0 is not compatible with Gcc 4.x.
        It tries to read the Gcc C++ header files, but fails in the case of Gcc 4.x</p>
        <p>We have submitted a feature request to Intel, and we hear that they
        intend to fix the problem in the 9.1 release.  Until then, configure with</p>
        <p><code>SYS_INC_DIRS = /opt/intel/compiler90/include/c++<br>
        LD = icpc -L/opt/intel/compiler90/lib/ -lcprts -lunwind -lcxa</code></p>
        <p>(where the paths point to your Intel compiler installation, of course).
        This will cause the compiler to use its own C++ header files, and associated
        libraries.</p>

         </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>Running</h3>
    <ol type="1">
      <li><p><a id="D1">I'm trying to run Cactus with MPI using
        "<code>mpirun</code>", but I just get an error "<samp>Unknown option
        -np</samp>", what's the problem?</a></p>

        <div class="ANS">
        <p>It looks like the MPI implementation on the machine you're using
        isn't removing its arguments correctly, so they are being passed to
        the Cactus run. You need to use the "<code>-i</code>" command line
        option for Cactus to ignore the MPI arguments, e.g.</p>
        <p><code>mpirun ./cactus_foo foobar.par -i -np 8</code></p>
        </div>
      </li>
      <li><p><a id="D2">I'm running Cactus on a parallel system with missing
        C++ libraries on some nodes.  Cactus compiles but it won't run.  Is
        there anything I can do?</a></p>

        <div class="ANS">
        <p>If C++ isn't being used in any thorn, you can compile Cactus
        without using C++ using the configure option
        <code>CXX=none</code>.</p>
        </div>
      </li>
      <li><p><a id="D3">I can build a Cactus configuration using some
        external libraries such as HDF5 or PETSc without any problems but
        when I run the executable I get the following error:</a></p>
        <p><samp>./cactus_WaveDemo: error while loading shared libraries:
        libhdf5.so.0: cannot load shared object file: No such file or
        directory</samp></p>

        <div class="ANS">
        <p>This is a problem with using shared libraries on your system: the
        dynamic loader couldn't locate a shared library on the system you are
        trying to run on.</p>
        <p>You can set the <code>LD_LIBRARY_PATH</code> environment variable
        in your shell setup to point to your local installation of HDF5. For
        global installations located in a standard place (such as
        <kbd>/usr/local/lib</kbd>), this should ideally be done by your
        system administrator for you.</p>
        <p>Another possibility to get around the above problem is to use
        static libraries in favor of shared ones. For this you need to remove
        the <kbd>*.so</kbd> files from your installation directory (leaving
        the <kbd>*.a</kbd> files). Cactus would then link against the static
        libraries automatically.</p>
        </div>
      </li>
      <li><p><a id="D4">I can run my non-MPI executable using shared
        libraries without problems now but still get the same error as in FAQ
        D3 for MPI jobs started with mpirun.</a></p>

        <div class="ANS">
        <p>This indicates a misconfigured mpirun script. When it starts a
        shell on other nodes it probably doesn't read in the user's shell
        setup so that the <code>LD_LIBRARY_PATH</code> environment is not set
        properly. You should contact your system administrator to get this
        fixed.</p>
        </div>
      </li>
      <li><p><a id="D5">I'm using the web server thorn
        <kbd>CactusConnect/HTTPD</kbd> on an Irix machine, I compiled with
        <code>PTHREADS=yes</code> to get better response, but the executable
        just hangs (even with the <code>httpd::use_pthreads="no"</code> in
        the parameter file)</a></p>

        <div class="ANS">
        <p>SGI/Irix machines with native MPI cannot make use of Pthreads (the
        native MPI uses some Irix threads which are incompatible with
        Pthreads), and the executable hangs on the first call to a pthread
        routine.</p>
        <p>You could instead use MPICH on your Irix machine instead of native
        MPI. Note that native MPI will probably be better optimised for you
        application than  MPICH though.</p>
        </div>
      </li>
      <li><p><a id="D6">I get a segmentation fault running Cactus, right
        after the schedule tree is printed to screen?</a></p>

        <div class="ANS">
        <p>Check to see if you are passing <code>CCTK_ARGUMENTS</code> into
        any routines registered at <code>CCTK_STARTUP</code>, if so these
        need to be removed and void used instead. The <code>STARTUP</code>
        timebin is run before the driver sets up any grid variables, and the
        segmentation fault occurs in <code>CCTK_DECLARE_ARGUMENTS</code> when
        these undefined variables are accessed. Parameters can however be
        used in <code>STARTUP</code> routines.</p>
        </div>
      </li>
      <li><p><a id="D7">(Linux) I'm using the <kbd>NaNChecker</kbd> thorn and
        seeing very strange results.</a></p>

        <div class="ANS">
        <p>There is a bug in the isnan function with the Fortran Intel
        compiler (for IA32 and IA64). This bug means that any thorn using
        isnan (for example <kbd>CactusUtils/NaNChecker</kbd>) will produce
        inconsistent results.</p>
        </div>
      </li>
      <li><p><a id="D8">(Linux) The testsuites for
        <kbd>CactusEinstein/AHFinder</kbd> and
        <kbd>CactusBench/BenchADM</kbd> fail for me, but the release notices
        say that they pass.</a></p>

        <div class="ANS">
        <p>The Absoft Fortran compiler (Version 6) produces the wrong answers
        for <kbd>CactusEinstein/AHFinder</kbd> and
        <kbd>CactusBench/BenchADM</kbd> if optimisation is not used.</p>
        </div>
      </li>
      <li><p><a id="D9">How do I run Cactus until a given coordinate time
        instead of to a given iteration number?</a></p>

        <div class="ANS">
        <p>Instead of setting <code>cactus::cctk_itlast</code> set
        <code>cactus::cctk_final_time</code> to the required coordinate time,
        and also set <code>cactus::terminate = "time"</code>.</p>
        </div>
      </li>
      <li><p><a id="D10">Output to screen using the Info IO method of IOBasic
        doesn't work.</a></p>
        <p>I want to watch min/max values for '<code>wavetoy::phi</code>'
        during a cactus run on stdout.  For that, I added</p>
	<p><code>IOBasic::outInfo_every = 10<br>
        IOBasic::outInfo_vars  = "wavetoy::phi"
</code></p>
<p>
        to my parameter file. Thorn <kbd>IOBasic</kbd> is active, but I only
        get the iteration number and coordinate time printed to screen.

        <div class="ANS">
        <p>You need to activate a thorn which implements the min/max
        reductions, for example <kbd>CactusPUGH/PUGHReduce</kbd>.</p>
        </div>
      </li>
      <li><p><a id="D11">I get an error saying "<samp>CCTK_Equals: First
        string null</samp>".</a></p>

        <div class="ANS">
        <p>The routine <code>CCTK_Equals</code> tries to look at the value of
        a keyword or a string parameter.  The value "<code>null</code>"
        indicates that this parameter has never been set.</p>
        <p>The problem could be that Cactus mis-detected the way the Fortran
        compiler does its name mangling.  The linker then creates two tables
        that contain parameter values, where one is set by the flesh and the
        other is accessed by Fortran code.</p>
        <p>Try to re-configure your application, perform a "<code>make
        CONFIG-realclean</code>", and then recompile.</p>
        </div>
      </li>
      <li><p><a id="D12">I have a Cactus executable compiled with MPI. When
        running it on a single processor (without using mpirun) I get an
        error saying "<samp>Unable to open parameter file ...</samp>".</a></p>

        <div class="ANS">
        <p>If you built Cactus with the ch_p4 device of the MPICH
        distribution and then execute the program directly (without using
        mpirun), it will start in the directory where the executable resides.
        If you specified a relative path to your parameter file Cactus would
        start searching for it from that directory (rather than the directory
        you are currently working in) and then potentially not find it.</p>
        <p>The solution is to never run an MPICH ch_p4 executable directly
        but always use mpirun. This will make sure that the program will
        start in your current working directory.</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>Thorn Writing</h3>
    <ol type="1">
      <li><p><a id="E1">While implementing some MPI code in Cactus, I came
        across the problem of getting an MPI communicator.  I basically have
        the choice between using <code>MPI_COMM_WORLD</code>, assuming that
        no processors have been set aside by the driver, or tying myself to a
        certain driver, such as <kbd>PUGH</kbd>, and using the driver's
        internal data structures.  Both choices are clearly not
        desirable.</a></p>

        <div class="ANS">
        <p>We are aware of this, and in fact, it is the reason why some of
        the I/O thorns are directly dependent on the <kbd>PUGH</kbd> driver.
        The solution for all this will be the <a
        href="http://www.cactuscode.org/Development/Specs/CCI.txt">Cactus
        Communication Infrastructure (CCI)</a> which will eventually be
        integrated into the flesh and will provide a generic function
        interface for communicating data. Thus when you plug in different
        communication drivers, I/O thorns won't need to be changed if they
        use the CCI routines.</p>
        </div>
      </li>
      <li><p><a id="E2">How can I communicate the value of a local scalar on
        one processor to all processors? There doesn't seem to be an API for
        this in Cactus.</a></p>

        <div class="ANS">
        <p>There isn't a general broadcast API in Cactus at the moment, this
        is planned as part of a new Cactus Communication Interface (CCI)
        layer in the 4.1 release (see the Specs web page for more information
        about this).</p>
        <p>Until then, the best way to communicate your variable is to use
        the the CCTK reduction API. For example, make a call to
        <code>CCTK_ReduceLocalScalar()</code> with the "<code>sum</code>"
        reduction operator, and set your local variable to zero on all
        processors except for the one with the value you want to have
        communicated.</p>
        </div>
      </li>
      <li><p><a id="E3">What about if I only want to send a local scalar to a
        single processor?</a></p>

        <div class="ANS">
        <p>This type of point-to-point communication is not possible with
        Cactus APIs right now. Any <code>CCTK_Reduce*()</code> is a global
        communication so far, and all processors must take part in that
        communication.</p>
        <p>For doing point-to-point communication you should use the
        appropriate API of an underlying communication layer like MPI.</p>
        </div>
      </li>
      <li><p><a id="E4">Why shouldn't I make direct calls to MPI from my
        thorns? Your default driver uses MPI.</a></p>

        <div class="ANS">
        <p>Keeping all MPI calls in the driver thorn keeps the code modular,
        allowing for you to use alternate drivers when they become available,
        for example using PVM or some other communication layer.</p>
        <p>Also, since not all underlying MPI implementations provide the
        same Fortran bindings it is best to use a C wrapper for making MPI
        calls, and this is automatically done for you if you use the Cactus
        APIs.</p>
        </div>
      </li>
      <li><p><a id="E5">I am writing a thorn, what is the difference between
        using "<code>const cGH *cctkGH</code>" and "<code>cGH *cctkGH</code>"
        for argument declarations? And what about "<code>const cGH* const
        cctkGH</code>"?</a></p>

        <div class="ANS">
        <p>'<code>cGH *</code>' is a pointer to a <code>cGH</code> structure
        which can be modified. This is necessary eg. in routines which
        initialize a <code>cGH</code>.</p>
        <p>'<code>const cGH *</code>' is a pointer to a <code>cGH</code>
        structure which is marked as constant (i.e. read-only). The code is
        not allowed to change the <code>cGH</code> using such a pointer. The
        compiler should refuse to compile it otherwise, or at least print a
        warning.</p>
        <p>Our policy now is to use "<code>const cGH*</code>" for all
        <code>CCTK_</code> calls, and it is recommended that this is also
        implemented in all thorns. (It is being implemented in all the
        released Cactus thorns, but you may still find some exceptions).</p>
        <p>[Note: August 2002: We have still to implement <code>const
        cGH*</code> in a few <code>CCTK_</code> calls, namely</p>
        <ul>
          <li>calls to <code>CCTK_Sync()</code></li>
          <li>calls to <code>CCTK_Reduce()</code></li>
          <li>calls to <code>CCTK_Interp()</code> (the old API)</li>
        </ul>
        <p>and it is still a matter of debate whether the const qualifier
        should be used for <code>CCTK_Sync</code> calls.]</p>
        <p>Finally, the additional const qualifier in '<code>const cGH *
        const GH</code>' says that the pointer variable itself cannot be
        changed (it's just a one-time-only assignment). For instance, no
        pointer arithmetic is allowed on such a pointer. In principle, one
        could declare all local variables as const if they aren't changed
        afterwards. But it's doesn't have any benefit in writing cleaner
        code. I think this is just overkill and using just '<code>const cGH
        *</code>' is fine.</p>
        </div>
      </li>
      <li><p><a id="E6">On compiling Fortran code I get errors like
        "<samp>dummy argument CCTK_DIM has not been given a type</samp>", but
        I'm not using <code>CCTK_DIM</code> in the routine?</a></p>

        <div class="ANS">
        <p>Check if you have passed <code>CCTK_ARGUMENTS</code> in the
        argument list for the routine, is do you must have a line</p>
        <p><code>DECLARE_CCTK_ARGUMENTS</code></p>
        <p>in your declarations section.</p>
        </div>
      </li>
      <li><p><a id="E7">If I have two grid array groups with identical sizes
        (and ghost zones, distributions, etc.), are they guaranteed to be
        distributed in the same way?  That is, can I count on the fact that
        their local shapes (lsh) will be the same?  It is true empirically.
        What if the grid arrays have different variable types or numbers of
        time levels?</a></p>

        <div class="ANS">
        <p>Yes to all.</p>
        </div>
      </li>
      <li><p><a id="E8">Is there anyway to only compile certain lines of
        source code if a particular thorn is in the compiled
        ThornList?</a></p>

        <div class="ANS">
        <p>Yes, but this is not a good idea for a number of reasons</p>
        <ul>
          <li>it adds hidden dependencies between thorns, and can easily lead
            to unexpected and hard to track down behaviour when a thorn is
            compiled but not active</li>
          <li>it breaks all kinds of modularity infrastructure in Cactus</li>
          <li>the include file you need to use will cause your source code to
            be recompiled when other thorns change</li>
        </ul>
        <p>But if you insist, and accept the consequences, this is how you do
        it,</p>
        <p>Include the header file <kbd>cctk_DefineThorn.h</kbd></p>
        <p>In your code use</p>
        <p><code>#ifdef ARRANGEMENTNAME_THORNNAME</code></p>
        <p><code>&lt;<var>your source code</var>&gt;</code></p>
        <p><code>#endif</code></p>
        <p>If appropriate, to give yourself some protection, use the function
        <code>CCTK_IsThornActive</code> to only execute the source code if
        the thorn was actually activated (and not just compiled in).</p>
        <p>Add a comment to your <kbd>README/Documentation.tex</kbd> to
        remind yourself, and others of what you have done.</p>
        </div>
      </li>
      <li><p><a id="E9">How can I find out in
        <kbd>make.configuration.defn</kbd>, whether MPI is being used or not?
        The thorn <kbd>EllPETSc</kbd> checks whether the makefile variable
        <code>MPI_LIBS</code> is empty.  This doesn't work on systems where
        using MPI does not require any explicitely specified libraries, such
        as when using the mpicc script to compile.  Is there a better
        way?</a></p>

        <div class="ANS">
        <p>You can grep for MPI in the file</p>
        <p><kbd>configs/&lt;<var>your_config</var>&gt;/config-data/cctk_Extradefs.h</kbd></p>
        <p>see for example
        <kbd>CactusPUGHIO/IOPanda/src/make.configuration.deps</kbd></p>
	<p><code>
	if test -z "`grep CCTK_MPI $(CONFIG)/cctk_Extradefs.h`" ; then<br>
	&nbsp;&nbsp;echo "IOPanda requires MPI";   \<br>
	&nbsp;&nbsp;exit 2;                        \<br>
	  fi</code></p>
        </div>
      </li>
      <li><p><a id="E10">How can I see in source code whether MPI is being
        used?</a></p>

        <div class="ANS">
        <p>Check whether the preprocessor macro <code>CCTK_MPI</code> exists,
        for example,</p>
        <p><code>#ifdef CCTK_MPI<br>
        /* Only included if MPI is being used */ <br>
        #else <br>
        /* Only included if MPI is *not* being used */ <br>
        #endif</code></p>
        </div>
      </li>
      <li><p><a id="E11">The functions <code>CCTK_Exit</code> and
        <code>CCTK_Abort</code> require <code>cctkGH</code> as an argument.
        How can I call these functions deep inside my thorns where this
        pointer is not available?</a></p>

        <div class="ANS">
        <p>These routines are overloaded by a driver, and the reason for
        passing in a <code>cctkGH</code> is to allow the driver to tidy up
        before exiting. If the particular driver you are using allows a
        <code>NULL</code> pointer to be passed you can pass this instead of
        the <code>cctkGH</code> pointer. (The worst that will happen should
        be a segfault if the driver cannot handle <code>NULL</code>).
        Alternatively, you need to include a mechanism to obtain the
        <code>cctkGH</code> deep inside your thorns code.</p>
        </div>
      </li>
      <li><p><a id="E12">I'm getting wierd syntax errors in Fortran code,
        with an extra garbage character (often <code>$</code> or
        <code>&amp;</code>) stuck in the middle of a <code>CCTK_INFO()</code>
        or <code>CCTK_WARN()</code> or <code>CCTK_EQUALS()</code> call after
        it has been processed.</a></p>

        <div class="ANS">
        <p>You have probably used Fortran (either 77 or 90) line continuation
        in a macro call</p>
        <pre>      c example of broken Fortran code fragment
      if      (CCTK_EQUALS(test,"on")) then
         test_state = 1
      else if (CCTK_EQUALS(test,
$                          "off")) then
         test_state = 3
      end if</pre>
        <p>The <code>$</code> is in column 6 is the Fortran 77 standard way
        of doing a line continuation.  This doesn't work, because
        <code>CCTK_EQUALS(</code>) is a macro, and macros use C lexical
        conventions (regardless of what language your code is written in). To
        continue a line in a macro, use the same technique you would in C,
        i.e. put a backslash ( <code>\</code> ) at the end of the line to be
        continued (note there must *not* be any whitespace after the
        <code>\</code> !!).  For example, the above code should be written</p>
        <pre>      c example of valid Fortran code fragment 
      if      (CCTK_EQUALS(test,"on")) then 
         test_state = 1 
      else if (CCTK_EQUALS(test, \
                      "off")) then 
         test_state = 0 
      end if</pre>
        </div>
      </li>
      <li><p><a id="E13">I want to write the value of a <code>KEYWORD</code>
        parameter in Fortran code to a file, but nothing I try works.</a></p>

        <div class="ANS">
        <p>Cactus <code>KEYWORD</code> and <code>STRING</code> parameters are
        not stored as Fortran strings (they are pointers to C strings) so you
        need to convert them first. Use the routine
        <code>CCTK_FortranString</code> to copy them to a locally defined
        Fortran string, then you can manipulate them as usual. If you just
        want to print the value to the standard output there is also the
        routine <code>CCTK_PrintString</code>.</p>
        </div>
      </li>
      <li><p><a id="E14">I write my thorns with Fortran, do you have any
        general advice?</a></p>

        <div class="ANS">
        <p>Yes. Read the section "Fortran Thorn Writers" in the Users Guide,
        and follow these general recommendations</p>
        <ul>
          <li>use <code>IMPLICIT NONE</code> in your Cactus subroutines and
            functions, this will help in finding errors at compile time.</li>
        </ul>
        </div>
      </li>
      <li><p><a id="E15">In my Fortran thorn the value of a Cactus integer
        parameter is totally wrong when I print it, but when I print it from
        C it is fine.</a></p>

        <div class="ANS">
        <p>Check that you remembered to add
        <code>DECLARE_CCTK_PARAMETERS</code> to the declaration area of the
        subroutine.</p>
        </div>
      </li>
      <li><p><a id="E16">I write my thorns with C, do you have any general
        advice?</a></p>

        <div class="ANS">
        <p>Yes, hopefully this list will grow, but for now</p>
        <ul>
          <li>don't use C++ comments (<code>//</code>) in C code this will
            cause difficulties on some platforms</li>
        </ul>
        </div>
      </li>
      <li><p><a id="E17">Why is it that when I schedule more than one routine
        in the same thorn at <code>ANALYSIS</code> only the first routine is
        executed and the second one is ignored?</a></p>

        <div class="ANS">
        <p>Are you triggering on different variables with the two routines?
        If not, it doesn't matter which thorns they come from, only the first
        scheduled routine will be called. This is part of the special design
        of the <code>ANALYSIS</code> bin.</p>
        </div>
      </li>
      <li><p><a id="E18">Is there a way to synchronize individual grid
        variables in a group?</a></p>

        <div class="ANS">
        <p>Not at the moment. This was a design decision partly to be able to
        support "compact" groups of variables in the future (that is, groups
        where the group members at any grid point are stored contiguously in
        memory ... compared to the "normal" way we have now where each group
        member is stored as a different array). With compact groups
        synchronizing single members would be more computationally expensive.
        Currently the infrastructure is mainly built around the concept of
        groups of variables, and changing this would involve changes to the
        driver interface.</p>
        </div>
      </li>
      <li><p><a id="E19">Is there a way to synchronize just one time level of
        a grid variable?</a></p>

        <div class="ANS">
        <p>Right now only one time level is sychronized, that is the
        "current" level. Other time levels cannot be synchronized and are
        assumed to be fixed or read only.</p>
        </div>
      </li>
      <li><p><a id="E20">I'm using the <code>CCTK_ParameterSet
        function</code> to change a parameter, but after calling it the
        parameters value doesn't change?</a></p>

        <div class="ANS">
        <p>First make sure that you really want to change a parameters value
        and that you really know what you are doing. In general parameters
        are fixed thoughout a run, and should only be changed by steering
        thorns.</p>
        <p>If you change a parameter with <code>CCTK_ParameterSet</code> it
        won't change in the routine you call it from, because the
        <code>DECLARE_CCTK_PARAMETERS</code> macro currently expands to
        define all a thorns parameters as local variables with a const
        qualifier (in C) and sets them to the current values of the
        parameters. Thus calling <code>CCTK_ParameterSet</code> will not
        affect the value of the local copy.</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>General</h3>
    <ol type="1">
      <li><p><a id="F1">Why do I have to use e.g. "<code>mpirun -np 1
        ./exe/cactus_myconfig -O</code>" to see the compiled parameters,
        can't the parameters be output before MPI is initialised?</a></p>

        <div class="ANS">
        <p>Alas some MPIs add their own command-line options, so we need to
        do MPI_Init before parsing the command line, or parse it twice, once
        before the <code>MPI_Init</code> and once after, to detect invalid
        options.</p>
        </div>
      </li>
      <li><p><a id="F2">Why isn't a <code>BOOLEAN</code> parameter a
        <code>LOGICAL</code> in Fortran?</a></p>

        <div class="ANS">
        <p>There is no way we can guarantee the way the Fortran logical type
        is represented at machine level, and since all Fortran variables need
        to be mapped internally to C data structures, we use integers to
        ensure portability.</p>
        </div>
      </li>
      <li><p><a id="F3">Why is there an MPI call in the Flesh
        (<code>MPI_Init</code>)? I thought that the Cactus flesh was
        independent of any parallel protocol, why isn't this call made from a
        driver thorn?</a></p>

        <div class="ANS">
        <p>We would love to get rid of the last remaining MPI calls from the
        flesh, unfortunately in MPI 1, MPI implementations are allowed to
        play around with the argument list, so we need to call MPI_Init
        before parsing the command line argument, and this makes it very
        difficult to have it called from the driver, since we don't even know
        what the parameter file is at that stage, so we don't even know which
        driver to activate!</p>
        <p>MPI 2 allows <code>NULL</code> to be passed to
        <code>MPI_Init</code>, which gets around the problem, but the only
        machines currently with MPI 2 are Japanese supercomputers.</p>
        <p>It is the only MPI call made before the driver is activated, and
        it sets a global variable to tell you it's been done, so it isn't a
        major problem apart from being extremely ugly.  You can even turn it
        off with an environment variable, but then if you run with MPICH
        you'll find the code complaining about unknown command line arguments
        like -p4grp. If we had a precise list of the arguments passed by each
        MPI implementation we could guard against them, but that's an even
        uglier option.</p>
        </div>
      </li>
      <li><p><a id="F4">Is there any way to tell what CVS version of
        individual source files was used to build an executable?</a></p>

        <div class="ANS">
        <p>Actually there is, just issue the Unix command:</p>
        <p><code>strings cactus_&lt;<var>config</var>&gt; | grep
        Header</code></p>
        <p>to see all the version information for all source files, and</p>
        <p><code>strings cactus_&lt;<var>config</var>&gt; | grep Header |
        grep &lt;<var>filename</var>&gt;</code></p>
        <p>to look for a particular file.</p>
        <p>(Note that this only works for files using the
        <code>CCTK_FILEVERSION</code> macro.)</p>
        </div>
      </li>
      <li><p><a id="F5">Why is the main routine of Cactus written in C++
        (<kbd>src/main/flesh.cc</kbd>) when the rest of the flesh is standard
        ANSI C? More strangely, why does Cactus still compile when I have no
        C++ compiler on my system?</a></p>

        <div class="ANS">
        <p>The main routine of the flesh is written in C++, since any static
        C++ classes need to be initialised before the main routine is called.
        So if there is a C++ compiler available we use this for compiling
        flesh.cc. Since we use only ANSI C in flesh.cc, if there is no C++
        compiler available on your machine (and so you are not trying to
        compile any thorns containing C++), we use the C compiler instead.</p>
        </div>
      </li>
      <li><p><a id="F6">Are there grid scalars of type <code>STRING</code>
        ?</a></p>

        <div class="ANS">
        <p>No, there is only a <code>CCTK_CHAR</code> type. You can however
        define an array with <code>DISTRIB=CONSTANT</code> with a maximum
        length.</p>
        </div>
      </li>
      <li><p><a id="F7">Why don't you use compilers <kbd>mpicc</kbd>,
        <kbd>mpiCC</kbd> etc when they exist on parallel machines?</a></p>

        <div class="ANS">
        <p>The compilers mpicc etc are scripts for compilation which are site
        dependent and whose contents can change. The major reason we don't
        use these is that in general it is difficult to work out what
        underlying compiler is being used, which in turn leads to problems
        adding the correct compilation flags.</p>
        <p>So far we have found it more convenient and transparent to
        manually add libraries and options to the configure system than to
        rely on <kbd>mpicc</kbd> behaving well on all platforms. At some
        point we will be reinvestigating this.</p>
        </div>
      </li>
      <li><p><a id="F8">How does Cactus manage to so seamlessly call Fortran
        routines from C, and vice versa?</a></p>

        <div class="ANS">
        <p>Part of the configuration step on a machine involves automatically
        deducing the convention which the fortran compiler uses for its
        symbols (for example, upper or lower case and the addition of
        underscores).</p>
        <p>This information is then used to construct the macros which are
        used at preprocessing to translate Fortran names to C-callable
        routines.</p>
        <p>We also use macros to facilitate passing strings from Fortran into
        C. Strings must always be at the end of argument lists for this
        (which is why some of our choices of order in argument lists may seem
        strange), and the architecture details of string passing are
        maintained in the file <kbd>src/include/cctk_FortranString.h</kbd>.
        At the moment we have macros for one, two or three strings in an
        argument list.</p>
        </div>
      </li>
      <li><p><a id="F9">The documentation says that Cactus parameters are
        read-only, but I can trivially change the value of a parameter in the
        Fortran source code of my thorn.</a></p>

        <div class="ANS">
        <p>Although changing parameters in Fortran is possible (we haven't
        thought of an easy way to enforce read-only parameters) it is not
        supported and should not be done!</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>Documentation</h3>
    <ol type="1">
      <li><p><a id="G1">How can I build the ThornGuide documentation for
        single thorns or arrangements?</a></p>

        <div class="ANS">
        <p>Give the names of the thorns or arrangements on the make line,
        e.g.</p>
        <p><code>gmake ThornGuide THORNS="CactusBase/Boundary"</code></p>
        <p><code>gmake ThornGuide ARRANGEMENTS="CactusBase"</code></p>
        </div>
      </li>
      <li><p><a id="G2">I have a configuration with over ten thorns, but when
        I make the ThornGuide I only see the first few of them.</a></p>

        <div class="ANS">
        <p>It could be that the documentation in one of the thorns is not
        following the Cactus ThornGuide coding convention, for example see
        the file <kbd>doc/ThornGuide/template.tex</kbd>.</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>I/O</h3>
    <ol type="1">
      <li><p><a id="H1">I want to run an old parameter file, but none of the
        I/O parameters are recognised!</a></p>

        <div class="ANS">
        <p>In Beta 13 the "old" I/O parameter names were finally fully
        removed in favour of "new" more consister parameter names across the
        I/O thorns in the computational toolkit. A complete list of I/O
        parameters which changed is contained in <a
        href="http://www.cactuscode.org/archives_html/users/msg00278.html">this
        mail message</a></p>
        <p>Note that there is a perl script for which can automatically
        update parameter files for these changes.</p>
        <p><a
        href="http://www.cactuscode.org/Development/Release/FixParametersForBETA13.pl">FixParametersForBETA13.p</a></p>
        </div>
      </li>
      <li><p><a id="H2">I would like to use checkpointing for a thorn which
        has complex grid arrays. I tried to use the <kbd>IOFlexIO</kbd> thorn
        and received the error: <samp>Unsupported CCTK variable datatype
        10</samp>. Is there a way to checkpoint complex variables?</a></p>

        <div class="ANS">
        <p>Yes there is: use <kbd>IOHDF5</kbd> instead of
        <kbd>IOFlexIO</kbd>. The <kbd>FlexIO</kbd> library doesn't support a
        native complex datatype, and we decided not to add extra logic
        complex numbers in <kbd>IOFlexIO</kbd>. HDF5 does not have this
        limitation, it natively supports all Cactus datatypes.</p>
        </div>
      </li>
    </ol>
    <!-- ====================================================================== -->
  </li>
  <li><h3>Configuration Files</h3>
    <ol type="1">
      <li><p><a id="I1">The size of array parameters is specified by a
        integer number in the param.ccl file. Why can't a parameter itself be
        used here?</a></p>

        <div class="ANS">
        <p>The size of the array has to be fixed at compile time to
        accomodate the use of parameters in Fortran thorns.</p>
        <p>LocalWords:  Absoft fixups endif snprintf libCactusBindings
        lintrins cpp</p>
        </div>
      </li>
    </ol>
  </li>
</ol>
</div>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
