<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>About AlsaPlayer</h2>
<hr>
<p>
AlsaPlayer is a new type of PCM player. It is heavily multi-threaded and
tries to excercise the ALSA library and driver quite a bit. It has some very
interesting features unique to Linux/Unix players. The goal is to create a
fully pluggable framework for playback of all sorts of media with the focus
on PCM audio data. The original core code was written by <a href="https://web.archive.org/web/20071015103012/http://linuxguru.nl">Andy Lo-A-Foe</a> with contributions from many other folks.
See the credits files for details.</p>
<p>
The name AlsaPlayer might be confusing a bit today since we now support a
whole bunch of different output systems. The old default OSS audio interface
is supported, as well as Esound, NAS (Network Audio Server), Sparc and SGI
audio outputs. The most interesting new output is <a
href="http://jackaudio.org">JACK</a></p>
<p>
JACK is different from other audio server efforts in that it has been designed
from the ground up to be suitable for professional audio work. This means that it
focuses on two key areas:
synchronous execution of all clients, and low latency operation. We believe
that this interface will become the preferred one. JACK uses ALSA for interfacing
with the audio hardware.</p>
<p>
If you came here looking for <b><a href="http://www.alsa-project.org">ALSA
DRIVERS</a></b> visit <a
href="http://www.alsa-project.org">http://www.alsa-project.org</a> and come
back once you have them up and running :-)
</p>
<?php
include 'news.inc';
?>
<br>
<br>
<?php
if (strcmp($PHP_SELF, "/index.php") == 0 && $noreg != 1) {
	echo "<!-- Nedstat teller -->\n";
	echo "<!-- Nedstat teller stop -->\n";
}
?>
<?php
include 'footer.inc';
?>

