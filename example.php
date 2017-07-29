<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php require_once 'data.php'; ?>

	<select class="form-control" name="location" id="location">
	  <?php foreach($cities as $c) { ?>
	    <optgroup label="<?php echo $c['title']; ?>">
	      <?php foreach($c['districts'] as $d) { ?>
	        <option value="<?php echo $d; ?>"><?php echo $c['title']; ?> / <?php echo $d; ?></option>
	      <?php } ?>
	    </optgroup>
	  <?php } ?>
	</select>
	
</body>
</html>
