<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li{
			display: inline;
			padding: 50px;
		}
		body
		{
			background-image: url('back2.png');
			background-repeat: repeat;
		}
		.nav{
			background-color: white;
			padding: 1px;

		}
		a{
			text-decoration: none;
			 color: #4de85a;
			}
		li{
			font-family: "Times New Roman";
		}
		a:hover{color: #34eb89}


		.form{
	margin: 50px;
	background: #AABE55;
	border-radius: 12px;
}
.button{
border-radius: 25px;
background-color: #57bc72;
  color: black;
  padding: 10px;
   width: 120px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
}
.fs{
border-radius: 10px;
margin: 3px 110px 3px 110px;
border-color:  #57bc72;
}
.heading{
color: #57bc72;
}

	</style>
	
</head>
<body>
	
			<div class="nav">
<nav>
	<ul>
		<li><a href="home.html">HOME</a></li>
		<li><a href="">SERVICES</a></li>
		<li><a href="gallery.html">GALLERY</a></li>
		<li><img width="100" height="40" src="logo.jpg"></li>
		<li><a href="#">CAREER</a></li>
		<li><a href="med.html">MEDICINES</a></li>
        <li><a href="signuplogin.html">SHOP</a></li>
	</ul>
</nav>
</div>
<center>
	
<form>
<h3 align="left" class="heading">Delivery address</h3>
<fieldset class="fs">
	<caption></caption>
	Complete Address<textarea rows="5" cols="30" name="adderss"></textarea><br><br>
Land Mark<input type="text" name="landmark"><br><br>
Postal Code<input type="text"name="postalcode"></fieldset><br><br>
<h3 align="left" class="heading">Card details</h3>
<fieldset class="fs">card type<br><input type="radio" name="card" value="visa" checked><img src="visa.png" height="18" width="30">VISA
<input type="radio" name="card" value="amex"><img src="amex.png" height="18" width="30">Amex
<input type="radio" name="card" value="master"><img src="master.png" height="18" width="30">Mastercard<br><br>
Card number<input type="text"name="cardno"><br><br>
Security code<input type="text"><br><br>
Name on card<input type="text" placeholder="Exact name as on the card" name="nameoncard"></fieldset><br><br>
<input type="submit" class="button" value="BUY IT!"></br><br>
</form>

</center>

</form>
</body>
</html> 