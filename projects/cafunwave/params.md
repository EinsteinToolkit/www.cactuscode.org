---
layout: default
title: Cactus-related Projects
---
 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

earth\_a

DESC

\"Radius of the Earth\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

6378137.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

earth\_b

DESC

\"Radius of the Earth\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

6356752.314245

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

xmin

DESC

\"Minimum in x-direction of the window to be read\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

xmax

DESC

\"Maximum in x-direction of the window to be read\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

ymin

DESC

\"Minimum in y-direction of the window to be read\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

ymax

DESC

\"Maximum in y-direction of the window to be read\"

LOWER BOUND

\*

UPPER BOUND

\*

DEFAULT

1.0

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

coordinate\_units

DESC

\"Units used within mesh file\"

PATTERN

\"WGS84\"

DEFAULT

\"WGS84\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

spherical\_coordinates

DESC

\"Do we want to use spherical coordinates ?\"

DEFAULT

\"no\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveCoord

NAME

lat\_south

DESC

\"Latitude South\"

LOWER BOUND

0

UPPER BOUND

180

DEFAULT

100

 

TYPE

INTEGER

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

funwave\_maxnum\_evolvedvars

DESC

\"The maximum number of evolved variables used by Funwave\"

LOWER BOUND

3

UPPER BOUND

3

DEFAULT

3

 

TYPE

INTEGER

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

number\_stations

DESC

\"number of stations\"

LOWER BOUND

0

UPPER BOUND

DEFAULT: 0

 

TYPE

STRING

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

station\_file

DESC

\"list of position of stations\"

PATTERN

.\*

DEFAULT

\"station\_file.txt\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

periodic

DESC

\"Do we want periodic conditions?\"

DEFAULT

\"no\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

mixing

DESC

\"Do we want to use mixing?\"

DEFAULT

\"no\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

gamma1

DESC

\"parameter for linear dispersive terms\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

gamma2

DESC

\"parameter for nonlinear dispersive terms\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

gamma3

DESC

\"parameter for linear shallow water equations\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

beta\_ref

DESC

\"parameter beta defined for the reference level\"

LOWER BOUND

-0.99

UPPER BOUND

-0.1

DEFAULT

-0.531

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

cd

DESC

\"bottom friction coefficient\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

3

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

swe\_eta\_dep

DESC

\"ratio of height/depth for switching from Boussinesq to NSWE\"

LOWER BOUND

0.1

UPPER BOUND

1.0

DEFAULT

0.7

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

dispersion\_on

DESC

\"Do we want to enable dispersion terms ?\"

DEFAULT

\"no\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

disp\_time\_left

DESC

\"Do we want to move the time derivate dispersive terms to LHS ?\"

DEFAULT

\"no\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

enable\_masks

DESC

\"Do we want to include mask logic in the simulation?\"

DEFAULT

\"yes\"

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

boundary

DESC

\"boundary condition for the evolved variables\"

PATTERN

\"funwave\"

DEFAULT

\"funwave\"

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wavemaker\_type

DESC

\"types of wave makers\"

PATTERN

\"lef\_sol\"

DEFAULT

\"wk\_reg\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

amp

DESC

\"amplitude (m) of initial eta, if wavemaker = ini\_rec, wavemaker =
ini\_sol, wavemaker = lef\_sol, wavemaker = gausian\"

LOWER BOUND

0.0

UPPER BOUND

100.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wdep

DESC

\"water depth at wavemaker location, if wavemaker = ini\_sol, wavemaker
= lef\_sol\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 10.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

lagtime

DESC

\"time lag (s) for the solitary wave generated on the left boundary,
e.g.,wavemaker = lef\_sol\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 10.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

xwavemaker

DESC

\"x (m) coordinate for wavemaker = ini\_sol\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 10.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

xc

DESC

\"x (m) coordinate of the center of a rectangular hump if wavemaker =
ini\_rec\"

LOWER BOUND

7

UPPER BOUND

7

DEFAULT

3.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

yc

DESC

\"y (m) coordinate of the center of a rectangular hump if wavemaker =
ini\_rec\"

LOWER BOUND

7

UPPER BOUND

7

DEFAULT

3.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wid

DESC

\"width (m) of a rectangular hump if wavemaker = ini\_rec or ini\_gau\"

LOWER BOUND

7

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

time\_ramp

DESC

\"time ramp (s) for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

1.0

UPPER BOUND

1.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

delta\_wk

DESC

\"width parameter delta for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

0.3

UPPER BOUND

0.6

DEFAULT

0.5

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

dep\_wk

