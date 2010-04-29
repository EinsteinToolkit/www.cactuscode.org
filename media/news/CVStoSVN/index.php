<?php $title='Cactus moves from CVS to Subversion';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
In April 2010 several organization changes were made for the distribution of the Cactus Code. The 
main changes are:
<ul>
 <li><a href="#GetComponents">Changing from GetCactus to GetComponents</a></li>
 <li><a href="#svn">Move from CVS to Subversion</a></li>
 <li><a href="#commit">Mail list for commit messages</a></li>
 <li><a href="#thorns">Thorns moving between arrangements</a></li>
</ul>


<h3><a name="GetComponents"></a>GetComponents</h3><p>
Cactus has moved from using
GetCactus for checking out Cactus to a new tool:
<a href="http://cactuscode.org/documentation/GetComponents.php">GetComponents</a>. The new thorn list language is not very different from the
old, but it now directly contains information about the flesh and can
   include non-thorn utilities (e.g. SimFactory). One (short) example of notation is:
<code>
!CRL_VERSION = 1.0
!DEFINE ROOT = Cactus

# Cactus Flesh
!TARGET   = $ROOT
!TYPE     = svn
!URL      = http://svn.cactuscode.org/flesh/trunk
!CHECKOUT = Cactus
!NAME     = .

# Simulation Factory
!TARGET   = $ROOT
!TYPE     = svn
!URL      = https://svn.cct.lsu.edu/repos/numrel/$1
!CHECKOUT = simfactory

# Cactus thorns
!TARGET   = $ROOT/arrangements
!TYPE     = svn
!URL      = http://svn.cactuscode.org/arrangements/$1/$2/trunk
!CHECKOUT = 
CactusBase/Boundary
CactusBase/CartGrid3D
CactusBase/CoordBase
CactusBase/IOASCII
CactusBase/IOBasic
</code>
</p>

</p><a name="svn"></a><h3>CVS to Subversion</h3>
<p>
After using CVS for code development and distribution
  for over a decade, we have migrated to  Subversion to take advantage of
more capabilties. 
As with CVS, Subversion has the concept of a single, central repository.
</p>

<p>
The command line tool 'svn' has similar sub-commands to cvs, e.g.
<code>svn checkout
svn diff
svn update
svn commit</code>
</p>

