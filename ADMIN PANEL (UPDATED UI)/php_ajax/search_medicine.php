<?php
   include "../db_conn.php";

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      $search_medicine_query = "SELECT * FROM `medicine` WHERE  `box_id` LIKE '%$search%' OR `brand` LIKE '%$search%' OR `genericName` LIKE '%$search%' OR `manufacturerName` LIKE '%$search%' OR `contact_info` LIKE '%$search%';"; 
      
      $fetchAllMedicine = mysqli_query($conn, $search_medicine_query);
      
      ?>



            <ul class="accordion">

            <?php if(mysqli_num_rows($fetchAllMedicine) > 0) { 
                        while ($med = mysqli_fetch_assoc($fetchAllMedicine)) {  ?>


            <li>
            <input type="radio" name="accordion" id="first" checked>
            <label for="first">
                  <div class="medicine-table">
                  <table class="table-mdc">
                  <tbody>
                        <tr class="mdc-header">
                        <td style="width:120px;"><img src="./assets/<?=$med['image']?>" width="150px" height="130px"> </td>
                        <td style="width:200px;" >
                        <table>
                              <td class="b1"><?=$med['name']?></td>
                              <tr>
                              <td class="mdc-brand">Brand: <?=$med['brand']?></td>
                              <tr>
                              <td><?=$med['prod_id']?></td>
                        </table>
                        </td>
                  
                        <td style="text-align:justify;text-justify:inter-word;width:400px;">
                        <span class="mdc-stock">Desctiption: </span>
                        <span class="mdc-qty"><?=$med['description']?></span>
                        </td>
                        
                  
                        
                        <td style="width:390px;"><b>Expiration Date:</b> <?=$med['expirationDate']?></td>
                        <!-- <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medModal">
                        View
                        </button> 
                        </td> -->
                        <td><a href="#medModal" class="custom_btn" data-bs-toggle="modal"><i class="fa fa-info-circle" id="view" aria-hidden="true" style="color: gray; font-size: 30px"></i></a></td>

                        <td><a href="#editMedInfo" class="custom_btn editmedbtn" data-bs-toggle="modal"><i class="fa fa-edit" id="edit" aria-hidden="true" style="color: #3e64ff; font-size: 30px"></i></a></td>

                        <td><a href="#delMed" class="custom_btn deletemedbtn" data-bs-toggle="modal"><i class="fa fa-trash" id="delete" aria-hidden="true" style="color: #ED1C24; font-size: 30px"></i></a></td>
                        
            
                        </tr>
                        </tbody>
                        </table>
                        </div>
            </label>
            
            </li>


            <div class="modal fade" id="medModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 1000px; margin-right:2.5rem;">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">MEDICINE INFORMATION</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
            <div class="modal-body">
                  <div class="row">
                  <div class="col">
                              <label for="name" class="form-label">Medicine Name</label>
                              <input type="text" class="form-control" name="name" id="name" style="width:200px;"readonly value="<?=$med['name']?>">
                  </div>

                  <div class="col">
                  <label for="brand" class="form-label">Brand</label>
                              <input type="text"  class="form-control" name="brand" id="brand" readonly value="<?=$med['brand']?>">
                        </div>

                        <div class="col">
                  <label for="num_stocks" class="form-label">Stocks</label>
                              <input type="text" class="form-control" name="num_stocks" id="num_stocks" readonly value="<?=$med['num_stocks']?>">
                        </div>

                        <div class="col">
                        <label for="expirationDate" class="form-label">Expiration Date</label>
                              <input type="date" class="form-control" name="expirationDate" id="expirationDate" readonly value="<?=$med['expirationDate']?>">
                        </div>
                        <!---->
                  <div class="row">
                  <div class="col">
                  <label for="genericName" class="form-label">Generic Name</label>
                              <input type="text" class="form-control" name="genericName" id="genericName" style="width:200px;"readonly value="<?=$med['genericName']?>">
                  </div>
                  <div class="col">
                  <label for="date_manufactured" class="form-label">Date Manufactured</label>
                              <input type="date" class="form-control" name="date_manufactured" id="date_manufactured" style="width:200px;"readonly value="<?=$med['date_manufactured']?>">
                  </div>
                  <div class="col">
                  <label for="prodCondition" class="form-label">Product Condition</label>
                              <input type="text" class="form-control" name="prodCondition" id="prodCondition" style="width:200px;"readonly value="<?=$med['prodCondition']?>">
                  </div>
                  <div class="col">
                  <label for="storage" class="form-label">Storage</label>
                              <input type="text" class="form-control" name="storage" id="storage" style="width:100px;"readonly value="<?=$med['storage']?>">
                  </div>
                  <div class="col">
                  <label for="box_id" class="form-label">Box ID</label>
                              <input type="text" class="form-control" name="box_id" id="box_id" style="width:100px;"readonly value="<?=$med['box_id']?>">
                  </div>

                  <div class="row">
                  <div class="col">
                  <label for="manufacturerName" class="form-label">Manufacturer Name</label>
                              <input type="text" class="form-control" name="manufacturerName" id="manufacturerName" style="width:210px;"readonly value="<?=$med['manufacturerName']?>">
                  </div>
                  <div class="col">
                  <label for="contact_info" class="form-label">Contact Number</label>
                              <input type="text" class="form-control" name="contact_info" id="contact_info" style="width:170px;"readonly value="<?=$med['contact_info']?>">
                  </div>
                  <div class="col">
                  <label for="prod_qrcode" class="form-label">Product QR Code</label>
                  <img class="form-control" name="prod_qrcode" id="prod_qrcode" style="width:100px;" src="./assets/<?=$med['prod_qrcode']?>">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col"></div>
                  </div>

                  </div>

                  </div>
            </div>
            <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  
            </div>
            <style>
                  .modal-footer{
                  max-width:100%;
                  }
            </style>
            </form>
            </div>
            </div>
            </div>


            <?php } } ?>
            </ul>
      
   <?php }

?>