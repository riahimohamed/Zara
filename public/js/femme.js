
function StatGlobal(r, y, g){
  var chart = AmCharts.makeChart( "chartdiv", {
    "type": "pie",
    "theme": "light",
    "dataProvider": [ {
      "personne": "",
      "value": r,
      "color":"#cc4748"
    }, {
      "personne": "",
      "value": y
    }, {
      "personne": "",
      "value": g
    } ],
    "valueField": "value",
    "titleField": "personne",
    "outlineAlpha": 0,
     "colorField": "color",
    "labelColorField": "color",
    "depth3D": 10,
    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    "angle": 30,
    "export": {
      "enabled": false
    }
  } );
}

function genreStatFme(r, y, g, divname){
  var chart = AmCharts.makeChart(divname, {
    "type": "pie",
    "theme": "light",
    "dataProvider": [ {
      "personne": "",
      "value": r,
      "color":"#cc4748"
    }, {
      "personne": "",
      "value": y
    }, {
      "personne": "",
      "value": g
    } ],
    "valueField": "value",
    "titleField": "personne",
    "outlineAlpha": 0,
     "colorField": "color",
    "labelColorField": "color",
    "depth3D": 0,
    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    "angle": 0,
    "export": {
      "enabled": false
    }
  } );
}

function genreStathomme(r, y, g, divname){
  var chart = AmCharts.makeChart(divname, {
    "type": "pie",
    "theme": "light",
    "dataProvider": [ {
      "personne": "",
      "value": r,
      "color":"#cc4748"
    }, {
      "personne": "",
      "value": y
    }, {
      "personne": "",
      "value": g
    } ],
    "valueField": "value",
    "titleField": "personne",
    "outlineAlpha": 0,
     "colorField": "color",
    "labelColorField": "color",
    "depth3D": 0,
    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    "angle": 0,
    "export": {
      "enabled": false
    }
  } );
}