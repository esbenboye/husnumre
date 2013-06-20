<?php

include_once("php/adrHelper.class.php");

$postnummer = intval($_REQUEST["postnummer"]);
$gadenavn = "*".urlencode($_REQUEST["gadenavn"])."*";

$url = "http://webapi.aws.dk/vejnavne?vejnavn=$gadenavn&postnr=".$postnummer;

$adrHelper = new adressHelper();
echo $adrHelper->getRemoteXml($url, "/vejnavne/vejnavn/navn");



?>