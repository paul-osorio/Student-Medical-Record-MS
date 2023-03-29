<?php
if(isset($_POST['view_history'])){
  echo ' <div>
    <nav
      class="px-3 py-2 d-flex justify-content-center"
      style="background: var(--primary-bg)"
    >

      <img
        src="./clinic-logo.png"
        class="img-thumbnail bg-transparent border-0"
        style="pointer-events: none"
        width="50"
        height="50"
        alt="..."
      />
      <h5 class="fw-bold mb-0 text-light" style="pointer-events: none">
        Quezon City University Clinics
      </h5>
    </nav>
    <nav
      class="py-3 px-3"
      style="
        --bs-breadcrumb-divider: url(
          &#34;data:image/svg + xml,
          %3Csvgxmlns="http://www.w3.org/2000/svg"width="8"height="8"%3E%3Cpathd="M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z"fill="%236c757d"/%3E%3C/svg%3E&#34;
        );
      "
      aria-label="breadcrumb"
    >
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-medical-history.php">Medical History</a></li>
        <li class="breadcrumb-item active" aria-current="page">
          Medical Information
        </li>
      </ol>
    </nav>
    <div class="px-3 mx-2">
      <div
        class="d-flex flex-wrap justify-content-between align-items-center"
      >
        <span class="fs-3 fw-semibold">Medical History</span>
        <span class="fs-6 fw-semibold">
          <span>March 29,2023 |</span> 12:30 PM</span
        >
      </div>

      <div class="row bg-white p-3 rounded-3 shadow mt-2">
        <div
          class="d-flex justify-content-between align-items-center flex-wrap"
        >
          <div class="d-flex align-items-center">
            <div
              class="position-relative"
              style="width: 180px; height: 150px"
            >
              <img
                src="../NURSE PANEL(new)/assets/nurse4.png"
                class="w-100 h-100"
              />
            </div>
            <div class="mx-4">
              <h4 class="fw-bold">Jessica O. Bulleque</h4>
              <p class="fw-semibold">Nurse Assistant</p>
              <p>220001</p>
            </div>
          </div>

          <div
            class="float-right p-0 m-0 align-self-end justify-content-end mt-4"
          >
            <span class="fw-bold">Status: </span>
            <span class="rounded-pill px-2 mx-2 bg-danger text-light"
              >Not Cleared</span
            >
          </div>
        </div>
      </div>
      <h4 class="my-4">Consultation Summary</h4>
      <div class="row bg-white p-3 rounded-3 shadow my-3">
        <div class="row">
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Headache</li>
              <p>Headache</p>
              <p>Congestion or runny nose</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Body Temperature</li>

              <p>Above Normal: 37.5 Degrees Celsius</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Reason of referral</li>
              <p>None</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">
                Have you been in close contact to suspected or confirmed
                covid case for the past 14 days?
              </li>
              <p>No</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Medicine Given</li>
              <p>1pcs Bioflu</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Hospital Name</li>
              <p>None</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">
                Have you been tested for covid in the past 10 days?
              </li>

              <p>No</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Confined? How long?</li>
              <p>Yes | 1hr</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border-start border-3 px-2">
              <li class="fw-semibold mb-2">Hospital Address</li>
              <p>None</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
}

?>
