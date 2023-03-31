<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="custom-properties.css" />

    <link rel="stylesheet" href="mediaQueries.css" />
    <link rel="stylesheet" href="nav-layout.css" />

    <script src="javascript/action.js" defer></script>
    <link rel="icon" type="image/png" href="./assets/favcon.png"/>
    <title>SMRMS | STUDENT | Medical Requirements</title>

  </head>
  <body>
    <!-- Navigation -->
    <?php include "./nav-layout.php"; ?>

    <!-- start: Main -->
    <main class="bg-light">
      <div>
        <!-- start: Navbar -->
        <nav
          class="px-3 d-flex justify-content-center"
          style="background: var(--primary-bg)"
        >
          <!-- <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i> -->
          <img
            src="./clinic-logo.png"
            class="img-thumbnail bg-transparent border-0"
            style="pointer-events: none"
            width="50"
            height="50"
            alt="..."
          />
          <h5 class="fw-bold mb-0 text-light" style="pointer-events: none">
              Student Medical Record
          </h5>
        </nav>
        <!-- end: Navbar -->

        <!-- start: Content -->
        <div class="p-4">
          <div class="row justify-content-center">
            <nav
              style="
                --bs-breadcrumb-divider: url(
                  &#34;data:image/svg + xml,
                  %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
                );
              "
              aria-label="breadcrumb"
            >
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  View Appointments
                </li>
              </ol>
            </nav>
            <span class="fs-3 fw-semibold">Medical Requirements List</span>

            <div
              class="col-xxl-6 text-dark mt-3 p-4 bg-white shadow table-responsive"
              id="no-more-tables"
            >
              <table class="table table-borderless text-center">
                <thead>
                  <tr class="border-bottom text-secondary-emphasis">
                    <th scope="col">Requirement Type</th>
                    <th scope="col">Date Submitted</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reason</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Requirement Type">
                      Complete Blood Count (CBC)
                    </td>
                    <td data-title="Date Submitted">January 21, 2023</td>
                    <td class="text-danger fw-semibold" data-title="Status">
                      re-submit
                    </td>
                    <td
                      style="max-width: 350px; width: 200px"
                      data-title="Reason"
                    >
                      problems with document submitted
                    </td>
                  </tr>
                  <tr>
                    <td data-title="Requirement Type">
                      Complete Blood Count (CBC)
                    </td>
                    <td data-title="Date Submitted">January 21, 2023</td>
                    <td class="text-success fw-semibold" data-title="Status">
                      Approved
                    </td>
                    <td
                      style="max-width: 350px; width: 250px"
                      data-title="Reason"
                    >
                    -
                      <!-- problems with document submitted -->
                    </td>
                  </tr>
                </tbody>
              </table>

              <!-- PAGINATION -->

              <!-- PAGINATION -->
            </div>
          </div>
        </div>

        <!-- MODAL  -->

        <div
          class="modal fade"
          id="cancel"
          tabindex="-1"
          aria-labelledby="cancel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-3">
              <div class="container-fluid position-relative">
                <i
                  class="fa-solid fa-trash fs-3 text-danger bg-white p-3 rounded-circle position-absolute start-50 translate-middle"
                  style="top: -20px; border: 3px solid #808080"
                ></i>
              </div>
              <div class="modal-body">
                <p class="fw-bold fs-5 text-center text-uppercase px-5">
                  are you sure you want to cancel this appointment ?
                </p>
              </div>
              <div
                class="modal-footer border-0 align-items-center justify-content-center"
              >
                <button
                  type="button"
                  class="btn btn-light mx-3 px-5 rounded-0"
                  data-bs-dismiss="modal"
                >
                  NO
                </button>
                <button
                  type="button"
                  class="btn btn-danger mx-3 px-5 rounded-0"
                >
                  YES
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="modal fade"
          id="view"
          tabindex="-1"
          aria-labelledby="view"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <span class="fw-bold fs-6" style="color: var(--primary-bg)"
                  >Please review the details of your appointment</span
                >
                <p class="fs-4 fw-semibold mt-2">Appointment Detail</p>
                <span class="fw-semibold">Appointment Type : </span>
                <p>Medical Services</p>
                <span class="fw-semibold">Reason for Appointment : </span>
                <p>Follow Up Medical Requirement</p>
                <span class="fw-semibold">Date : </span>
                <p>Friday, February 5, 2023</p>
                <span class="fw-semibold">Time : </span>
                <p>1:00 PM</p>
                <span class="fw-semibold">Reference No. : </span>
                <p>######</p>

                <div class="container d-flex align-items-center">
                  <img
                    src="./QR_code.svg.webp"
                    width="200"
                    height="200"
                    class="image-fluid"
                    alt=""
                  />
                </div>
                <div class="d-flex justify-content-end">
                  <button
                    class="btn text-white fw-semibold mx-1"
                    Data-bs-dismiss="modal"
                    style="background: var(--primary-bg)"
                  >
                    BACK
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MODAL  -->
      </div>
      <!-- end: Content -->
    </main>
    <div
      class="sidenav-toggle px-3 py-2 rounded-circle fs-4 bg-primary fw-bold text-white"
      id="sidenav-toggle"
    >
      <i class="fa-solid fa-bars"></i>
    </div>
    <!-- <script src="../assets/js/jquery.min.js"></script> -->

    <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="javascript/script.js"></script>
  </body>
</html>
