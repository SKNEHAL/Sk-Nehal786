<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script></head>

<!-- <style >
	.r:hover{

justify-content: center;
transform: scale(2,2);
transition: 2s;


	}
body{

background:linear-gradient(blue,red );

height:100vh;
width:100%;
}
.hello{


	color: red;border: 6px solid blue;
}
</style>

</head>
<body align="center"><br><br>
	<img src="images//neha.jpg" class="r" height="200px" width="200px">
	<br>
	<input type="password" placeholder="enter the password" ><br>
	<!- <button class="show">show
	</button>
<button class="hide">hide</button>

<span id ="focus" style="font-size: 2em">welcome</span>
<span id ="blur" style="font-size: 2em">take care</span>
<ol style="list-style-type: none;">
	<li>
nehal

	</li> -->
 

<body ><br><br>
	<center>

		<input type="text" placeholder="user_name" id="hello"  autocomplete="off">
<table align="center" border="6px" ><br><br>
	
	<th>&nbsp &nbsp name &nbsp &nbsp &nbsp</th>


	</th>
	<th>phn.no
	</th>
	<th>email
	</th>
	<th>gender
	</th>

		
<tbody id="my">
	<tr>
	<th>sk nehal</th>
	<th>988888888</th>
	<th>sknehal8982@</th>
	<th>male</th>
</tr>
<tr>
<th>&nbsp &nbsp nehal &nbsp &nbsp &nbsp</th>
<th>988888888</th>
	<th>sknehal8982@</th>
	<th>female</th>
</tr>
<!-- <th>upper_baruan</th> -->
<tr><th>&nbsp &nbsp washim &nbsp &nbsp &nbsp</th><!-- <th>upper_baruan</th> -->

<th>988888888</th>
	<th>sknehal8982@</th>
	<th>female</th>
</tr>
<tr><th>&nbsp &nbsp tanbir &nbsp &nbsp &nbsp</th>

<th>988888888</th>
	<th>sknehal8982@</th>
	<th>female</th>

	<!-- <th>upper_baruan</th> -->
</tr>

</tbody>
</table>

<script>

$(document).ready(function(){
  $("#hello").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#my tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>

