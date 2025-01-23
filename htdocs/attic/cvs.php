<?php

include 'header.inc';

?>

<h2>CVS Access</h2>
<p>
To get the latest and greatest AlsaPlayer you will want to check out the CVS tree.
If you have cvs installed on your box you can try the following:<br>
<br>
<tt>cvs -d:pserver:anonymous@alsaplayer.cvs.sourceforge.net:/cvsroot/alsaplayer login<br>&nbsp;<br>cvs -z3 -d:pserver:anonymous@alsaplayer.cvs.sourceforge.net:/cvsroot/alsaplayer co -P <i>module_name</i></tt><br>
<br>
where <tt><i>module_name</i></tt> can be <tt><i>alsaplayer</i></tt> (hmmm, this one is mandatory !), <tt><i>fftscope</i></tt> (a nice fft scope vizualisation plugin) or <tt><i>midi</i></tt> (a midi input plugin, use <a href="http://timidity.sourceforge.net/">timidity++</a>).
<br>
<p>
You can also <a
href="http://alsaplayer.cvs.sourceforge.net/alsaplayer/">browse the CVS repository</a>. Visit the <a
href="http://sourceforge.net/cvs/?group_id=249">SourcForge</a> page for all
the information regarding CVS.

</p>

<?php
include 'footer.inc';
?>
