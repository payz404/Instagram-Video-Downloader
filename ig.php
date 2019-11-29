<?php


/*

     [+] Powerd By EZChecker [+]

#######################################                                     ##                                   ##
##    Tools Name : IGVideo Downloader## 
##    Coded By : Payz                ##
##    WhatsApp : 082246831089        ##
##                                   ##
#######################################



*/



system("clear");

require 'class.php';
$class = new igdownloader;

echo $class->banner();


echo "[+] Put your Link: ";
$url = trim(fgets(STDIN));
echo "[+] Outputname: ";
$output = trim(fgets(STDIN));



$del = <<<EOD
'"'
EOD;
echo "\n\e[35m[+] Downloading....\n\e[92m";
system('curl -# $(echo -e $(curl -s "'.$url.'" | grep -o "video_url.*" | cut -d '.$del.' -f3)) -o '.$output.'.mp4');
echo "\n\e[32m[+] Download Complete !\n\e[0m";
echo "\e[32m[+] Video Saved ".$output.".mp4\n\e[0m";



system("mv ".$output.".mp4 /sdcard/");






?>
