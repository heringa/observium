<?php

if ($device['os'] == "junos" && is_file(get_rrd_path($device, "junosfw_sessions.rrd")))
{
  $graph_title = "Firewall Sessions";
  $graph_type = "junosfw_sessions";

  include("includes/print-device-graph.php");
}
?>
