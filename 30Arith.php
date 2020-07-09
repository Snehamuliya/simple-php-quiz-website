<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">

<script>
var countdown = 20 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);
  if (countdown <= 0) {
     alert("30 min!");
	 window.location="arithresult.php";
     clearInterval(timerId);
  } else {
     $("#countTime").html(min + " min : " + sec +" secound left");
  }
}, 1000);
</script>
<style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  float:right;
  width:480px;
  margin-top:10px;
  margin-right:10px;
  background-color: yellow;
  padding: 10px;

}
</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>

<div class="sticky">
<h1 id="countTime"></h1>
</div>

</body>
</html>
