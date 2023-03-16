<?php
    include('db_conn.php');
    include_once 'insert_new_consultation.php';


    // SELECT ALL DEPARTMENTS
    $fetchAllConsultations = mysqli_query($conn, "SELECT * FROM `consultations`");
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEW CONSULTATION</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<script>
    function text(x) {
        if (x == 0) document.getElementById("mycode").style.display = "block";
        else document.getElementById("mycode").style.display = "none";
        return;
    }
</script>

<body>
  
	



   <!-- NEW CONSULTATION PAGE -->
   <section id="departments" class="departments so_content" data-tab-content>
          <div class="nurse_header d-flex justify-content-between">
            <h3 class="m-0 text-white">NEW CONSULTATION</h3>

            <!-- Button to open the modal -->
	                <button id="open-modal-btn">New Consultation</button><br><br>
          </div>

          <div class="card_container">

                <?php if(mysqli_num_rows($fetchAllConsultations) > 0) { 
                while ($consult = mysqli_fetch_assoc($fetchAllConsultations)) {  ?>

                <div class="container">
                    <label><b>• Student Number: </b><br> -</label>
                    <span class="student_id"><?=$consult['student_id']?></span><br><br>

                    <label><b>• The symptoms are: </b><br> -</label>
                    <span class="symptoms"><?=$consult['symptoms']?></span><br>
                
                    <label><br> <b>• The Other Symptoms and illness: </b><br> -</label>
                    <span class="othersymptoms"><?=$consult['othersymptoms']?></span><br>

                    <label><br> <b>• Body Temperature: </b><br> -</label>
                    <span class="body_temp"><?=$consult['body_temp']?> ℃</span><br>

                    <label><br> <b>• Have you been in close contact to suspected or confirmed covid case for the past 14 days? </b><br> -</label>
                    <span class="suspected_covid"><?=$consult['suspected_covid']?></span><br>

                    <label><br> <b>• Have you been tested for covid in the past 10 days? </b><br> -</label>
                    <span class="tested_covid"><?=$consult['tested_covid']?></span><br>

                    <label><br> <b>• Confined? </b><br> -</label>
                    <span class="confined"><?=$consult['confined']?></span><br>

                    <label><br> <b>• How long? </b><br> -</label>
                    <span class="how_long"><?=$consult['how_long']?> hour/s</span><br>

                    <label><br> <b>• Medicine Given: </b><br> -</label>
                    <span class="medicine"><?=$consult['medicine']?></span><br>

                    <label><br> <b>• Referred to hospital: </b><br> -</label>
                    <span class="referred"><?=$consult['referred']?></span><br>
                    
                    <label><br> <b>• Hospital Name: </b><br> -</label>
                    <span class="hospital"><?=$consult['hospital']?></span><br>

                    <label><br> <b>• Hospital Address: </b><br> -</label>
                    <span class="hospital_add"><?=$consult['hospital_add']?></span><br>

                    <label><br> <b>• Reason of referral: </b><br> -</label>
                    <span class="reason"><?=$consult['reason']?></span><br>
            
                </div><br>
                <label><br> <b>---------------------------------------------------------------------------------------------------------------------------------------------------------------------</b><br></label>
                <br><br>

                <?php } } ?>

          </div>



	<!-- The Modal -->
	<div id="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<h2>CONSULTATION</h2>
			<form method="post" action="insert_new_consultation.php">
            <!-- <div class="popup"> -->
                  <div class="form-group">
                    <label> <b>Student Number</b></label><br>
                    <input type="text" class="form-control" name="student_id" required>
                  </div>

                  <br>

                  <div class="form-group">
                    <label> <b>Symptoms</b></label>
                  </div>

				          <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Difficulty breathing"> Difficulty breathing
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Nausea or vomitting"> Nausea or vomitting
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Fever or chills"> Fever or chills
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Cough"> Cough
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Headache"> Headache
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Congestion or runny nose"> Congestion or runny nose
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Sore throat"> Sore throat
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="New loss of taste or smell"> New loss of taste or smell
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Stomach Ache"> Stomach Ache
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Fatigue"> Fatigue
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="symptoms[]" value="Diarrhea"> Diarrhea
                    </label>
                  </div>

                  <div class="form-group">
                    <label> <b>Other Symptoms and illness</b></label>
                  </div>

				          <div class="checkbox">
                    <label>
                      <input type="checkbox" name="othersymptoms[]" value="Difficulty breathing"> Difficulty breathing
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="othersymptoms[]" value="Nausea or vomitting"> Nausea or vomitting
                    </label>
                  </div>
                  
                  <br>
                  
                  <div class="form-group">
                    <label> <b>Body Temperature</b></label>
                    <input type="text" class="form-control" name="body_temp" required>
                  </div>

                  <br>

                  <div class="covid">
                      <label> <b>Have you been in close contact to suspected or confirmed covid case for the past 14 days?</b></label><br>
                      <label><input type="radio" name="suspected_covid" value="Yes">Yes</label>
                      <label><input type="radio" name="suspected_covid" value="No">No</label>
                  </div>

                  <br>

                  <div class="covid">
                      <label> <b>Have you been tested for covid in the past 10 days?</b></label><br>
                      <label><input type="radio" name="tested_covid" value="Antigen Test">Antigen Test</label><br>
                      <label><input type="radio" name="tested_covid" value="Rapid Test">Rapid Test</label><br>
                      <label><input type="radio" name="tested_covid" value="RT PCR">RT PCR</label><br>
                      <label><input type="radio" name="tested_covid" value="No">No</label>
                  </div>                  

                  <br>
                  
                  <div class="covid">
                      <label> <b>Confined?</b></label><br>
                      <label><input type="radio" name="confined" value="Yes">Yes</label>
                      <label><input type="radio" name="confined" value="No">No</label>
                  </div>

                  <br>

                  <div class="covid">
                    <label for="quantity"> <b>How long?</b></label>
                    <input type="number" id="quantity" name="how_long" min="1" max="5">
                  </div>
                 
                  <br>

                  <div class="covid">
                    <label for="dropdown"><b>Medicine Given:</b></label><br>
                      <select name="medicine" id="dropdown">
                        <option value="">Select Medicine</option>
                        <option name="medicine" value="Diatabs">Diatabs</option>
                        <option name="medicine" value="Biogesic">Biogesic</option>
                        <option name="medicine" value="Bioflu">Bioflu</option>
                        <option name="medicine" value="Neozep">Neozep</option>
                        <option name="medicine" value="Immodium">Immodium</option>
                      </select>
                  </div>

                  <br>

                  <div class="covid">
                      <label> <b>Referred to hospital</b></label><br>
                      <label><input type="radio" name="referred" value="Yes" onclick="text(0)">Yes</label>
                      <label><input type="radio" name="referred" value="No" onclick="text(1)">No</label>
                  </div>

              <!-- </div> -->

                  <br>

                  <!-- POP UP ONCE CLICK THE YES IN REFERRED TO HOSPY -->
                  
                      <div class="covid" id="mycode">
                        <label for="dropdown"><b>Hospital Name:</b></label><br>
                          <select name="hospital" id="dropdown">
                            <option value="">Select Hospital</option>
                            <option name="hospital" value="Hope General Hospital">Hope General Hospital</option>
                            <option name="hospital" value="BERNARDINO GENERAL HOSPITAL 1">BERNARDINO GENERAL HOSPITAL 1</option>
                            <option name="hospital" value="Novaliches General Hospital">Novaliches General Hospital</option>
                            <option name="hospital" value="Novaliches District Hospital">Novaliches District Hospital</option>
                            <option name="hospital" value="Elio-Tordesillas General Hospital">Elio-Tordesillas General Hospital</option>
                          </select><br>
                      

                      <br>

                 
                        <label> <b>Hospital Address</b></label><br>
                        <input type="text" class="form-control" name="hospital_add" required><br>
                
                      <br>

                
                        <label for="dropdown"><b>Reason of referral:</b></label><br>
                          <select name="reason" id="dropdown">
                            <option value="">Select Reason</option>
                            <option name="reason" value="Needs further evaluation">Needs further evaluation</option>
                            <option name="reason" value="Shows covid-19 symptoms">Shows covid-19 symptoms</option>
                            <option name="reason" value="Covid-19 positive">Covid-19 positive</option>
                          </select>
             
  
                    </div>
                  <br><br>

                  
                    <button data-dismiss="modal" value="Cancel">Cancel</button>
                    <input type=submit data-dismiss="modal" id="addnewconsult" name="addnewconsult" value="Add">
                    
                   
            
			</form>
		</div>
	</div>

	<!-- JavaScript -->
	<script type="text/javascript" src="script.js"></script>

   

</body>
</html>
