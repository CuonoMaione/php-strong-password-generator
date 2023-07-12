ciaooo


<?php 

   if (isset($_GET['pswLength'])){

   }


    function getRandomPassword($passwordLength){
        $characters = 'qwertyuiopasdfghjklzxcvbnm';
        $numbers = '1234567890';
        $simbols = '!"£$%&/()=@#][';
    

    $actualCharacters = strtoupper($characters) . $characters . $numbers . $simbols; 
    
    $newPassword = '';

    if ($passwordLength > 1){
        while ( strlen($newPassword) < $passwordLength ) {
            $randomIndex = rand(0, strlen($actualCharacters) - 1);
            $newPassword = $actualCharacters[$randomIndex];   
        }
        return $newPassword;
  } else {
    return false;   
}

return $actualCharacters;
}
 var_dump(getRandomPassword(2));
?>