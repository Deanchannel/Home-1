/* Decoded by unphp.net */

<?php set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit', '999999999M');
system('clear');
$putih = "\e[97m";
$orange = "\e[38;5;208m";
$arr = "\e[0m";
$fgreen = "\e[32m";
$merah = "\e[91m";
$grey = "\e[37m";
$ciyan = "\e[36m";
function garox($message) {
    global $grey, $ciyan, $fgreen;
    $inputstyle = $arr . $ciyan . "[#] " . $grey . $message . ": " . $fgreen;
    echo $inputstyle;
}
function curl($url, $opt) {
    $ua = ['Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11', 'Opera/9.25 (Windows NT 5.1; U; en)', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)', 'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12', 'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:50', 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+2011-10-16 20:21:10', 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+', 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; pt) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.546 Mobile Safari/534.8+', 'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30', 'Mozilla/5.0 (Linux; U; Android 2.2.1; en-ca; LG-P505R Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16', 'iTunes/9.1 (Macintosh; U; PPC Mac OS X 10.2', 'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.65 Safari/535.11', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $opt);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua[array_rand($ua) ]);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    $exec = curl_exec($ch);
}
function cek($url) {
    $link = $url;
    $hndl = curl_init($link);
    curl_setopt($hndl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($hndl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_exec($hndl);
    $httpc = curl_getinfo($hndl, CURLINFO_HTTP_CODE);
    return $httpc;
}
echo $grey . "  
    ___         __      _    __ ___
   /   | __  __/ /_____| |  / /<  /
  / /| |/ / / / __/ __ \ | / / / / 
 / ___ / /_/ / /_/ /_/ / |/ / / /  
/_/  |_\__,_/\  /\____/|___(_)_/
             / /
            /_/ Â© wildan izzudin        
";
echo $ciyan . "
-----------------------------------------";
echo $ciyan . "
 â–Œâ”‚â–ˆâ•‘â–Œâ•‘â–Œ http://www.underxploit.me";
echo $ciyan . "
-----------------------------------------" . $grey . "

";
underxploit:
    garox("Link ");
    $a = trim(fgets(STDIN, 1024));
    echo $grey;
    garox("Visitor ");
    $b = trim(fgets(STDIN, 1024));
    echo $grey;
    if (strpos($a, '://') == false) {
        echo $merah . "[!] Link invalid ðŸ˜‘!!

" . $arr . $grey;
        gotounderxploit;
    } else if (!is_numeric($b)) {
        echo $merah . "[!] Visitor invalid (ex. 50) ðŸ˜•

" . $arr . $grey;
        gotounderxploit;
    }
    if (!cek($a) == 200) {
        echo $merah . "[!] Link mati tod !!

" . $arr . $grey;
        gotounderxploit;
    } else {
        echo $grey . "

[?] SUMBER LALU LINTAS
" . $ciyan . "=======================

" . $grey;
        echo $ciyan . "--[#] " . $grey . "Enter '" . $ciyan . "1" . $grey . "' untuk random (" . $orange . "google, yahoo, facebook, dll" . $grey . ")
";
        echo $ciyan . "--[#] " . $grey . "Enter '" . $ciyan . "2" . $grey . "' untuk custom (" . $orange . "ex. https://google.com" . $grey . ")

" . $fgreen;
        sumber:
            garox("Your Choice ");
            $c = trim(fgets(STDIN, 1024));
            echo $grey;
            if (empty($c)) {
                echo $merah . "[!] Percuma gua buat opsi kek gini kalo gak dipake ðŸ˜ !!

";
                gotosumber;
            } else if ($c == "1") {
                $opt = ['https://www.google.co.id', 'https://www.youtube.com', 'https://www.google.com', 'https://underxploit.blogspot.com', 'https://www.yahoo.com', 'https://www.yandex.ru', 'https://www.wikipedia.org'];
                echo $fgreen . "
[#] Mengirim ... 
";
                for ($i = 1;$i < $b + 1;++$i) {
                    echo $orange . "[" . $i . "]" . $grey . " Crot => ";
                    echo $ciyan . $a . "
" . $grey;
                    curl($a, $opt[array_rand($opt) ]);
                    if ($i == $b . " + 1") {
                        echo $fgreen . "[#] Selesai ...

";
                        echo $ciyan . "--[#] " . $grey . "Enter '" . $ciyan . "R" . $grey . "' untuk restart
";
                        echo $ciyan . "--[#] " . $grey . "Enter '" . $merah . "X" . $grey . "' untuk keluar

";
                        opinfo:
                            garox("Your Choice ");
                            $restar = strtoupper(trim(fgets(STDIN, 1024)));
                            if (empty($restar)) {
                                echo $merah . "[!] Susah2 gua buat opsi malah gak dipake, bangsat ðŸ˜ !!

";
                                gotoopinfo;
                            } else if ($restar == "R") {
                                echo $ciyan . "
--------------------------------------";
                                echo $ciyan . "
 â–Œâ”‚â–ˆâ•‘â–Œâ•‘â–Œ http://www.underxploit.me";
                                echo $ciyan . "
--------------------------------------" . $grey . "

";
                                gotounderxploit;
                            } else if ($restar == "X") {
                                system('exit');
                                echo $ciyan . "
See you next crot ea budjang :*
" . $grey;
                            } else {
                                echo $merah . "[!] Diopsi gak ada pilihan '" . $orange . $restar . $merah . "' bego ðŸ˜ !!

";
                                gotoopinfo;
                            }
                        }
                    }
                } else if ($c == "2") {
                    sbr:
                        garox("Sumber ");
                        $vis = trim(fgets(STDIN, 1024));
                        if (empty($vis)) {
                            echo $merah . "[!] Lu pilih opsi 2 tapi gak diisi sumbernya, kentod ðŸ˜ !!

";
                            gotosbr;
                        } else {
                            echo $fgreen . "
[#] Mengirim ... 
";
                            for ($i = 1;$i < $b + 1;++$i) {
                                echo $orange . "[" . $i . "]" . $grey . " Crot => ";
                                echo $ciyan . $a . "
" . $grey;
                                curl($a, $vis);
                                if ($i == $b . " + 1") {
                                    echo $fgreen . "[#] Selesai ...

";
                                    echo $ciyan . "--[#] " . $grey . "Enter '" . $ciyan . "R" . $grey . "' untuk restart
";
                                    echo $ciyan . "--[#] " . $grey . "Enter '" . $merah . "X" . $grey . "' untuk keluar

";
                                    opinfo2:
                                        garox("Your Choice ");
                                        $restar = strtoupper(trim(fgets(STDIN, 1024)));
                                        if (empty($restar)) {
                                            echo $merah . "[!] Susah2 gua buat opsi malah gak dipake, bangsat ðŸ˜ !!

";
                                            gotoopinfo2;
                                        } else if ($restar == "R") {
                                            echo $ciyan . "
--------------------------------------";
                                            echo $ciyan . "
 â–Œâ”‚â–ˆâ•‘â–Œâ•‘â–Œ http://www.underxploit.me";
                                            echo $ciyan . "
--------------------------------------" . $grey . "

";
                                            gotounderxploit;
                                        } else if ($restar == "X") {
                                            system('exit');
                                            echo $ciyan . "
See you next crot ea budjang :*
" . $grey;
                                        } else {
                                            echo $merah . "[!] Diopsi gak ada pilihan '" . $orange . $restar . $merah . "' bego ðŸ˜ !!

";
                                            gotoopinfo2;
                                        }
                                    }
                                }
                            }
                        } else {
                            echo $merah . "[!] Diopsi gak ada pilihan '" . $orange . $c . $merah . "' palkon ðŸ˜ !!

";
                            gotosumber;
                        }
                    }
                    
