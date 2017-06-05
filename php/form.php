<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
<style type="text/css">
body {
	text-align: center;
	height:100%;
	overflow:hidden;
	background-color: #98C5D3;
}
div#form {
	background-color: #293B5A;
	width: 200px;
	text-align:center;
	margin: 0 auto;
	margin-top:100px;
	border: thin solid #FFF;
	color: #FFF;
}
input[type=text]  {
	background-color: #A5ABB6;
	padding: 6px;
	border: thin solid #DCDEE7;
	color: #FFF;
}
input[type=password]  {
	background-color: #A5ABB6;
	padding: 6px;
	border: thin solid #DCDEE7;
}
input {
	padding-top: 5px;
	padding-right: 20px;
	padding-bottom: 5px;
	padding-left: 20px;
}
#sonuc {
	font-weight: bold;
	color: #FFF;
	background-color: #0CA7E9;	
}
#bilgi {
	position: absolute;
	height: 100%;
	width: 100%;
	left:0px;
	top:0px;
	margin:0;
	background-color:#333333;
	display : none;
	text-align:center;
	padding-top:200px;
	color:white;
	filter:alpha(opacity=90);
	opacity: 0.9;
	-moz-opacity:0.9;
}
#bilgi>span {
	background-color: #063;
	border: thin solid #999;
	padding: 10px;
}

hr {
	border: thin ridge #999;
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	 $('#login').submit(function(){
		 $('#bilgi').html("<span>Veriler Kontrol Ediliyor Lütfen Bekleyiniz...</span>");
		 $('#bilgi').fadeIn(1000);
		$.ajax({
			type: "POST",
			url: "login.php",
			data: $('#login').serialize(),
			success: function(ajaxcevap)
			{
				$('#bilgi').fadeOut(1000);
				$('#sonuc').html(ajaxcevap);
			} 

		 });
	 	return false;
	 });
});
</script>
</head>

<body>
<div id="bilgi"></div>
<div id="form">
<form id="login">
<label for="adi">Kullanıcı Adı</label><br />
<input id="adi" type="text" name="adi" /><hr />
<label for="sifre">Şifre</label><br />
<input id="sifre" type="password" name="sifre" /><hr />
<input type="submit" name="submit" value="Giriş" />
</form>
<div id="sonuc"></div>
</div>
</body>
</html>