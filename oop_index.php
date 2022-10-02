<?php
// echo "Echo example\n\t
// ex\n";
// print "<br>print example\n\t
// ex<br/>";

// $var="global variable";
// function f1($i){
//     // $var="local variable";
//     // global $var;
//     // echo $var;
//     echo"$i<br/>";
// }
// for($i=0;$i<10;$i++)
// {
//     f1($i);
//     if($i==5)
//     break;
//     else
//     continue;
// // do{
// // echo "hello";
// // }while(false);
// }


// function f2(&$val){
//     $val.="Good to see you";
// }
// $val="Hi There ";
// echo $val."<br/>";
// // f2($val);
// // echo $val."<br/>";
// // Call by reference
// f2($val);
// echo $val."<br/>";


// function f3(...$arg){
// foreach($arg as $item)
// echo $item;
// }
// f3("ali","mohammed","Osamah");
// if(function_exists('f3'))
// echo "done";
// else
// echo "None";

// if(strcmp("Ali","ali")!==0)
// echo "None";
// else echo "done";

// parse_str("name=Ali&age=10");
// echo $name.$age;


// Inheretance
class class1{
function f1(){
echo "parent class";
}
}
class class2 extends class1{
    // function class2($i){
    //     echo "$i Constracture<br/>";
    // }
    
    function __call($function,$args){
        echo "error called function with arguments";
// if called function with no existed arrguments

    }
    
    function __get($var){
        echo "error";
// if called variable or function not existed

    }


    function __set($var,$val){
        echo "sets";
        // if set unexisted variable value
    }
    function __construct($i){
        echo "$i Constracture<br/>";
    }


function __tostring(){
    return "to string function";
}    
function f2(){
    echo "son class";
}
}


$obj=new class2(1);
$obj->f1();
$obj->f2();
$obj->f;
echo $obj;

// to load when there is called class not exist
// function __autoload($obj){
//     echo "good";
//     }


echo serialize(array("ali","mohammed","good"));
print_r(unserialize(serialize(array("ali","mohammed","good"))));



?>