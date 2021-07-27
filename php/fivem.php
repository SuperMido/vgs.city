<?php
$server_settings['title'] = "VGS Role Play";
$server_settings['ip'] = "139.99.122.40";
$server_settings['port'] = "30120"; // Basic port 30120 olmalı (eğer değiştirilmediyse)
$server_settings['max_slots'] = 1024; // Max Player Slot (Varsayılan 64)
/*----------------------------------------------------------------*/
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
$img_d64 = $content['icon'];
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
    $pl_count / $server_settings[max_slots]
?>