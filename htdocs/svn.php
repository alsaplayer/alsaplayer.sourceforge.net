<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>SVN Archive</h2>
<p>
Due to the migration to github, the SVN tree is now an archive with no commit access.
</br>
<p>
You can <a
href="http://sourceforge.net/p/alsaplayer/code/HEAD/tree">browse the SVN repository here</a>.
</p>

<?php
include 'footer.inc';
?>
