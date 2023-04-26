var xValues = ["Verified", "Unverified", "Visitor", "Invalid"];
var yValues = [55, 49, 44, 24];
var barColors = [
  "#2D7538",
  "#f5c71a",
  "#5180C7",
  "#FF4646",
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: false,
      aspectRatio: 2,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Difficulty Breathing", "Fever or Chills", "Headache", "Diarrhea", "Dizziness"];
var yValues = [55, 49, 44, 24, 35];
var barColors = [
  "#255B98",
  "#5CE1E6",
  "#2BB4D4",
  "#255B98",
  "2D306D",
];

new Chart("report_student_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Medical", "Dental",];
var yValues = [55, 49,];
var barColors = [
  "#5CE1E6",
  "#2BB4D4",
];

new Chart("report_appointment_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Difficulty Breathing", "Fever or Chills", "Headache", "Diarrhea", "Dizziness"];
var yValues = [55, 49, 44, 24, 35];
var barColors = [
  "#255B98",
  "#5CE1E6",
  "#2BB4D4",
  "#255B98",
  "2D306D",
];

new Chart("report_medicine_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});