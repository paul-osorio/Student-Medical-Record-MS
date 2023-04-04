$(document).ready(function () {

  
  $("#send_otp").on("click", function () {
    let email = $("#email").val();
    let otp_code = "";

    for (let i = 0; i < 6; i++) {
      var randNum = Math.floor(Math.random() * 10) + 1;
      otp_code += randNum;
    }
    console.log(otp_code);

    $.ajax({
      url: "send-email.php",
      method: "POST",
      data: { email: email, otp_code: otp_code.substring(0, 6) },
      success: function (data) {
        location.href = "student-verify-otp.php";
      },
    });
  });
  $(document).on("click", "#view_history", function () {
    // let id = $(this).attr('data-id');
    $.ajax({
      url: "student-medical-view-history.php",
      method: "POST",
      data: { view_history: 1 },
      success: function (response) {
        $("#history_content").html("");
        $("#history_content").html(response);
      },
    });
  });
});

console.log("working properly");
