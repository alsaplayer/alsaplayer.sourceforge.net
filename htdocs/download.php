<?php

include 'latest_version.php';

if (isset($latest)) {
	if (strlen($latest) == 0 || strcmp($latest, "bz2") == 0)
		header("Location: $tar_bz2_archive");
	else if (strcmp($latest, "gz") == 0)
		header("Location: $tar_gz_archive");
	exit;
}	

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Download</h2>
<p>
The best way to get AlsaPlayer currently is in source form. You can download
either via from this site or sourceforge:
</p>
<h3>Alsaplayer source (this site)</h3>
<ul>
	<li><a
href="<?php echo $http_tar_gz_archive ?>"><?php echo $tar_gz_archive ?></a>
	<li><a
href="<?php echo $http_tar_bz2_archive ?>"><?php echo $tar_bz2_archive ?></a>
</ul>
<h3>Python bindings source (this site)</h3>
<ul>
	<li><a
href="<?php echo $http_tar_gz_py_archive ?>"><?php echo $tar_gz_py_archive ?></a>
	<li><a
href="<?php echo $http_tar_bz2_py_archive ?>"><?php echo $tar_bz2_py_archive ?></a>
</ul>
<h3>FFTscope visualization plugin (this site)</h3>
<ul>
	<li><a
href="<?php echo $http_tar_gz_fft_archive ?>"><?php echo $tar_gz_fft_archive ?></a>
	<li><a
href="<?php echo $http_tar_bz2_fft_archive ?>"><?php echo $tar_bz2_fft_archive ?></a>
</ul>
<h3>MIDI input plugin</h3>
<ul>
	<li><a
href="<?php echo $http_tar_gz_midi_archive ?>"><?php echo $tar_gz_midi_archive ?></a>
	<li><a
href="<?php echo $http_tar_bz2_midi_archive ?>"><?php echo $tar_bz2_midi_archive ?></a>
</ul>
<h3>Download all the packages from <a href="http://sourceforge.net/project/showfiles.php?group_id=249">sourceforge</a></h3>
<h3>To install Alsaplayer on Gentoo:</h3>
<p>Alsaplayer is in portage again, so just run "emerge alsaplayer"</p>
<p>
or install the <a href="https://github.com/domichel/proaudio-gentoo">Overlay for ProAudio Gentoo</a>
where you can find live ebuilds for the git repository.</p>
<p>
Below you'll find links to various binary packages:</p>
<h3>Binaries</h3>
<ul>
<li>Debian: <a
href="https://packages.debian.org/search?keywords=alsaplayer&amp;searchon=names&amp;suite=all&amp;section=all">alsaplayer
packages</a>
<li>Ubuntu: <a
href="https://launchpad.net/ubuntu/+source/alsaplayer">AlsaPlayer in Ubuntu</a>.
<li>Mandrake, Suse and other on: <a
href="https://rpmfind.net/linux/rpm2html/search.php?query=alsaplayer&submit=Search+...">rpmfind.net</a> and a lot more on <a
href="https://rpm.pbone.net/search_simple_2">rpm.pbone.net</a>.
</ul>

<?php
include 'footer.inc';
?>
