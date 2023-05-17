<?php
session_start();
$_SESSION["ime1"] = $_POST["ime1"];
$_SESSION["ime2"] = $_POST["ime2"];
$_SESSION["ime3"] = $_POST["ime3"];
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="icon" href="/slike/favicon.png">
	<title>KOCKE</title>
</head>
<body>
				
		<img id="background" src="/slike/ozadje.jpg" />
		
		<div class="naslov">
			<h1>KOCKE</h1>
		</div>
		<div class="glavni">
		<img id="background" src="/slike/kocke2.jpg" />
		
			<div class="labels">
			<?php echo "Igralec 1: " . $_SESSION["ime1"] . ""?> <br/><div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='/slike/diceanim.gif'></div> <div id='kocke1' style='display:none;'> <img style='margin:5px 0;' src='<?php $dice1 = rand(1, 6); echo $dice1; ?>.gif'><br /> <?php echo "Kocka 1: ". $dice1; ?></div> <div id='sestevek1' style='opacity:0;'></div>  </div>
			
			<div class="labels">
			<?php echo "Igralec 2: " . $_SESSION["ime2"] . ""?>	<br /><div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='/slike/diceanim.gif'></div> <div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='<?php $dice2 = rand(1, 6); echo $dice2 ?>.gif'><br /> <?php echo "Kocka 2: ". $dice2; ?></div> <div id='sestevek1' style='opacity:0;'></div>  </div>
			
			<div class="labels">
			<?php echo "Igralec 3: " . $_SESSION["ime3"] . ""?>	<br /><div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='/slike/diceanim.gif'></div> <div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='<?php $dice3 = rand(1, 6); echo $dice3 ?>.gif'><br /> <?php echo "Kocka 3: ". $dice3; ?></div> <div id='sestevek1' style='opacity:0;'></div>  </div>
			
			<div class="igra" >
				<form action="konec.php">
					<input type="button" class="gumb" name="rezultati_gumb" value="Rezultati" onClick="rezultati()"/>
				</form>
			</div>
		</div>
		
</body>

<?php


echo <<<HTML
<script>
	function reloadPage() {
		location.href = 'igra.php';
	}
	
	function rezultati() {
		location.href='konec.php';
	}

	setTimeout(function() {
		document.getElementById('sestevek1').style.opacity = "1";
	}, 1250);
	setTimeout(function() {
		document.getElementById('sestevek2').style.opacity = "1";
	}, 1250);
	setTimeout(function() {
		document.getElementById('sestevek3').style.opacity = "1";
	}, 1250);

	function animkocke1() {
		setTimeout("document.getElementById('anim1').style.display = 'none'; document.getElementById('kocke1').style.display = 'inline-block';", 1200);
	}

	function animkocke2() {
		setTimeout("document.getElementById('anim2').style.display = 'none'; document.getElementById('kocke2').style.display = 'inline-block';", 1200);
	}

	function animkocke3() {
		setTimeout("document.getElementById('anim3').style.display = 'none'; document.getElementById('kocke3').style.display = 'inline-block';", 1200);
	}

	animkocke1();
	animkocke2();
	animkocke3();
</script>
HTML;
?>

</html>