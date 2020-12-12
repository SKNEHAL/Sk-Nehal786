<!DOCTYPE HTML>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<h1 div id="clock"  align="center"> </h1>

	<!-- <div id="clock">




	</div> -->
<script >

	// setInterval(displayclock,500);
// 	function myDate(){



// var  mydate=new Date();
// // var hrs=time.getHours();
// // var min=time.getMinutes();

// // var sec=time.getSeconds();

// var day=mydate.getDay();
// var month=mydate.getMonth();

// var year=mydate.getYear();
// var d=mydate.getDate();


// if(year<1000)


// 	year+=1900;


// if(d<10)


// d="0"+d;
// 	var daa=new Array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");
// 	var nhh=new Array("january","feburay","march","april","may","jun","july","august","septembber","oct","nover","decem");

// 	document.write(""+daa[day]+","+nhh[month]+" "+d+","+year+"");

// }

// 	se


	function renderTime(){

var time=new Date();
//var hrs=mydate.getHours();
//var min=mydate.getMinutes();

//var sec=mydate.getSeconds();


var day=mydate.getDay();
var month=mydate.getMonth();

var year=mydate.getYear();
var d=mydate.getDate();

if(year<1000)


 	year+=1900;


 if(d<10)

 d="0"+d;

	var daa=new Array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");
	var nhh=new Array("january","feburay","march","april","may","jun","july","august","septembber","oct","nover","decem");

	document.write(""+daa[day]+","+nhh[month]+" "+d+","+year+"");


var time=new Date();
var hrs=mydate.getHours();
var min=mydate.getMinutes();

var sec=mydate.getSeconds();

if(hrs>12)

{

	hrs=hrs-12;
}
if(hrs==0)
{
	hrs=12;
}

if(year<1000)
{

	year+=1900;
}

if(d<10)
{

d="0"+d;


document.getElementById('clock').innerHTML= hrs + ':'+ min +':' + sec;



}

</script>
<body onload="myDate()">



	<?php
echo "<meta http-equiv='refresh' content='1'>";
   echo $techwindow=date("h:m:s");


	?>


</body>
</html>