<p>The server cvs.cactuscode.org will not be used in the future. All
repositories hosted at this server have been migrated to 
 svn.cactuscode.org. This new server 
 can be accessed using a Subversion client or viewed using a web client 
  (pointed to <a href="https://svn.cactuscode.org/">https://svn.cactuscode.org</a>). Read-only
access to some of the repositories is also available using http.</p>

<p>The Cactus flesh can now be found using the URL
<code>https://svn.cactuscode.org/flesh/trunk/</code>
</p>

<p>The Cactus arrangements can be found using
<code>https://svn.cactuscode.org/arrangements/ARRANGEMENT/THORN/trunk</code>
where ARRANGEMENT/THORN could e.g. be CactusBase/Time.</p>

<p>Projects which are not directly maintained by the Cactus team but are hosted
on the cactuscode server (found under /arrangements in CVS) can be found under
<code><a href="https://svn.cactuscode.org/projects/">https://svn.cactuscode.org/projects/</a></code>
</p>

<a name="commits"></a><h3>Commit messages</h3>

<p>Commit messages will in the future go to the mailing list
<a href="http://cactuscode.org/mailman/listinfo/commits">commits@cactuscode.org</a>.
Subscribed users to old lists have been copied over to this new list.</p>


<a name="thorns"></a><h3>Thorns moving</h3>
<p>Some previously external thorns
have been included into Cactus, and some former Cactus thorns (CactusEinstein)
have been moved to a separate project (<a href="http://www.einsteintoolkit.org">EinsteinToolkit</a>). 
The following table
summarizes the old and new locations of thorns which have  moved, and
 includes thorns moving into the Einstein Toolkit. A very small number
thorns  changed  name,  also indicated in this table.
</p>
<table border="1">
<tr><th>Old arrangement</th><th>Thorn</th><th>New arrangement (New thorn name)</th></tr>
<tr><td>AEIDevelopment  </td><td>InterpToArray           </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>AHFinderDirect          </td><td>EinsteinAnalysis</td></tr>
<tr><td>AEIThorns       </td><td>CalcK                   </td><td>EinsteinAnalysis</td></tr>
<tr><td>AEIThorns       </td><td>Constants               </td><td>EinsteinBase</td></tr>
<tr><td>AEIThorns       </td><td>Dissipation             </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>EHFinder                </td><td>EinsteinAnalysis</td></tr>
<tr><td>AEIThorns       </td><td>Exact                   </td><td>EinsteinInitialData</td></tr>
<tr><td>AEIThorns       </td><td>Formaline               </td><td>CactusUtils</td></tr>
<tr><td>AEIThorns       </td><td>Fortran                 </td><td>CactusBase</td></tr>
<tr><td>AEIThorns       </td><td>IDConstraintViolate     </td><td>EinsteinInitialData</td></tr>
<tr><td>AEIThorns       </td><td>IDFileADM               </td><td>EinsteinInitialData</td></tr>
<tr><td>AEIThorns       </td><td>Nice                    </td><td>CactusUtils</td></tr>
<tr><td>AEIThorns       </td><td>NoExcision              </td><td>EinsteinInitialData</td></tr>
<tr><td>AEIThorns       </td><td>Noise                   </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>Norms                   </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>ReflectionSymmetry      </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>RotatingSymmetry180     </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>RotatingSymmetry90      </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>SphericalSurface        </td><td>CactusNumerical</td></tr>
<tr><td>AEIThorns       </td><td>TwoPunctures            </td><td>EinsteinInitialData</td></tr>
<tr><td>Excision        </td><td>LEGOExcision            </td><td>EinsteinEvolve</td></tr>
<tr><td>PerturbedBH     </td><td>DistortedBHIVP          </td><td>EinsteinInitialData</td></tr>
<tr><td>PerturbedBH     </td><td>IDAxiOddBrillBH         </td><td>EinsteinInitialData</td></tr>
<tr><td>PerturbedBH     </td><td>RotatingDBHIVP          </td><td>EinsteinInitialData</td></tr>
<tr><td>BetaThorns      </td><td>Cartoon2D               </td><td>CactusNumerical</td></tr>
<tr><td>CactusBase      </td><td>MoL                     </td><td>CactusNumerical</td></tr>
<tr><td>CactusEinstein  </td><td>ADMAnalysis             </td><td>EinsteinAnalysis</td></tr>
<tr><td>CactusEinstein  </td><td>ADMBase                 </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>ADMConstraints          </td><td>EinsteinAnalysis</td></tr>
<tr><td>CactusEinstein  </td><td>ADMCoupling             </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>ADMMacros               </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>AHFinder                </td><td>EinsteinAnalysis</td></tr>
<tr><td>CactusEinstein  </td><td>CoordGauge              </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>Extract                 </td><td>EinsteinAnalysis</td></tr>
<tr><td>CactusEinstein  </td><td>HydroBase               </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>IDAnalyticBH            </td><td>EinsteinInitialData</td></tr>
<tr><td>CactusEinstein  </td><td>IDAxiBrillBH            </td><td>EinsteinInitialData</td></tr>
<tr><td>CactusEinstein  </td><td>IDBrillData             </td><td>EinsteinInitialData</td></tr>
<tr><td>CactusEinstein  </td><td>IDLinearWaves           </td><td>EinsteinInitialData</td></tr>
<tr><td>CactusEinstein  </td><td>SpaceMask               </td><td>CactusNumerical</td></tr>
<tr><td>CactusEinstein  </td><td>StaticConformal         </td><td>EinsteinBase</td></tr>
<tr><td>CactusEinstein  </td><td>TmunuBase               </td><td>EinsteinBase</td></tr>
<tr><td>CactusEOS       </td><td>EOS_Base                </td><td>EinsteinBase</td></tr>
<tr><td>CactusEOS       </td><td>EOSG_Base               </td><td>EinsteinBase</td></tr>
<tr><td>CactusEOS       </td><td>EOSG_Hybrid             </td><td>EinsteinEOS</td></tr>
<tr><td>CactusEOS       </td><td>EOSG_IdealFluid         </td><td>EinsteinEOS</td></tr>
<tr><td>CactusEOS       </td><td>EOSG_Polytrope          </td><td>EinsteinEOS</td></tr>
<tr><td>CactusEOS       </td><td>EOS_Hybrid              </td><td>EinsteinEOS</td></tr>
<tr><td>CactusEOS       </td><td>EOS_Ideal_Fluid          </td><td>EinsteinEOS (EOS_IdealFluid)</td></tr>
<tr><td>CactusEOS       </td><td>EOS_Polytrope           </td><td>EinsteinEOS</td></tr>
<tr><td>CIGR            </td><td>Hydro_Analysis          </td><td>EinsteinAnalysis</td></tr>
<tr><td>CIGR            </td><td>Whisky                  </td><td>EinsteinEvolve (GRHydro)</td></tr>
<tr><td>CIGR            </td><td>Whisky_Init_Data        </td><td>EinsteinInitialData (GRHydro_InitData)</td></tr>
<tr><td>CIGR            </td><td>Whisky_TOVSolverC       </td><td>EinsteinInitialData (TOVSolver)</td></tr>
<tr><td>LSUThorns       </td><td>ID_Bin_BH               </td><td>EinsteinInitialData (Meudon_Bin_BH)</td></tr>
<tr><td>LSUThorns       </td><td>ID_Bin_NS               </td><td>EinsteinInitialData (Meudon_Bin_NS)</td></tr>
<tr><td>LSUThorns       </td><td>ID_Mag_NS               </td><td>EinsteinInitialData (Meudon_Mag_NS)</td></tr>
<tr><td>LSUThorns       </td><td>NewRad                  </td><td>EinsteinEvolve</td></tr>
<tr><td>TAT             </td><td>Periodic                </td><td>CactusNumerical</td></tr>
<tr><td>TAT             </td><td>Slab                    </td><td>CactusNumerical</td></tr>
<tr><td>TAT             </td><td>SlabTest                </td><td>CactusNumerical</td></tr>
<tr><td>TAT             </td><td>TGRtensor               </td><td>EinsteinUtils</td></tr>
<tr><td>Waves           </td><td>Multipole               </td><td>EinsteinAnalysis</td></tr>
<tr><td>Waves           </td><td>WeylScal4               </td><td>EinsteinAnalysis</td></tr>
</table>



<h3 class="align-right">Apr 26 2010 — knarf</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
