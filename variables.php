<?php 
    /*
    szükséges programok: XAMPP (Appache MySQL),Git,GitHUB,repo,VSC
    <?php ... ?>
    Változók(angol kell lenni) 
    */
    $name = "patrik";
    $age = 18;
    $city ="Kiskunfélegyháza";
    var_dump($name);
    echo "<br>";
    echo "Name: $name életkor: $age lakohely: $city";
    //Konstans
    echo "<br>";
    define("PI",3.14);
    echo PI;
    //adattipusok:string,int,float,bool,array
    $message="lakatosarmadnoazifjabikmagyarszármazásúúriember";
    echo "<br>Kiir: ","$message","értéket","<br>\n";
    echo "<br>Kiir: $message értéket.<br>\n";
    echo "<br>Kiir: {$message}darab értéket.<br>\n";

    print "Kiir: ".$message."értéket"."<br>\n"

    /*
    git parancsok
     git inti:helyi repo incializálás
     git add . :fileok hozzad adása a staging areahoz
     git commit -m "message" :
     git remote add origin https://........... : hozzá rendeljük a helyit a távolihoz
        git config --global user.email "email" 
        git config --global user.name "name" 
     git branch -M main:a branch főág megnevezése
     git push -u origin main: hely vált a távoliba

    HF:szedd le a saját mappát a htdocsbas
    */
?> 