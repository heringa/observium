<?php

$navbar['custom'] = array('url' => '#', 'icon' => 'oicon-system-monitor', 'title' => 'Custom');

$navbar['custom']['entries'][] = array('url' => '/devices/type=firewall/format=graphs/sort=hostname/graph=customfw_sessions' , 'icon' => 'oicon-wall-brick', 'title' => 'Firewall sessions');

?>
