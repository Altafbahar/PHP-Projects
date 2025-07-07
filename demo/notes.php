<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 /*$a = 10 , int
 $b = 34.23 float these are variables 
 $c = "hello " string
 $d = True. Boolean 

 $a= 50;
$b = 30;
$c = $a + $b;
echo "the value of a is" .$a. "and the value of b is".$b. "and edition is ".$c;


$arr =  array("altaf", "sadaqat");
array is a data structure that allows you to store multiple values in a single variable.
print_r($arr); to print array 

constant will never be changed but variable can
define('PI',3.4);
echo PI;
$r = 12.45;
$a = PI*$r*$r;
echo "area is ".a;

Operators in php
1.unary, single operant a++;
2. Binary , has two operants 10+29;
3. ternary 


types of operators
1.Arithmical operators
echo (10+10). "<br>;
echo (10-10). "<br>;
echo (10*10). "<br>;
echo (10**10). "<br>;
echo (10%10). "<br>; Modulus uses for remaining value


2. Relational operators , used for relation between values or simply comparision 
>, <  >=  <=  == != === !== , generally using in if conditions, loops. 
example
$a = 50;
$b = 10;
echo ($a>$b);  output will be 1 , it is mean true.

$a = 50;
$b = 10;
echo ($a<$b);  output will be 0 , or nothing on the screen , it is mean false.


$a = 50;  int
$b = '50';  string
echo ($a == $b); but still the result will true because two= will check the datatyep.

$a = 50;  int
$b = '50';  string
echo ($a === $b); in this case it is not true , because it will check the datatype.

$a = 50;  int
$b = '50';  string
echo ($a !== $b); the output will be true.

$a = 50;  int
$b = '50';  string
echo ($a <> $b); the output will be true. because this is the sign of not equal to. 


$a = 50;  int
$b = '50';  string
echo ($a <=> $b); this is called spaceship operator , it can be +1, -1, 0 .


$a=10;
$b=10,
$c = 10;
if($a== $b == $c) 
echo "hello"
else
echo "bye"

the output will be error due to three value and boolean only can opereates by two values
but still we can compare like this (($a == $b )== $c), 

3. Assignment operators
4. Increment / Decrement operators ++,--; this is the unary operators catagory. 
example
$a = 40;
$a++; so it is means $a = $a+1;  post increment
++$a; so it is means $a = $a+1; pre increment 

$a = 50;
$b = ++a;
echo "a=".$a. "<br>";
echo "b=".$b. "<br>";  the out put will be
a = 51
b = 51 due to a pre increment


$a = 50;
$b = a++;
echo "a=".$a. "<br>";
echo "b=".$b. "<br>";

a = 51
b = 50 due to assign first then increment

$a = 50;
if(++$a>50)
echo "hello";
else
echo "bye";
in this case the output will be hello , because first increment then condition check

$a = 50;
if($a++>50)
echo "hello";
else
echo "bye"; the output will be bye , because first check the condition then increment. 

$a = 5;
$b = ++$a + $a++;

echo "a=".$a. "<br>";
echo "b=".$b. "<br>"
the output will be 
a = 6
b = 12

$a = 5;
$b = ++$a +$a++ ++$a;
      6     6     8 
a = 6
 b= 20 



5. logical operators
we use when we have multiple conditions
example
$a= 59;
$b =33;
if($a>20 && $b>30) can we write  and instead of its symbol
echo "hello";
else
echo "bye";
in this case both should be true


$a= 59;
$b =33;
if($a>20 || $b>30) 
echo "hello";
else
echo "bye"; if one ob both true so the output will be true

   $a= 59;
$b =33;
if($a and $b) 
echo "hello";
else
echo "bye"; the output will be hello , its mean true because if the values are not zero so it is considered as a true


$a = 10;
$b = 4;
if(++$a>50 && ++$b>10)
echo "hello ";
else 
echo "bye";

echo $a;
echo $b; the output will be , bye a = 11, b= 4 , the b will not increase because when the a is not true so no need to check the b
that is why && is called short circuit too.


$a = 10;
$b = 4;
if(++$a>10 || ++$b>10)
echo "hello ";
else 
echo "bye";

echo $a;
echo $b; 
so the output will be hello 11, 4 , still the value of b will  not be increased because the first condition is true so no need for to check 
next condition


$a = 10;
$b = 4;
if(!(++$a>10 || ++$b>10))
echo "hello ";
else 
echo "bye"; 
this is called not condition , it will make the true false.

$a = 5;
$b = !$a;
echo $a;
echo $b;

only a will be printed , and b will not because (not) means is not true or zero

string operators
$a = 10;
echo "the value of a is".$a;
the output will be ,   the value of a is 10

2nd method
$a = 10;
$str = "hello"
$str.= $a;
echo $str;
the output will be      hello 10

$a = 100;
$b = 10;
$b.=$a;
echo $b;
the output will be 10100 because this is not addition, but concatination 
6. string operators
7. Array operators
8. conditional operators  , but conditional statement is if ifelse, else
 it is ? :

 $a = 50;
 $b = 10;
 $str = $a>$b? "the first No is greater":"the second No is greater";
                    True                       false

                    the output will be ,    the first No is greater

$str = 500? "hello": "bye";
echo $str;   the output is hello



Function

inside the class is method, outside the class is function , or user defined is a function 
function is the block of code uses to reduce the redundency 

function display()   // defination
{
echo " first code "
}

display();           // call 
echo "end program";
output   first code end program

function sum($a, $b){   // parameters
$c = $a+$b;
echo $c;
}

sum(3,3);           // arguments


function sum(...$a){   this is called var args, when the paramters and arguments are not equal
$sum=0;
foreach($a as $){
$sum= $sum + $m}
echo "sum is".$sum;

}


sum(4,4);
sum(3,5,4);

factorial example
function factorial($n){
$f=1;
while($n!=0){
$f= $f*$n;
$n--;
}
return $f;
}

$m = factorial(5);
echo $m;                         this concept called return by value


copy by value and copy by reference difference

function show($a, $b)      call by value or copy by value
{
$a = $a+100;
$b = $b +33;
}
$a =50
%b = 34;
show($a,$b)
echo $a, $b;             the output will be 5034

function show(&$a, &$b)      call by reference or copy by reference
{
$a = $a+100;
$b = $b +33;
}
$a =50
%b = 34;
show($a,$b)
echo $a, $b;             the output will be 5034


=>  string  A string is a sequence of characters, typically used to represent text in programming.
It can include letters, numbers, symbols, and spaces.


$str = "new chapter of php";
$a = strlen($str);
echo $str."<br>";
echo $a;

$str = "new chapter of php";
$a = str_word_count($str);
echo $str."<br>";
echo $a;

$str = "new chapter of php";
$a = chunk_split($str,2,".");   to add . after every two characters
echo $str."<br>";
echo $a; 

$str = "new chapter of php";
$a = str_split($str,4);   
echo $str."<br>";
print_r($a); 

$str = "new chapter of php";
$a = strtoupper($str);
echo $a;

strtolower  to change the string to lower 

$str = "new chapter of php";
$a = substr_count($str,"php");  this is the sub string it will filter onlyphp words , and the output will be 1
echo $a;


$str = "new chapter of php";
$a = substr_count($str,"php",3); so it is mean it will calculate the php word after the 3rd index


$str = "new chapter of php";
$a = ucword($str); it will convert every first charachter of the word to upper case

to compare two string
$str1= "altaf";
$str2= "altaf";

if(strcmp($str1,$str2)==0)
echo "same";
else "not same";    the output will be ,    same

$str1= "altaf";
$str2= "Altaf";

if(strcmp($str1,$str2)==0)
echo "same";
else 
echo "not same";       the output will  be,   not same due to case sensitive

$str1= "altaf";
$str2= "Altaf";
f(strcasecmp($str1,$str2)==0)
echo "same";
else 
echo "not same";




Array
1. index array : Elements are stored with numeric indexes starting from 0.
<?php
$colors = ["Red", "Green", "Blue"];
echo $colors[0];  // Outputs: Red
?>

2. Associative array :Elements are stored with custom keys (strings or integers).

<?php
$person = [
    "name" => "Altaf",
    "age" => 25,
    "city" => "Lahore"
];
echo $person["name"];  // Outputs: Altaf
?>

Array creation method
<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Orange");

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br>";
}
?>

$fruits = array("Apple", "Banana", "Orange");
$i =0;
while($i<count($fruits)){
echo $fruits[$i];
echo "<br>";
$i++;
}

$fruits = array("Apple", "Banana", "Orange","Guava");
$new_array = array_slice($fruits,1,3);
print_r($new_array);
out put   Banana , orange, Guava

                   -4       -3        -2      -1
$fruits = array("Apple", "Banana", "Orange","Guava");
$new_array = array_slice($fruits,-3,3);
print_r($new_array);
output Banana, orange , Guava


Array in built function

$array1 = array("mon", "tue", "thu", "fri",2,);          
$array2 = array("mon", "tue",2);
$commen_array= array_intersect($array1, $array2);       this in built function used for to make a commen array
print_r($commen_array);


$array1 = array("mon", "tue", "thu", "fri",2,);          
$array2 = array("mon", "tue",2);
$commen_array= array_diff($array1, $array2);       this in built function used for comparison 
print_r($commen_array);

output is thu, fri

$array1 = array("mon", "tue", "thu", "fri",2,);
$array2 = array("mon", "tue",2,3);
$commen_array= array_diff($array2, $array1); now they will check array2 difference with array one
print_r($commen_array);
?>

the output will be 3

$array1 = array("mon", "tue", "thu", "fri",2,2,3,3,4,4,5);
$newarray= array_unique($array1);
print_r($newarray);
output Array ( [0] => mon [1] => tue [2] => thu [3] => fri [4] => 2 [6] => 3 [8] => 4 [10] => 5 ) every unique value will print


function multi($n)
{
return 5*$n;
}

$array = array(3,4,5,6,67,4);
$newarray = array_map('multi',$array);  this method will apply to every single value of array
print_r($newarray);        
output Array ( [0] => 15 [1] => 20 [2] => 25 [3] => 30 [4] => 335 [5] => 20 )



$array = range(1,20);
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
    }
    output 1234567891011121314151617181920              it will print the range from 1 to 20


$array = range(1,20,2);
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
}
    output 135791113151719






// Short syntax (preferred)
$numbers = [1, 2, 3, 4, 5];

// Associative Array
$user = array(
    "username" => "Altaf",
    "email" => "altaf@example.com"
);
?>

recommended format 
$user = [
    "username" => "Altaf",
    "email" => "altaf@example.com"
];



GLOBAL SCOPE
get and post get is not secure and post is 


cookies, and session
cookies and session manage the state of the data continuesly 
cookie only manage the data of client side
session ... server side
cookie is not safe
.... safe
cookie is a browser memory
usually we use http protocol to travel the data, and http protocol is a stateless protocol, so it is mean we can send the data only the nextpage
to receive the data rugulary in every page we use session or cookies


 */
?>
</body>
</html>