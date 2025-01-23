<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>

<?php

$fftscope_http_tar_gz_archive = "fftscope-1.0.5.tar.gz";
$fftscope_http_tar_bz2_archive = "fftscope-1.0.5.tar.bz2";

?>
<h2>FFTSCOPE</h2>
<p>These plugins are outdated. See the <a href="https://github.com/alsaplayer/alsaplayer/tree/master/attic">Attic</a> into the sources.
</p>
<p>
<img src="fftscope.png" alt="FFTscpoe">
<p>
FFTscope is a visualization plugin for the AlsaPlayer. Its main
purpose is to demonstrate how to write a vis plugin for the AlsaPlayer
visualization API.
</p>
<h4>HTTPS</h4>
<ul>
	<li><a
href="<?php echo $fftscope_http_tar_gz_archive ?>"><?php echo $fftscope_http_tar_gz_archive ?></a>
	<li><a
href="<?php echo $fftscope_http_tar_bz2_archive ?>"><?php echo $fftscope_http_tar_bz2_archive ?></a>
</ul>
<p>For the GTK2 interface, you will need at least FFTscope version 1.0.5.
</p>
<h2>NEBULUS</h2>
<p>
<table>
	<tr>
		<td>
			<img src="whirl.png" alt="Whirl">
		</td>
		<td>
			<img src="tunnel.png" alt="Tunnel">
		</td>
	</tr>
</table>
<p>
Nebulus is a (fullscreen) SDL/OpenGL plugin. You can get alsaplayer-nebulus from the <a href="http://nebulus.tuxfamily.org/">Nebulus homepage</a>
</p>
<?php
include 'footer.inc';
?>
