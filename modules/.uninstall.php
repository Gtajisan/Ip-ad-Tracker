<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/Ip-ad-Tracker");
      system("rm -rf /data/data/com.termux/files/usr/bin/Ip-ad-Tracker");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/Ip-ad-Tracker");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/Ip-ad-Tracker");
    } else {
      system("rm -rf /usr/bin/Ip-ad-Tracker");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/Ip-ad-Tracker");
    }
  }
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
\033[1;37m Owner   :            FARHAN MUH TASIM X GTA JISAN X GTA JISAN
\033[1;37m Facebook:            FARHAN MUH TASIM 
\033[1;37m Github  :            Gtajisan
\033[1;37m WhatsApp  :          +8801305057238
                    \033[1;36mTrack Any Ip Address
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m

\033[00m
EOL;

    if (file_exists("/usr/bin/Ip-ad-Tracker")) {
      echo "\n\033[01;31m        Sorry Ip-ad-Tracker is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/Ip-ad-Tracker")) {
      echo "\n\033[01;31m        Sorry Ip-ad-Tracker is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        Ip-ad-Tracker is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
