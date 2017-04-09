<?php
function formatPhone($phone){
	$repaceStr = substr($phone, 3,4);
	return str_replace($repaceStr, '****', $phone);
}