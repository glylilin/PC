<?php
namespace  Course\Utils;
class HttpClient{
    /**
     * 使用file_get_content實現get發送
     * @param unknown $url
     * @param unknown $data
     * @return mixed
     */
  public static function HttpGet($url,$data= array()){
    if($data){
            $data = http_build_query($data,true);
            $url .="?".$data;
        }
    
        $output = file_get_contents($url);
        return json_decode($output,true);
    }
    /**
     * 使用file_get_content實現post發送
     * @param unknown $url
     * @param unknown $data
     * @return mixed
     */
    public static  function HttpPost($url,$data){
        $data = http_build_query($data,true);
        $opts = array(
            'http'=>array(
                'method'=>"POST",
                'header'=>"Content-type: application/x-www-form-urlencoded\r\n".
                "Content-length:".strlen($data)."\r\n" .
                "Cookie: foo=bar\r\n" .
                "\r\n",
                'content' => $data,
            )
        );
        $cxContext = stream_context_create($opts);
        $output = file_get_contents($url, false, $cxContext);
        return json_decode($output,true);
    }
}