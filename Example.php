<?php 
//Created By Ed Evanosich
//Including OpenSource Dns Zone Editor
include_once("classdns.php");





//-------------------------------------------------------------- 
//We use the ClassDNS.php
// -- To use Class DNS 
//Setup a new zone 			---
//$zones = new zone_records("cpaneluser", "pass", "website_to_login", "domain_of_records")

// -- Pull all records             --- 
//$DNSrecord = $zones->getrecords();

// -- To Add a record 		---
//addtxt(varName,  VarValue)
//$results = $zones->addtxt("test6",  "HelloWorld6");

// -- To Pull one record. --Array of Address, Name, Line.
//$record = $zones->gettxt("test6", $domainname, $DNSrecord);

// -- To Delete one record. 
//$DeletionResults = $zones->deleterecord($record["line"]);
//----------------------------------------------------------------------------
				
				
//$zones = new zone_records("cpaneluser", "pass", "website_to_login", "domain_of_records")
$zones = new zone_records("cpanel_Username", "password123", "coinfall.pw", "coinfall.pw"); 

//Username
$un = "4moves";

//My Address -- Feel free to tip 1 billion dogecoins. 
$address = "DLGbGMZA5e9Uar6UWinij4ZP6dR9pGiuGT";

$domainname = "coinfall.pw";

//Convert Username to uppercase 
$un = strtolower($un);

//Get current records.
$DNSrecord = $zones->getrecords();
					
//Grabbing the record 4moves.coinfall.pw    --Pulls address, name, and line.
$record = $zones->gettxt($un, $domainname, $DNSrecord);		
					
//Delete old record.
$DeletionResults = $zones->deleterecord($record["line"]);
					
//Add new record to Dns zone editor. 
$results = $zones->addtxt($un,  $address);
					
				
	

?>