<?php
class adressHelper
{
	private $url;
	private $xml;
	private $xmlElement;
	private $xpathElement;
	
	function getRemoteXml($url, $path)
	{
		$this->readUrl($url);
		$this->readXmlPath($path);
		return $this->convertToJson();
	}
	
	function readUrl($url)
	{
		$this->url = $url;
		$this->xml = file_get_contents($url);
		return $this->xml;
	}
	
	function readXmlPath($path)
	{
		$this->xmlElement = new SimpleXMLElement($this->xml);
		$this->xpathElement = $this->xmlElement->xpath($path);
		return $this->xpathElement;
	}
	
	function convertToJson()
	{
		$returnArray = array();
		foreach($this->xpathElement as $key=>$val) // Converting from SimpleXMLElement objects to string object
		{
			$returnArray[$key] = (string)$val; 
		}
		return json_encode($returnArray);
		
	}
	
}
?>