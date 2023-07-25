<!DOCTYPE html>
<html lang="cs">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styly.css">
    </head>

    <body>
    
            <h1>Základy PHP - serverový jazyk</h1>
            <h2>Procvičování podmínek, switch, cykly, funkce, mat. operace</h2>
    

            <?php 

                // podmínky
                    $job = "programator";

                    if ($job == "hacker"){
                        echo "jsi hacker?";
                    } else if ($job == "programator"){
                        echo "jaké znáš programovací jazyky?";
                    } else{
                        echo "Jaké je tvé povolání?";
                    };

                    echo "<br>";
                    echo "<br>";
                

                // switch
                    $language = "angličtina";

                    switch ($language){
                        case "ruština";
                            echo "Kak zovut?";
                            break;
                        case "angličtina";
                            echo "What is your name?";
                            break;
                        case "němčina";
                            echo "Wie heist du?";
                            break;
                        default:
                            echo "Jaký jazyk umíš?";
                    };

                    echo "<br>";
                    echo "<br>";


                // Cyklus while
                    $pocitadlo = 5;

                    while ($pocitadlo < 10){
                        echo "podmínka splněna";
                        echo "<br>";
                        $pocitadlo ++;
                    };
                    echo "<br>";


                // Cyklus for
                    for($i = 0; $i <=7; $i++){
                        echo $i;
                        echo "<br>";
                    };
                    echo "<br>";


                // Cyklus foreach
                    $family = ["David", "Radim", "Jakub"];   

                    foreach($family as $member){
                        echo $member;
                        echo "<br>";
                    };
                    echo "<br>";


                // Funkce, funkce s parametrem
                    function pozdrav($jmeno){
                        echo "ahoj $jmeno";
                        echo "<br>";
                    };

                    pozdrav("Petr");
                    pozdrav("Pavla");
                    echo" <br>";

                    function calculation($n1, $n2){
                        $suma = $n1 + $n2;
                        echo $suma;
                        echo "<br>";
                    };
                    
                    calculation(20,10);
                    echo "<br>";
                    function age($rokNarozeni){
                        return 2023 - $rokNarozeni;
                    };

                    $vysledek = age(2020);

                    if($vysledek >=18){
                        echo "Je dospělý";
                    } else {
                        echo "Není dospělý";
                    }
                    echo "<br>";


                // Matematické operace
                    echo sqrt(25);
                    echo "<br>";
                    echo rand(1,6);
                    echo "<br>";
                    echo rand();
                    echo "<br>";
                    echo "<br>";


                // Stringy
                    $string = "Ahoj ";

                    echo strlen($string);
                    echo "<br>";

                    echo strtoupper($string);
                    echo "<br>";

                    echo strtolower($string);

                    echo trim($string);
                    echo "<br>";


                // Fce v rámci pole
                    $seznam = [200, 100, 5, -46, 625];

                    echo min($seznam);
                    echo "<br>";
                    echo max($seznam);
                    echo "<br>";
                    sort($seznam);
                    print_r($seznam);
                    echo "<br>";
                    echo "<br>";

            ?>

    
        <script src=""></script>
    </body>

</html>