DESC

\"water depth (m) for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

0.45

UPPER BOUND

0.45

DEFAULT

0.45

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

xc\_wk

DESC

\"x coordinate (m) for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

3.0

DEFAULT

3.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

yc\_wk

DESC

\"y coordinate (m) for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

3.0

DEFAULT

3.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

ywidth\_wk

DESC

\"width (m) in y direction for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

1.0

UPPER BOUND

10000.0

DEFAULT

1000.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

tperiod

DESC

\"period (s) of regular wave for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

1.0

UPPER BOUND

1.0

DEFAULT

1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

amp\_wk

DESC

\"amplitude (m) of regular wave for Wei and Kirby (1999) wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

theta\_wk

DESC

\"direction (degrees) of regular wave for Wei and Kirby (1999)
wavemaker. Note: it may be adjusted for a periodic boundary case by the
program. A warning will be given if adjustment is made\"

LOWER BOUND

0.0

UPPER BOUND

0.0

DEFAULT

0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

freqpeak

DESC

\"peak frequency (1/s) for Wei and Kirby (1999) irregular wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

freqmin

DESC

\"low frequency cutoff (1/s) for Wei and Kirby (1999) irregular
wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 6

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

freqmax

DESC

\"high frequency cutoff (1/s) for Wei and Kirby (1999) irregular
wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 6

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

hmo

DESC

\"hmo (m) for Wei and Kirby (1999) irregular wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

gammatma

DESC

\"TMA parameter gamma for Wei and Kirby (1999) irregular wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

thetapeak

DESC

\"peak direction (degrees) for Wei and Kirby (1999) irregular
wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sigma\_theta

DESC

\"parameter of directional spectrum for Wei and Kirby (1999) irregular
wavemaker\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 1.0

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

estimate\_dt\_on

DESC

\"do you want to turn on the dt estimator ?\"

DEFAULT

\"true\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

dt\_size

DESC

\"Use zero for adaptive\"

LOWER BOUND

0

UPPER BOUND

100

DEFAULT

0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

dtfac

DESC

\"dt factor. should be the same as time::dtfac for consistency\"

LOWER BOUND

0

UPPER BOUND

\*

DEFAULT

0.5

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

riemann\_solver

DESC

\"the riemann\_solver\"

PATTERN

\"HLLC\"

DEFAULT

\"HLLC\"

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

reconstruction\_scheme

DESC

\"the reconstruction scheme\"

PATTERN

\"fourth\"

DEFAULT

\"fourth\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

cbrk1

DESC

\"parameter C1 in Kennedy et al. (2000)\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

0.65

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

cbrk2

DESC

\"parameter C2 in Kennedy et al. (2000)\"

LOWER BOUND

0.0

UPPER BOUND

1.0

DEFAULT

0.35

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_on

DESC

\"Do we want to enable sponge layer ?\"

DEFAULT

\"yes\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_decay\_rate

DESC

\"decay rate in in sponge layer, r\_sponge in Funwave\"

LOWER BOUND

0.85

UPPER BOUND

0.95

DEFAULT

0.9

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_damping\_magnitude

DESC

\"maximum damping magnitude, a\_sponge in Funwave\"

LOWER BOUND

0.0

UPPER BOUND

100.0

DEFAULT

5.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_east\_width

DESC

\"width of sponge layer at east boundary\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_south\_width

DESC

\"width of sponge layer at south boundary\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_west\_width

DESC

\"width of sponge layer at west boundary\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 0.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

sponge\_north\_width

DESC

\"width of sponge layer at north boundary\"

LOWER BOUND

0.0

UPPER BOUND

DEFAULT: 0.0

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

initial\_data

DESC

\"initial condition\"

PATTERN

\"gausian\"

DEFAULT

\"gausian\"

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_type

DESC

\"how to intialized depth ?\"

PATTERN

\"flat\"

DEFAULT

\"flat\"

 

TYPE

STRING

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_file

DESC

\"bathymetry file if depth\_type==data\"

PATTERN

.\*

DEFAULT

\"depth\_file.txt\"

 

TYPE

INTEGER

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_file\_offset\_x

DESC

\"X position of start of depth file\"

LOWER BOUND

-100

UPPER BOUND

100

DEFAULT

3

 

TYPE

INTEGER

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_file\_offset\_y

DESC

\"Y position of start of depth file\"

LOWER BOUND

-100

UPPER BOUND

100

DEFAULT

3

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_format

DESC

\"what is the format of the depth file ?\"

PATTERN

\"nod\"

DEFAULT

\"ele\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_flat

