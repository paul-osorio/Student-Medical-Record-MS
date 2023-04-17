$(document).ready(function () {
  testing();
  function testing() {
    console.log("testing");
  }

  $(document).on("click", "#consultation_submit", function () {
    const date = new Date();
    const date_now = Intl.DateTimeFormat("en-ph", {
      dateStyle: "short",
      timeZone: "Asia/Manila",
    }).format(date);

    let symptoms = [],
      otherSymptoms = [],
      close_contact = [],
      confined = [],
      referred = [],
      cleared = [],
      covid_test,
      temperature,
      how_long,
      quantity,
      student_id;

    student_id = $(this).attr("data-id");

    $("input[name='symptoms[]']:checked").each(function () {
      symptoms.push($(this).val());
    });
    $("input[name='othersymptoms[]']:checked").each(function () {
      otherSymptoms.push($(this).val());
    });
    $("input[name='confined[]']:checked").each(function () {
      confined.push($(this).val());
    });
    $("input[name='referred[]']:checked").each(function () {
      referred.push($(this).val());
    });
    $("input[name='cleared[]']:checked").each(function () {
      cleared.push($(this).val());
    });
    $("input[name='close_contact[]']:checked").each(function () {
      close_contact.push($(this).val());
    });

    covid_test = $("input[name='covid_test']").val();
    temperature = $("input[name='body_temp']").val();
    how_long = $("input[name='how_long']").val();
    quantity = $("input[name='quantity']").val();

    if (
      typeof quantity === "undefined" ||
      quantity === null ||
      quantity === ""
    ) {
      alert("please Fill the FF:");
    } else {
      $.ajax({
        method: "POST",
        url: "fetchData.php",
        data: {
          confirm: 1,
          student_id: student_id,
          date_now: date_now,
          symptoms: symptoms.join(", "),
          othersymptoms: otherSymptoms.join(", "),
          body_temp: temperature,
          close_contact: close_contact.join(", "),
          covid_test: covid_test,
          cleared: cleared.join(", "),
          confined: confined.join(", "),
          how_long: how_long,
          referred: referred.join(", "),
          quantity: quantity,
        },
        success: function (response) {
          $("#student").html(response);
        },
      });

      if (cleared[0] === "Not Verified") {
        $.ajax({
          url: "fetchData.php",
          method: "POST",
          data: { fetch_stud_data: 1, id: student_id },
          success: function (response) {
            $("#student").html(response);
            // $('#student').html(data)
            consultation(student_id);
          },
        });
      }
    }
  });

  $(document).on("click", "#view", function () {
    let id = $(this).attr("data-id");
    $.ajax({
      url: "fetchData.php",
      method: "POST",
      data: { fetch_stud_data: 1, id: id },
      success: function (response) {
        $("#student").html(response);
        // $('#student').html(data)
        consultation(id);
      },
    });
  });
  $(document).on("click", "#consultation", function () {
    let id = $(this).attr("data-id");
    $.ajax({
      url: "fetchData.php",
      method: "POST",
      data: { new_consultation: 1, id: id },
      success: function (response) {
        $("#student").html(response);

        consultation(id);
      },
    });
  });
  function consultation(id) {
    $.ajax({
      url: "fetchData.php",
      method: "POST",
      data: { consultation: 1, id: id },
      success: function (response) {
        $("#cosultation_output").html(response);
        // $('#student').html(data)
      },
    });
  }
});
