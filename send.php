<?php
require("udp_sendPacket.php");
$write = new SendPacket();
$write->addr = "10.10.10.100";
$write->port = 1909;
$write->int16(100);
$write->int64(5);
$write->int32(2);
$write->Send();
$write->clear();