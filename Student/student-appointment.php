
<div class="row bg-white p-3 shadow">
  
    <div class="col-md-6">
        <span class="text-dark fw-bold fs-4">APPOINTMENT DETAILS</span>

        <div>
            <select class="form-select mb-3 mt-3 rounded-0" aria-label="Default select example">
                <option selected>TYPE OF APPOINTMENT</option>
                <option value="Dental">Dental</option>
                <option value="Medical">Medical</option>
            </select>
            
            <select class="form-select mb-3 rounded-0" aria-label="Default select example">
              <option selected>REASON FOR APPOINTMENT</option>
              <option value="Follow up requirements">Follow up requirements</option>
              <option value="Follow up requirements">Follow up requirements</option>
              <option value="Others"> Others </option>
            </select>

            <div class="border border-1 text-center text-dark">
              <p class="p-2 fw-semibold">This box will appear only if the student 
                  choose the 'others' in reason for 
                  appointment. </p>
            </div>
            
            <div class="py-2" id="calendar">
               <p class="fw-semibold text-start" style="color:var(--primary-bg)"> Please select your preferred date and time of appointment</p>
               <div class="w-100 h-100  p-3  text-center bg-secondary-subtle">
                   <span>CALENDAR</span>
                   <p>*KAYO NA LANG MAGLAGAY :3</p>
               </div>  
            </div>
        </div>

    </div>
    
    <div class="col-md-6 text-dark">

        <table class="table table-borderless text-center">
            <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Available Slots</th>
                  </tr>
            </thead>
            <tbody>
               <tr>
                <td >
                    <input type="radio" class="btn-check" name="options-outlined" id="8am" autocomplete="off">
                    <label class="btn btn-outline-primary" for="8am">8:00 am</label>
                </td>
                <td class="border-start border-2 border-dark">10</td>
              </tr>
              <tr>
                <td >
                    <input type="radio" class="btn-check" name="options-outlined" id="10am" autocomplete="off">
                    <label class="btn btn-outline-primary" for="10am">10:00 am</label>
                </td>
                <td class="border-start border-2 border-dark">3</td>
              </tr>
              <tr>
                <td >
                    <input type="radio" class="btn-check" name="options-outlined" id="1pm" autocomplete="off">
                    <label class="btn btn-outline-primary" for="1pm">1:00 pm</label>
                </td>
                <td class="border-start border-2 border-dark">3</td>
              </tr>
              <tr>
                <td >
                    <input type="radio" class="btn-check" name="options-outlined" id="3pm" autocomplete="off">
                    <label class="btn btn-outline-primary" for="3pm">3:00 pm</label>
                </td>
                <td class="border-start border-2 border-dark">3</td>
              </tr>
            </tbody>
          </table>
          <p class="text-start">You have set your appointment on <b>Date</b> with <b>reference no. </b> ######</p>
          <div class="container d-flex align-items-center justify-content-center p-3">
            <img src="./QR_code.svg.webp" width="200" height="200" class="image-fluid" alt="">
          </div>
         <div class="d-flex justify-content-end">
            <button class="btn text-white fw-semibold mx-1" style="background: var(--bg-back-button)">BACK</button>
            <button class="btn text-white fw-semibold mx-1" style="background: var(--primary-bg);">NEXT</button>
         </div>
        </div>

</div>