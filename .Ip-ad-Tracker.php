<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m
                          
\033[1;37m  ██████████████████████████████████████████████████████████\033[1;37m
\033[1;37m  █░░░░░░░░░░░░░░█░░░░░░░░░░░░░░░░███░░░░░░██████████░░░░░░█\033[1;37m
\033[1;37m  █░░▄▀▄▀▄▀▄▀▄▀░░█░░▄▀▄▀▄▀▄▀▄▀▄▀░░███░░▄▀░░░░░░░░░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░░░░░░░░░█░░▄▀░░░░░░░░▄▀░░███░░▄▀▄▀▄▀▄▀▄▀░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░█████████░░▄▀░░████░░▄▀░░███░░▄▀░░░░░░▄▀░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░░░░░░░░░█░░▄▀░░░░░░░░▄▀░░███░░▄▀░░██░░▄▀░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀▄▀▄▀▄▀▄▀░░█░░▄▀▄▀▄▀▄▀▄▀▄▀░░███░░▄▀░░██░░▄▀░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░░░░░░░░░█░░▄▀░░░░░░▄▀░░░░███░░▄▀░░██░░▄▀░░██░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░█████████░░▄▀░░██░░▄▀░░█████░░▄▀░░██░░▄▀░░░░░░▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░█████████░░▄▀░░██░░▄▀░░░░░░█░░▄▀░░██░░▄▀▄▀▄▀▄▀▄▀░░█\033[1;37m
\033[1;37m  █░░▄▀░░█████████░░▄▀░░██░░▄▀▄▀▄▀░░█░░▄▀░░██░░░░░░░░░░▄▀░░█\033[1;37m
\033[1;37m  █░░░░░░█████████░░░░░░██░░░░░░░░░░█░░░░░░██████████░░░░░░█\033[1;37m
\033[1;37m  ██████████████████████████████████████████████████████████\033[1;37m \033[1;36m2.0\033[1;37m                     
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m
\033[1;37m Owner   :    FARHAN MUH TASIM X GTA JISAN X GTA JISAN
\033[1;37m Facebook:    FARHAN MUH TASIM 
\033[1;37m Github  :     Gtajisan
\033[1;37m WhatsApp  :  +8801305057238
                    \033[1;36mTrack Any Ip Address
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mIp-ad-Tracker
         \033[01;33mAuthor \033[01;37m:- \033[01;36mFARHAN MUH TASIM X GTA JISAN
         \033[01;33mGithub \033[01;37m:- \033[01;36mGtajisan
         \033[01;33mTelegram \033[01;37m:- \033[01;36mshanto27

 \033[01;33mIp-ad-Tracker\033[01;32m is use \033[01;36mip-api \033[01;36mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  Ip-ad-Tracker >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating Ip-ad-Tracker.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/Gtajisan/Ip-ad-Tracker.git");
  system("cd ~/ && sudo git clone https://github.com/Gtajisan/Ip-ad-Tracker.git");
  system("cd ~/Ip-ad-Tracker && sh install");
  logo();
  echo "\n\033[01;32m              Ip-ad-Tracker updated !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mTrack IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mTrack Your IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mAbout us.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mHelp.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mUpdate Ip-ad-Tracker.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mExit \n\n\033[00m";
  $inp = readline('  Ip-ad-Tracker >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Exiting .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Bye ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Invalid Command \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
