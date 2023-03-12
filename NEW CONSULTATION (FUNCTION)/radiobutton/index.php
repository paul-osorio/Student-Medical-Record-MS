<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<script>
function text(x) {
if (x == 0) document.getElementById("mycode").style.display = "block";
else document.getElementById("mycode").style.display = "none";
return;
}
</script>
<body>
<!--Radio Option -->
<div class="col-2" style="text-align:center">
	<div class="input-group">
		<b><label class="label" name="fir">FIR</label></b>
		<div class="p-t-10">
			<label class="radio-container m-r-45">YES
			<input type="radio" name="fir" value="YES" onclick="text(0)"/> <span class="checkmark"></span></label>

		<label class="radio-container">NO
			<input type="radio" name="fir" value="NO" onclick="text(1)" /> <span class="checkmark"></span></label>
</div>

<!-- other tab -->
<div class="col-2" style="text-align:center">
	<div class="input-group" id="mycode">
		<label class="label">FIR Number</label>
		<input type="text" class="input--style-4" name="fno" id="fno" placeholder="Enter FIR Number">
		<span style="color:red;" id="Fno"></span>
	</div>

</div>
</html>


