<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Psw</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>

        <div class="forms">
            <form action="./" method="GET">
            <label for="number">Lunghezza Password</label>
            <input type="number" name="pswLenght" id="pswLenght">
            <button type="submit">Invia</button>
            </form>

            Password =
          <?php 

    include_once __DIR__ . '/functions.php';

   if (isset($_GET['pswLength'])){

   };
   
   echo getRandomPassword(8);
?>

        </div>
    </div>
    
</body>
</html>
