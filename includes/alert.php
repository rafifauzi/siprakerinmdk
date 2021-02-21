<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />	
	<link href="../assets/css/alertify.css" rel='stylesheet' type='text/css' /> 
	<link href="../assets/js/alertify.js" rel='stylesheet' type='text/css' /> 
	<link href="../assets/js/ngAlertify.js" rel='stylesheet' type='text/css' /> 
	<meta name="viewport" content="width=device-width">
</head>
<body>
<button onclick="popup();" class="btn btn-secondary" style="margin-top: 100px; margin-left: 650px;">TRY</button>

<script type="text/javascript">
	function popup(){
		alertify.alert("This is an alert dialog.", function(){ alertify.message('OK'); });
	}
</script>
</body>
</html>