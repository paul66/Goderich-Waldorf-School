<?php
/****************
Naming conventions - feel free to change
*****************/
$set['tokenName'] = 'token';/*Name of session variable where token is stored in browser as a temporary cookie or session*/
$set['tokenPostName'] = 'token';/*Name of the post variable carrying the token data to match with session variable*/
$set['tokenTimeStamp'] = 'token_timestamp';
$set['tokenTimeToLive'] = 'timeToLive';

$set['timeToLive'] = 60*30;/*Time allowed to visit and submit form*/

/*****End of naming conventions********/


$multipleForms = array(0,1);
?>