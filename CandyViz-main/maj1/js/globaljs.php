<?php

$pdo = new PDO("mysql:host=localhost:3306;dbname=candyviz", "root", "", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$obes = $pdo->prepare("SELECT * FROM stats");
$obes->execute();
$obesite = $obes->fetchAll(PDO::FETCH_ASSOC);


var_dump($obesite)

?>
<script>
$(function(){
    $("header > nav > div, .burger").click(function(){
        $("header > nav > div").hide();
        $(".container-menu").show(function(){
          $(".burger").hide();
          $(".clique-btn-fermer").click(function(){
            $("header > nav > div").show();
            $(".container-menu").hide();
            $(".burger").show();
          });
        });
    });
});
function dataviz(data){
  
  am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_dataviz);
    am4core.useTheme(am4themes_dark);
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.RadarChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
    //pour la 3ème date
    chart.data = [
      {
        category: "15 - 24",
        value1: <?= $obesite[data]["surpoids15_24"] ?>,
        value2: <?= $obesite[2]["obesite15_24"] ?>,
        // value3: 4,
        // value4: 3
      },
      {
        category: "25 - 34",
        value1: <?= $obesite[2]["surpoids25_34"] ?>,
        value2: <?= $obesite[2]["obesite25_34"] ?>,
                // value3: 2,
        // value4: 4
      },
      {
        category: "35 - 44",
        value1: <?= $obesite[2]["surpoids35_44"] ?>,
        value2: <?= $obesite[2]["obesite35_44"] ?>,
        // value3: 6,
        // value4: 2
      },
      {
        category: "45 - 54",
        value1: <?= $obesite[2]["surpoids45_54"] ?>,
        value2: <?= $obesite[2]["obesite45_54"] ?>,
                // value3: 3,
        // value4: 2
      },
      {
        category: "55 - 64",
        value1: <?= $obesite[2]["surpoids55_64"] ?>,
        value2: <?= $obesite[2]["obesite55_64"] ?>,
                // value3: 5,
        // value4: 1
      },
      {
        category: "65 et plus",
        value1: <?= $obesite[2]["surpoids65"] ?>,
        value2: <?= $obesite[2]["obesite65"] ?>,
                // value3: 4,
        // value4: 4
      }
    ];

    //chart.padding(20, 20, 20, 20);
    chart.colors.step = 4;

    var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "category";
    categoryAxis.renderer.labels.template.location = 0.5;
    categoryAxis.renderer.labels.template.horizontalCenter = "right";
    // categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.tooltipLocation = 0.5;
    categoryAxis.renderer.axisFills.template.disabled = true;
    categoryAxis.interactionsEnabled = false;
    categoryAxis.renderer.minGridDistance = 10;

    var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
    valueAxis.tooltip.disabled = true;
    valueAxis.renderer.labels.template.horizontalCenter = "left";
    // valueAxis.min = 0;  
    valueAxis.max = 100;
    valueAxis.strictMinMax = true;
    valueAxis.renderer.maxLabelPosition = 0;
    valueAxis.renderer.minGridDistance = 10;
    valueAxis.renderer.axisFills.template.disabled = true;
    valueAxis.interactionsEnabled = false;

    var series1 = chart.series.push(new am4charts.RadarColumnSeries());
    series1.columns.template.tooltipText = "{name}: {valueX.value}";
    series1.name = "Surpoids";
    series1.dataFields.categoryY = "category";
    series1.dataFields.valueX = "value1";
    series1.stacked = true;

    var series2 = chart.series.push(new am4charts.RadarColumnSeries());
    series2.stroke = am4core.color("#EBFF00");
    series2.fill = am4core.color("#EBFF00");
    series2.columns.template.tooltipText = "{name}: {valueX.value}";
    series2.name = "Obésités";
    series2.dataFields.categoryY = "category";
    series2.dataFields.valueX = "value2";
    series2.stacked = true;

    var series3 = chart.series.push(new am4charts.RadarColumnSeries());
    series3.columns.template.tooltipText = "{name}: {valueX.value}";
    series3.name = "Series 3";
    series3.dataFields.categoryY = "category";
    series3.dataFields.valueX = "value3";
    series3.stacked = true;

    var series4 = chart.series.push(new am4charts.RadarColumnSeries());
    series4.columns.template.tooltipText = "{name}: {valueX.value}";
    series4.name = "Series 4";
    series4.dataFields.categoryY = "category";
    series4.dataFields.valueX = "value4";
    series4.stacked = true;

    chart.seriesContainer.zIndex = -1;

    // chart.scrollbarX = new am4core.Scrollbar();
    // chart.scrollbarX.exportable = false;
    // chart.scrollbarY = new am4core.Scrollbar();
    // chart.scrollbarY.exportable = false;

    // chart.cursor = new am4charts.RadarCursor();
    // chart.cursor.lineY.disabled = true;

    });


    am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("chartdiv2", am4charts.PieChart);

    // Add data
    chart.data = [ {
        "Type de décès": "Surpoids",
        "morts": <?= $obesite[2]["surpoids"] ?>
      }, {
        "Type de décès": "Obésité",
        "morts":<?= $obesite[2]["obesite"] ?>
      }];

    // Set inner radius
    chart.innerRadius = am4core.percent(50);

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "morts";
    pieSeries.dataFields.category = "Type de décès";
    pieSeries.slices.template.stroke = am4core.color("#000");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;

    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;
    });

}

dataviz(2)
</script>
