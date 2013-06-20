<?php

include_once("php/adrHelper.class.php");

$postnummer = intval($_REQUEST["postnummer"]);
$gadenavn = urlencode($_REQUEST["gadenavn"]);

$url = "http://webapi.aws.dk/adresser?postnr=$postnummer&vejnavn=$gadenavn"; 

$adrHelper = new adressHelper();
echo $adrHelper->getRemoteXml($url,"/adgangsadresser/adgangsadresse/husnr");

?>

