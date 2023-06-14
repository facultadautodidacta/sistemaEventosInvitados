<?php 
    class MetodosUtiles {
        public function file_get_contents_curl($url) {
            $crl = curl_init();
            $timeout = 5;
            curl_setopt($crl, CURLOPT_URL, $url);
            curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
            $ret = curl_exec($crl);
            curl_close($crl);
            return $ret;
        }
    }

?>