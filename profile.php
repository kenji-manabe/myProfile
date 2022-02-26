<?php

$profile = new Profile();
$profile->present();

class Profile
{
  public function present()
  {
    echo "Name:";
    echo " 眞鍋 賢司";
    
    echo "Job:";
    echo " プログラマ";
    
    echo "Company:";
    echo " KeepAlive株式会社";
    
    echo "sellingPoint:";
    echo " 身長180センチ";
    
    echo "charmingPoint:";
    echo " 笑うとえくぼができる。そして、身長180センチ。";
  }
}
