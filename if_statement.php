<?php
// $age =20;
// if($age>=18){
//     echo "eligible to vote";
// }

// 2.definig and calling a function
// function greet (){
// echo "welcome to php";
// }
// greet();

//3. function with parameter
// function add($a,$b){
// echo $a +$b;
// }
// add(35,45);

// 4. function with return type
// function square($n){
//     return $n*$n;
// }
// $result = square(5);
// print($result)

// 5.default parameter 
// function welcome ($name ="guest"){
//     echo "hello".$name;
// }
// welcome();
// echo "<br>";
// welcome("Rita");

//6. passing by reference 
// function increment ($n){
//     $n++;
//     echo $n;
// }
// $x=5;
// increment($x);
// echo $x;


//7. recurion function
function factorial($n){
    if ($n<=1)
        return 1 ;
    return $n *factorial($n-1);
}
echo factorial(8)

?>


