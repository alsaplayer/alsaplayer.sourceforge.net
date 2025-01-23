<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Last Release ChangeLog</h2>
<p><a href="https://github.com/alsaplayer/alsaplayer/blob/master/ChangeLog">Current ChangeLog on github</a></p>
<h2>Old Historical ChangeLog</h2>
<p>
<pre>
<?php
include 'ChangeLog';
?>
</pre>
</p>

<?php
include 'footer.inc';
?>
