<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	<script type="text/javascript">
		function getSessionId(){
			alert(document.cookie);
		}
	</script>
</head>
<body>
<?php echo session_id(); ?>
<button onclick="getSessionId()">
	getSessionId
</button>
</body>
</html>