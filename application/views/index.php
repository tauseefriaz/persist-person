<!DOCTYPE html>
<html>
<head>
	<title>Insert Person</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/style.css">
</head>
<body>

	<div class="main">
		<div>
			<form id="form-search">
				<input class="text-field" type="text" name="firstname" id="firstname" placeholder="First Name" required>
				<input class="text-field" type="text" name="lastname" id="lastname" placeholder="Last Name" required>
				<input class="text-field" type="text" name="dob" id="dob"  placeholder="Date Of Birth" required>
				<input class="text-field" type="text" name="zip" id="zip" placeholder="Zip Code" required>
				<br>
				<input type="submit" id="submit_last_button" value="Save Person!">
				<span id="success">Person Saved!</span>
			</form>
		</div>
	  
	<table border="1" colspan="0">
		<tr style="font-weight: bold;">
		  	<td>First Name</td>
		  	<td>Last Name</td>
		  	<td>DOB</td>
		  	<td>Zip</td>
		</tr>
		<? foreach($personsList as $person): ?>
		<tr>
		  	<td><?=$person->firstname?></td>
		  	<td><?=$person->lastname?></td>
		  	<td><?=date("m/d/Y", $person->dob)?></td>
		  	<td><?=$person->zip?></td>
		</tr>
		<? endforeach; ?>
	</table>
	 

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?=base_url()?>assets/apps.js"></script>


