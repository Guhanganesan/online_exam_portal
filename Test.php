<html>
<body background="x6.jpg">
<style>
td{color:white;font-weight:bold;font-size:18px;}
a{color:white;font-weight:bold;}


</style>


</body>
</html>

<?php
 //session_start();
  $m="PHP";
  $n="JAVA";
 //include("Db.php");
 
 
     $host="localhost";
     $user="id3242175_guha_5599";
     $pass="guha0804";
     
     $con=mysqli_connect($host,$user,$pass, "id3242175_guha");
 

 $email=$_POST['email'];
 $pass=$_POST['pass'];

$query = "select * from exam where
 Email='$email' and Passoword='$pass'";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_row($result);

		 if($row[4]== $email&& $row[5]== $pass)
		 { 
		      $_SESSION['mob']=$row[3];
echo "

<form action='' method=''>
<center><table>
  <tr>
    <td colspan='2'>Welcome $row[0]!!!</td>
       
  </tr>
  <tr>
    <td>Name</td>
    <td>$row[0]</td>
    
  </tr>
  <tr>
    <td>Father</td>
    <td>$row[1]</td>
    
  </tr>
  <tr>
    <td>Gender</td>
    <td>$row[2]</td>
    
  </tr>
  <tr>
    <td>Mobile</td>
    <td>$row[3]</td>
    
  </tr>
  <tr>
    <td>Email</td>
    <td>$row[4]</td>
    
  </tr>
  <tr>
    <td>Password</td>
    <td>$row[5]</td>
    
  </tr>
  <tr>
    <td>Address</td>
    <td>$row[6]</td>
   
  </tr>
  <tr>
    <td>Degree</td>
    <td>$row[7]</td>
  
  </tr>
  <tr>
    <td>Test</td>
    <td>$row[8]</td>
    
  </tr>
    
</table>
</center>
</form>";
         }


if($row[8]==$m)
		 {
			 echo "<a href='PHP.php' >CLIK HERE TO START A PHP TEST</a>";
			 return false;
		 }
if($row[8]==$n)
		 {
			 echo "<a href='JAVA.php' >CLIK HERE TO START A JAVA TEST</a>";
			 return false;
		 }
		 
		  else
		  {
			 //header('Location:Failed.php');
			 echo "<b style='color:white;'>Please check your username and password</b>";
			 echo "<body background='x6.jpg'> ";
			  
		  }                                                         
 
   ?>
