<html>
<body background="x9.jpg"><style>
 p{color:white;font-weight:bold;font-size:18px;}
</style>
<form method="post" action="JAVA.php">  
<div style="float:left;">
<p>1. What is correct syntax for main method of a java class? <br>
<input type="radio" name="i0" value=0 />A.public static int main(String[] args)<br>
<input type="radio" name="i0" value=0 />B.public int main(String[] args)<br>
<input type="radio" name="i0" value=1 />C.public static void main(String[] args)<br>
<input type="radio" name="i0" value=0 />D.None of the above<br>
<p>2. What is the default value of byte variable? <br>
<input type="radio" name="i1" value=1 />A.0<br>
<input type="radio" name="i1" value=0 />B.0.0<br>
<input type="radio" name="i1" value=0 />C.Null<br>
<input type="radio" name="i1" value=0 />D.Not Defined<br></p>
<p>3. What is Encapsulation? <br>
<input type="radio" name="i2" value=0 />A.It is a technique to define different methods of same type.<br>
<input type="radio" name="i2" value=0 />B.Encapsulation is the ability of an object to take on many forms.<br>
<input type="radio" name="i2" value=1 />C.making the fields in a class private and providing access <br>
to the fields via public methods.<br>
<input type="radio" name="i2" value=0 />D.None of these<br>  </p>
</div>
<div style="float:left;">
<p>4. What is TreeSet Interface? <br>
<input type="radio" name="i3" value=0 />A.It is a Set implemented when we want elements in a tree based order.<br>
<input type="radio" name="i3" value=1 />B.It is a Set implemented when we want elements in a sorted order.<br>
<input type="radio" name="i3" value=0 />C.It is a Set implemented when we want elements in a binary tree format.<br>
<input type="radio" name="i3" value=0 />D.It is a Set implemented when we want elements in a hiearchical order.<br>
<p>5. Method Overloading is an example of <br>
<input type="radio" name="i4" value=1 />A.Static Binding<br>
<input type="radio" name="i4" value=0 />B. Dynamic Binding<br>
<input type="radio" name="i4" value=0 />C.Both of the above.<br>
<input type="radio" name="i4" value=0 />D.None of the above.<br>
</p>
<input type="submit" name="submit" value="submit" style="margin-left:100px;"/>
</div> 
</form>

<?php
//session_start();
//$s=$_SESSION['mob'];
if(isset($_POST['submit'])){
	     if(empty($_POST['i0']))
	     {
			$_POST['i0']=0;
				
		 }
		 if(empty($_POST['i1'])){
			 $_POST['i1']=0;
		 }
		 
         if(empty($_POST['i2']))
	     {
			$_POST['i2']=0;
				
		 }
		 if(empty($_POST['i3'])){
			 $_POST['i3']=0;
		 }
		 
         if(empty($_POST['i4']))
	     {
			$_POST['i4']=0;
				
		 }
	
        $x=array($_POST['i0'],$_POST['i1'],$_POST['i2'],$_POST['i3'],$_POST['i4']);
        
        
     $host="localhost";
     $user="id3242175_guha_5599";
     $pass="guha0804";
     
     $con=mysqli_connect($host,$user,$pass, "id3242175_guha");
		
        $query="update java
		set A1=$x[0],A2=$x[1], A3=$x[2], A4=$x[3], A5=$x[4]";
		if(mysqli_query($con, $query))
		{
             $query1="SELECT A1,A2,A3,A4,A5, A1+A2+A3+A4+A5 as total from java WHERE user_id='x'";
		     $result=mysqli_query($con,$query1);
   		     $row= mysqli_fetch_row($result);
		 	 	 
		     if($row)
		      {			     
                    
                echo "<b style='color:blue;'>  Your Total Mark is: $row[5] </b><br>
				<a style='color:white;' href='Login.php'> Logout</a>";
				//$query2="delete from test  WHERE user_id='x'";
		       // $result=mysql_query($query2);
	          }
		}
//session_destroy();
		
}

?>

</html>