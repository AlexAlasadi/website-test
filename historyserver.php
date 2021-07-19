<html>
<?php
$query = $_GET['a'];
$query_ar = $_GET['ar'];
$query_ch = $_GET['ch'];
$query_ec = $_GET['ec'];
$query_en = $_GET['en'];
$query_ma = $_GET['ma'];
$query_ph = $_GET['ph'];
$counter = 0;
?>

<body style="font-size: 32px;">
<center>
<br/>

<?php 

$ar = strpos($query, $query_ar);
$ch = strpos($query, $query_ch);
$ec = strpos($query, $query_ec);
$en = strpos($query, $query_en);
$ma = strpos($query, $query_ma);
$ph = strpos($query, $query_ph);
?>
<br/>

<?php

if($query == "0" || $query == ""){
	echo "it's time to choose a major.";
}

else{

	if($ar !== false){
		if($counter == 0){
			echo "Have you ever consideered:";
        		echo "<br>";
		}
		echo "Art History";
		echo "<br>";
		$counter = 1;
	}
	if($ch !== false){
		if($counter == 0){
                        echo "Have you ever consideered:";
                        echo "<br>";
                }
        	echo "Chemistry";
		echo "<br>";
		$counter = 1;
	}
	if($ec !== false){
		if($counter == 0){
                        echo "Have you ever consideered:";
                        echo "<br>";
                }
        	echo "Economics";
		echo "<br>";
		$counter =1;
	}
	if($en !== false){
		if($counter == 0){
                        echo "Have you ever consideered:";
                        echo "<br>";
                }
        	echo "English";
		echo "<br>";
		$counter = 1;
	}
	if($ma !== false){
		if($counter == 0){
                        echo "Have you ever consideered:";
                        echo "<br>";
                }
        	echo "Mathematics";
		echo "<br>";
		$counter = 1;
	}
	if($ph !== false){
		if($counter == 0){
                        echo "Have you ever consideered:";
                        echo "<br>";
                }
        	echo "Physics";
		echo "<br>";
		$counter = 1;
	}
	if($counter == 0){
		echo "it's time to choose a major.";
	}

}
?>

</center>
</body>
</html>

