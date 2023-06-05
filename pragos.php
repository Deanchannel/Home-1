<?php
// Daftar ponsel yang akan dijadikan acak
$mobileDevices = [
  "ms-android-xiaomi-rvo2",
  "ms-android-samsung-galaxyS10",
  "ms-android-oneplus-7t",
  "ms-android-google-pixel4",
  "ms-android-lg-g8",
  "ms-android-sony-xperia10",
  "ms-android-nokia-9",
  "ms-android-oppo-findx3",
  // tambahkan lebih banyak perangkat seluler di sini
];

// Daftar versi Chrome yang akan dijadikan acak
$chromeVersions = [
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.2644j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.1234j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.5678j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.4321j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.9876j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.5432j0j4",
  "chrome..69i57j69i60l3j69i61j69i60j35i39j5i44.7890j0j4",
  // tambahkan lebih banyak versi Chrome di sini
];

$count = 0; // Jumlah URL yang telah dibuka

while (true) {
  // Merandom ponsel dan versi Chrome
  $randomMobileDevice = $mobileDevices[rand(0, count($mobileDevices) - 1)];
  $randomChromeVersion = $chromeVersions[rand(0, count($chromeVersions) - 1)];

  // Mengganti URL dengan ponsel dan versi Chrome yang diacak
  $url = "https://www.google.com/search?q=viraltekno&oq=viraltekno&aqs=" . urlencode($randomChromeVersion) . "&client=" . urlencode($randomMobileDevice) . "&sourceid=chrome-mobile&ie=UTF-8";

  // Membuat request cURL
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

  // Eksekusi request cURL
  $response = curl_exec($ch);

  // Cek apakah URL berhasil dibuka selama 3 detik
  if ($response !== false) {
    $count++;
    echo "URL berhasil dibuka selama 3 detik. URL: " . $url . "\n";
    echo "Jumlah URL yang telah dibuka: " . $count . "\n";
  } else {
    echo "Gagal membuka URL. URL: " . $url . "\n";
  }

  // Menutup koneksi cURL
  curl_close($ch);

  // Tunggu selama 3 detik sebelum membuka URL berikutnya
  sleep(3);
}
?>
