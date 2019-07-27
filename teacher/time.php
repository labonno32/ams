<?php

// echo time().' - gmt+0 time'.'<br/>';
// echo gmdate('j-n-Y').'<br/>';
// $tt = "22-22-22";
// echo strtotime($tt).'<br/>';
// echo date("Y.m.d").'<br/>';
//$b="poo"; $c="llo";
//$a = array($b,$c);
//echo $a[1];
//if (date('d/m/Y') > "29/07/2019") { echo gmdate('j-n-Y')." bigger"; } else {echo "no";}


// $calledids = "hello,bae,"; explode(delimiter, string)
// $a = "hey,";
// $b = $calledids.$a;
// $c = explode(",", $b);
// $n = count($c);
// $ii = 0;
// foreach ($c as $key => $y) {
// 	echo $y;
// 	echo $ii;
// 	$ii++;
// }

session_start();
session_destroy();
// $an = "added";
// $called_ids = explode(",",($_SESSION[$_GET['subid']]));
// array_push($called_ids, $an);
$called_ids ="asdfasfasf";
$fg = "sss";
$gf = array('xx','yy','zz');
$_SESSION[$_GET['subid']] = $gf;
$aaa = $_SESSION[$_GET['subid']];
array_push($aaa, $fg);
$_SESSION[$_GET['subid']] = $aaa;
//$yy = explode(",", $_SESSION[$_GET['subid']]);
//echo count(explode(",",$aaa));
			foreach ($_SESSION[$_GET['subid']] as $key => $ids) {
				 echo $key.$ids; 
			}








?>
