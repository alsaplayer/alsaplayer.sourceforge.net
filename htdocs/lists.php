<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Mailing lists</h2>
<hr>
<p>
The following mailing lists are available:<br>
<ul>
	<li><b>alsaplayer-announces <a
	href="https://sourceforge.net/p/alsaplayer/mailman/alsaplayer-announces">[current archive]</a>, <a href="https://marc.info/?l=alsaplayer-announce">[old archive]</a></b><br>
	Official AlsaPlayer announcements. To get notice of new releases as soon
	as they're available, sign up on the <a
	href="https://sourceforge.net/projects/alsaplayer/lists/alsaplayer-announces">list management</a> page.
<br>
<br>
	<li><b>alsaplayer-devel <a
	href="https://sourceforge.net/p/alsaplayer/mailman/alsaplayer-devel/">[current archive]</a>, <a href="https://marc.info/?l=alsaplayer-devel">[old archive]</a></b><br>
	Discussion about AlsaPlayer development. Interested in developing
	alsaplayer with us? Got a wicked idea or a question? Then it's time to join us in
	discussions on this list here: <a
	href="https://sourceforge.net/projects/alsaplayer/lists/alsaplayer-devel">alsaplayer-devel List SignUp and Options</a>.
<br>
<br>
	<li><b>alsaplayer-commits <a
	href="https://sourceforge.net/p/alsaplayer/mailman/alsaplayer-commits">[current archive]</a>, <a href="https://marc.info/?l=alsaplayer-commits">[old archive]</a></b><br>
	Read-only list that reports on all the GIT commits done by the development
	team. Visit the <a
	href="https://sourceforge.net/projects/alsaplayer/lists/alsaplayer-commits">list SignUp</a> page to subscribe.
</ul>
</p>

<?php
include 'footer.inc';
?>
