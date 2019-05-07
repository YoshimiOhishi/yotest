<?php
//phpinfo();

$zdate  = "2019-04-01 00:00:00";  //‘O‰ñŠJŽnŽžŠÔ
$URL    = "http://cpointnext.xsrv.jp/esz/zzstock.php?limit=3&offset=0";
$limit  = 3;
$offset = 0;
                $header = array(
                     'Content-Type: application/x-www-form-urlencoded'
                    ,"X-HTTP-Method-Override: GET"
                );
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
                curl_setopt($curl, CURLOPT_HTTPGET, 1);
                curl_setopt($curl, CURLOPT_URL, $URL . "?limit=" . $limit . "&offset=" . $offset);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($curl);
                $info = curl_getinfo($curl);
                curl_close($curl);
//                //foreach ($info as $key => $val) {
//                //    $this->info($key.":".$val." ");
//                //}
                var_dump($response);
exit;
?>
