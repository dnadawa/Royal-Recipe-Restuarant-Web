google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawPieChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales',],
    ['2013',  1000      ],
    ['2014',  1170      ],
    ['2015',  660       ],
    ['2016',  1030      ]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

function drawPieChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Total Sales'],
      ['Burgers',     50],
      ['Snacks',      2],
      ['pizza',  2],
      ['Watch TV', 2],
      ['Sleep',    7]
    ]);

    var options = {
     
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
