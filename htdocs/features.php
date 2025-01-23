<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Features</h2>
<hr>
<p>
Some of the more interesting features in AlsaPlayer are</p>
<ul>
<li>Full <i>speed</i> (pitch) control, positive *and* negative!<br>
This is the first Linux and only GPL player that supports this. You can
scratch mp3's and even audio CD's in realtime.
<li>Icecast/shoutcast streaming support<br>
<li>Interface plugins<br>
Completely redefine the user interface
<li>Remote control<br>
Control alsaplayer from another application
<li>Low latency mode<br>
On capable soundcards latency can be as low as 1.3ms!
<li>Playlist/Queue support
<li>Plays nice with concurrent audio tools<br>
Doesn't touch the hardware mixer
<li>Concurrent visual scopes<br>
Open as many scopes as there are.
<li>Multi-threaded design<br>
This results in efficient/skip free playback. You can also activate real-time
scheduling for even better performance.
<li>Accurate scope/audio syncing
<li>Portable
</ul>

<h2>Supported file formats</h2>
<ul>
<li><a href="http://www.vorbis.com/">Ogg Vorbis</a> files (.ogg)<br>
<i>First player worldwide that did perfect reverse Ogg playback! hehe :)</i>
<li>MP3 files using <a href="http://www.mars.org/home/rob/proj/mpeg/">MAD</a> (default plugin for MP3)
<li>MP3 audio files using the mpg123 based plugin
<li>WAV files
<li>CDDA, CD Digital Audio playback (digital ripping), with CDDB lookup
<li>All MODULES supported by MikMod
<li>All file types supported by the <a href="http://www.68k.org./~michael/audiofile/">Audio File Library</a>
<li><a href="http://flac.sourceforge.net">FLAC</a> files. A lossless compression scheme.
</ul>

<h2>Supported sound systems</h2>
<p>AlsaPlayer supports quite a few sound systems, not just ALSA, as the name
might suggest. Currently we support the following APIs</p>
<ul>
<li><a href="http://jackaudio.org">JACK</a><br>
A low-latency audio server, written primarily for the Linux operating system.
It can connect a number of different applications to an audio device, as well
as allowing them to share audio between themselves.
<li><a href="http://www.alsa-project.org">ALSA</a><br>
The next-generation audio interface for Linux. ALSA was recently merged in the
2.5.x Linux tree. It has many advantages over the old OSS interface.
<li>OSS<br>
The old Linux audio API. This is still widely used.
<li>SGI<br>
For SGI (IRIX) systems, using the SGI audio library.
<li>NAS<br>
Network Audio Server. X11 for audio if you will.
<li>ESD<br>
Esound, found in GNOME.
<li>Null<br>
Nosound driver, useful for testing.
</ul>
<?php
include 'footer.inc';
?>
