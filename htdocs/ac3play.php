<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>

<?php

$http_tar_gz_archive = "ac3play-0.5.1.tar.gz";
$http_tar_bz2_archive = "ac3play-0.5.1.tar.bz2";

?>
<h2>AC3PLAY</h2>
<hr>
<p>
AC3Play is a small tool to forward AC-3 streams (Dolby Digital) via an 
ALSA supported soundcard to external AC-3 decoding hardware e.g. the Creative DTT2500. It was probably the first AC-3 encapsulating code available for Linux since many AC-3 forwarding programs use this piece of code (xine, etc). Quite rewarding since I spent hours deciphering/reading the AC-3 spec ;-)<br>
<br>
<h3>HTTPS download</h3>
<ul>
	<li><a
href="<?php echo $http_tar_gz_archive ?>"><?php echo $http_tar_gz_archive ?></a>
	<li><a
href="<?php echo $http_tar_bz2_archive ?>"><?php echo $http_tar_bz2_archive ?></a>
</ul>
</p>

<?php
include 'footer.inc';
?>
