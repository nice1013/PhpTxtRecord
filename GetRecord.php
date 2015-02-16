<?php


//Echo getRecord ---
echo getRecord("4moves.coinfall.pw");



//Pull a txt record.
function getRecord($Name) {
	
str_replace($Name, "@", ".");	
	
$result = dns_get_record($Name);
return $result[0]["txt"];
}
?>