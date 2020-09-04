#!/bin/bash
hijau=$(tput setaf 2)
merah=$(tput setaf 1)
cyan=$(tput setaf 6)
normal=$(tput sgr0)
is(){
O=$(curl -X POST "https://ai2.caping.co.id/v2/user/login/visitor" --silent \
-H "Accept: application/json" \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG"
-H "User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 5 Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.81 Mobile Safari/537.36;CapingNews/5.3.2" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "Market:googleplay"  \
-H "Authorization: BASIC YTE2ZDg4M2EwOWFhNGRkMzhkMGQ1MWFlYTU0MzFhMmI6MGQ4MzA1N2JhN2FlZTI0MThkZTIyNmQ4M2IwMDI5YjI="  \
-H "ts: 1599229044549"  \
-H "index: 18"  \
-H "Content-Type: application/json"  \
-H "Host: ai2.caping.co.id" \
-H "Action: Keep-Alive" -d '{"city":"Jakarta"}' | grep -Po '"'"user_name"'"\s*:\s*"\K([^"]*)')
echo -e "\t\033[0;34m[SELAMAT DATANG -> : $O]"
return
}
shuf -e "
${putih}SAYA TIDAK BERTANGGUNG JAWAB ATAS ANDA LAKUKAN
${hijau}-------------------------------
[ CAPING-NEWS ]
[ BY BOHEMIA-VICKY ]
${cyan}[ BOHEMIANSKODE ]
--------------------------------------
`is`
"
code(){
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/share/code" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "SHARE  _ code : $o3 | message :$o2"
return
}
video(){
code=$(echo $RANDOM)
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/video/view/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "VIDEO  _ code : $o3 | message :$o2"
return
}
news(){
code=$(shuf -i 1-99999 -n 1)
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/news/view/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "NEWS   _ code : $o3 | message :$o2"
return
}
klik(){
#74039409
#0000000046554754ffffffff8c8e8339
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/share/click/push" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "KLIK   _ code : $o3 | message :$o2"
return
}
#echo -n "UID :"; read uid
#echo -n "N ID :"; read n
share(){
code=$(shuf -i 1 s/d 99999 -n 1)
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/share/news/${code}" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
o2=$(echo -e "$O" | jq -r .message)
o3=$(echo -e "$O" | jq -r .code)
echo -e "ARTKL  _ code : $o3 | message :$o2"
return
}
getcoin(){
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/signin" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG" \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s | grep -Po '"'"message"'"\s*:\s*"\K([^"]*)')
echo "message : $0"
return
}
getRAN(){
O=$(curl --request GET "https://ai2.caping.co.id/v2/event/random" -L \
-H "Accept-Language: in" \
-H "NETWORKSTATE: FouthG"
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s | grep -Po '"'"message"'"\s*:\s*"\K([^"]*)')
echo "message : $0"
return
}
detatil(){
O=$(curl --request GET "https://ai2.caping.co.id/v2/user/ccsp/detail" -L \
-H "Cookie: u=`cat user.txt| cut -d "|" -f1`;n=`cat user.txt| cut -d "|" -f2`" \
-H "X-Requested-With: XMLHttpRequest" \
-H "Host: ai2.caping.co.id" \
-H "Connection: Keep-Alive" -s)
coin=$(echo -e "$0" | grep -Po '(?<="coin":)(.*?)(?=})' | cut -d "," -f1)
}
echo -e "${normal}Masukan Jumlah (1 s/d 9999) > "; read jumlah
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