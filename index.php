<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Convert Date</title>
<link rel="shortcut icon" href="btb_logo.ico" />
<script src="jquery-3.3.1.min.js"></script>
<script>
	$(function(){
		$( "#btn_submit" ).click(function() {
		  $.post( "convert_date.php", $( "#frm_convert_date" ).serialize(),function(data){
			  //alert(data);
			  $("#date_output").val(data);
		  });
		});
		
		$("#btn_clear_input").click(function(){
			$("#date_input").val("");
		});
		$("#btn_clear_output").click(function(){
			$("#date_output").val("");
		});
		$("#btn_clear_all").click(function(){
			$("#date_input").val("");
			$("#date_output").val("");
		});
	});
	function copyTextarea() {
	  /* Get the text field */
	  var copyText = document.getElementById("date_output");

	  /* Select the text field */
	  copyText.select();

	  /* Copy the text inside the text field */
	  document.execCommand("copy");

	  /* Alert the copied text */
	  alert("Copied the text: " + copyText.value);
	}
</script>
</head>

<body>
<div>
	<h1>Convert Date</h1>
</div>
<form id="frm_convert_date" action="index.php" method="post">
	Input<br>
		<textarea id="date_input" name="date_input" rows="10" cols="75"></textarea>
	
		Select Type :
		<select id="convert_type" name="convert_type">
			<option value="1">11/02/2018 -> 11/02/2561</option>
			<option value="2">11 กันยายน 2524 -> 11/09/2524</option>
			<option value="3">11 ก.ย. 2550  -> 11/09/2550</option>
		</select>
		
		<button id="btn_submit" type="button">Convert</button>
		<button id="btn_clear_input" type="button">Clear Input</button>
	<br>
	Output<br>
		<textarea id="date_output" name="date_output" rows="10" cols="75" readonly></textarea>
		<button id="btn_copy" type="button" onclick="copyTextarea()">Copy Text</button>
		<button id="btn_clear_output" type="button">Clear Output</button>
	<br>
		<button id="btn_clear_all" type="button">Clear All</button>
</form>

<hr>
<div>
	<a >by BTB@กระท่อมน้อย</a>
</div>
<?php
error_log("hello, this is a test!");
?>

</body>

</html>