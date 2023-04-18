$(document).ready(function () {
  testing();
  function testing() {
    console.log("testing");
  }

  // const pdfBlob = doc.output("blob");

  // return pdfBlob;

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
            consultation(student_id, student);
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
  $("#cmd").click(function () {
    // const contentText = [
    //   {
    //     text: "This is the body content.",
    //     style: "body",
    //   },
    // ];
    const headerImage = {
      stack: [
        {
          svg: `<svg
              width="720"
              height="100"
              viewBox="0 0 720 100"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <rect width="720" height="100" fill="url(#pattern0)" />
              <defs>
                <pattern
                  id="pattern0"
                  patternContentUnits="objectBoundingBox"
                  width="1"
                  height="1"
                >
                  <use
                    xlink:href="#image0_2949_12604"
                    transform="scale(0.00138889 0.0104167)"
                  />
                </pattern>
                <image
                  id="image0_2949_12604"
                  width="720"
                  height="100"

                />
              </defs>
            </svg>`,
          width: 500,
          height: 50,
          alignment: "center",
          margin: [15, 0, -20, 25],
        },
      ],
    };
    const h1 = {
      text: "Medical Clearance",
      style: {
        fontSize: 24,
        bold: true,
        alignment: "center",
      },
    };

    const year = {
      text: "SY: 2022 - 2023",
      style: {
        fontSize: 12,
        alignment: "center",
        margin: [0, 10, 0, 10],
      },
    };
    var style = {
      fontSize: 12,
      alignment: "start",
    };

    var docDefinition = {
      content: [
        headerImage,
        h1,
        {
          text: year,
          alignment: "center",
          margin: [0, 10, 0, 30],
        },

        {
          columns: [
            {
              text: "Name : Andrew, Miranda Reyes",
              width: "*",
              margin: [0, 15],
            },
            {
              text: "Course : Bachelor of Science in Information Technology",
              width: "35%",
              margin: [0, 15],
            },
            { text: "Year Level : 3rd year", width: "*", margin: [0, 15] },
            { text: "Campus : San Bartolome", width: "*", margin: [0, 15] },
          ],
          style: style,
        },
        {
          columns: [
            {
              text: "Contact No.: 63937298379",
              width: "18.3%",
              margin: [0, 15],
            },
            {
              text: "Complete Address : Masantol St. Barangay Batasan Quezon City",
              width: "auto",
              margin: [0, 15],
            },
          ],
        },
        {},
      ],
      pageSize: "legal",
      pageOrientation: "landscape",
      pageMargins: [30, 25, 10, 10],
      style: {
        fontSize: 12,
      },
    };
    const pdfDoc = pdfMake.createPdf(docDefinition);

    // Open the PDF document in a new window
    pdfDoc.open();
  });
});
