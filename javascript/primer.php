<?php

// $array6 = explode(',', $array3);
// for($i = 0; $i < count($array3); $i++)
// {
// 	echo $array6[$i];
// }
// $array3 = array('ron ', 'don ', 'son ');
// $array4 = array('bok ', 'vut ', 'tuy ');

// $array5 = array($array3, $array4);

//  // $array5[0].$array5[1];

//  for($i = 0; $i < 10; $i++)
//  {
//     echo $array5[0][$i];

//     for($i = 0; $i < 10; $i++)
//  {
//     echo $array5[1][$i];
//  }
//  }

 $array = array('ron ', 'don ', 'son ');
 $array2 = array('bok ', 'vut ', 'tuy ');
 $array3 = array($array, $array2);

 	
 
 for($i = 0; $i < 5; $i++)
 {
    echo $array3[0][$i];
    echo '<br>';

    for($i = 0; $i < 5; $i++)
 {
    echo $array3[1][$i];
    echo '<br>';
    
    
 }   
    
 }   

    // for($i = 0; $i < 10; $i++)
    // {
    //     echo $array3[1][$i];
    //     $i++;	
    // }
    

 

// echo $array5[0];

// $i = 0;
// foreach ($array5 as $key => $value) {
// 	echo $value[$i][0].$value[$i][1];
// 	$i++;
// }


// for($i = 0; $i<9; $i++){
// 	do{
//     echo $array5[0][$i];
//     }
//     while (empty($array5[0]));
//     do{
//         echo $array5[1][$i];
//     } 
//         while (empty($array5[1]));  	
// }

  // for ($i = 1; $i <= count($arr); $i++) 
  // { 
  //   echo $arr[$i]." "; 
  // } 


?>
