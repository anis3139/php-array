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

















