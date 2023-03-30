<?php
if(isset($_POST['symptoms'])) {
	$symptoms = implode('<br> - ', $_POST['symptoms']);
	echo "<b>• The symptoms are: </b><br> - $symptoms <br>";
}

if(isset($_POST['othersymptoms'])) {
	$othersymptoms = implode('<br> - ', $_POST['othersymptoms']);
	echo "<br> <b>• The Other Symptoms and illness: </b><br> - $othersymptoms <br>";
}

if(isset($_POST['body_temp'])) {
	$body_temp = $_POST['body_temp'];
	echo "<br> <b>• Body Temperature: </b><br> - $body_temp <br>";
}

if(isset($_POST['suspected_covid'])){
	$selected_option = $_POST['suspected_covid'];
	echo "<br> <b>• Have you been in close contact to suspected or confirmed covid case for the past 14 days? </b><br> - ".$selected_option ."<br>";
}

if(isset($_POST['tested_covid'])){
	$tested_covid = $_POST['tested_covid'];
	echo "<br> <b>• Have you been tested for covid in the past 10 days? </b><br> - ".$tested_covid."<br>";
}

if(isset($_POST['confined'])){
	$confined = $_POST['confined'];
	echo "<br> <b>• Confined? </b><br> - ".$confined."<br>";
}

if(isset($_POST['how_long'])){
	$how_long = $_POST['how_long'];
	echo "<br> <b>• How long? </b><br> - ".$how_long."<br>";
}

if(isset($_POST['medicine'])){
	$medicine = $_POST['medicine'];
	echo "<br> <b>• Medicine Given: </b><br> - ".$medicine."<br>";
}

if(isset($_POST['referred'])){
	$referred = $_POST['referred'];
	echo "<br> <b>• Referred to hospital: </b><br> - ".$referred."<br>";
}

if(isset($_POST['hospital'])){
	$hospital = $_POST['hospital'];
	echo "<br> <b>• Hospital Name: </b><br> - ".$hospital."<br>";
}

if(isset($_POST['hospital_add'])){
	$hospital_add = $_POST['hospital_add'];
	echo "<br> <b>• Hospital Address: </b><br> - ".$hospital_add."<br>";
}

if(isset($_POST['reason'])){
	$reason = $_POST['reason'];
	echo "<br> <b>• Reason of referral: </b><br> - ".$reason."<br>";
}


?>




<br><br>


 <button onclick="window.location.href = 'index.php';">BACK HOME</button>


