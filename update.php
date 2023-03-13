<?php require('connectDB.php');



	$idInput = $_GET['id'];
	$typeInput = $_GET['type'];


	if (isset($_POST['AddBtn'])) {
		$selectTypeValueInput = $_POST['selectTypeValueInput'];
		$InputYourName = $_POST['InputYourName'];
		$InputFatherName = $_POST['InputFatherName'];
		$InputMotherName = $_POST['InputMotherName'];
		$InputdateBarth = $_POST['InputdateBarth'];
		$InputPhoneNumber = $_POST['InputPhoneNumber'];
		$InputNidNumber = $_POST['InputNidNumber'];
		$InputAddress = $_POST['InputAddress'];
		$imagesName = $_FILES['images']['name'];
		$imagesTmpName = $_FILES['images']['tmp_name'];
		$papleImageName = $_POST['papleImageName'];


		$insartData = "UPDATE $typeInput SET `yourName`='$InputYourName',`fatherName`='$InputFatherName',`motherName`='$InputMotherName',`dateOfBarth`='$InputdateBarth',`nidNumber`='$InputNidNumber',`phoneNumber`='$InputPhoneNumber',`address`='$InputAddress',`yourIMage`='$papleImageName' WHERE $idInput";
		$insartDataQuery = mysqli_query($connectDB, $insartData);
		move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
		header("Location: dataView.php?type=".$typeInput."&id=".$idInput);
	}

?>






<!DOCTYPE html>
<html>
	<head>

		<title>Search Info</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/add.css">

	</head>

	<body>


		<section class="centerDataInput">


			<a href="dataView.php?type=<?php echo $typeInput; ?>&id=<?php echo $idInput; ?>"><i class="fa-solid fa-circle-xmark"></i></a>


			<h5 class="haderText">Department of Shipping</h5>


			<form class="formClass" method="post" action="" enctype="multipart/form-data">	

				<div id="inputFromDiv"  style="display: block;>
					<label class=inputBoxSearch"><input type="hidden" name="selectTypeValueInput" id="selectTypeValueInput"></label>

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
							
					}} ?>


					<label class="inputBoxSearch"><input value="<?php echo $yourNameDB; ?>" id="searchInputName" type="text" name="InputYourName" placeholder="Enter Your Name"></label>

					<label class="inputBoxSearch"><input value="<?php echo $fatherNameDB; ?>" id="searchInputFatherName" type="text" name="InputFatherName" placeholder="Enter Your Father Name"></label>
					<label class="inputBoxSearch"><input value="<?php echo $motherNameDB; ?>" id="searchInputMotherName" type="text" name="InputMotherName" placeholder="Enter Your Mother Name"></label>

					<label class="inputBoxSearch"><input value="<?php echo $phoneNumberDB; ?>" id="searchInputPhoneNumber" type="number" name="InputPhoneNumber" placeholder="Enter Phone Number"></label>
					<label class="inputBoxSearch"><input value="<?php echo $nidNumberDB; ?>" id="searchInputNid" type="number" name="InputNidNumber" placeholder="Enter Nid Number"></label>

					<label class="inputBoxSearch"><input value="<?php echo $dateOfBarthDB; ?>" id="searchInputDateBarth" type="date" name="InputdateBarth" placeholder="Enter Your Date of Barth"></label>
					<label class="inputBoxSearch"><input value="<?php echo $addressDB; ?>" id="searchInputAddress" type="text" name="InputAddress" placeholder="Enter Your Address"></label>

					<div class="profileImage">
						<div id="imageUpload" class="uploadBtn" title="Images">
							<i class="fa-solid fa-file-image"></i>
							<input type="file" name="images" id="papleImage" class="papleImage"  value="<?php echo $yourIMageDB; ?>">
						</div>

						<label class="inputBoxSearch"><input id="papleImageName" type="text" name="papleImageName" placeholder="Image Name" value="<?php echo $yourIMageDB; ?>"></label>

						<div class="imageViewDiv">
							<img id="papleImageNameIMG"  src="StoreData/YourImage/<?php echo $yourIMageDB; ?>">
						</div>
					</div>

				</div>

				

				<input type="submit" class="button" name="AddBtn" id="updateBtn" value="Update">
				<a href="index.php" class="button resetBtn">Search Data</a>
			</form>

		</section>


	<script src="js/update.js"></script>
	</body>
</html>