<?php
include("./conexao.php");

if(empty($_POST['email']) ){
 
  header("Refresh: 0;url=$build/recuperar-senha?erro=vazio4");
  exit();
}


  $email = filter_input(INPUT_POST, 'email');
  $sql = "SELECT * FROM usuario  WHERE `email` = '{$email}'"; 
  $result = $conn->query($sql); 


  if( $result ->num_rows > 0 ) {
    header("Refresh: 0;url=$build/recuperar-senha?erro=email");  
    header("Refresh: 0;url=$build/login?erro=email");
  } else {
    header("Refresh: 0;url=$build/recuperar-senha?erro=errado");  
  }
$conn->close();
?>