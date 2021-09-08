const responsiv = document.querySelector('.container-block-responsive');
var responsiv_display = window.getComputedStyle(responsiv).getPropertyValue("display");
const graph1 = document.querySelector('#resp_chartdiv1');
const graph2 = document.querySelector('#resp_chartdiv2');

fetch("./php/data.json")
    .then(function(resp){
      return resp.json();
    })
    .then(function(data){
      console.log(data[1]["date"]);
      dataviz(0, data, "chartdiv1", "chartdiv2", "resp_chartdiv1", "resp_chartdiv2");
      dataviz(1, data, "chartdiv3", "chartdiv4", "resp_chartdiv3", "resp_chartdiv4");
      dataviz(2, data, "chartdiv5", "chartdiv6", "resp_chartdiv5", "resp_chartdiv6");
      dataviz(3, data, "chartdiv7", "chartdiv8", "resp_chartdiv7", "resp_chartdiv8");
      dataviz(4, data, "chartdiv9", "chartdiv10", "resp_chartdiv9", "resp_chartdiv10");
      dataviz(5, data, "chartdiv11", "chartdiv12", "resp_chartdiv10", "resp_chartdiv12");
      dataviz(6, data, "chartdiv13", "chartdiv14", "resp_chartdiv13", "resp_chartdiv14");
      dataviz(7, data, "chartdiv15", "chartdiv16", "resp_chartdiv15", "resp_chartdiv16");
      dataviz(8, data, "chartdiv17", "chartdiv18", "resp_chartdiv17", "resp_chartdiv18");
      dataviz(9, data, "chartdiv19", "chartdiv20", "resp_chartdiv19", "resp_chartdiv20");
    });

$(function(){
    $("header > nav > div, .burger").click(function(){
        $("header > nav > div").hide();
        $(".container-menu").show(function(){
          $(".burger").hide();
          $(".btn-x").click(function(){
            $("header > nav > div").show();
            $(".container-menu").hide();
            $(".burger").show();
          });
        });
    });
});

// Bouton scroll lors du responsive en mobile
// const text = document.getElementById("text");
// const chart2 = document.getElementById("chartdiv2");
// const datavizresp = document.getElementsByClassName("container-dataviz-responsive")
// const chevronUp = document.getElementById("fleche-dataviz");
// chevronUp.addEventListener("click", function(e){
//   console.log(e.target);
//   datavizresp[0].style.display = "block";
//   chevronUp.style.transform = "rotate(180deg)";
//   chevronUp.style.bottom = "235px";
//   chart2.style.display = "block";
//   text.style.display = "none";

// });

// $(function(){
//   $("#fleche-dataviz").click(function(){
//     $(".container-dataviz-responsive").show(function(){
      // $("#fleche-dataviz").css('transform', 'rotate(180deg)');
      // $("#fleche-dataviz").css('bottom', '235px');
//       $("#chartdiv2").show();
//       $("#text").hide();
//       $("#fleche-dataviz").click(function(){
//         $(".container-dataviz-responsive").hide();
          // $("#fleche-dataviz").css('transform', 'rotate(0deg)');
          // $("#fleche-dataviz").css('bottom', '30px');
//           $("#chartdiv2").hide();
//           $("#text").show();
//     });
//     });
//   });
// });

// var menu = true;
// console.log(menu)
// if (menu){
//   $(function(){
//     $("#fleche-dataviz").click(function(){
//       $(".container-dataviz-responsive").show(function(){
//         $("#fleche-dataviz").css('transform', 'rotate(180deg)');
//         $("#fleche-dataviz").css('bottom', '235px');
//         $("#chartdiv2").show();
//         $("#text").hide();
        
//       });
//     });
//   });
//   menu = false;
//   console.log(menu)
// }
// else{
//   $("#fleche-dataviz").click(function(){
//     $(".container-dataviz-responsive").hide();
//       $("#fleche-dataviz").css('transform', 'rotate(0deg)');
//       $("#fleche-dataviz").css('bottom', '30px');
//       $("#chartdiv2").hide();
//       $("#text").show();
      
//   });
//   menu = true;
// };


// $(function(){
//   $("#fleche-dataviz").click(function(){
//       $("#text").hide();
//       $(".container-dataviz-responsive").show(function(){
//         $("#fleche-dataviz").click(function(){
//           $("#text").hide();
//           $(".container-dataviz-responsive").show();
//         });
//       });
//   });
// });

