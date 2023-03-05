var xValues = ["Verified", "Unverified", "Visitor", "Invalid"];
var yValues = [300, 100, 70, 30];
var barColors = [
  "#43B50E",
  "#E7BB23",
  "#0047FF",
  "#FF0000",
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
      legend: {
        display: true,
        position: 'left',
        maxWidth: 70,
      }
   }
});