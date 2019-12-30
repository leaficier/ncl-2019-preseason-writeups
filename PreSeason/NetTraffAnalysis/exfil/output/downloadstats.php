<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Data Served</title>
<style>

.demo-container {
	box-sizing: border-box;
	padding: 20px 15px 15px 15px;
	margin: 0px auto 0px auto;
	border: 1px solid #ddd;
	background: #fff;
	background: linear-gradient(#f6f6f6 0, #fff 50px);
	background: -o-linear-gradient(#f6f6f6 0, #fff 50px);
	background: -ms-linear-gradient(#f6f6f6 0, #fff 50px);
	background: -moz-linear-gradient(#f6f6f6 0, #fff 50px);
	background: -webkit-linear-gradient(#f6f6f6 0, #fff 50px);
	box-shadow: 0 3px 10px rgba(0,0,0,0.15);
	-o-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
	-ms-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
	-webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
</style>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="js/flot/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/flot/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/flot/jquery.flot.time.js"></script>
	<script type="text/javascript">

	$(function() {
		drawPlot();
	});



	window.onresize = function(event) {

		drawPlot();
	};

	
var s = [[1522540800000,5544308073763],[1522627200000,3641641618752],[1522713600000,6635839399920],[1522800000000,3345614081323],[1522886400000,4299406508766],[1522972800000,1524800421507],[1523059200000,1897610882432],[1523145600000,5036282583789],[1523232000000,2490636206408],[1523318400000,3196345530810],];
var c = [[1522540800000,272],[1522627200000,315],[1522713600000,347],[1522800000000,297],[1522886400000,313],[1522972800000,268],[1523059200000,327],[1523145600000,356],[1523232000000,321],[1523318400000,318],];

function drawPlot(){
	
		$.plot("#placeholder", 
			[
				{ data:s, label:"Data Served (SI)", lines:{show:true}, points:{show:true}},
				{ data:c, label:"# Downloads", lines:{show:true}, points:{show:true}, yaxis: 2}
		    ], {
			xaxis: {
				mode: "time",
				tickSize: [1,"day"]
			},
	        yaxes: [{
	        	min:0,
	            axisLabel: "Data Served (SI)",
	            axisLabelUseCanvas: true,
	            axisLabelFontSizePixels: 12,
	            axisLabelFontFamily: 'Verdana, Arial',
	            axisLabelPadding: 3,
	            tickFormatter: mksize
	        }, {
	        	min:0,
	            position: "Count",
	            axisLabel: "",
	            tickSize: 1,
	            position: "right",
	            alignTicksWithAxis: true,
	            axisLabelUseCanvas: true,
	            axisLabelFontSizePixels: 12,
	            axisLabelFontFamily: 'Verdana, Arial',
	            axisLabelPadding: 3
	        }],
	        legend: {
	            noColumns: 0,
	            labelBoxBorderColor: "#000000",
	            position: "sw"
	        },
		});
}

function mksize(bytes){
	
	if (bytes < 1000 * Math.pow(1000,1))
		return Math.floor(bytes / Math.pow(1000,1)) + "kB";
	else if (bytes < 1000 * Math.pow(1000,2))
		return Math.floor(bytes / Math.pow(1000,2)) + "MB";
	else if (bytes < 1000 * Math.pow(1000,3))
		return (bytes / Math.pow(1000,3)).toFixed(0) + "GB";
	else if (bytes < 1000 * Math.pow(1000,4))
		return (bytes / Math.pow(1000,4)).toFixed(1) + "TB";
	else
		return (bytes / Math.pow(1000,5)).toFixed(2) + "PB";
}



	</script>
</head>
<body>
	<div style="font: 18px/1.5em 'proxima-nova', Helvetica, Arial, sans-serif;">
		<div class="demo-container" style="width:100%;height:250px">
			<div id="placeholder" class="" style="	width: 100%; height: 100%;font-size: 14px;"></div>
		</div>
	</div>
</body>
</html>
