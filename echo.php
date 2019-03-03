<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echo Komutları</title>
</head>
<body>
    <?php
        #Ekrana yazı yazdırma.
        echo "Kürşat Öztürk";
    ?>   
    <?php
        #Ekrana yazı yazdırma.    
        echo 'Kürşat Öztürk';
    ?>    
    <?php
        #Ekrana int. sayı yazdırma.
        echo 20;
    ?>    
    <?php
        #Ekrana int. sayı yazdırma.
        echo 7.70000;
    ?>    
    <?php
        #Tırnak harici kullanım. Önermem.
echo <<<END
        Yeni
        Kullanım
        Örneği
END;
    ?>
    <?php
        #Ekrana yazı yazdırırken tek tırnak kullanımı.
        echo 'Türkiye\'nin GNU hareketi';
    ?>
    <?php
        #Ekrana yazı yazdırırken tek tırnak kullanımı.
        echo "Meşaleciler 'SAYFAM'";
    ?>
    <?php
        #Ekrana yazı yazdırırken çift tırnak kullanımı.
        echo "Meşalecilerbilim \"SAYFAM\" ";
    ?>   
    <?php
        #Ekrana yazı yazdırırken çift tırnak kullanımı.
        echo 'Kürşat "Öztürk"';
    ?>    
    <?php 
        #Tek tırnak kullanmayınız zira değişkenler görünemez.
        $yazdirma = "18";
        echo "Kürşat - Öztürk - $yazdirma";
    ?> 
    <?php
        #Süslü parantez kullanımı ile kodlarınızın okunabilirliğini artırabilirsiniz.
        $parantezkullanimi = "benim sayfamdır";
        echo "Meşaleciler {$parantezkullanimi}";
    ?>
    <?php
        #Birden fazla ifade kullanımı.
        echo "Kürşat", "Öztürk", "18";
    ?>
    <?php
        #Birden fazla ifade kullanımı.
        echo "Meşaleciler";
        echo "Sayfam";
    ?>
    <?php
        #Parantez kullanımı.
        echo("Kürşat Öztürk");
    ?>
</body>
</html>