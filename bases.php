<?php
// $maVariable= "hello";
// echo "$maVariable world ! ";
// var_dump($maVariable);

// $var1=21;
// $var2="juin";
// echo "le $var1 $var2 est le 1er jour de l'été ";

// function myFunction(string $param1, string $param2="b"):string
// {
//     return " <$param2> $param1 </$param2>";

// }
// echo myFunction("Lorem Ipsum !");

// $tableau=[
//     "France"=>"Paris",
//     "Senegal"=>"Dakar"
// ];
// echo "La capitale du Sénégal est : $tableau[Senegal]";

// $temperature=[12, 15, 10, 10, 11, 15, 13, 17, 18, 23, 21, 21, 18, 19, 25, 26, 22, 18, 19, 20, 20, 17, 15, 12, 11, 13, 10, 13, 10, 8];
// $moyenne=array_sum($temperature)/count($temperature);
// echo "La moyenne : ". $moyenne."<br>";
// $temperature=array_unique($temperature);
// $sort=sort($temperature);
// for ($i=0; $i <5 ; $i++) { 
//     echo $temperature[$i];
// }

$nb=5;
echo "<ul>";
for ($i=1; $i <=10 ; $i++) { 
    $resulat=$nb*$i;
    // echo $resulat;

    echo "<li>" . $nb . " x " . $i . " = " . $resulat . "</li>";  
    
}
echo "</ul>";

?>