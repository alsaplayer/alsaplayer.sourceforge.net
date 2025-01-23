<?php

header('Content-type: text/html; charset=utf-8');
require_once 'styles/styleswitcher.inc.php';
include $url . 'header.inc';

?>
<h2>Documentation</h2>
<hr>
<p>
A new man page with a better user documentation is in the last 0.99.77 release.
</p>
<p>
This man page is updated on a regular basic when new features are added into AlsaPlayer or potential documentation issues are found.
</p>
<p>
If you want to write plugins the
<a href="https://github.com/alsaplayer/alsaplayer/tree/master/alsaplayer/">header
files</a> are a good start. In particular 
<a href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/scope_config.h">scope_config.h</a>, <a
href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/scope_plugin.h">scope_plugin.h</a>, <a
href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/input_plugin.h">input_plugin.h</a>, <a
href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/output_plugin.h">output_plugin.h</a>, <a
href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/interface_plugin.h">interface_plugin.h</a> might be of use.
</p>
<h2>libalsaplayer</h2>
<p>
The best documentation for libalsaplayer is source code. The <i>control.h</i>
header file lists all available functions at this time. <a
href="https://raw.githubusercontent.com/alsaplayer/alsaplayer/refs/heads/master/alsaplayer/control.h">View control.h</a>
</p>
<?php
include 'footer.inc';
?>
