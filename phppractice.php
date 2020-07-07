<?php

// $students=[
// "Rahim",
// "Karim",
// "Abbas",
// "Rafik",

// ];

// print_r ($students);
// array_push($students, "salam");
// print_r ($students);
// array_pop($students);
// print_r($students);
// array_unshift($students,"anis");
// print_r($students);
// array_shift($students);
// print_r($students);
// $n= count($students);
// for($i=0; $i<$n; $i++){
//     echo $students[$i]."\n";
// }







//associative array

// $foods=[
//     'vegitable'=>'carrot,potatto,capsocum',
//     'fruits'=> 'apple,orange,mango',
//     'drinks'=>'milk,water'
// ];

// foreach($foods as $key=>$value){
//     echo $key."=".$value."\n";
// }




//explode

// $vegetables= explode(', ','potato, carrot, brinjal');
// print_r($vegetables);

// $vegetables= join(", ",$vegetables);
// print_r($vegetables);

// $vegetables= preg_split('/(, |,)/','potato, carrot, brinjal,toto,poto, goto, sogo');
// print_r($vegetables);




//multi dimantional array
// $sample=[
//     [1,2,3,4],
//     [4,5,5,6,6,8],
//     [8,5,4,7,5,6,9,9],
//     [5,8,7,4,[3,2,5,6]]
// ];
// echo $sample[3][4][3];










// associative array to string to array
// $student=[
//     'faname'=>'Salam',
//     'lname'=>'kalam',
//     'age'=>'17',
//     'class'=>8,
//     'section'=>'B'

// ];


// print_r($student);

// $serialized=serialize($student);
// echo $serialized;
// print_r(unserialize($serialized));


// $jsondata=json_encode($student);
// echo $jsondata;
// $jsondata2=json_decode($jsondata, true);
// print_r($jsondata2);


//deep copy

// $person=array(
//     'fname'=>'Hello',
//     'lname'=>'World'
// );




// $personData= $person;   // add & in before of variable it changes full data or it make refrance.
// $personData['lname']='Pluto';
// print_r($person);
// print_r($personData);


// function printData(&$person){
//     $person['fname'].=" changed";
//     print_r($person);
// }
// printData($person);
// print_r($person);


//unset data in array

// $person=array(
//         'fname'=>'Hello',
//         'lname'=>'World'
//     );

// unset($person['lname']);\
// print_r($person);





//Empty string

// $name='55';

// if(isset($name)){
//  echo "Name is set";
// }else{
//     echo "Name is not set";
// }

// echo "\n";
// if(empty($name)){
//     echo "name is set and its emplty";
// }else{
//     echo "Name is not empty";
// }

// echo "\n";

// if(isset($name) && (is_numeric($name) || $name!='')){
//     echo "Name is set and not empty";
// }else{
//     echo "Name is either not set or its empty";
// }



//extract and slice

// $fruits=['mango','banana','orange','jackfruits','pulm','apple'];

// $fruitsData=array_slice($fruits,2,2); //true
// print_r($fruitsData);

// echo "\n";

// $random=["a"=>10,"b"=>12,"c"=>14,10=>15,"d"=>16,"e"=>18,"f"=>20];

// $randomData=array_slice($random, 2,-1);
// print_r($randomData);
// echo "\n";
// $randomData=array_slice($random, 2,-1, true);
// print_r($randomData);


//array splice (modify main array)
// $fruits=['mango','banana','orange','jackfruits','pulm','apple'];

// $newfruits=array("dates","pineapple");
// $fruitsData=array_splice($fruits,2,-1,$newfruits);
// print_r($fruitsData);
// print_r($fruits);
// echo "\n";





//array marge or +
// $random=["a"=>10,"b"=>12,"c"=>14,10=>15,"d"=>16,"e"=>18,"f"=>20];
// $r1=array_slice($random,0,2, true);
// $r2=array_slice($random,3,null,true);
// $r3=array("j"=>45,"k"=>12);

// $randomData=$r1+$r3+$r2;

// print_r($randomData);









// sort and asort
// $randoms=["a"=>10,"b"=>12,"c"=>14,10=>15,"d"=>16,"e"=>18,"f"=>20];
// $random=[2,5,5,8,8,5,4,5,8];
// //sort($random);
// //print_r($random);

// asort($random);
// print_r($random);

// $n=count($random);

// // loop with changes data
// foreach($random as $r){
//     echo $r."\n";
// }

// // reverce sort
// arsort($random);
// print_r($random);



// // Key sort
// ksort($randoms);
// print_r($randoms);



// // Key reverce sort
// krsort($randoms);
// print_r($randoms);


// //sort string and case insansative sort

// $fruits=["apple","banana","Jackfruits","orange","Apple","Banana"];

// sort($fruits, SORT_STRING | SORT_FLAG_CASE);

// print_r($fruits);





//Searce

// $randoms=["a"=>10,"b"=>12,"c"=>14,10=>15,"d"=>16,"e"=>18,"f"=>20];
// $random=[2,5,5,8,8,5,4,5,8];

// if(in_array(4,$random)){
//     echo "Result Found"."\n";
// }else{
//    echo "Result not found";
// }

// $offset=array_search(4,$random);
// echo $offset."\n";


// if(key_exists('e',$randoms)){
//     echo "Key is exists";
// }else{
//    echo "Not found";
// }



// //searce in assoc and diff

// $num1=['a'=>1,'b'=>2, 'c'=>3,'d'=>4,'e'=>5];
// $num2=['a'=>2,'b'=>2,'f'=>3,'d'=>6,'e'=>9];

// $common=array_intersect($num1,$num2);
// print_r($common);

// $commonassoc=array_intersect_assoc($num1,$num2);
// print_r($commonassoc);

// $diff=array_diff($num1,$num2);
// print_r($diff);


// $diff2=array_diff_assoc($num1,$num2);
// print_r($diff2);









//array walk, map, filter


// $someNumber=[1,2,3,4,5,6,7,8,9,10,11,12];

// function squire($n){
//     printf("This number %s multiple is %s", $n, $n*$n);
//     echo "\n";
// }

// array_walk($someNumber,'squire');



// function cube($n){
//     return $n*$n*$n;
// }

// $cubeNumber=array_map('cube',$someNumber);

// print_r($cubeNumber);

// function even($n){
//     return $n%2==0;
// }

// function odd($n){
//     return $n%2==1;
// }

// $evenNumber=array_filter($someNumber,'even');
// $oddNumber=array_filter($someNumber,'odd');

// print_r($evenNumber);
// print_r($oddNumber);


// $name=['jalal','kamal','arif','jamal','jashim','jubayer'];

// function nameFilter($nm){
//     return $nm[0]=='j';
// }

// $filterbyj=array_filter($name,'nameFilter');

// print_r($filterbyj);








//array utility function or array reduce

// $number=[1,2,3,4,5,6,7,8,9];

// function sum($oldvalue, $newvalue){
//     if($newvalue%2==0){
//        return $oldvalue+$newvalue;
//     }
//     return $oldvalue;
// }

// $total=array_reduce($number,'sum');
// echo $total;





//pass data to varriable in array

// $color=[20, 30, 40];
// list($red,$green,$blue,)=$color;

// echo $green;





// Range in array

// $number=range(20,30);
// print_r($number);




// foreach(range(0,50,3) as $number){
//     if($number>0){
//         echo $number."\n";
//     }
 
// }




//random number and shuffle


// $number=range(20,40);
// $random=mt_rand(0,20);
// echo $random;


// shuffle($number);
// print_r($number);
// $randomNumber=$number[3];
// echo $randomNumber;



