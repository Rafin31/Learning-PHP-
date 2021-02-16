<?php
echo "\n \n";
  echo "////////////////////////// 1 ///////////////////// \n \n ";
 $length = 5;
 $width = 10;

 $area = ( $length *  $length );
  echo "Area: " .$area. "\n"  ;


 $perameter = 2 * ( $length *  $length);
  echo " Perameter: " .$perameter. "\n"  ;
 
  echo "////////////////////////// 2 ///////////////////// \n \n ";
 
 $amount = 50;

 $Vat = ( $amount * ( 15 / 100 ) ) ;
  echo "Vat : " .$Vat. "\n \n"  ;


 echo "////////////////////////// 3 ///////////////////// \n \n ";

  $number1 = 50;
 
  echo  "\n ";
  echo "Number 1 = " .$number1. "\n ";

  if($number1 % 2 === 0){
  	echo "Number 1 is Even !! \n \n ";
  }
  else
	echo "Number 1 is Odd!! \n \n ";

  echo "////////////////////////// 4 ///////////////////// \n \n ";

$number1 = 1500;
$number2 = 500;

if ($number2 > $number1) {
	echo $number2." is larger than " .$number1. "\n \n";
}
else
	echo $number1." is larger than " .$number2. "\n \n";



  echo "////////////////////////// 5 ///////////////////// \n \n ";
 
 for ( $i = 10 ; $i <= 100 ; $i ++ ) {  

 	if(  $i % 2 !== 0) {
 		echo $i. " is Odd \n" ;
 	}
 }
 echo "\n" ;

 echo "////////////////////////// 6 ///////////////////// \n \n ";
 
$array = [ "aiub" , "Brac" , "NSU" , "IUB" , "Aust"  ] ;

$find = "Brac" ;
$count = 0 ;

for ($i = 0 ; $i < count($array) ; $i ++ ) { 
	if( $array [ $i ] === $find ){
		echo $find. " is in " .$i. " number index \n \n";
		$count = $count + 1 ;
	}
		}
		if ($count === 0) {
			 echo  "Couldn't find any match \n \n";
		}

 echo "////////////////////////// 7 ///////////////////// \n \n ";

$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo "\n";
}
echo "\n \n";
$star = 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {
        
         echo $star ;
         $star++ ;
	}
	$star = 1 ;
	echo "\n";
}

echo "\n \n";


$array = [ "A" , "B" , "C" ];
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
        echo $array[$column] ; 
	}
	echo "\n";
}
echo "\n \n";

 echo "////////////////////////// 8 ///////////////////// \n \n ";

$array = [ [ "1" , "2" ,"3" ,"A" ],
           [ "1" , "2" ,"B" ,"C" ],
           [ "1" , "D" ,"E" ,"F" ]  
         ];
$count = 3;
for ( $row = 0 ; $row != 3 ; $row ++ ) { 
	for ( $column = 0 ; $column < $count  ; $column ++ ) {
        
         echo $array[$row][$column] ;
         $star++ ;
	}
	$count-- ;
	echo "\n";
}
echo "\n \n";
$count = 3;

for ( $row = 0 ; $row != 3 ; $row ++ ) { 
	for ( $column = $count ; $column <= 3  ; $column ++ ) {
        
         echo $array[$row][$column] ;
         $star++ ;
	}
	$count -- ;

	echo "\n";
}


?>