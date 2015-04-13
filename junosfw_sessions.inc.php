<?php


$file = get_rrd_path($device, "junosfw_sessions.rrd");

$rrd_list[0]['filename'] = $file;
$rrd_list[0]['descr'] = "Allocated";
$rrd_list[0]['ds'] = "allocate";

if ($_GET['debug']) { print_vars($rrd_list); }

$colours   = "mixed";
$nototal   = 1;
$unit_text = "Sessions";
$scale_min = "0";

include("includes/graphs/generic_multi_line.inc.php");


?>
