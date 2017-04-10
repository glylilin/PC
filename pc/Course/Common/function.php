<?php
function p($data,$flag = false){
    echo "<pre>";
    var_dump($data);
    if($flag){
        exit();
    }
}

function formatAddTime($time){
    $nowtime = time();
    $difference = $nowtime - $time;
    switch ($difference) {
        
        case $difference <= '60':
            $msg = '刚刚';
            break;
        
        case $difference > '60' && $difference <= '3600':
            $msg = floor($difference / 60) . '分钟前';
            break;
        
        case $difference > '3600' && $difference <= '86400':
            $msg = floor($difference / 3600) . '小时前';
            break;
        
        case $difference > '86400' && $difference <= '2592000':
            $msg = floor($difference / 86400) . '天前';
            break;
        
        default:
            $msg = date("Y-m-d H:i", $time);
            break;
    }
    
    return $msg;
}

function formatImageHtmlContent($html){
    $html = str_replace("<section>","",$html);
    $html = str_replace("</section>","",$html);
    $pattren = "/src=['|\"]\S+['|\"]/is";
    preg_match_all($pattren, $html,$matchs);
	if($matchs && $matchs[0]){
	
	    foreach ($matchs[0] as $v){
	        if(!stripos($v,'http') && !stripos($v,'https')){
	            $intend = stripos($v,'upload');
	            $end = substr($v,$intend);
	            $replace = 'src="http://static.puamap.com/'.$end.'"';
	           $html =  str_replace($v,$replace,$html);
	        }
	    }

	}
	
    return $html;
}
?>
