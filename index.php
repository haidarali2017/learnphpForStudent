<?php 



// echo "My first PHP script!";

// echo  $para = "hello world";
// echo "<br/>";
// echo $x = 5;
// echo "<br/>";
// echo $y = 10.5;

// echo "<br/>";


//  addition
#echo 5+5;
// echo "<br/>";
// echo $x +$y;

// echo $age =29;

// echo "<br>";
// echo $AGE =27;

// echo "<br>";
// $txt = "W3Schools.com";

// echo "i love $txt";
// echo "<br>";
// echo "I love ".$AGE ." " .$txt;


// // string 

// $sting="ddsdd";

// echo "<br>";

// $x=20; // global scope
// function testFunction($x , $y){
//     // $x = 5;  // local scope
//     echo "<p>Variable x inside function is: $x + $y</p>";
// }


 //testFunction(5,6);  //run a function 

// echo "<p>Variable x outside function is: $x</p>";


// echo "<br>";
// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";

// echo "<br>";

// print "<h2>PHP is Fun!</h2>";
// print "Hello world!<br>";
// print "I'm about to learn PHP!";


// echo "<br>";
// PHP String
// $x = "Hello world!";
// $y = 'Hello world!';

// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";
// PHP integers

// An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
// echo "<br>";
//   $x = 5985;
// var_dump($y);

// A Boolean represents two possible states: TRUE or FALSE.
// $x = true;
// $y = false;

// function blooleanTest($x=true){
//  echo "hasan";
// }
// blooleanTest();


// var_dump($x);


// $x = 10.365;
// var_dump($x);

// $name=array('hasan','shishir',100,10.5,true);

// var_dump($name);


// class

class Cars{

    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color =$color;
        $this->model=$model;
    }

    public function message(){
        return "My  Car is a " .$this->color. " ".$this->model;
    }


}

$mycars= new Cars('black','volvo');

echo $mycars->message();
 
echo "<br/>";
$mycars= new Cars('red','bmw');
echo $mycars->message();
?>