<?php
require_once("../plugin/phpqrcode/qrlib.php");

QRcode::png($_GET['code']);
