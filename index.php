<!DOCTYPE html>
<html>
	<head style="background-color: powderblue;">
		<div>
		<script>
		function plus() {
  var nom = parseInt(document.getElementById("num1").value);
  var nom2 = parseInt(document.getElementById("num2").value);
  var plus1 = nom + nom2;
  document.getElementById("demo").innerHTML = plus1;
    }
  function minus() {
  var nom = parseInt(document.getElementById("num1").value);
  var nom2 = parseInt(document.getElementById("num2").value);
  if (nom >= nom2){
    var min = nom - nom2;
  document.getElementById("demo").innerHTML = min;
  } else {
    document.getElementById("demo").innerHTML = "Number two is bigger than the first one";
  }
   }
  function mul() {
  var nom = parseInt(document.getElementById("num1").value);
  var nom2 = parseInt(document.getElementById("num2").value);
  var mul = nom * nom2;
  document.getElementById("demo").innerHTML = mul;
   }
  function dev() {
  var nom = parseInt(document.getElementById("num1").value);
  var nom2 = parseInt(document.getElementById("num2").value);
  var asd = nom / nom2;
  document.getElementById("demo").innerHTML = asd;
   }

</script>
			<center>
      <h1 id="demo"></h1>
			<p><b>Enter number one: <input id="num1" required></p></b>

			<p><b>Enter number two: <input id="num2" required></p></b>
			
			<button onclick="plus()">plus</button>
      <button onclick="minus()">minus</button>
      <button onclick="mul()">multiply</button>
      <button onclick="dev()">devide</button>
		</div></center>
	</head>
	<body style="background-color: powderblue;"></body>
</html>
