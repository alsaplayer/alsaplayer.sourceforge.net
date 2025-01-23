<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Contribute</h2>
<hr>
<p>
This page intends to give an overview of the different aspects of AlsaPlayer development.</br>
The AlsaPlayer project welcomes anyone willing to help.
</p>
<p>
By joining this project, you will be part of a little team of people working to deliver an outstanding, easy to use and very performing open source audio player. There are many different ways you can help the project, including documentation, translation, development, artwork, promotion, maintaining the website.
</p>
<p>
The development was moved to <a href="https://github.com/alsaplayer/alsaplayer">github</a> and that's the best place to get in touch.
</p>
<p>
Other ways to get started incudes the Mailing list archive, the TODO file in the sources, the Artwork page, 
and if you want to contribute code, check the Documentation page and read the source code.
</p>
<h3>Email list</h3>
<p>The email list is the best place to get in touch with AlsaPlayer development.
</p>
<h3>Translation</h3>
<p>Are you fluent in multiple languages? By contributing your translations of text in the AlsaPlayer project, you will help AlsaPlayer be a better part of the global market. If you don't know where to start, read this email: <a href="https://marc.info/?I=alsaplayer-devel&m=118279381410053&w=2">internationalisation of AlsaPlayer</a>.
</p>
<h3>Art</h3>
<p>Are you able to create images that move people? AlsaPlayer is in need of good art. Icons, logos and other art like button artwork or taskbar icon create an identity for an application. By creating art for the AlsaPlayer project, your portfolio will be seen by a large audience and will help AlsaPlayer have a strong branding.
</p>
<h3>Promotion</h3>
<p>Do you know how to get the word out on the street? Marketing and promotion of AlsaPlayer is easy to do: spread the word of AlsaPlayer to people that may not otherwise be able to benefit from it.
</p>
<h3>Development</h3>
<p>By writing code for the AlsaPlayer project, you will get to implement new features and defeat daunting bugs, all while collaborating to make coherent and stable releases.
</p>
<p>Getting started at coding in AlsaPlayer is a matter of finding something to fix, and fixing it. You may want to consult the TODO file to help find what you are looking for; once you have fixed something, you will want to send in a patch. If you do that a few times, you may want to apply for an AlsaPlayer developer account so you can fix things directly.
</p>
<p>The most wanted new features in project are:
</p>
<ul>
	<li><p>convert globally all internal sound representation to 32 bits floats</p>
	<li><p>move libalsaplayer to a standalone application with unix-sockets or TCP- (UDP-?) based interface</p>
	<li><p>more input plugins</p>
</ul>
<p>Any help in those 3 areas will be especially appreciated.
</p>

<?php
include 'footer.inc';
?>
