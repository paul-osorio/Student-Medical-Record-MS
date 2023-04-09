<?php
   include "../db_conn.php";

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      $search_medicine_query = "SELECT * FROM `medicine` WHERE  `box_id` LIKE '%$search%' OR `name` LIKE '%$search%' OR `brand` LIKE '%$search%';"; 
      
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
                                      <td style="width:120px; padding-left: 20px;"><img src="./assets/<?=$med['image']?>" width="150px" height="130px"> </td>
                                      <td style="width:180px; padding-left: 20px;" >
                                          <table>
                                          <td class="b1"><?=$med['name']?></td>
                                          <tr>
                                          <td class="mdc-brand"><b>Brand:</b> <?=$med['brand']?></td>
                                          <tr>
                                          <td><?=$med['prod_id']?></td>
                                          </table>
                                      </td>
                                  
                                      <td style="text-align:justify;text-justify:inter-word;width:420px;">
                                          <span class="mdc-stock">Desctiption: </span>
                                          <span class="mdc-qty"><?=$med['description']?></span>
                                      </td>
                                          
                              
                                      
                                      <td style="width:370px; padding-left: 30px;">
                                      <!-- <b>Expiration Date:</b> <?=$med['expirationDate']?> -->
                                          <table>
                                          <td class="b1"><b>Expiration Date:</b> <?=$med['expirationDate']?></td>
                                          <tr>
                                          <td><b>Stocks:</b> <?=$med['num_stocks']?></td>
                                          </table>
                                      </td>

                                      
                                      <td style="width:160px;"><img src="./assets/<?=$med['prod_qrcode']?>" width="150px" height="130px"> </td>
                                      

                                      </tr>
                                      </tbody>
                                      </table>
                                      </div>
                              </label>

                          </li>

                          <?php } } ?>

                        </ul>
      
   <?php }

?>