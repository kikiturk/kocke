<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="icon" href="/slike/favicon.png">
	<title>Kocke</title>
</head>
<body>
	<img id="background" src="/slike/ozadje.jpg" />
	
	<div class="naslov">
		<h1>KOCKE</h1>
	</div>
	
	<div class="glavni">
	<img id="background" src="/slike/kocke2.jpg" />
		<form action="igra.php" name="forma" method="post">
			<div class="labels">
				IGRALEC 1<br /><br />
				Ime: <input type="text" name="ime1" autofocus/><br />
			</div>
			<div class="labels">
				IGRALEC 2<br /><br />
				Ime: <input type="text" name="ime2"/><br />
			</div>
			<div class="labels">
				IGRALEC 3<br /><br />
				Ime: <input type="text" name="ime3"/><br />
			</div>
		<div class="poslji">
			<input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="Igraj"/>
		</div>
		</form>
	</div>
	
	</body>
<script>
	//preveri če so vnosna polja prazna
	function isEmpty(){
	  if(document.forms['forma'].ime1.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == "")
	  {
		alert("Vnesi vsa imena!");
		return false;
	  }
		return true;
	}
</script>
</html>