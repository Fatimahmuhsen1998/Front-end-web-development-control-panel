# Front-end-web-development-control-panel

-<h2> Real-time-Manual-Control-Panel-for-Robots:<h2>


<h5>This code stores the robot control panel instructions in a database and displays it on another PHP file using XAMPP localhost.

This repositery includes index.php file which contains the robot controller once a button is clicked it will be stored in a database and will read from the database and display it<h5>

  to run this code :

installing XAMPP and create a database called 'control-panel', and a table called 'panels'(see the photo below)

creating a user for the database with the following information : User name, Host name,and password
  
   $connection = mysqli_connect('localhost','root' ,'', 'control-panel' );
  
  ![image](https://user-images.githubusercontent.com/86187090/122928610-b74de500-d372-11eb-8210-bb9bf3610849.png)

  
  
  ![image](https://user-images.githubusercontent.com/86187090/122914033-e4929700-d362-11eb-9700-3f4d493abbf3.png)
