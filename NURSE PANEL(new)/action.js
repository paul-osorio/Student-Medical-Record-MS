$(document).ready(function(){
    // console.log('nurse');
    $(document).on('click','#view',function(){
      let id = $(this).attr('data-id');
      $.ajax({
          url:'fetchData.php',
          method:'POST',
          data:{fetch_stud_data:1,id:id},
          success:function(response){
              $('#student').html(response)
              // $('#student').html(data)
              consultation(id);
          }
      })
  })
    $(document).on('click','#consultation',function(){
      let id = $(this).attr('data-id');
      $.ajax({
          url:'fetchData.php',
          method:'POST',
          data:{new_consultation:1,id:id},
          success:function(response){
              $('#student').html(response)
              // $('#student').html(data)
              consultation(id);
          }
      })
  })
  function consultation(id) {
    $.ajax({
        url:'fetchData.php',
        method:'POST',
        data:{consultation:1,id:id},
        success:function(response){
            $('#cosultation_output').html(response)
            // $('#student').html(data)
        }
    })
   }
  
})



{/* <h2> Patient List > </h2>
  <hr>
  </div>
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="card">
  <img src="./assets/badang.jpg" class="patient-img">
  <div class="card-body">
    <h5 class="patient-name">Jessica O. Bulleque</h5>
    <p class="patient-email">randomemail@gmail.com</p>
    <p class="patient-course">BSIT</p>
    <p class="patient-id">22-0001</p>
    <p class="patient-status">Status : Complete </p>
  </div>
</div>
    </div>

    <div class="col">
    <div class="content" >
  <div class="content-body1">
    <form class="form-info">
  
    <label for="gender">Gender:</label>
  <!-- <input type="text" id="gender" name="gender" placeholder="Female" readonly> -->
    <p></p>
  
  <label for="age">Age:</label>
  <!-- <input type="text" id="age" name="age" placeholder="22" readonly> -->

  
  <label for="age">Date of Birth:</label>
  <!-- <input type="text" id="bday" name="bday" placeholder="Jan 1 2002" readonly> -->

  
  <label for="age">Contact Number:</label>
  <!-- <input type="text" id="age" name="age" placeholder="09123787954" readonly> -->
 
  
  <label for="age">Complete Address:</label>
  <!-- <input type="text" id="age" name="age" placeholder="sampleadd quezon city" readonly> -->

</div>
</div>
    </div>
    <div class="col">
    <div class="content" >
  <div class="content-body">
    <label for="age">Contact Person:</label>
  <input type="text" id="person" name="number" placeholder="Juan Luna" readonly>
  
  <label for="age">Contact Number:</label>
  <input type="text" id="age" name="age" placeholder="09198880339" readonly>
  
  <label for="age">Relationship:</label>
  <input type="text" id="relationship" name="relationship" placeholder="Father" readonly></input>
  
  <label for="age">Complete Address:</label>
  <input type="text" id="contact_address" name="contact_address" placeholder="Sample Add Quezon City" readonly>
</form>
</div>
</div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-8" >
  <div class="container">
      <div class="nav">
        <input type="button" class="px-2 mx-2" value="Medical History">
        <input type="button" class="px-2" value="Medical Requirements">
        <input type="button" class="btn-newconsult px-2 " value="New Consultation" data-bs-toggle="modal" data-bs-target="#consultation">
      </div>
  

      <div class="modal fade" id="consultation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Consultation</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    

      <div class="container my-custom-bg">
      <ul class="nurse-details">
        <div class="container custom-content">
      <li>22-0001</li>
      <li>NR. John Nicole Abihay</li>
      <li>Medical Clearance</li>
      <li>09/21/22 - 11:36AM</li>
        </div>
      </ul>  
      </div>
    </div>
  

</div>
<div class="col-4">
  <div class="container custom1">
    <h5>Recent Consulation</h5>
    <form>
      <input type="text" readonly placeholder="NR. John Nicole Abihay">
      <input type="button" class="view-btn" readonly value="view">
</form>
  </div>
</div> */}