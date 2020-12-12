<!-- <!DOCTYPE html>

<head>
<title>happy diwali</title>
</head>
<body  border=4% background="images/neha.jpg" style="background-size: 1285px 2072px;">
	 <body>
 -->
	
<!-- </form> --> <!-- <form   action="" method="POST">
		<hr  style="color:red";><hr><hr><hr><hr>
		
  name<input type="text" name="name"  required ><br>
email<input type="email" name="email" required ><br>
date<input type="date" name="date"  ><br>
<input type="submit" value="submit"> 

	<select name="hello">
		<option>
			present

		</option>
<option>
			absent

		</option>

	</select>

	 <!<?php 
//   $sd=mysqli_connect("localhost","root","");

//  $md=mysql_select_db('helloworld');
// if($sd){


// 	echo "connect";
  
// if(isset($_POST["submit"])){



// $name=	$_POST["name"];
// $email=	$_POST["email"];

// $date=	$_POST["date"];
// $hello=	$_POST["hello"];

//      $str="INSERT INTO `motrola`(`name`, `email`, `value`, `date`) VALUES ('$name','$email','$date','$hello')";

//         $query= mysqli_query($md,$str);



//}

?>



</body>
ds;ld
sldm;s
<!sldksd -->

	<!DOCTYPE HTML>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action ="" method="POST">
		
	
			<center>
					
	user_name:<input type="text" name="name"><br><br>
	  user_date:<input type="date" name="date"><br><br>
	<input type="submit" value="submit" name="submit"><br><br>		
	
</form>
<?php
$sd=mysqli_connect('localhost','root','','nehal');

if(isset($_POST['submit'])){

   $name=$_POST['name'];
$date=$_POST['date'];

  $km="INSERT INTO `ramjan`(`user_id`, `user_name`, `date`) VALUES ('','$name','$date')";

  $dm=mysqli_query($sd,$km);

}

?>


	</body>
	</html>
