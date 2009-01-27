<?php
$title='MakeThornList';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>
      <h2>Generating ThornLists from Parameter Files</h2>

      <p>
        The <a href="makeThornList">MakeThornList</a> script
        provides a way to generate a ThornList with all the
        required CVS directives needed for the <a
        href="CVS.html#getcactus">GetCactus</a> script to
        check out the thorns needed to run the parameter file.
      </p>

      <p>
        Information on using a ThornList for checking out thorns
        including a description of CVS directives in available in
        the <a
        href="../Documentation/HOWTO/Management-HOWTO">Management-HOWTO</a>.

      </p>

      <h3>
        To install the MakeThornList script:
      </h3>

      <ol>

        <li> Write a <i>Master ThornList</i> containing all
          the thorns you have access to, along with directives
          for their CVS locations. As an example, here is
          <a href="MasterAllen.th">my master thornlist</a>.

        <li> Create a directory <tt>.cactus</tt> in your
          home directory.

        <li> Add your Master ThornList to the <tt>.cactus</tt>

          directory, as the file <tt>MasterThornList</tt>.

        <li> Download the <a href="MakeThornList">MakeThornList</a>
          script to a directory on your path.

        <li> Keep your master thornlist up to date by adding and
          removing thorns as they become available to you.

      </ol>

      <h3>To use the MakeThornList script</h3>

      <ol>

        <li>
          To generate a ThornList <tt>MyRun.th</tt> for the
          parameter file <tt>MyRun.par</tt> simply issue the command

          <p>
      <tt>

        <pre>
MakeThornList -o=MyRun.th MyRun.par</pre>
        </tt>
        </p>

        <li>
          Then checkout Cactus using

      <tt>
        <pre>
GetCactus MyRun.th</pre>

    </tt>

      </ol>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
