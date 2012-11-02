<?php $title='Cactus-related Projects';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>
<table border='1' cellpadding='5' cellspacing='0'>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>earth_a</td></tr>
<tr><td>DESC</td><td>"Radius of the Earth"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>6378137.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>earth_b</td></tr>
<tr><td>DESC</td><td>"Radius of the Earth"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>6356752.314245</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>xmin</td></tr>
<tr><td>DESC</td><td>"Minimum in x-direction of the window to be read"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>xmax</td></tr>
<tr><td>DESC</td><td>"Maximum in x-direction of the window to be read"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>ymin</td></tr>
<tr><td>DESC</td><td>"Minimum in y-direction of the window to be read"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>ymax</td></tr>
<tr><td>DESC</td><td>"Maximum in y-direction of the window to be read"</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>BOUND</td><td>INF</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>coordinate_units</td></tr>
<tr><td>DESC</td><td>"Units used within mesh file"</td></tr>
<tr><td>PATTERN</td><td>"WGS84"</td></tr>
<tr><td>DEFAULT</td><td>"WGS84"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>spherical_coordinates</td></tr>
<tr><td>DESC</td><td>"Do we want to use spherical coordinates ?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveCoord</td></tr>
<tr><td>NAME</td><td>lat_south</td></tr>
<tr><td>DESC</td><td>"Latitude South"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>180</td></tr>
<tr><td>DEFAULT</td><td>100</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>INTEGER</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>funwave_maxnum_evolvedvars</td></tr>
<tr><td>DESC</td><td>"The maximum number of evolved variables used by Funwave"</td></tr>
<tr><td>BOUND</td><td>3</td></tr>
<tr><td>BOUND</td><td>3</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>INTEGER</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>number_stations</td></tr>
<tr><td>DESC</td><td>"number of stations"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>STRING</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>station_file</td></tr>
<tr><td>DESC</td><td>"list of position of stations"</td></tr>
<tr><td>PATTERN</td><td>.*</td></tr>
<tr><td>DEFAULT</td><td>"station_file.txt"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>periodic</td></tr>
<tr><td>DESC</td><td>"Do we want periodic conditions?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>mixing</td></tr>
<tr><td>DESC</td><td>"Do we want to use mixing?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>gamma1</td></tr>
<tr><td>DESC</td><td>"parameter for linear dispersive terms"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>gamma2</td></tr>
<tr><td>DESC</td><td>"parameter for nonlinear dispersive terms"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>gamma3</td></tr>
<tr><td>DESC</td><td>"parameter for linear shallow water equations"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>beta_ref</td></tr>
<tr><td>DESC</td><td>"parameter beta defined for the reference level"</td></tr>
<tr><td>BOUND</td><td>-0.99</td></tr>
<tr><td>BOUND</td><td>-0.1</td></tr>
<tr><td>DEFAULT</td><td>-0.531</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>cd</td></tr>
<tr><td>DESC</td><td>"bottom friction coefficient"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>swe_eta_dep</td></tr>
<tr><td>DESC</td><td>"ratio of height/depth for switching from Boussinesq to NSWE"</td></tr>
<tr><td>BOUND</td><td>0.1</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>0.7</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>dispersion_on</td></tr>
<tr><td>DESC</td><td>"Do we want to enable dispersion terms ?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>disp_time_left</td></tr>
<tr><td>DESC</td><td>"Do we want to move the time derivate dispersive terms to LHS ?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>enable_masks</td></tr>
<tr><td>DESC</td><td>"Do we want to include mask logic in the simulation?"</td></tr>
<tr><td>DEFAULT</td><td>"yes"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>boundary</td></tr>
<tr><td>DESC</td><td>"boundary condition for the evolved variables"</td></tr>
<tr><td>PATTERN</td><td>"funwave"</td></tr>
<tr><td>DEFAULT</td><td>"funwave"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wavemaker_type</td></tr>
<tr><td>DESC</td><td>"types of wave makers"</td></tr>
<tr><td>PATTERN</td><td>"lef_sol"</td></tr>
<tr><td>DEFAULT</td><td>"wk_reg"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>amp</td></tr>
<tr><td>DESC</td><td>"amplitude (m) of initial eta, if wavemaker = ini_rec, wavemaker = ini_sol, wavemaker = lef_sol, wavemaker = gausian"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>100.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wdep</td></tr>
<tr><td>DESC</td><td>"water depth at wavemaker location, if wavemaker = ini_sol, wavemaker = lef_sol"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 10.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>lagtime</td></tr>
<tr><td>DESC</td><td>"time lag (s) for the solitary wave generated on the left boundary, e.g.,wavemaker = lef_sol"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 10.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>xwavemaker</td></tr>
<tr><td>DESC</td><td>"x (m) coordinate for wavemaker = ini_sol"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 10.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>xc</td></tr>
<tr><td>DESC</td><td>"x (m) coordinate of the center of a rectangular hump if wavemaker = ini_rec"</td></tr>
<tr><td>BOUND</td><td>7</td></tr>
<tr><td>BOUND</td><td>7</td></tr>
<tr><td>DEFAULT</td><td>3.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>yc</td></tr>
<tr><td>DESC</td><td>"y (m) coordinate of the center of a rectangular hump if wavemaker = ini_rec"</td></tr>
<tr><td>BOUND</td><td>7</td></tr>
<tr><td>BOUND</td><td>7</td></tr>
<tr><td>DEFAULT</td><td>3.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wid</td></tr>
<tr><td>DESC</td><td>"width (m) of a rectangular hump if wavemaker = ini_rec or ini_gau"</td></tr>
<tr><td>BOUND</td><td>7</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>time_ramp</td></tr>
<tr><td>DESC</td><td>"time ramp (s) for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>delta_wk</td></tr>
<tr><td>DESC</td><td>"width parameter delta for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.3</td></tr>
<tr><td>BOUND</td><td>0.6</td></tr>
<tr><td>DEFAULT</td><td>0.5</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>dep_wk</td></tr>
<tr><td>DESC</td><td>"water depth (m) for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.45</td></tr>
<tr><td>BOUND</td><td>0.45</td></tr>
<tr><td>DEFAULT</td><td>0.45</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>xc_wk</td></tr>
<tr><td>DESC</td><td>"x coordinate (m) for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>3.0</td></tr>
<tr><td>DEFAULT</td><td>3.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>yc_wk</td></tr>
<tr><td>DESC</td><td>"y coordinate (m) for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>3.0</td></tr>
<tr><td>DEFAULT</td><td>3.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>ywidth_wk</td></tr>
<tr><td>DESC</td><td>"width (m) in y direction for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>BOUND</td><td>10000.0</td></tr>
<tr><td>DEFAULT</td><td>1000.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>tperiod</td></tr>
<tr><td>DESC</td><td>"period (s) of regular wave for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>amp_wk</td></tr>
<tr><td>DESC</td><td>"amplitude (m) of regular wave for Wei and Kirby (1999) wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>theta_wk</td></tr>
<tr><td>DESC</td><td>"direction (degrees) of regular wave for Wei and Kirby (1999) wavemaker. Note: it may be adjusted for a periodic boundary case by the program. A warning will be given if adjustment is made"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>DEFAULT</td><td>0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>freqpeak</td></tr>
<tr><td>DESC</td><td>"peak frequency (1/s) for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>freqmin</td></tr>
<tr><td>DESC</td><td>"low frequency cutoff (1/s) for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 6</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>freqmax</td></tr>
<tr><td>DESC</td><td>"high frequency cutoff (1/s) for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 6</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>hmo</td></tr>
<tr><td>DESC</td><td>"hmo (m) for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>gammatma</td></tr>
<tr><td>DESC</td><td>"TMA parameter gamma for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>thetapeak</td></tr>
<tr><td>DESC</td><td>"peak direction (degrees) for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sigma_theta</td></tr>
<tr><td>DESC</td><td>"parameter of directional spectrum for Wei and Kirby (1999) irregular wavemaker"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 1.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>estimate_dt_on</td></tr>
<tr><td>DESC</td><td>"do you want to turn on the dt estimator ?"</td></tr>
<tr><td>DEFAULT</td><td>"true"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>dt_size</td></tr>
<tr><td>DESC</td><td>"Use zero for adaptive"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>100</td></tr>
<tr><td>DEFAULT</td><td>0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>dtfac</td></tr>
<tr><td>DESC</td><td>"dt factor. should be the same as time::dtfac for consistency"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>*</td></tr>
<tr><td>DEFAULT</td><td>0.5</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>riemann_solver</td></tr>
<tr><td>DESC</td><td>"the riemann_solver"</td></tr>
<tr><td>PATTERN</td><td>"HLLC"</td></tr>
<tr><td>DEFAULT</td><td>"HLLC"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>reconstruction_scheme</td></tr>
<tr><td>DESC</td><td>"the reconstruction scheme"</td></tr>
<tr><td>PATTERN</td><td>"fourth"</td></tr>
<tr><td>DEFAULT</td><td>"fourth"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>cbrk1</td></tr>
<tr><td>DESC</td><td>"parameter C1 in Kennedy et al. (2000)"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>0.65</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>cbrk2</td></tr>
<tr><td>DESC</td><td>"parameter C2 in Kennedy et al. (2000)"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>0.35</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_on</td></tr>
<tr><td>DESC</td><td>"Do we want to enable sponge layer ?"</td></tr>
<tr><td>DEFAULT</td><td>"yes"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_decay_rate</td></tr>
<tr><td>DESC</td><td>"decay rate in in sponge layer, r_sponge in Funwave"</td></tr>
<tr><td>BOUND</td><td>0.85</td></tr>
<tr><td>BOUND</td><td>0.95</td></tr>
<tr><td>DEFAULT</td><td>0.9</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_damping_magnitude</td></tr>
<tr><td>DESC</td><td>"maximum damping magnitude, a_sponge in Funwave"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>100.0</td></tr>
<tr><td>DEFAULT</td><td>5.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_east_width</td></tr>
<tr><td>DESC</td><td>"width of sponge layer at east boundary"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_south_width</td></tr>
<tr><td>DESC</td><td>"width of sponge layer at south boundary"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_west_width</td></tr>
<tr><td>DESC</td><td>"width of sponge layer at west boundary"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>sponge_north_width</td></tr>
<tr><td>DESC</td><td>"width of sponge layer at north boundary"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>initial_data</td></tr>
<tr><td>DESC</td><td>"initial condition"</td></tr>
<tr><td>PATTERN</td><td>"gausian"</td></tr>
<tr><td>DEFAULT</td><td>"gausian"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_type</td></tr>
<tr><td>DESC</td><td>"how to intialized depth ?"</td></tr>
<tr><td>PATTERN</td><td>"flat"</td></tr>
<tr><td>DEFAULT</td><td>"flat"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>STRING</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_file</td></tr>
<tr><td>DESC</td><td>"bathymetry file if depth_type==data"</td></tr>
<tr><td>PATTERN</td><td>.*</td></tr>
<tr><td>DEFAULT</td><td>"depth_file.txt"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>INTEGER</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_file_offset_x</td></tr>
<tr><td>DESC</td><td>"X position of start of depth file"</td></tr>
<tr><td>BOUND</td><td>-100</td></tr>
<tr><td>BOUND</td><td>100</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>INTEGER</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_file_offset_y</td></tr>
<tr><td>DESC</td><td>"Y position of start of depth file"</td></tr>
<tr><td>BOUND</td><td>-100</td></tr>
<tr><td>BOUND</td><td>100</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_format</td></tr>
<tr><td>DESC</td><td>"what is the format of the depth file ?"</td></tr>
<tr><td>PATTERN</td><td>"nod"</td></tr>
<tr><td>DEFAULT</td><td>"ele"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_flat</td></tr>
<tr><td>DESC</td><td>"water depth of flat bottom"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>4</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_xslp</td></tr>
<tr><td>DESC</td><td>"starting x position of a slope"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>3</td></tr>
<tr><td>DEFAULT</td><td>2</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>depth_slope</td></tr>
<tr><td>DESC</td><td>"slope if depth_type==slope"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>10.0</td></tr>
<tr><td>DEFAULT</td><td>2</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>r_earth</td></tr>
<tr><td>DESC</td><td>"Earth radius"</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>DEFAULT</td><td>6</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>grav</td></tr>
<tr><td>DESC</td><td>"Earth gravity acceleration"</td></tr>
<tr><td>BOUND</td><td>9.780</td></tr>
<tr><td>BOUND</td><td>9.832</td></tr>
<tr><td>DEFAULT</td><td>9.810</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>small</td></tr>
<tr><td>DESC</td><td>"the number that we consider small in the code"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>5</td></tr>
<tr><td>DEFAULT</td><td>6</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>large</td></tr>
<tr><td>DESC</td><td>"the number that we consider large in the code"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>10</td></tr>
<tr><td>DEFAULT</td><td>5</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>froudecap</td></tr>
<tr><td>DESC</td><td>"the maxium Froude number "</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>BOUND</td><td>100.0</td></tr>
<tr><td>DEFAULT</td><td>10.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>mindepth</td></tr>
<tr><td>DESC</td><td>"the minimum water depth for wettting and drying scheme"</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>BOUND</td><td>0.1</td></tr>
<tr><td>DEFAULT</td><td>3</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>mindepthfrc</td></tr>
<tr><td>DESC</td><td>"the minimum water depth to limit bottom frition value"</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>DEFAULT</td><td>2</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>stretch_grid</td></tr>
<tr><td>DESC</td><td>"Whether stretch grid is enabled"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wind_crest_percent</td></tr>
<tr><td>DESC</td><td>"percentage of wind crest for wind mask"</td></tr>
<tr><td>BOUND</td><td>0.0</td></tr>
<tr><td>BOUND</td><td>100.0</td></tr>
<tr><td>DEFAULT</td><td>10</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>INTEGER</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>num_time_wind_data</td></tr>
<tr><td>DESC</td><td>"Time sequence data for wind"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>100</td></tr>
<tr><td>DEFAULT</td><td>0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>timewind</td></tr>
<tr><td>DESC</td><td>100</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>DEFAULT</td><td>0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wu</td></tr>
<tr><td>DESC</td><td>100</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>DEFAULT</td><td>0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wv</td></tr>
<tr><td>DESC</td><td>100</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>BOUND</td><td>6</td></tr>
<tr><td>DEFAULT</td><td>0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>wind_force</td></tr>
<tr><td>DESC</td><td>"Whether to use wind force"</td></tr>
<tr><td>DEFAULT</td><td>"false"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>cdw</td></tr>
<tr><td>DESC</td><td>"CDW is what?"</td></tr>
<tr><td>BOUND</td><td>0</td></tr>
<tr><td>BOUND</td><td>1</td></tr>
<tr><td>DEFAULT</td><td>.0026</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>use_wind_mask</td></tr>
<tr><td>DESC</td><td>"Whether to apply the wind mask"</td></tr>
<tr><td>DEFAULT</td><td>"false"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>show_breaking</td></tr>
<tr><td>DESC</td><td>"Whether to show breaking waves"</td></tr>
<tr><td>DEFAULT</td><td>"false"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>drain_center_x</td></tr>
<tr><td>DESC</td><td>"Center of the drain in x"</td></tr>
<tr><td>BOUND</td><td>UPPER BOUND:</td></tr>
<tr><td>DEFAULT</td><td>15.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>drain_center_y</td></tr>
<tr><td>DESC</td><td>"Center of the drain in y"</td></tr>
<tr><td>BOUND</td><td>UPPER BOUND:</td></tr>
<tr><td>DEFAULT</td><td>15.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>drain_radius</td></tr>
<tr><td>DESC</td><td>"Radius of the draining region"</td></tr>
<tr><td>BOUND</td><td>UPPER BOUND:</td></tr>
<tr><td>DEFAULT</td><td>5.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>drain_rate</td></tr>
<tr><td>DESC</td><td>"Negative removes water, positive adds"</td></tr>
<tr><td>BOUND</td><td>UPPER BOUND:</td></tr>
<tr><td>DEFAULT</td><td>0.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>Funwave</td></tr>
<tr><td>NAME</td><td>use_correct_dispersion</td></tr>
<tr><td>DESC</td><td>"Use the correct dispersion term"</td></tr>
<tr><td>DEFAULT</td><td>"dispersion"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveMesh</td></tr>
<tr><td>NAME</td><td>search_range</td></tr>
<tr><td>DESC</td><td>"What is the spatial range for searching the cell that the interested grid point is located ?"</td></tr>
<tr><td>BOUND</td><td>0.0001</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 0.1</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>KEYWORD</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveMesh</td></tr>
<tr><td>NAME</td><td>interp_algorithm</td></tr>
<tr><td>DESC</td><td>"Algorithm used in the interpolation"</td></tr>
<tr><td>PATTERN</td><td>"average"</td></tr>
<tr><td>DEFAULT</td><td>"invdist"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>REAL</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveMesh</td></tr>
<tr><td>NAME</td><td>invdist_power</td></tr>
<tr><td>DESC</td><td>"Power parameter used in inverse distance weighted interpolation"</td></tr>
<tr><td>BOUND</td><td>1.0</td></tr>
<tr><td>BOUND</td><td>DEFAULT: 2.0</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveMesh</td></tr>
<tr><td>NAME</td><td>verbose</td></tr>
<tr><td>DESC</td><td>"Do you want to see more debugging information ?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>TYPE</td><td>BOOLEAN</td></tr>
<tr><td>ARRANGEMENT</td><td>CactusCoastal</td></tr>
<tr><td>THORN</td><td>FunwaveMesh</td></tr>
<tr><td>NAME</td><td>veryverbose</td></tr>
<tr><td>DESC</td><td>"Do you want to see all the debugging information ?"</td></tr>
<tr><td>DEFAULT</td><td>"no"</td></tr>
</table>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
