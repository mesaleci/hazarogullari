<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Fonksiyonu</title>
</head>
<body> 
    
    <?php
    #echo fonksiyonu ile aynı işlevi görmektedir, PHP tarafından yazılımcılara kolaylık olması için eklenmiştir.
    #echo fonksiyonu için geçerli olan tüm kurallar print fonksiyonu için de geçerlidir.
        print "Kürşat Öztürk";
    ?>    

    <?php
        print 8.7777;
    ?>

    <?php
        print 'Meşaleciler';
    ?>

    <?php 
        print 'Türkiye\'nin bekası için';
    ?>

    <?php
        $ad = "Kürşat";
        
        print "Ad = {$ad}";
        
    ?>

    <?php 
        print ("Meşalecilerbilim");
    ?>

    <?php
        print (9.60);
    ?>
</body>
</html>