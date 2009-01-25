<?php $title='WaveToy Demo';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<table cellpadding=10>
      <tr>

	<td>

      <p>
        Connect to our <a href="http://www.cactuscode.org:5555/">Cactus demo</a> to see the simple WaveToy example in action.
      </p>

	  <h2>Setting up the WaveToy Demo</h2>

	  <p>
	    On this page we describe one of our standard demonstrations, which includes various tools which can be used with your own application, including
	  </p>
	  <ul>
            <li> Compiling and running a simple Cactus application
	    <li> Remote monitoring and steering of an application from any web browser
	    <li> Streaming of isosurfaces from a simulation, which can then be viewed on a local machine
	    <li> Remote visualization of 2D slices from any grid function in a simulation as jpegs in a web browser
	  </ul>

	  <p>
	    This is a good example for you to try out yourself if you are trying out Cactus for the first time, or haven't used some of these tools before. Note that you only need a C compiler for this, and about 50MB of free diskspace.
	  </p>

	  <p>
	    The application we are using is the simulation of the 3D scalar field produced by two orbiting sources. The solution is found by finite differencing a hyperbolic partial differential equation for the scalar field.  This is a very simple application, however it is representative of a large class of more complex systems, including Einstein's Equations, Maxwell's Equations, or the Navier-Stokes Equations. We use it for demonstrations since the simulation is not computationally intensive, is very robust, has simple parameter choices, and has reasonable graphics.
	  </p>
	    
	  <p>
	    We are not going to describe completely here how to checkout and compile this Cactus application ... for this see the information on the <a href="/download/">Download</a>

	    page, the <a href="/documentation/tutorials/">HOWTOs</a>
	    or the 
	    <a href="/documentation/guides/">Users  Guide</a>. We assume that you are checking out Cactus using CVS, and that you know the configuration line needed, or have a configuration file, for compiling Cactus --- but even if you don't have a go, hopefully the default configuration will work for you!
	  </p>

	  <h2>Demo with Web Server and Streaming IsoSurfaces</h2>

<!-- Add cactusdev links here -->
	  Before you start, make sure you have the following items:
	  <ul>

	    <li> <a href="/download/GetCactus">GetCactus</a> the perl script for easily checking a Cactus application out from our CVS server.
	    <li> <a href="WaveDemo.th">WaveDemo.th</a> the ThornList for the demo, this is used to tell GetCactus which thorns to get. 
	    <li> <a href="WaveDemo.par">WaveDemo.par</a>
a parameter file for running the demonstration.
	    <li> <a href="/documentation/guides/visualization/IsoView">IsoView</a> the isosurface visualization client. 
	    <li> A web browser.
	    <li> Note that you'll need a live network connection to checkout the code, but you can run the demo on a single machine, the remote tools will look more impressive though if you use two networked machines, preferably a long way apart.
	  </ul>

	  <h3>Check out and compile</h3>
	  
	  <p>

	    Checkout the source code using the GetCactus script. Make sure to include the WaveToy thornlist so that all necessary thorns are also downloaded.
	  </p>
	  <tt>
	  <pre>
chmod u+x GetCactus
./GetCactus WaveDemo.th</pre>
	  </tt>
	  <p>
	    You should be able to use the default answers for all the questions.
	  </p>

	  <p>
	    Once the checkout has completed, move into the Cactus directory and compile the application.
	  </p>
	  <tt>
	  <pre>
cd Cactus
gmake WaveDemo-config
gmake WaveDemo</pre>
	  </tt>
	
	  <p>
	    Hopefully that went OK, and you now have an executable, <tt>exe/cactus_WaveDemo</tt>. Check it really worked by running the testsuites, just type
	  </p>

	  <tt>
	  <pre>
gmake WaveDemo-testsuite</pre>
	  </tt>
	  <p>
	    and use the default answers to each question.
	  </p>
	  
	  <h3>
	    Run the demo
	  </h3>

	  <p>
	    Move the downloaded demo parameter file into the Cactus directory.  To start the simulation, run your new executable with the demo parameter file, if you have a single processor executable 
	  </p>
	    <tt>
	      <pre>
mv ../WaveDemo.par .
./exe/cactus_WaveDemo WaveDemo.par</pre>
   	   </tt>
	  <p>
	    If you compiled with MPI and have a multiprocessor version, you will need to use the appropriate mpi command for running.
	  </p>

	  <p>
	    When the simulation starts, you will see output describing for example the activated thorns and the scheduling tree.
	  </p>

	  <font size=-1>
	  <tt>
	    <pre>
tg-c305 dstark/Cactus> ./exe/cactus_WaveDemo parfiles/WaveDemo.par 
--------------------------------------------------------------------------------

       10                                  
  1   0101       ************************  
  01  1010 10      The Cactus Code V4.0    
 1010 1101 011      www.cactuscode.org     
  1001 100101    ************************  
    00010101                               
     100011     (c) Copyright The Authors  
      0100      GNU Licensed. No Warranty  
      0101                                 

