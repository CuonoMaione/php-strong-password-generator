<?php

 function getRandomPassword($passwordLength){
     $characters = 'qwertyuiopasdfghjklzxcvbnm';
     $numbers = '1234567890';
     $simbols = '!"£$%&/()=@#][';
     $passwordLength = $_GET['pswLenght'];

 $actualCharacters = strtoupper($characters) . $characters . $numbers . $simbols; 
 
 $newPassword = '';


 if ($passwordLength >= 6 && $passwordLength <= 30) {
     while ( strlen($newPassword) < $passwordLength ) {
         
         $randomIndex = rand(0, strlen($actualCharacters) - 1);

         $newPassword .= $actualCharacters[$randomIndex];
     }
     return $newPassword;
 }else {
     return false;
 }

return $actualCharacters ;
}




?>