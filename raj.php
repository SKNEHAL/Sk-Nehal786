<html>
<head>
	

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



<script>

function func(){

var x =document.getElementById("rto");
if(x.type=="password"){

x.type="text";
}
else
{

x.type="password";



}

}


</script>




	</head>

	<body>
<label><br><br>
PASSWORD:<input type="password" placeholder="enter the password" id="rto">
<button type="button" onclick="func()"><i class="fas fa-eye"></i></button>
</label>




</body>
</html>