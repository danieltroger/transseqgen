<?php
require "config.php";
function mts($h,$m,$s){return $h*60*60+$m*60+$s;} // make time stamp
function ftime($ts){return date("H:i:s",$ts);} // formatted time
