<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>AlsaPlayer related projects</h2>
<hr>
<p>
<ul>
	<li><a href="http://dqt.sourceforge.net/index.html">Dancing QT</a> is a combined music database and player application specially designed for dancing schools and equivalent applications. Key features are an easy-to-use interface, fast search capabilities, playlist management, exact pitching and crossfading.
	<br>
	<br>
	<li>Hubert Chan wrote a <a href="http://www.uhoreg.ca/programming/ap-lirc">LIRC interface plugin</a>. A perfect example of a custom user interface!
	<br>
	<br>
	<li>Peter Lemenkov wrote 3 input plugins: <a href="http://lemenkov.newmail.ru/other/alsaplayer_plugins/ape/">Monkey's Audio decoding plugin</a>, <a href="http://lemenkov.newmail.ru/other/alsaplayer_plugins/wv/">WavPack decoding plugin</a>, <a href="http://lemenkov.newmail.ru/other/alsaplayer_plugins/tta/">True Audio decoding plugin</a>.
	<br>
	<br>
	<li>Patrick Shirkey is using AlsaPlayer for live scratching. Here is a ("http://www.djcj.org/audio/Mongwan-121302-alsaplayer-mix.ogg") sample of his work. (Broken link)
	<br>
	<br>
	<li>Anders Rune Jensen uses AlsaPlayer in his <a href="http://mms.sunsite.dk/">Mpeg Menu System (MMS)</a>. Needs a dxr3 (H+) card for TV output.
	<br>
	<br>
	<li><a href="http://nebulus.tuxfamily.org/">The Nebulus visualisation plugin</a> also has an AlsaPlayer version.
	<br>
	<br>
	<li>("http://tironif.org/perl/") libalsaplayer PERL bindings, by Nathan Gass. (Broken link)
	<br>
	<br>
	<li><a href="jack_input-0.1.tar.bz2">JACK input plugin</a>. Feed output from any JACK application to AlsaPlayer (including AlsaPlayer itself)! Quick hack by me ;)
	<br>
	<br>
	<li>Ilkka Karvinen has written an output plugin that passes MPEG encoded files directly through an S/PDIF interface. <a href="http://www.cs.tut.fi/~ik/mpegspdif.html">MPEGSPDIF Wiki</a> and <a href="http://www.cs.tut.fi/~ik/mpegspdif/mpegspdif-alsaplayer.tar.gz">alsaplayer input plugin</a>.
	<br>
	<br>
	<li>Dominique Michel wrote <a href="http://crystalaudio.tuxfamily.org">Thin Audio</a>, a FVWM-Crystal recipe with an improved speed control for Alsaplayer. This function is now included into <a href="http://fvwm-crystal.sourceforge.net">FVWM_Crystal</a>.
	<br>
	<br>
	<li>A <a href="https://github.com/leofiore/alsapyer">simple AlsaPlayer python binding</a> by Leonardo
	
</ul>
</p>
<br>
<br>
Working on something cool? <a href="mailto:dominique_libre@users.sourceforge.net">Let me know!</a>
<br>
You know a working url for one of the broken links: <a href="mailto:dominique_libre@users.sourceforge.net">Let me know!</a>
<?php
include 'footer.inc';
?>
