<?php 

require_once 'functions.php';

if (isset($_GET["lunghezza"])) {
  
  $lunghezza_psw = $_GET["lunghezza"];
  
  $password = generaPassword($lunghezza_psw);
  
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Php-strong-password-generator</title>
</head>
<body class="text-center p-3  ">

<h1>Strong Password Generator</h1>
<h2 class="p-4">Genera una password sicura</h2>

<form class="d-flex flex-column  align-items-center  mb-5" action="index.php" method="GET">

 <label for="lunghezza">Inserire la lunghezza della password:</label>
 <input class="w-25 my-3 " type="number" name="lunghezza">
 <button class="btn btn-primary w-25 " type="submit">Genera</button>


</form>

<?php 

if (isset($password)) {
  
  echo "<h3>La password generata è: $password</h3>";

}

?>

</body>
</html>