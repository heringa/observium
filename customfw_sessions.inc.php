<?php

// JUNOS

if ($device['os'] == "junos" )
{
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
}

// PANOS


if ($device['os'] == "panos" )
{
$rrd_filename = get_rrd_path($device, "panos-sessions.rrd");

$ds = "sessions";

$colour_area = "f5f5f5";
$colour_line = "cc0000";

//$colour_area_max = "9999cc";

//$graph_max = 1;
$scale_min = 0;

$unit_text = "Sessions";

include("includes/graphs/generic_simplex.inc.php");
}

?>
