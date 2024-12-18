<?php

// $fruits=array( "apple" , "grapes" , "lichi");
// var_dump(  $fruits );  // finding the type 
// echo "<br>";
// echo implode(",",$fruits);
// echo "<br>"; 
// echo implode("|",$fruits); 
// //bs pehle sbko alag alag likhna hoga..implode krna hoga..
// echo "<br>";

// $mapping=array("fruit"=>"apple" , "game"=> "chess" , "quantity" => 5);
// var_dump( $mapping );
// echo "<br>";
// echo implode(",",$mapping); // only gives 2nd value..
// echo "<br>";
// echo $mapping['fruit'];
// echo "<br>";
// echo $mapping["game"]; 



// echo "<br>";
// foreach ($fruits as $i) {
//     echo $i . "<br>";
// }





//variables...
// $a="hey";
// $b="hi  ";
// echo "$a $b";
global $c;
$c=97;
function change(){
    global $c;
    echo $c;
    $d=6;echo $d;
    echo $c;
}
change();

?>
