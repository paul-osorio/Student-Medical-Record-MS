<?php

   include "../includes/db_conn.php";
   include "../functions/medicine.php";

   $med_id = $_POST['med_id'];

   $med_res = fetchSelMedicine($conn, $med_id);
   $med_info = mysqli_fetch_assoc($med_res);


?>

<div class="edit-medicine-container">

   <div class="edit-container-header">
      <p> Edit Medicine Data </p>
   </div>

   <form id="edit-medicine-form">

      <div class="form-input-disabled">

         <div class="form-input">
            <label for="hospi-id"> Medicine ID </label>
            <input type="text" name="hospi_id" value="<?=$med_info['prod_id']?>" id="hospi-id" readonly>

            <label for="hospi-id"> Medicine Name </label>
            <input type="text" name="hospi_id" value="<?=$med_info['name']?>" id="hospi-id">
         </div>
         

         <div class="med-image">
            <div class="img-handler">
               <img src="../qr_images/<?=$med_info['qr_code']?>" alt="">
            </div>
         </div>
         
      </div>

   
    

      

      <div class="form-input">
         <label for="hospi-name"> Campus </label>
         <select name="" id="">
            <option value="<?=$med_info['campus']?>"><?=$med_info['campus']?></option>
            <option value="San Bartolome"> San Bartolome </option>
            <option value="Batasan"> Batasan </option>
            <option value="San Fransisco"> San Fransisco </option>
         </select>
      </div>

      <div class="form-input">
         <label for="hospi-address"> Medicine Quantity </label>
         <input type="number" name="hospi_address" value="<?=$med_info['num_stocks']?>" id="hospi-address">
      </div>

      <div class="form-input">
         <label for="hospi-email"> Expiration Date </label>
         <input type="date" style="text-transform:lowercase" name="hospi_email" value="<?=$med_info['expirationDate']?>" id="hospi-email">
      </div>

      <div class="form-input">
         <label for="hospi-cnum"> Description </label>
         <textarea name="" id=""><?=$med_info['description']?></textarea>
      </div>


      <div class="form-button">
         <button type="button" id="med-edit-cancel"> Cancel </button>
         <button type="submit" id="med-edit-upd"> Save Changes </button>
      </div>

   </form>

</div>

<script>
   $(document).ready(function(){

      $('#med-edit-cancel').click(function(){

         $('#medicine-modal-container').hide();

      });


      // when form is submitted
      $('#edit-hospital-form').submit(function(e){

         e.preventDefault(); // prevent load page

         const form =  $('#edit-hospital-form')[0];
         const formData = new FormData(form);

         // ajax
         $.ajax({

            url: "../process/edit_hospital.php",
            type: "POST",
            data: formData,
            contentType: false, 
            processData: false,
            cache: false,
            success: function (data) {

               $('#hospital-modal-container').hide();
               
               $('#hospital-message-modal').show();

               $('#hospital-message-modal').html(data);

               window.location.href = "../pages/hospital.php";

            },
           


         });
         

       

      });
   });
</script>