<?php
echo " <br>";
  echo "////////////////////////// 1 ///////////////////// \n \n <br> <br> ";
 $length = 5;
 $width = 10;

 $area = ( $length *  $length );
  echo "Area: " .$area. "\n <br>"  ;


 $perameter = 2 * ( $length *  $length);
  echo " Perameter: " .$perameter. "\n <br>"  ;
 
  echo "////////////////////////// 2 ///////////////////// \n \n <br> <br>";
 
 $amount = 50;

 $Vat = ( $amount * ( 15 / 100 ) ) ;
  echo "Vat : " .$Vat. "\n \n <br> <br>"  ;


 echo "////////////////////////// 3 ///////////////////// \n \n <br> <br> ";

  $number1 = 50;
 
  echo  "\n <br> ";
  echo "Number 1 = " .$number1. "\n <br> ";

  if($number1 % 2 === 0){
  	echo "Number 1 is Even !! \n \n <br> <br>";
  }
  else
	echo "Number 1 is Odd!! \n \n <br> <br>";

  echo "////////////////////////// 4 ///////////////////// \n \n <br> <br> ";

$number1 = 1500;
$number2 = 500;

if ($number2 > $number1) {
	echo $number2." is larger than " .$number1. "\n \n <br> <br>";
}
else
	echo $number1." is larger than " .$number2. "\n \n <br> <br>";



  echo "////////////////////////// 5 ///////////////////// \n \n <br> <br> ";
 
 for ( $i = 10 ; $i <= 100 ; $i ++ ) {  

 	if(  $i % 2 !== 0) {
 		echo $i. " is Odd \n <br>" ;
 	}
 }
 echo "\n <br>" ;

 echo "////////////////////////// 6 ///////////////////// \n \n <br> <br> ";
 
$array = [ "aiub" , "Brac" , "NSU" , "IUB" , "Aust"  ] ;

$find = "Brac" ;
$count = 0 ;

for ($i = 0 ; $i < count($array) ; $i ++ ) { 
	if( $array [ $i ] === $find ){
		echo $find. " is in " .$i. " number index \n \n <br> <br>";
		$count = $count + 1 ;
	}
		}
		if ($count === 0) {
			 echo  "Couldn't find any match \n \n <br> <br>";
		}

 echo "////////////////////////// 7 ///////////////////// \n \n <br> <br> ";

$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo "\n <br>";
}
echo "\n \n <br> <br>";
$star = 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {
        
         echo $star ;
         $star++ ;
	}
	$star = 1 ;
	echo "\n <br>" ;
}

echo "\n \n <br> <br>";


$array = [ "A" , "B" , "C" ];
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
        echo $array[$column] ; 
	}
	echo "\n <br>";
}
echo "\n \n <br> <br>";

 echo "////////////////////////// 8 ///////////////////// \n \n <br> <br> ";

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
	echo "\n <br>";
}
echo "\n \n <br> <br>";


$count = 3;
for ( $row = 0 ; $row != 3 ; $row ++ ) { 
	for ( $column = $count ; $column <= 3  ; $column ++ ) {
        
         echo $array[$row][$column] ;
         $star++ ;
	}
	$count -- ;

	echo "\n <br>";
}


?>