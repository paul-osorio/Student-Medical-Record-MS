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

    <title>Document</title>
  </head>
  <body>
    <?php include "./nav-layout.php"; ?>

    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
      <div class="">
        <!-- start: Navbar -->
        <nav
          class="px-3 py-2 d-flex justify-content-center"
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
            Quezon City University Clinics
          </h5>
        </nav>
        <!-- end: Navbar -->

        <!-- start: Content -->
        <nav
          class="py-3 px-3"
          style="
            --bs-breadcrumb-divider: url(
              &#34;data:image/svg + xml,
              %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
            );
          "
          aria-label="breadcrumb"
        >
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Medical Information</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Health History
            </li>
          </ol>
        </nav>
        <div class="px-4">
          <div class="d-flex justify-content-between align-items-center">
            <span class="fs-3 fw-semibold">Health History</span>
            <span class="fs-5 fw-semibold">12:30 PM</span>
          </div>

          <div class="row bg-white p-3 rounded-3 shadow mt-2">
            <h3 class="text-center fw-bold">COVID-19 VACCINE INFORMATION</h3>
            <div class="col-md-6 p-2">
              <div class="d-flex mb-3 my-2">
                <span class="text-dark fw-bold mx-2">Vaccine</span>
              </div>
              <div class="d-flex mb-3 my-2">
                <span class="text-dark fw-semibold mx-2"
                  >Are you vaccinated ?</span
                >

                <div class="form-check mx-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
                </div>
                <div class="form-check mx-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault2"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    No
                  </label>
                </div>
              </div>

              <div id="col" class="col-xxl-6 p-2 fw-semibold">
                <div class="child text-start">
                  <span class="text-dark fw-bold">1st Dose</span>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Type of vaccine</span>
                    <select
                      class="form-select mx-2"
                      aria-label="Default select example"
                      disabled
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Date of Vaccination</span>
                    <input
                      type="date"
                      aria-label="First name"
                      id="age"
                      class="form-control shadow-none rounded-0 mx-2"
                      disabled
                    />
                  </div>
                </div>
                <div class="child text-start">
                  <span class="text-dark fw-bold">2st Dose</span>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Type of vaccine</span>
                    <select
                      class="form-select mx-2"
                      aria-label="Default select example"
                      disabled
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Date of Vaccination</span>
                    <input
                      type="date"
                      aria-label="First name"
                      id="age"
                      class="form-control shadow-none rounded-0 mx-2"
                      disabled
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-2">
              <div class="d-flex mb-3 my-2">
                <span class="text-dark fw-bold mx-2">Booster Shots</span>
              </div>
              <div class="d-flex mb-3 my-2">
                <span class="text-dark fw-semibold mx-2"
                  >Are you vaccinated ?</span
                >

                <div class="form-check mx-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
                </div>
                <div class="form-check mx-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault2"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    No
                  </label>
                </div>
              </div>
              <div id="col" class="col-xxl-6 p-2 fw-semibold">
                <div class="child text-start">
                  <span class="text-dark fw-bold">1st Dose</span>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Type of vaccine</span>
                    <select
                      class="form-select mx-2"
                      aria-label="Default select example"
                      disabled
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Date of Vaccination</span>
                    <input
                      type="date"
                      aria-label="First name"
                      id="age"
                      class="form-control shadow-none rounded-0 mx-2"
                      disabled
                    />
                  </div>
                </div>
                <div class="child text-start">
                  <span class="text-dark fw-bold">2st Dose</span>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Type of vaccine</span>
                    <select
                      class="form-select mx-2"
                      aria-label="Default select example"
                      disabled
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div
                    class="input-group input-group-sm mb-3 my-2 d-flex align-items-center"
                  >
                    <span class="text-dark">Date of Vaccination</span>
                    <input
                      type="date"
                      aria-label="First name"
                      id="age"
                      class="form-control shadow-none rounded-0 mx-2"
                      disabled
                    />
                  </div>
                </div>
              </div>
            </div>
            <h3 class="text-center fw-bold">HEALTH INFORMATION</h3>
            <div class="col-md-6 p-2">
              <span class="px-3 fw-semibold">Type of Illness</span>
              <div
                class="accordion accordion-flush mt-3"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      Asthma
                    </button>
                  </h2>
                  <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <span class="fw-semibold">Medication </span>
                      <p class="my-2 mx-4">Inhaled Corticosteroid</p>
                      <span class="fw-semibold">Last Attack: </span>
                      <p class="my-2 mx-4">Nov. 20, 2022 | 11:22 AM</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      Eye Problem
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <span class="fw-semibold">Date: </span>
                      <p class="my-2 mx-4">November 25, 2022</p>
                      <span class="fw-semibold">Time: </span>
                      <p class="my-2 mx-4">11:22 AM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-2">
              <span class="px-3 fw-semibold">Family Health History</span>
              <div class="px-3 mt-3">
                <p>*Father</p>
                <textarea
                  name="father"
                  id="father"
                  cols="20"
                  rows="5"
                  class="w-100"
                  style="resize: none"
                  disabled
                  readonly
                ></textarea>
              </div>
              <div class="px-3">
                <p>*Mother</p>
                <textarea
                  name="mother"
                  id="mother"
                  cols="20"
                  rows="5"
                  class="w-100"
                  style="resize: none"
                  disabled
                  readonly
                ></textarea>
              </div>
            </div>
          </div>
        </div>
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
