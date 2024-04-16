<?php 

function generaPassword($lunghezza) {
  
  $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  
  $lunghezza_caratteri = strlen($caratteri);
  
  $password = '';
  
  for ($i = 0; $i < $lunghezza; $i++) {
      $password .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
  }
  
  return $password;
  
}

?>