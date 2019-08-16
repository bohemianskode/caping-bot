#!/bin/bash
hijau=$(tput setaf 2)
merah=$(tput setaf 1)
cyan=$(tput setaf 6)
normal=$(tput sgr0)
is(){
O=$(curl -X POST "https://ai.caping.co.id/v2/user/login/visitor" --silent \
-H "Accept: application/json" \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; CPH1823 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 Mobile Safari/537.36;CapingNews/5.0.4" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "Market:googleplay"  \
-H "Content-Type: application/json" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -d '{"city":"Jakarta"}' | grep -Po '"'"user_name"'"\s*:\s*"\K([^"]*)')
echo -e "\t\033[0;34m[SELAMAT DATANG -> : $O]"
return
}
shuf -e "
${merah}SAYA TIDAK BERTANGGUNG JAWAB ATAS ANDA YG LAKUKAN
${hijau}-------------------------------
[ NUYUL CAPING-NEWS ]
[ BY WIDHISEC ]
${cyan}[ ZSECC0DE-CREW.ID]
--------------------------------------
`is`
"
code(){
O=$(curl --request GET "https://ai.caping.co.id/v2/event/share/code" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "SHARE  _ code : $o3 | message :$o2"
return
}
video(){
code=$(echo $RANDOM)
O=$(curl --request GET "https://ai.caping.co.id/v2/event/video/view/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "VIDEO  _ code : $o3 | message :$o2"
return
}
news(){
code=$(shuf -i 1-99999 -n 1)
O=$(curl --request GET "https://ai.caping.co.id/v2/event/news/view/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "NEWS   _ code : $o3 | message :$o2"
return
}
klik(){
#61562228
#000000000b7e48dd0fee14e10fee14e1
O=$(curl --request GET "https://ai.caping.co.id/v2/event/share/click/push" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "KLIK   _ code : $o3 | message :$o2"
return
}
#echo -n "UID :"; read uid
#echo -n "N ID :"; read n
share(){
code=$(shuf -i 1-99999 -n 1)
O=$(curl --request GET "https://ai.caping.co.id/v2/event/share/news/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "ARTKL  _ code : $o3 | message :$o2"
return
}
getcoin(){
O=$(curl --request GET "https://ai.caping.co.id/v2/event/signin" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s | grep -Po '"'"message"'"\s*:\s*"\K([^"]*)')
echo "message : $O"
return
}
getRAN(){
O=$(curl --request GET "https://ai.caping.co.id/v2/event/random" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s | grep -Po '"'"message"'"\s*:\s*"\K([^"]*)')
echo "message : $O"
return
}
detatil(){
O=$(curl --request GET "https://ai.caping.co.id/v2/user/ccsp/detail" -L \
-H "Cookie: u=`cat uzer.txt| cut -d "|" -f1`;n=`cat uzer.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai.caping.co.id" \
-H "Connection: Keep-Alive" -s)
coin=$(echo -e "$O" | grep -Po '(?<="coin":)(.*?)(?=})' | cut -d "," -f1)
}
echo -ne "${normal}Amount (1-9999) > "; read jumlah
count=1;
while [ $count -le $jumlah ];do
getcoin
getRAN
code
video
news
klik
share
(( count++ ))
done
detatil;echo -e "\033[1;32m[+] TOTAL COIN ANDA SEKARANG -> ${normal}$coin"