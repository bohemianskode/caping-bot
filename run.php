<? php
// Bohemia Vicky [BOHEMIANSKODE]
echo  "Masukkan UserId / Uid:" ;
$ uid  	= trim ( gadget ( STDIN ));
echo  "Masukkan N ID:" ;
$ n  	= trim ( gadget ( STDIN ));
echo  "Masukkan Jumlah Suntik:" ;
$ JUMLAH 	= trim ( gadget ( STDIN ));
echo  "SetSleep:" ;
$ wait 	= trim ( fgets ( STDIN ));
    $ i = 0 ;
sedangkan ( $ i < $ jumlah ) {
			tidur ( $ tunggu );
			$ i ++;
			flush ();
			
		$ news 		=	 berita ( $ uid , $ n );
		$ video 		=	 video ( $ uid , $ n );
		$ saham 		=	 saham ( $ uid , $ n );
		$ kode 		=	 kode ( $ uid , $ n );
		$ klik 		=	 klik ( $ uid , $ n );
	echo  "TUGAS BERITA $ berita \ n" ;
	echo  "TUGAS VIDEO $ video \ n" ;
	echo  "TUGAS BAGIKAN $ saham \ n" ;
	echo  "KODE TUGAS $ kode \ n" ;
	echo  "TUGAS KLIK $ klik \ n" ;
	
	}

 berita fungsi ( $ uid , $ n ) {
		$ rand = rand ( 1 , 9999 );
		$ ch = curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , "https://ai.caping.co.id/v2/event/news/view/$rand" );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers = array ();
				$ headers [] = "Kuki: u = $ uid; n = $ n" ;
				$ headers [] = "Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ hasil = curl_exec ( $ ch );
	return  $ result ;
}
 video fungsi ( $ uid , $ n ) {
		$ rand = rand ( 1 , 9999 );
		$ ch = curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , "https://ai.caping.co.id/v2/event/video/view/$rand" );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers = array ();
					$ headers [] = "Kuki: u = $ uid; n = $ n" ;
					$ headers [] = "Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ hasil = curl_exec ( $ ch );
	return  $ result ;
}
 berbagi fungsi ( $ uid , $ n ) {
		$ rand = rand ( 1 , 9999 );
		$ ch = curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , "https://ai.caping.co.id/v2/event/share/news/$rand" );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers = array ();
					$ headers [] = "Kuki: u = $ uid; n = $ n" ;
					$ headers [] = "Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ hasil = curl_exec ( $ ch );
	return  $ result ;
}
 kode fungsi ( $ uid , $ n ) {
		$ ch = curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , "https://ai.caping.co.id/v2/event/share/code" );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers = array ();
					$ headers [] = "Kuki: u = $ uid; n = $ n" ;
					$ headers [] = "Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ hasil = curl_exec ( $ ch );
	return  $ result ;
}
function  klik ( $ uid , $ n ) {
		$ ch = curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , "https://ai.caping.co.id/v2/event/share/click/push" );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
			$ headers = array ();
					$ headers [] = "Kuki: u = $ uid; n = $ n" ;
					$ headers [] = "Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ hasil = curl_exec ( $ ch );
	return  $ result ;
}
?>