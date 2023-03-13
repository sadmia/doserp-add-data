<?php require('connectDB.php');



	$idInput = $_GET['id'];
	$typeInput = $_GET['type'];

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Data Store</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/dataView.css">
	</head>
	<body>

		<div class="header">

			<?php 

				if ($typeInput == "driverclass1") { ?>
					<a class="logo">Inland Driver Class1</a>
				<?php } if ($typeInput == "driverclass2") { ?>
					<a class="logo">Inland Driver Class2</a>
				<?php } if ($typeInput == "driverclass3") { ?>
					<a class="logo">Inland Driver Class3</a>
				<?php } if ($typeInput == "masterclass1") { ?>
					<a class="logo">Inland Master Class1</a>
				<?php } if ($typeInput == "masterclass2") { ?>
					<a class="logo">Inland Master Class2</a>
				<?php } if ($typeInput == "masterclass3") { ?>
					<a class="logo">Inland Master Class3</a>
				<?php }

			?>

		  <div class="header-right">
		    <a class="active" href="index.php">Search</a>
		    <a href="add.php">Add Data</a>
		  </div>
		</div>


		<?php 

		if (isset($idInput) && isset($typeInput)) {
			if (!empty($idInput) && !empty($typeInput)) {
				$selectData = "SELECT `yourName`, `fatherName`, `motherName`, `dateOfBarth`, `nidNumber`, `phoneNumber`, `address`, `yourIMage` FROM $typeInput";
				$selectDataQuery = mysqli_query($connectDB, $selectData);
				$selectDataArray = mysqli_fetch_array($selectDataQuery);
				$yourNameDB = $selectDataArray['yourName'];
				$fatherNameDB = $selectDataArray['fatherName'];
				$motherNameDB = $selectDataArray['motherName'];
				$dateOfBarthDB = $selectDataArray['dateOfBarth'];
				$nidNumberDB = $selectDataArray['nidNumber'];
				$phoneNumberDB = $selectDataArray['phoneNumber'];
				$addressDB = $selectDataArray['address'];
				$yourIMageDB = $selectDataArray['yourIMage'];
				
		?>

	<table id="customers">
	  <tr>
	    <th>Attribute</th>
	    <th>
	    	<span>Value</span>
	    	<a href="update.php?type=<?php echo $typeInput; ?>&id=<?php echo $idInput; ?>"><i style="color: #fff;" class="fa-solid fa-pen-nib" title="Edit"> Edit</i></a>
	    </th>
	  </tr>

	  <tr>


	  <tr>
	    <td>Images</td>
	    <td>
	    	 <img src="StoreData/YourImage/<?php echo $yourIMageDB; ?>">
	    	<i id="addressCopy" class="fa-solid fa-download" title="Download"></i>
	    </td>
	  </tr>


	    <td>Your Name</td>
	    <td>
	    	<span value="<?php echo $yourNameDB; ?>"><?php echo $yourNameDB; ?></span>
	    	<i id="yourNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Father Name</td>
	    <td>
	    	<span va><?php echo $fatherNameDB; ?></span>
	    	<i id="fatherNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Mother Name</td>
	    <td>
	    	<span><?php echo $motherNameDB; ?></span>
	    	<i id="motherNameCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Date of Barth</td>
	    <td>
	    	<span><?php echo $dateOfBarthDB; ?></span>
	    	<i id="dateOfBarthCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>NID Number</td>
	    <td>
	    	<span><?php echo $nidNumberDB; ?></span>
	    	<i id="nidNumberCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Phone Number</td>
	    <td>
	    	<span><?php echo $phoneNumberDB; ?></span>
	    	<i id="phoneNumberCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>

	  <tr>
	    <td>Address</td>
	    <td>
	    	<span><?php echo $addressDB; ?></span>
	    	<i id="addressCopy" class="fa-solid fa-copy" title="Copy"></i>
	    </td>
	  </tr>


	<?php }} ?>


	</table>


	<script src="js/castom.js"></script>
	</body>
</html>