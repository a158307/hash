<?php
    $key = "2006";
    $data = "oo";
    $hash = hash('sha1',$data.$key);
    $url = "http://b.2006.com/2.php?data={$data}&hash={$hash}";
    $info = file_get_contents($url);
    echo $info;