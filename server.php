<?php

/*
// +--------------------------------------------------------------------------+
// | Project:    pdonvtracker - NetVision BitTorrent Tracker 2019             |
// +--------------------------------------------------------------------------+
// | This file is part of pdonvtracker. NVTracker is based on BTSource,       |
// | originally by RedBeard of TorrentBits, extensively modified by           |
// | Gartenzwerg.                                                             |
// +--------------------------------------------------------------------------+
// | Obige Zeilen dürfen nicht entfernt werden!    Do not remove above lines! |
// +--------------------------------------------------------------------------+
 */

include("config.php");
include("core/classes.php");

Runtime::set_socket_start_ts();
$nv = new nv($config_server["trackerurl"], $config_server["trackerport"]);
$server = new SocketServer($config_server["ip"],$config_server["port"], $config_server["max_clients"]);
//SocketServer::set_debugging(false);
$server->infinite_loop();
?>