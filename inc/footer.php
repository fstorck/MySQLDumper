<?php

$svice=(isset($_GET["svice"])) ? $_GET["svice"] : 0;
$config_array=(isset($config)) ? "<strong>CONFIG</strong><pre>".@print_r($config,true)."</pre>": "";
$database_array=(isset($database)) ? "<strong>DATABASE</strong><pre>".@print_r($database,true)."</pre>": "";
$dump_array=(isset($dump)) ? "<strong>DUMP</strong><pre>".@print_r($dump,true)."</pre>": "";
$restore_array=(isset($restore)) ? "<strong>RESTORE</strong><pre>".@print_r($restore,true)."</pre>" : "";

echo '<p align="center" class="small">'.$lang['authors'].':&nbsp;
<a class="small" href="http://www.daniel-schlichtholz.de" target="_new">
Daniel Schlichtholz & Steffen Kamper</a> - Infoboard: 
<a class="small" href="'.$config["homepage"].'" target="_blanc">'.
$config["homepage"].'</a></p>';

if($svice==1) echo '<table width="100%"><tr bgcolor="#808080"><td>'.$config_array.'</td></tr><tr bgcolor="#808080"><td>'.$database_array.'</td></tr><tr bgcolor="#808080"><td>'.$dump_array.'</td></tr><tr bgcolor="#808080"><td>'.$restore_array.'</td></tr></table>';
echo '</div></BODY></HTML>';


?>