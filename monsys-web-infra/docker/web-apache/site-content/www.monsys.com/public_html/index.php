<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
  		<script type="text/javascript" src="script/jquery-1.6.4.js"></script>
		<title>Welcome To MonSys Front-End</title>
		
		<script language="JavaScript">
		
			$(document).ready(function () {
				refreshNodes();
			});

			function refreshNodes() {
			    $.getJSON('/ajax/resources/nodes',
			    function(data) {
			        var items = [];

			        $.each(data,
			        function(key, val) {
			            items.push('<li>' + val.name + ", " + val.description + ", load: " + val.currentLoadLevel + ' %</li>');
			        });

			        $('#monitor').html("<ul>" + items.join('') + "</ul>");
			    });
				var t=setTimeout("refreshNodes()", 1000);
			}
	</script>
	</head>
	<body>
		<h1>Welcome to MonSys</h1>
		<h2>You are connected to the front-end system, implemented in PHP</h2>
		<b>Note</b>: this page is sending HTTP GET requests to <verbatim>/ajax/resources/nodes</verbatim> in order to retrieve JSON representations of the resources managed by the back-end.
		<p/>
		
		<div id="monitor">
			You should monitoring data coming from the back-end here.
		</div>
		
		<br/>
		Brought to you by the University of Applied Sciences of Western Switzerland
	</body>
</html>
