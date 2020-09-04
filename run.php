<?php
//warna
$merah = "\033[1;34m";
$biru = "\033[1;36m";
$ijo = "\033[92m";
$putih = "\033[1;37m";
$pink = "\033[1;35m";
$red = "\033[1;31m";
$kuning = "\033[1;33m";
$t = "\n";
print $ijo."
  ____    _    ____ ___ _   _  ____ 
 / ___|  / \  |  _ \_ _| \ | |/ ___|
| |     / _ \ | |_) | ||  \| | |  _
| |___ / ___ \|  __/| || |\  | |_| |
 \____/_/   \_\_|  |___|_| \_|\____| 🇮🇩".$t;
echo $putih." By : bohemia-vicky | "."Kode".$t.$t;

include(readline($turkis."masukan config : "));
echo"$turkis bot start $putih \n";
print $kuning. "NEW BOT VIP CAPING...".$t.$kuning."[>] ".$putih."sedang login!! mohon tunggu...".$t;
sleep(2);

// login

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail");
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$head = array();
$head[] = "Cookie: u=$uid;n=$n";
$head[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$result = curl_exec($ch);
$js = json_decode($result, true);
$coin = $js['data']['coin'];
$money = $js['data']['money'];
if ($js['message'] == 'OK') {
        echo $turkis."[*] ".$putih."login: ".$ijo.$js['message'].$t;
        sleep(1);
        echo $turkis."[•] ".$putih."coin: ".$ijo.$coin.$putih." || money: ".$ijo."Rp.".$money.$t.$t;
} else
{
        echo $red."[!] login gagal || ".$js['message'].$t;
        exit;
}
sleep(1);
echo $turkis."[>] ".$putih."bot lagi jalan".$t;
sleep(1);
#######################################################
echo "Masukkan Jumlah Tuyul : ";
$jumlah = trim(fgets(STDIN));
echo "Kecepatan Nuyul : ";
$wait = trim(fgets(STDIN));
$i = 0;
while ($i < $jumlah) {
        sleep($wait);
        $i++;
        flush();

        $news = news($uid, $n);
        $video = video($uid, $n);
        $share = share($uid, $n);
        $code = code($uid, $n);
        $klik = klik($uid, $n);
        echo $pink. "TASK NEWS  $news\n";
        echo $biru. "TASK VIDEO $video\n";
        echo $merah. "TASK SHARE $share\n";
        echo $kuning. "TASK CODE  $code\n";
        echo $ijo. "TASK KLIK  $klik\n";

}

function news($uid, $n) {
        $rand = rand(1, 9999);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/news/view/$rand");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Cookie: u=$uid;n=$n";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
}
function video($uid, $n) {
        $rand = rand(1, 9999);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/video/view/$rand");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Cookie: u=$uid;n=$n";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
}
function share($uid, $n) {
        $rand = rand(1, 9999);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/news/$rand");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Cookie: u=$uid;n=$n";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
}
function code($uid, $n) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/code");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Cookie: u=$uid;n=$n";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
}
function klik($uid, $n) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/click/push");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Cookie: u=$uid;n=$n";
        $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
}
//result
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail");
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headr = array();
$headr[] = "Cookie: u=$uid;n=$n";
$headr[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
$result = curl_exec($ch);
$rls = json_decode($result, true);
$coin1 = $rls['data']['coin'];
$money1 = $rls['data']['money'];

echo $t."
	  =====| SUKSES|=====".$t;
echo $biru."[•] coin anda sekarang: ".$pink.$coin1.$putih." | duit lu: Rp.".$ijo.$money1.$t;

#######################################################
?>