<html>
<html>
<body background="x10.jpg"><style>
 p{color:blue;font-weight:bold;font-size:18px;}
</style>
<form method="post" action="PHP.php">  
<div style="float:left;">
<p>1. PHP is a? <br>
<input type="radio" name="i0" value=1 />A.Server side scripting language<br>
<input type="radio" name="i0" value=0 />B.Client side scripting language<br>
<input type="radio" name="i0" value=0 />C.Middle level Language<br>
<input type="radio" name="i0" value=0 />D.Light programming language<br></p>
<p>2. What does PHP stand for? <br>
<input type="radio" name="i1" value=1 />A.PHP: Hypertext Preprocessor<br>
<input type="radio" name="i1" value=0 />B.Personal Hypertext Processor<br>
<input type="radio" name="i1" value=0 />C.Private Home Page<br>
<input type="radio" name="i1" value=0 />D.All of the Above<br></p>
<p>3. How do you write "Hello World" in PHP? <br>
<input type="radio" name="i2" value=0 />A. "Hello World";<br>
<input type="radio" name="i2" value=1 />A.echo "Hello World";<br>
<input type="radio" name="i2" value=0 />A.Document.Write("Hello World");<br>
<input type="radio" name="i2" value=0 />A.Hello World<br></p>
</div>
<div style="float:left;">
<p>4. All variables in PHP start with which symbol? <br>
<input type="radio" name="i3" value=0 />A.@<br>
<input type="radio" name="i3" value=0 />B.%<br>
<input type="radio" name="i3" value=0 />C.#<br>
<input type="radio" name="i3" value=1 />D.$<br>
<p>5. The PHP syntax is most similar to: <br>
<input type="radio" name="i4" value=0 />A.VBScript<br>
<input type="radio" name="i4" value=1 />B.Perl and C<br>
<input type="radio" name="i4" value=0 />C.JavaScript<br>
<input type="radio" name="i4" value=0 />D.HTML<br></p>
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
				<a style='color:green;font-weight:bold;' href='Login.php'> Logout</a>";
				//$query2="delete from test  WHERE user_id='x'";
		       // $result=mysql_query($query2);
	          }
		}
//session_destroy();
		
}

?>


</html>