<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="adas"></div>
<input type="number" id="lsay"/>
<button onclick="letsgo()">Start</button>
<script>
function letsgo(){
var sa = document.getElementById("lsay").value;
setInterval(function () {$.post('backend.php', {sa:sa}, function(response){ 
	 $("#adas").html(response)
	 
});  }, 4000);  }
</script>
