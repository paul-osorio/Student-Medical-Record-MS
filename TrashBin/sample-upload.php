<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="fileUpload">Upload Image:</label>
  <input type="file" id="fileUpload" name="fileUpload" onchange="previewImage();" accept="image/*"><br>
  <img id="imgPreview" src="#" alt="Preview" style="display: none; max-width: 50px; max-height: 50px;"><br>
  <label for="fullName">Full Name:</label>
  <input type="text" id="fullName" name="fullName"><br>
  <label for="birthDate">Birth Date:</label>
  <input type="date" id="birthDate" name="birthDate"><br>
  <input type="submit" value="Submit">
</form>

<style>
    /* Optional CSS for image preview */
#imgPreview {
  display: block;
  margin: 10px 0;
  border: 1px solid black;
  padding: 5px;
}
</style>

<script>
    // Preview the selected image
function previewImage() {
  var fileInput = document.getElementById('fileUpload');
  var imgPreview = document.getElementById('imgPreview');
  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      imgPreview.src = e.target.result;
      imgPreview.style.display = 'block';
    }
    reader.readAsDataURL(fileInput.files[0]);
  }
}
</script>
</body>
</html>