
<span class="fs-3 fw-semibold ">Appointment List</span>

<div class="d-flex justify-content-end mt-3">
  <button class="btn text-white rounded-pill fw-semibold  " style="background: var(--primary-bg);" ><i class="fa-solid fa-add mx-2"></i> Add New Appointment</button>
</div>

<div class=" text-dark mt-3 p-4 bg-white shadow table-responsive" id="no-more-tables" >

  <table class="table table-borderless text-center" width="100%" border="0">
    <thead>
      <tr class="border-bottom text-secondary-emphasis">
        <th scope="col">Appointment Type</th>
        <th scope="col">Reference Number</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody >
      <tr>
        <td data-title="Appointment Type">Medical Services</td>
        <td  data-title="Reference Number">HaKdOgNaCAP102</td>
        <td  data-title="Appointment Date">January 21, 2023</td>
        <td data-title="Status" class="text-success-emphasis fw-semibold text-capitalize" id="status" >scheduled</td>
        <td data-title="Action">
            <button class="btn rounded-0 px-2 btn-primary"data-bs-toggle="modal" data-bs-target="#view">View</button>
            <button class="btn rounded-0 px-2 btn-danger" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</button>
        </td>
      </tr>
      <tr>
        <td data-title="Appointment Type">Dental Services</td>
        <td data-title="Reference Number">UmaySaCAP102</td>
        <td data-title="Appointment Date">February 1, 2023</td>
        <td data-title="Status" class="text-dark fw-semibold text-capitalize" id="status" >completed</td>
        <td data-title="Action">
            <button class="btn rounded-0 px-2 btn-primary"data-bs-toggle="modal" data-bs-target="#view">View</button>
            <button class="btn rounded-0 px-2 btn-danger" disabled>Cancel</button>
        </td>
      </tr>
      <tr>
        <td data-title="Appointment Type">Dental Services</td>
        <td data-title="Reference Number">UmaySaCAP102</td>
        <td data-title="Appointment Date">February 1, 2023</td>
        <td data-title="Status" class="text-danger-emphasis fw-semibold text-capitalize" id="status" >cancelled</td>
        <td data-title="Action">
            <button class="btn rounded-0 px-2 btn-primary"data-bs-toggle="modal" data-bs-target="#view">View</button>
            <button class="btn rounded-0 px-2 btn-danger" disabled>Cancel</button>
        </td>
      </tr>
    </tbody>

  </table>
  
  <!-- PAGINATION -->
  <nav aria-label="Page navigation" class=" d-flex justify-content-center">
     <ul class="pagination">
       <li class="page-item">
         <a class="page-link" href="#" aria-label="Previous">
           <span aria-hidden="true">&laquo;</span>
         </a>
       </li>
       <li class="page-item active "><a class="page-link" href="#">1</a></li>
       <li class="page-item "><a class="page-link" href="#">2</a></li>
       <li class="page-item "><a class="page-link" href="#">3</a></li>
       <li class="page-item ">
         <a class="page-link" href="#" aria-label="Next">
           <span aria-hidden="true">&raquo;</span>
         </a>
       </li>
     </ul>
  </nav>
  <!-- PAGINATION -->

</div>

<!-- MODAL  -->

<div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="cancel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content  py-3 px-3">
      <div class="container-fluid position-relative">
          <i class="fa-solid fa-trash fs-3 text-danger bg-white p-3 rounded-circle position-absolute start-50 translate-middle" style="top:-20px;border: 3px solid #808080;"></i>
      </div>
      <div class="modal-body">
        <p class="fw-bold fs-5 text-center text-uppercase px-5">are you sure you want to cancel this appointment ?</p>
      </div>
      <div class="modal-footer border-0 align-items-center justify-content-center">
        <button type="button" class="btn btn-light mx-3 px-5 rounded-0" data-bs-dismiss="modal">NO</button>
        <button type="button" class="btn btn-danger mx-3 px-5 rounded-0">YES</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="view" tabindex="-1" aria-labelledby="view" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
          <span class="fw-bold fs-6" style="color: var(--primary-bg);" >Please review the details of your appointment</span>
          <p class="fs-4 fw-semibold mt-2">Appointment Detail</p>
          <span class="fw-semibold">Appointment Type : </span><p>Medical Services</p>
          <span class="fw-semibold">Reason for Appointment : </span><p>Follow Up Medical Requirement</p>
          <span class="fw-semibold">Date : </span><p>Friday, February 5, 2023</p>
          <span class="fw-semibold">Time : </span><p>1:00 PM</p>
          <span class="fw-semibold">Reference No. : </span><p>######</p>
          
            <div class="container d-flex align-items-center   ">
              <img src="./QR_code.svg.webp" width="200" height="200" class="image-fluid" alt="">
            </div>
           <div class="d-flex justify-content-end">
              <button class="btn text-white fw-semibold mx-1" Data-bs-dismiss="modal" style="background: var(--primary-bg);">BACK</button>
           </div>
      </div>
    </div>
  </div>
</div>

