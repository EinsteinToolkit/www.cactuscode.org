---
layout: default
title: Welcome
sitemap_exclude: true
---
{% include base.html %}
Cactus is an open source problem solving environment designed for
scientists and engineers. Its modular structure easily enables parallel
computation across different architectures and collaborative code
development between different groups. Cactus originated in the academic
research community, where it was developed and used over many years by a
large international collaboration of physicists and computational
scientists.

The name Cactus comes from the design of a central core ("flesh") which
connects to application modules ("thorns") through an extensible
interface. Thorns can implement custom developed scientific or
engineering applications, such as computational fluid dynamics. Other
thorns from a standard computational toolkit provide a range of
computational capabilities, such as parallel I/O, data distribution, or
checkpointing.

Cactus runs on many architectures. Applications, developed on standard
workstations or laptops, can be seamlessly run on clusters or
supercomputers. Cactus provides easy access to many cutting edge
software technologies being developed in the academic research
community, including the [Globus](https://www.globus.org/) Metacomputing
Toolkit, [HDF5](https://www.hdfgroup.org/solutions/hdf5/) parallel file I/O,
the
[PETSc](https://www.mcs.anl.gov/petsc/) scientific library, [adaptive
mesh refinement](https://bitbucket.org/eschnett/carpet.git), web interfaces,
and advanced visualization tools.

The Cactus user community has created and is maintaining toolkits for
several research fields. The [Einstein
Toolkit](http://einsteintoolkit.org/) addresses computational
relativistic astrophysics, supporting simulations of black holes,
neutron stars, and related systems.

See the simple WaveToy example in action, and read the [demo
guide]({{base}}/documentation/tutorials/wavetoydemo/index.html).
