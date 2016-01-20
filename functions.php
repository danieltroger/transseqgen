<?php
function mts($h,$m,$s){return $h*60*60+$m*60+$s;} // make time stamp
function rtime($ts){return date("H:i:s",$ts+timezone*60*60);} // readable time
?>
