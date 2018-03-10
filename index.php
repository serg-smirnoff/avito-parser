<?php

	$url = "https://www.avito.ru/kaliningrad/avtomobili/skoda_octavia_2014_1400675007";
	$contentPage = "";

	$headers = [
        'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
        'Connection: keep-alive'
    ];
 
    $referer = "https://www.google.ru/";
 
    /*
	$post_fields = array(
                    "login" => "****", // логин
                    "passwd" => "****",  // пароль
                    "submit" => "Вход",
                    "auth" => "auth",
                    "return_url" => "/login/"
                    ); 
	*/
	
	$ch = curl_init();
    $cookie = dirname(__FILE__)."/cookie.txt";	
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch,CURLOPT_REFERER, $referer);
	curl_setopt($ch,CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch,CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch,CURLOPT_FAILONERROR, 1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_POST, 0);
	//curl_setopt($ch,CURLOPT_POSTFIELDS, $post_fields);
	//curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0");
	curl_setopt($ch, CURLOPT_URL, $url);
	$contentPage = curl_exec($ch);
	curl_close($ch);
	
	echo trim($contentPage);
  
?>