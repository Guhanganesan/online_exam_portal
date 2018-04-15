<html>
<form method="get" action="Check.php">  
<div style="float:left;">
<p>1. PHP is a? </p>
<input type="radio" name="i0" value=1 />A.Server side scripting language<br>
<input type="radio" name="i0" value=0 />B.Client side scripting language<br>
<input type="radio" name="i0" value=0 />C.Middle level Language<br>
<input type="radio" name="i0" value=0 />D.Light programming language<br>   
<p>2. What does PHP stand for? </p>
<input type="radio" name="i1" value=1 />A.PHP: Hypertext Preprocessor<br>
<input type="radio" name="i1" value=0 />B.Personal Hypertext Processor<br>
<input type="radio" name="i1" value=0 />C.Private Home Page<br>
<input type="radio" name="i1" value=0 />D.All of the Above<br>   
<p>3. How do you write "Hello World" in PHP? </p>
<input type="radio" name="i2" value=0 />A. "Hello World";<br>
<input type="radio" name="i2" value=1 />A.echo "Hello World";<br>
<input type="radio" name="i2" value=0 />A.Document.Write("Hello World");<br>
<input type="radio" name="i2" value=0 />A.Hello World<br>
</div>
<div style="float:left;">
<p>4. All variables in PHP start with which symbol? </p>
<input type="radio" name="i3" value=0 />A.@<br>
<input type="radio" name="i3" value=0 />B.%<br>
<input type="radio" name="i3" value=0 />C.#<br>
<input type="radio" name="i3" value=1 />D.$<br>    
<input type="submit" name="submit" value="submit"/>
</div>
</form>


<?php

                                     session_start();
									 if(isset($_GET['submit'])){
									 if(empty($_GET['i0']))
									 {
										
										$_SESSION['n1']=1;
									}
									 if(empty($_GET['i1'])){
										 
										 $_SESSION['n2']=1;  
									 }
									 if(empty($_GET['i2']))
									 {
										$_SESSION['n3']=1;
									}
									 if(empty($_GET['i3'])){
										 
										 $_SESSION['n4']=1; 
									 }
	                              $n=$_SESSION['n1']+$_SESSION['n2']+$_SESSION['n3']+$_SESSION['n4'];
		                          echo "Number of Un attempted:".$n;
		                          session_destroy();
									 }
?>


</html>