<?php
$myvar='value';
$myvar2=3;
// var_dump : déboguer
// var_dump($myvar);

//Concaténation
// echo' <h1> ' .$myvar.' '.$myvar2 . ' </h1> ';

// Fonction
// function myFunction(string $name):void
// {
//     echo "Hello $name ! ";
// }
// myFunction('world');

// Fonction avec retour de données
function display(string $message):string
{
    return " <p> <em> $message </em> </p>";
}
$message=display('coucou');
echo $message;
?>