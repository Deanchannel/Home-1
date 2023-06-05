<?php
set_time_limit(0);
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
    global $grey, $ciyan, $fgreen, $arr;
    $inputstyle = $arr . $ciyan . "[#] " . $grey . $message . ": " . $fgreen;
    echo $inputstyle;
}

function curl($url, $opt) {
    $ua = [
        'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5',
        'Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11',
        'Opera/9.25 (Windows NT 5.1; U; en)',
        'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
        'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)',
        'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12',
        'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:50',
        'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+2011-10-16 20:21:10',
        'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+',
        'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; pt) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.546 Mobile Safari/534.8+',
        'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
        'Mozilla/5.0 (Linux; U; Android 2.2.1; en-ca; LG-P505R Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
        'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE52-1/031.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
        'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
        'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
        'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Mobile/15E148 Safari/604.1',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
        'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0',
        'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0',
        'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36',
        'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0',
        'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0',
        'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua[array_rand($ua)]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);
    curl_setopt($ch, CURLOPT_COOKIE, session_name() . '=' . session_id());
    if ($opt) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $opt);
    }
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function head() {
    global $merah, $grey, $fgreen, $arr;
    system('clear');
    echo $merah . "   ___ _            _                 _     \n";
    echo "  / __| |_  ___ __ | |__ _  _ __  __ _| |___ \n";
    echo " | (__| ' \/ -_) _| | / _| || | '  \/ _` | / -_)\n";
    echo "  \___|_||_\___\__| |_\__|\_,_|_|_|_\__,_|_\___|\n";
    echo $fgreen . "  [+] Auto Visitor Wordpress by Rizsyad AR\n\n";
}

head();
echo $arr . "   " . $ciyan . "[" . $fgreen . "1" . $ciyan . "]" . $fgreen . " Visit\n";
echo $arr . "   " . $ciyan . "[" . $fgreen . "2" . $ciyan . "]" . $fgreen . " Reload\n";
echo $arr . "   " . $ciyan . "[" . $fgreen . "3" . $ciyan . "]" . $fgreen . " Quit\n";
garox("Choice");
$op = trim(fgets(STDIN));

if ($op == 1) {
    head();
    garox("Target");
    $url = trim(fgets(STDIN));
    garox("Jumlah");
    $jumlah = trim(fgets(STDIN));

    for ($i = 1; $i <= $jumlah; $i++) {
        $request = curl($url, null);
        if ($request) {
            echo $arr . "   " . $ciyan . "[" . $fgreen . $i . $ciyan . "]" . $fgreen . " Sukses" . $arr . " [ " . $ciyan . "URL: " . $fgreen . $url . $arr . " ]\n";
        } else {
            echo $arr . "   " . $ciyan . "[" . $fgreen . $i . $ciyan . "]" . $merah . " Gagal" . $arr . " [ " . $ciyan . "URL: " . $fgreen . $url . $arr . " ]\n";
        }
    }
} elseif ($op == 2) {
    while (true) {
        head();
        garox("Target");
        $url = trim(fgets(STDIN));
        $request = curl($url, null);
        if ($request) {
            echo $arr . "   " . $ciyan . "[" . $fgreen . "+" . $ciyan . "]" . $fgreen . " Sukses" . $arr . " [ " . $ciyan . "URL: " . $fgreen . $url . $arr . " ]\n";
        } else {
            echo $arr . "   " . $ciyan . "[" . $fgreen . "-" . $ciyan . "]" . $merah . " Gagal" . $arr . " [ " . $ciyan . "URL: " . $fgreen . $url . $arr . " ]\n";
        }
        sleep(2);
    }
} elseif ($op == 3) {
    echo $arr . $ciyan . "Exiting...\n";
    exit();
} else {
    echo $arr . $merah . "Invalid choice!\n";
}
?>
