<?php
$tableau =[
    0 =>["Dark", "vador", "35 ans", "l'etoile noire", "passions"=>["puissance","tuer des jedi"]],
    1 =>["skywalker", "anakin", "20 ans", "tattoine", "passions"=>["devenir jedi","course de podracer"]],
    2 =>["organa", "leia", "20 ans", "alderan", "passions"=>["devenir imperatrice","s'habiller en garcon"]],
    3 =>["solo", "han", "30 ans", "faucon millenium", "passions"=>["pilote","tuer des stormtrooper"]],
    4 =>["chewbacca", "chewie", "60 ans", "faucon millenium", "passions"=>["co-pilote","tuer des stormtrooper"]],
    5 =>["maitre", "yoda", "750 ans", "dagobah", "passions"=>["formez des jedi","manger de racines"]],
    6 =>["soldat", "stormtrooper", "35 ans", "passions"=>["faire briller son armure","apprendre a tirer droit"]],
];

foreach ($tableau as $student){
    foreach ($student as $x => $y){
        if(is_array($y)){
            $count = count($y);
            echo $x . " : ";
            for ($i=0; $i < $count; $i++){
                echo $y[$i]. ", ";
            }
            echo "<br>";
        }
        else {
            echo $y."<br>";
        }
    }
    echo "<br>";
}