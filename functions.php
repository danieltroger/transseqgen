<?php
function mts($h,$m,$s){return $h*60*60+$m*60+$s;} // make time stamp
function rtime($ts){return date("H:i:s",$ts+timezone*60*60);} // readable time
function table($f)
{
  $f = file($f);
  foreach($f as $key => $pair)
  {
    $pair = substr($pair,0,-1);
    $values = explode(":",$pair);
    $t = $values[0];
    unset($values[0]);
    echo "Time: " . rtime($t) . PHP_EOL;
    foreach($values as $value)
    {
      $tmp0 = explode("=",$value);
      $vkey = $tmp0[0];
      $vval = $tmp0[1];
      if($vkey = "tv")
      {
        echo "Tv: " . rtv($vval) . PHP_EOL;
      }
      else
      {
        echo "{$vkey} => {$vval}";
      }
    }
    echo PHP_EOL;
  }
}
function rtv($code) // readable tv
{
  $x = $GLOBALS['tvs'][$code];
  return $x;
}
?>
