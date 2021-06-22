<?php




//set connection variables 
 

  //connection to server & database 
  $connection = mysqli_connect('localhost','root' ,'', 'control-panel' );

  //check connection 
  if(mysqli_connect_errno($connection)){
    printf("Connect failed: %s\n", mysqli_connect_errno());
  }
  else{
  echo "Connection successfull";}
?>