--------------------------------------------------------------------------------

Cactus version: 4.0.b15
Compile date:   Nov 19 2004 (08:52:01)
Run date:       Nov 19 2004 (08:54:30)
Run host:       tg-c305.ncsa.teragrid.org
Executable:     /home/ac/dstark/Cactus/./exe/cactus_WaveDemo
Parameter file: parfiles/WaveDemo.par
--------------------------------------------------------------------------------

Activating thorn Cactus...Success -> active implementation Cactus
Activation requested for 
--->coordbase symbase pugh pughslab pughreduce isosurfacer iojpeg jpeg6b ioutil
ioascii iobasic time wavetoyc cartgrid3d boundary idscalarwavec wavebinarysource 
httpd httpdextra socket<---
Activating thorn boundary...Success -> active implementation boundary
Activating thorn cartgrid3d...Success -> active implementation grid
Activating thorn coordbase...Success -> active implementation CoordBase
Activating thorn httpd...Success -> active implementation HTTPD
Activating thorn httpdextra...Success -> active implementation http_utils

  . . .

Activating thorn wavebinarysource...Success -> active implementation binarysource
Activating thorn wavetoyc...Success -> active implementation wavetoy
--------------------------------------------------------------------------------
  if (recover initial data)
    Recover parameters
  endif

  Startup routines
    [CCTK_STARTUP]
    CartGrid3D: Register GH Extension for GridSymmetry
    CoordBase: Register a GH extension to store the coordinate system handles
    GROUP HTTP_Startup: HTTP daemon startup group
      HTTPD: Start HTTP server
      GROUP HTTP_SetupPages: Group to setup stuff which needs to be done
          between starting the server and the first time it serves pages
      HTTPD: Serve first pages at startup
    HTTPDExtra: Utils for httpd startup
    PUGH: Startup routine
    IOUtil: Startup routine
    IOJpeg: Startup routine
    IOASCII: Startup routine
    IsoSurfacer: Startup routine
    IOBasic: Startup routine
    PUGHReduce: Startup routine
    SymBase: Register GH Extension for SymBase
    WaveToyC: Register banner

  . . .

  Termination routines
    [CCTK_TERMINATE]
    IsoSurfacer: Termination routine
    PUGH: Termination routine

  Shutdown routines
    [CCTK_SHUTDOWN]
    HTTPD: HTTP daemon shutdown

  Routines run after restricting:
    [CCTK_POSTRESTRICT]
    WaveToyC: Boundaries of 3D wave equation
    GROUP WaveToyC_ApplyBCs: Apply boundary conditions
      GROUP BoundaryConditions: Execute all boundary conditions
        Boundary: Apply all requested local physical boundary conditions
        CartGrid3D: Apply symmetry boundary conditions
      Boundary: Unselect all grid variables for boundary conditions

  Routines run after changing the grid hierarchy:
    [CCTK_POSTREGRID]
    CartGrid3D: Set Coordinates after regridding
--------------------------------------------------------------------------------
Server started on http://tg-c305.ncsa.teragrid.org:5555/
INFO (what): PUGHReduce
--------------------------------------------------------------------------------
Driver provided by PUGH
--------------------------------------------------------------------------------
WaveToyC: Evolutions of a Scalar Field
--------------------------------------------------------------------------------

INFO (IOJpeg): I/O Method 'IOJpeg' registered: output of 2D jpeg images 
               of grid functions/arrays
INFO (IOJpeg): Periodic IOJpeg output every 10 iterations
INFO (IOJpeg): Periodic IOJpeg output requested for 'WAVETOY::phi'
INFO (IOASCII): I/O Method 'IOASCII_1D' registered: output of 1D lines of 
                grid functions/arrays to ASCII files
INFO (IOASCII): Periodic 1D output every 10 iterations
INFO (IOASCII): Periodic 1D output requested for 'WAVETOY::phi'

  . . .

INFO (IsoSurfacer): Isosurfacer listening for connections
     host 'tg-c305.ncsa.teragrid.org' control port 7050 data port 7051

  . . .

INFO (PUGH):   Local load: 64000   [40 x 40 x 40]
INFO (PUGH):   Maximum load skew: 100.000000
INFO (Time): Timestep set to 0.00649351 (courant_static)
INFO (IOBasic): Periodic scalar output requested for 'WAVETOY::phi'
INFO (IOBasic): Periodic info output requested for 'WAVETOY::phi'
-------------------------------------------------
   it  |          | WAVETOY::phi                |
       |    t     | minimum      | maximum      |
