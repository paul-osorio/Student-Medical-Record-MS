<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<div id="form-container">
  <div class="form-row">
    <img id="imgPreview" src="#" alt="Preview" style="display: none; max-width: 100px; max-height: 100px;">
    <input type="file" id="fileUpload" name="fileUpload" onchange="previewImage();" accept="image/*">
    <div class="inputs">
      <input type="text" name="lastname" placeholder="Lastname" required>
      <input type="text" name="firstname" placeholder="Firstname" required>
      <input type="text" name="middlename" placeholder="Middlename" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="age" placeholder="Age" required>
      <input type="date" name="birthDate" placeholder="Birthdate" required>
      <input type="text" name="address" placeholder="Address" required>

      <select name="Gender" id="">
        <option value="">Male</option>
        <option value="">Female</option>
      </select>

      <input type="text" name="contact_num" placeholder="Contact Number">

      <input type="text" name="year_lvl" placeholder="Year Level">
      <input type="text" name="section" placeholder="Section">
    </div>
  </div>

  <button id="add-row-btn">Add new row</button>
</div>
<script>
    const formContainer = document.getElementById("form-container");
const addRowBtn = document.getElementById("add-row-btn");

addRowBtn.addEventListener("click", () => {
  const newRow = document.createElement("div");
  newRow.classList.add("form-row");
  newRow.innerHTML = `
    <img id="imgPreview" src="#" alt="Preview" style="display: none; max-width: 100px; max-height: 100px;">
    <input type="file" id="fileUpload" name="fileUpload" onchange="previewImage();" accept="image/*">
    <div class="inputs">
      <input type="text" name="lastname" placeholder="Lastname" required>
      <input type="text" name="firstname" placeholder="Firstname" required>
      <input type="text" name="middlename" placeholder="Middlename" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="age" placeholder="Age" required>
      <input type="date" name="birthDate" placeholder="Birthdate" required>
      <input type="text" name="address" placeholder="Address" required>

      <select name="Gender" id="">
        <option value="">Male</option>
        <option value="">Female</option>
      </select>

      <input type="text" name="contact_num" placeholder="Contact Number">

      <input type="text" name="year_lvl" placeholder="Year Level">
      <input type="text" name="section" placeholder="Section">
    </div>
  `;
  formContainer.appendChild(newRow);
});

</script>
</body>
</html>