$("#fleche-dataviz").on('click',function(){
  
  if ($('.container-dataviz-responsive').css("display") == "none") {
    $(".container-dataviz-responsive",$(this).parent()).show()
    // $('.container-dataviz-responsive').show();
    $(".container-dataviz-responsive",$(this).parent()).animate({bottom: '0px'}, 1000, function(){
    });
      $('.rectangle-dataviz').show();
      $("main .container-dataviz-responsive .rectangle-dataviz .container-data-flex div#resp_chartdiv1").show();
      $("#fleche-dataviz").css('transform', 'rotate(180deg)');
      $("#fleche-dataviz").delay(180).animate({bottom: '330px'}, 785, function(){
      });
      
      $(".container-dataviz-responsive").css('bottom', '0px');
    }
  else {
    // $('.container-dataviz-responsive').hide("fast");
    $(".container-dataviz-responsive",$(this).parent()).animate({bottom: '-400px'}, 1000, function(){
			$(".container-dataviz-responsive",$(this).parent()).hide();
    });
    $('#text').show();
    $("#fleche-dataviz").css('transform', 'rotate(0deg)');
    $("#fleche-dataviz").animate({bottom: '30px'}, 850, function(){
    });
  };
});


// Fleche du FN
$("#fleche-right").on('click', function(){
  if($("div#resp_chartdiv1").css("display") != "none"){
    $("div#resp_chartdiv1").hide();
    $("div#resp_chartdiv2").show();
    $("div#resp_chartdiv1").css('display', 'none');
    $("div#resp_chartdiv2").css('display', 'block');
  }
  else if($("div#resp_chartdiv2").css("display") != "none"){
    $("div#resp_chartdiv2").hide();
    $("div#resp_chartdiv1").show();
  };
});

// fleche de gauche
$("#fleche-left").on('click', function(){
  if($("#resp_chartdiv1").css("display") != "none"){
    $("div#resp_chartdiv1").hide();
    $("div#resp_chartdiv2").show();
    $("div#resp_chartdiv1").css('display', 'none');
    $("div#resp_chartdiv2").css('display', 'block');
  }
  else if($("#resp_chartdiv2").css("display") != "none"){
    $("div#resp_chartdiv2").hide();
    $("div#resp_chartdiv1").show();
  };
});




function dataviz(position, data, chart1, chart2, resp1, resp2){

  am4core.ready(function(){

    // Themes begin
    console.log("responsiv");
    am4core.useTheme(am4themes_dataviz);
    am4core.useTheme(am4themes_dark);
    am4core.useTheme(am4themes_animated);
    // Themes end
    if(responsiv_display == "none"){
      var chart = am4core.create(chart2, am4charts.RadarChart);
    }
    else{
      var chart = am4core.create(resp2, am4charts.RadarChart);
    };
    
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
    
    chart.data = [
      {
        category: "15 - 24",
        value1: data[position]["surpoids15_24"],
        value2: data[position]["obesite15_24"],
        // value3: 4,
        // value4: 3
      },
      {
        category: "25 - 34",
        value1: data[position]["surpoids25_34"],
        value2: data[position]["obesite25_34"],
        // value3: 2,
        // value4: 4
      },
      {
        category: "35 - 44",
        value1: data[position]["surpoids35_44"],
        value2: data[position]["obesite35_44"],
        // value3: 6,
        // value4: 2
      },
      {
        category: "45 - 54",
        value1: data[position]["surpoids45_54"],
        value2: data[position]["obesite45_54"],
        // value3: 3,
        // value4: 2
      },
      {
        category: "55 - 64",
        value1: data[position]["surpoids55_64"],
        value2: data[position]["obesite55_64"],
        // value3: 5,
        // value4: 1
      },
      {
        category: "65 et plus",
        value1: data[position]["surpoids65"],
        value2: data[position]["obesite65"],
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
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.tooltipLocation = 0.5;
    categoryAxis.renderer.grid.template.strokeOpacity = 0.07;
    categoryAxis.renderer.axisFills.template.disabled = true;
    categoryAxis.interactionsEnabled = false;
    categoryAxis.renderer.minGridDistance = 10;
    
    var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
    valueAxis.tooltip.disabled = true;
    valueAxis.renderer.labels.template.horizontalCenter = "left";
    valueAxis.min = 0;
    valueAxis.max = 100;
    valueAxis.strictMinMax = true;
    valueAxis.renderer.maxLabelPosition = 0;
    valueAxis.renderer.minGridDistance = 10;
    valueAxis.renderer.grid.template.strokeOpacity = 0.07;
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
    if(responsiv_display == "none"){
      var chart = am4core.create(chart1, am4charts.PieChart);
    }
    else{
      var chart = am4core.create(resp1, am4charts.PieChart);
    };
    
    // Add data
    chart.data = [ {
        "Type de décès": "Surpoids",
        "morts": data[position]["surpoids"]
      }, {
        "Type de décès": "Obésité",
        "morts": data[position]["obesite"]
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