-------------------------------------------------
     0 |    0.000 | 5.148200e-131 |   0.95066004 |
    10 |    0.065 |-1.319022e-33 |   0.98026627 |
    20 |    0.130 |  -0.30418278 |   1.40297645 |
    30 |    0.195 |-9.120612e-23 |   1.53352239 |
    40 |    0.260 |-4.980518e-19 |   1.76419451 |
    50 |    0.325 |-5.650478e-16 |   2.06547404 |
    60 |    0.390 |-5.221892e-13 |   2.20300711 |
    70 |    0.455 |-3.124912e-10 |   2.39674767 |
    80 |    0.519 |-9.294138e-09 |   2.38699930 |
    90 |    0.584 |  -0.00000002 |   2.38045481 |
   100 |    0.649 |-9.382595e-09 |   2.37422575 |

  . . .</pre>
     </tt>

	</font>

	  <p>
	    If you have the simple visualization client <tt>xgraph</tt> installed, you can look at the 1D output
	  </p>
	  <tt>
	    <pre>
xgraph WaveDemo/phi_x_[20][20].xg</pre>

	</tt>

	  <center>
	    <img src="xgraph.gif" width="500" />
	  </center>

	  <h3>Connecting with a web browser</h3>
	  
	  <p>
	    To connect to the simulation, move to another machine if you have one, and start up a web browser. Connect to 
	  </p>

	    <tt>
	      <pre>
http://&lt;machine name&gt;:5555</pre>
   	   </tt> where <tt>&lt;machine name&gt;:5555</tt> is the name of the machine where the simulation is running. Note that this information was part of the standard output when the simulation started for example
	  <tt>

	    <pre>
Server started on http://tg-c305.ncsa.teragrid.org:5555/</pre>
	  </tt>
	  <p>
	    Now you should see a screen with information about the simulation.
	  </p>

	  <center>
	    <img src="http1.jpg" width="400" />
	  </center>

	  <p>
	    Click through the links to find information about the thorns, parameters and variables you are using.
	    Go to the ViewPort and see Jpeg images from the simulation, if you press the refresh/reload button on your browser these will update (you may need to press e.g. the shift button as well depending on your browser and option settings), go to the Files page and see some of the output files that are being created. (If you have xgraph installed on your machine you can set up your browser to automatically view these when you click on them, see the <a href="/Documentation/WebBrowser-HOWTO">WebBrowser-HOWTO</a> for more 
	    details).
	  </p>

	  <center>
	    <img src="http2.jpg" width="400" />
	  </center>

	  <h3>Viewing IsoSurfaces</h3>

	  <p>
	    Start up the IsoView client, using
	  </p>
	  <tt>
	    <pre>

IsoView -h &lt;machine name&gt; -dp 7051 -cp 7050</pre>
	  </tt>
	  <p>
	    Again, this information can be found in the standard output, for example
	  </p>
	  <font size=-1>
	  <tt>
	    <pre>

INFO (IsoSurfacer): Isosurfacer listening for connections
                   host 'GridRebels-MacBook-Pro.local' control port 7050 data port 7051</pre>
	  </tt>
	  </font>
	  <p>
	    You should now see rotating blobs appearing in the client, looking something like this
	  </p>

	  <center>
	    <img src="iso1.gif" />
	  </center>

	  <p>
	    Now if you move the <tt>val</tt> slider, the value of the isosurface you see will change. Also, if you move the cursor in the main window, holding down the left, middle and right mouse buttons, the surface will rotate, translate and zoom.
	  </p>

	  <h3>Steering the Simulation</h3>

	  <p>
	    The web interface can also be used to control the simulation and to steer parameter values. Click on the Cactus Control link in the menu, and enter the user id anon and password anon (you can set these to be different values in the parameter file).
	    Now you can pause, run or kill the simulation using the top buttons. If you are using the IsoView client press pause and see the blobs stop rotating/
	  </p>

	  <center>
	    <img border=2 src="http3.jpg" />
	  </center>

	  <p>
	    The buttons at the bottom allow you to pause the simulation at a given iteration number, or a given time, or when a condition is true. This is just a first version of a control interface, we hope it will become much more powerful, including many interactive debugging and collaborative tools.
	  </p>

	  <center>
	    <img border=2 src="http4.jpg" />

	  </center>

	  <p>
	    To steer simulation parameters, select Parameters from the menu, and then WaveBinarySource. We will change the parameter <tt>binary_radius</tt>, which sets the distance between the orbiting sources. Note that the parameters are divided into two sections, depending on whether they are steerable or not. This is decided by the thorn author.
	  </p>

	  <center>
	    <img border=2 src="http5.jpg" />
	  </center>

	  <p>
	    Note that if you click on the parameter name you get all the known information about that parameter.
	  </p>

	  <center>
	    <img border=2 src="http6.jpg" width="400" />
	  </center>
	  
	  <p>
	    Steer the parameter by changing the value in the box to zero, and pressing the update button. If you are watching the isosurfaces you should see the blobs move together. This can take a short while, since the isosurfaces are of the field and not the sources, and the field takes time to catch up.
	  </p>

	  <center>
	    <img src="iso2.gif" />
	  </center>

	</td>
      </tr>
    </table>


<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>