DESC

\"water depth of flat bottom\"

LOWER BOUND

0.0

UPPER BOUND

4

DEFAULT

3

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_xslp

DESC

\"starting x position of a slope\"

LOWER BOUND

0.0

UPPER BOUND

3

DEFAULT

2

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

depth\_slope

DESC

\"slope if depth\_type==slope\"

LOWER BOUND

0.0

UPPER BOUND

10.0

DEFAULT

2

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

r\_earth

DESC

\"Earth radius\"

LOWER BOUND

6

UPPER BOUND

6

DEFAULT

6

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

grav

DESC

\"Earth gravity acceleration\"

LOWER BOUND

9.780

UPPER BOUND

9.832

DEFAULT

9.810

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

small

DESC

\"the number that we consider small in the code\"

LOWER BOUND

0.0

UPPER BOUND

5

DEFAULT

6

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

large

DESC

\"the number that we consider large in the code\"

LOWER BOUND

0.0

UPPER BOUND

10

DEFAULT

5

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

froudecap

DESC

\"the maxium Froude number \"

LOWER BOUND

1.0

UPPER BOUND

100.0

DEFAULT

10.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

mindepth

DESC

\"the minimum water depth for wettting and drying scheme\"

LOWER BOUND

6

UPPER BOUND

0.1

DEFAULT

3

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

mindepthfrc

DESC

\"the minimum water depth to limit bottom frition value\"

LOWER BOUND

6

UPPER BOUND

1.0

DEFAULT

2

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

stretch\_grid

DESC

\"Whether stretch grid is enabled\"

DEFAULT

\"no\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wind\_crest\_percent

DESC

\"percentage of wind crest for wind mask\"

LOWER BOUND

0.0

UPPER BOUND

100.0

DEFAULT

10

 

TYPE

INTEGER

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

num\_time\_wind\_data

DESC

\"Time sequence data for wind\"

LOWER BOUND

0

UPPER BOUND

100

DEFAULT

0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

timewind

DESC

100

LOWER BOUND

0

UPPER BOUND

6

DEFAULT

0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wu

DESC

100

LOWER BOUND

6

UPPER BOUND

6

DEFAULT

0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wv

DESC

100

LOWER BOUND

6

UPPER BOUND

6

DEFAULT

0

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

wind\_force

DESC

\"Whether to use wind force\"

DEFAULT

\"false\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

cdw

DESC

\"CDW is what?\"

LOWER BOUND

0

UPPER BOUND

1

DEFAULT

.0026

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

use\_wind\_mask

DESC

\"Whether to apply the wind mask\"

DEFAULT

\"false\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

show\_breaking

DESC

\"Whether to show breaking waves\"

DEFAULT

\"false\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

drain\_center\_x

DESC

\"Center of the drain in x\"

LOWER BOUND

UPPER BOUND:

DEFAULT

15.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

drain\_center\_y

DESC

\"Center of the drain in y\"

LOWER BOUND

UPPER BOUND:

DEFAULT

15.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

drain\_radius

DESC

\"Radius of the draining region\"

LOWER BOUND

UPPER BOUND:

DEFAULT

5.0

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

drain\_rate

DESC

\"Negative removes water, positive adds\"

LOWER BOUND

UPPER BOUND:

DEFAULT

0.0

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

Funwave

NAME

use\_correct\_dispersion

DESC

\"Use the correct dispersion term\"

DEFAULT

\"dispersion\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveMesh

NAME

search\_range

DESC

\"What is the spatial range for searching the cell that the interested
grid point is located ?\"

LOWER BOUND

0.0001

UPPER BOUND

DEFAULT: 0.1

 

TYPE

KEYWORD

ARRANGEMENT

CactusCoastal

THORN

FunwaveMesh

NAME

interp\_algorithm

DESC

\"Algorithm used in the interpolation\"

PATTERN

\"average\"

DEFAULT

\"invdist\"

 

TYPE

REAL

ARRANGEMENT

CactusCoastal

THORN

FunwaveMesh

NAME

invdist\_power

DESC

\"Power parameter used in inverse distance weighted interpolation\"

LOWER BOUND

1.0

UPPER BOUND

DEFAULT: 2.0

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

FunwaveMesh

NAME

verbose

DESC

\"Do you want to see more debugging information ?\"

DEFAULT

\"no\"

 

TYPE

BOOLEAN

ARRANGEMENT

CactusCoastal

THORN

FunwaveMesh

NAME

veryverbose

DESC

\"Do you want to see all the debugging information ?\"

DEFAULT

\"no\"
