<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $universo = "DC";
        $heroi = "Flash";
        $cont = 5;

        for($i = 0; $i < $cont; $i++)
        {
            if($universo == "Marvel")
            {
                echo "O universo escolhido foi <b>Marvel</b>";
                if($heroi == "Hulk")
                {
                    echo "o herói foi o <b>Hulk</b><br>";
                }
                else if($heroi == "Thor")
                {
                    echo "o herói foi <b>Thor</b><br>";
                }
                else
                {
                    echo " mas o herói foi inválido";
                }
            }
        }
        
        while($cont < 10)
        {
            if ($universo = "DC")
            {
                echo "O universo escolhido foi <b>DC</b>";
                if($heroi == "Batman")
                {
                    echo "o herói foi o <b>Batman</b><br>";
                }
                else if($heroi == "Flash")
                {
                    echo "o herói foi <b>Flash</b><br>";
                }
                else
                {
                    echo " mas o herói foi inválido";
                }
            }
            else
            {
                echo "Universo Inválido";
            }
            $cont++;
        }
    ?>
</body>
</html>