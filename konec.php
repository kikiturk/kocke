<?php
    session_start();
    if (isset($_POST["score"])) {
        $_SESSION["dice1"] = $_POST["dice1"];
    }
    if (isset($_POST["scoreTwo"])) {
        $_SESSION["dice2"] = $_POST["dice2"];
    }
    if (isset($_POST["scoreThree"])) {
        $_SESSION["dice3"] = $_POST["dice3"];
    }
    
    // Get the scores from the session
    $dice1 = $_SESSION["dice1"] ?? 0;
    $dice2 = $_SESSION["dice2"] ?? 0;
    $dice3 = $_SESSION["dice3"] ?? 0;

    // Calculate the maximum score
    $maxScore = max($dice1, $dice2, $dice3);

    // Determine the winner
    $winner = '';
    if ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    } elseif ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    } elseif ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    }

    $winner = '';
    if ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    } elseif ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    } elseif ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    }

    $winner = '';
    if ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    } elseif ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    } elseif ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    }

    $winner = '';
    if ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    } elseif ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    } elseif ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    }

    $winner = '';
    if ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    } elseif ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    } elseif ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    }

    $winner = '';
    if ($maxScore === $dice3) {
        $winner = 'Igralec 3: ' . $_SESSION["ime3"];
    } elseif ($maxScore === $dice2) {
        $winner = 'Igralec 2: ' . $_SESSION["ime2"];
    } elseif ($maxScore === $dice1) {
        $winner = 'Igralec 1: ' . $_SESSION["ime1"];
    }
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
		<h1>REZULTATI</h1>
	</div>
	<div class="glavni">
		<div class="rezultati">
			<image src="/slike/podium.png"/>
			<div class="mesto1">
				<span class='pisava'> <?php echo "Igralec 1: " . $_SESSION["ime1"] . ""?> </span> (<?php echo $dice1; ?>)</div>
			<div class="mesto2">
				<span class='pisava'> <?php echo "Igralec 2: " . $_SESSION["ime2"] . ""?> </span> (<?php echo $dice2; ?>)		</div>
			<div class="mesto3">
				<span class='pisava'> <?php echo "Igralec 3: " . $_SESSION["ime3"] . ""?> </span> (<?php echo $dice3; ?>)	</div>
		</div>
	</div>
	<div class="cas">
		Preusmeritev na začetek čez <span id="cas">15</span>
	</div>
</body>

<!--skripta za redirect čez 15 sek-->
<script>
function redirTimer() {self.setTimeout ("self.location.href='index.php';",15000);} 
redirTimer();

var seconds_left = 15;
setInterval(function() {
    document.getElementById('cas').innerHTML = --seconds_left;}, 1000);
</script>

</html>