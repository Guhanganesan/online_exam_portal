<head>
<head> <link rel="shortcut icon" href="php-1.png"> </link> <title> Register</title> </head>

</head>
<style>
 td{color:white;font-weight:bold;}

</style>
<body background="x1.jpg" >
<div style="float:left;"><form  action="Reg.php" method="post">
<table>
<tr> <td  align="center" colspan="3"> <marquee behavior="alternate" scrollamount="8">
  Please Register your details!!! </marquee></td> </tr>
<tr>
<td align="right">  <p>Name: </p>  </td><td> <input type="text" name="name" id="i1" required /> </td>
<td id="td1"><p id="p1"> </p> </td>
</tr>
<tr>
<td align="right"> <p>Father's Name: <p> </td><td> <input type="text" name="fname" id="i2" required />  </td>
<td id="td1"><p id="p2"> </p> </td>
</tr>
<tr>
<td align="right">  <p>Gender: 
<p></td><td> <input type="radio" name="gender" value="Male" required />Male <input type="radio" name="gender" value="Female" required />Female </td>
<td id="td1"><p id="p3"> </p> </td>
</tr>
<tr>
<td align="right"> <p> Mobile No:<p> </td>
<td>  <input type="text" name="mno" id="i4" required /> </td>
<td id="td1"><p id="p4"> </p> </td>
</tr>
<tr>
<td align="right">  <p> Email ID:<p></td>
<td> <input type="text" name="email" id="i5" required /></td>
<td id="td1"><p id="p5"> </p> </td>
</tr>
<tr>
<td align="right">  <p> Password:<p></td>
<td> <input type="password" name="pass" required  /></td>
<td id="td1"><p id="p10"> </p> </td>
</tr>
<tr>
<td align="right">  <p> Address:<p></td>
<td> <input type="text" name="addr" required />  </td>
<td id="td1"><p id="p6"> </p> </td>
</tr>
<tr>
<td align="right">  <p> Degree:<p></td>
<td> <input type="text" name="degree" required />  </td>
<td id="td1"><p id="p7"> </p> </td>
</tr>
<tr>
<td align="right"><p>Select Test:<p></td>
<td> <select name="select" required > <option> PHP</option><option> JAVA</option></select>  </td>
<td id="td1"><p id="p8"> </p> </td>
</tr>
<tr><td> </td>
<td align="right"> <center> <input type="submit" name="submit" value="submit"></center> </td>
<td id="td1"><p id="p1"><a href="Login.php">login</a> </p> </td>
</tr>
</table>
</form>
</div>
</body>
<?php   if(isset($_POST['submit']))		
		{
		$dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");
	   // mysql_select_db("payilagam");
		
        $name=$_POST['name']; 		$fname=$_POST['fname'];		$gender=$_POST['gender']; 
		$mno=$_POST['mno'];		    $email=$_POST['email'];		$pass=$_POST['pass'];
		$addr=$_POST['addr'];		$degree=$_POST['degree'];	$select=$_POST['select'];	
		
		$query="insert into exam
		values ('$name','$fname', '$gender', '$mno', '$email','$pass', '$addr','$degree', 
		'$select')";
		if(mysqli_query($conn,$query))
		{
		    echo "<center><b style='color:white;'>*..Thank You!!!*</b></center>";
		    
		}  
		else
		{
		    echo "<b style='color:white;'>May be you have already registered here!!!</b>";
		}
		
		}  
		
		
		?>