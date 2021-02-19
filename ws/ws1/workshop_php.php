<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop php</title>
    <style>
        h2 {
            color: #B3EFB2;
            background-color: #2B193D;
            padding-left: 5vw;
        }

        h4 {
            color: #001A23;
            background-color: #B3EFB2;
            padding-left: 5vw;
        }

        .ennonce {
            background-color: #ebd4cb;
            padding: 15px;
        }
    </style>
</head>


<body>
    <div class="ennonce">
        <h2>Les Conditions</h2>
        <h4>1- exercice pour condition if()</h4>
        <?php
        $age = 21;
        $sexe = "homme";
        if (($age >= 21 && $age <= 40) && ($sexe == "femme")) {
            echo "Bienvenue approprié <br>";
        } else {
            echo "Pardon ! Non approuvé <br>";
        }
        ?>


        <h4>2 - exercice condition :</h4>
        <?php
        echo "<h5> Q1: </h5>";
        $note = 9;
        if ($note >= 18 && $note <= 20) {
            echo " grade A <br>";
        } elseif ($note >= 14 && $note < 18) {
            echo " grade B <br>";
        } elseif ($note >= 10 && $note < 14) {
            echo " grade C <br>";
        } elseif ($note >= 0 && $note < 10) {
            echo " grade D <br>";
        } else {
            echo "Ce n'est pas une note valide. <br>";
        }

        echo "<h5> Q2: </h5>";
        $nb = 21;
        if ($nb % 3 == 0 && $nb % 7 == 0) {
            echo "$nb est un multiple de 3 et 7<br>";
        } else {
            echo "$nb n'est pas un multiple de 3 et 7<br>";
        }

        echo "<h5> Q3: </h5>";
        $nombre1 = 10;
        $nombre2 = 20;
        $operation = "/";
        switch ($operation) {
            case "+":
                $result = $nombre1 + $nombre2;
                echo "$nombre1 + $nombre2  =" . $result . "<br>";
                break;
            case "-":
                $result = $nombre1 - $nombre2;
                echo "$nombre1 - $nombre2  =" . $result . "<br>";
                break;
            case "*":
                $result = $nombre1 * $nombre2;
                echo "$nombre1 * $nombre2  =" . $result . "<br>";
                break;
            case "/":
                $result = $nombre1 / $nombre2;
                echo "$nombre1 / $nombre2  =" . $result . "<br>";
                break;

            default:
                echo "Merci <br>";
        }

        echo "<h4> boucle for </h4>";

        for ($i = 1; $i <= 10; $i++) {
            for ($nb = 1; $nb <= $i; $nb++) {
                echo $i;
            }
            echo "<br>";
        }
        ?>
        <h2> Les fonctions </h2>
        <?php
        function afficher($type, $name)
        {
            echo "<input type=" . $type . " name=" . $name . "id =" . $name . "><br><br>";
        }

        afficher("text", "name");
        afficher("text", "password");
        afficher("date", "date");
        afficher("radio", "radio");
        afficher("checkbox", "checkbox");
        afficher("submit", "Envoyer");
        ?>

        <?php
        function image($url, $w)
        {
            echo "<img src=" . $url . " width=" . $w . "><br><br>";
        }
        image("https://cdn.pixabay.com/photo/2020/12/18/15/29/mountains-5842346_960_720.jpg", "400");
        image("https://cdn.pixabay.com/photo/2020/12/09/04/01/iceland-5816353_960_720.jpg", "600");

        ?>

        <h2>Les tableaux</h2>

        <?php

        function tableau($row, $col)
        {
            echo "<table border=1px style='width:100%; color:red; border-color: green;text-align:center;'>";
            for ($r = 0; $r < $row; $r++) {
                echo "<tr>";
                for ($c = 0; $c < $col; $c++) {
                    echo "<td>";
                    echo rand(0, 10);
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        tableau(5, 10);
        ?>


    </div>
</body>

</html>