<html>
<head>
   <h1> LOGIN FORM </h1>
</head>
<body>
  <form action="" method="POST">
    <table>
       <tr>
        <td>Username:</td>
        <td><input type="text" name="username" required></td>
       </tr>
       <tr>
        <td>Password:</td>
        <td><input type="password" name="password" required></td>
       </tr>
       <tr>
        <td><input type="submit" value="Submit"></td>
       </tr>
   </table>
   <?php
 $username=$_POST['username'];
 $password=$_POST['password'];

 if (!empty($username) || !empty($password)){
   $host="localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbname="login";
   $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 }else{
  $sql="INSERT Into page(username,password) values('$username','$password')";
  if($conn->query($sql)){
  echo "New record inserted successfully";
   }
else{
   echo "Error: ".$sql."<br>".$conn->error;
}
   $conn->close();
}
}
else{
 echo "All fields are required";
 die( );
} 
?>
  </form>
</body>
</html>