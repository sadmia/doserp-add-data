<?php require('connectDB.php');



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


	$selectData = "SELECT `id`, `yourName`, `nidNumber`, `phoneNumber` FROM $selectTypeValueInput";
	$selectDataQuery = mysqli_query($connectDB, $selectData);
	$selectDataArray = mysqli_fetch_array($selectDataQuery);
	$idDB = $selectDataArray['id'];
	$nidNumberDB = $selectDataArray['nidNumber'];

	$pattern = "/$InputNidNumber/i";
	if (preg_match($pattern, $nidNumberDB)) { ?>

		<script>
			alert("NID (" + <?php echo $InputNidNumber; ?> + ")\nAvailable information...\nAdd a new information...\n");
		</script>
		
	<?php } else {

		if ($selectTypeValueInput == "DriverClass1") {
			$insartData = "INSERT INTO driverclass1(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}
		if ($selectTypeValueInput == "DriverClass2") {
			$insartData = "INSERT INTO driverclass2(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}
		if ($selectTypeValueInput == "DriverClass3") {
			$insartData = "INSERT INTO driverclass3(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}

		if ($selectTypeValueInput == "MasterClass1") {
			$insartData = "INSERT INTO masterclass1(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}
		if ($selectTypeValueInput == "MasterClass2") {
			$insartData = "INSERT INTO masterclass2(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}
		if ($selectTypeValueInput == "MasterClass3") {
			$insartData = "INSERT INTO masterclass3(`yourName`, `fatherName`, `motherName`, `dateOfBarth`, `phoneNumber`, `nidNumber`, `address`, `yourIMage`) VALUES ('$InputYourName', '$InputFatherName', '$InputMotherName', '$InputdateBarth', '$InputPhoneNumber', '$InputNidNumber', '$InputAddress', '$papleImageName')";
			$insartDataQuery = mysqli_query($connectDB, $insartData);
			move_uploaded_file($imagesTmpName,"StoreData/YourImage/".$papleImageName);
			header("Location: dataView.php?id=".$idDB);
		}
		
	}
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


			<h5 class="haderText">Department of Shipping</h5>
						

				<div class="priceAndFree">
					<div class="genderDiv">
						<p style="color: green; padding-bottom: 5px;">Certificate <span style="color: red;">*</span></p>
						<label><input id="Driver" type="radio" name="Certificate" value="Driver"> Driver</label>
						<label><input id="Master" type="radio" name="Certificate" value="Master"> Master</label>
					</div>					
				</div>

				<div class="priceAndFree driverPoient">
					<div class="genderDiv">
						<p style="color: green; padding-bottom: 5px;">Certificate Type <span style="color: red;">*</span></p>
						<label><input id="DriverClass1" type="radio" name="CertificateTypeDriver" value="DriverClass1"> Inland Driver Class1</label>
						<label><input id="DriverClass2" type="radio" name="CertificateTypeDriver" value="DriverClass2"> Inland Driver Class2</label>
						<label><input id="DriverClass3" type="radio" name="CertificateTypeDriver" value="DriverClass3"> Inland Driver Class3</label>
					</div>					
				</div>

				<div class="priceAndFree masterPoient">
					<div class="genderDiv">
						<p style="color: green; padding-bottom: 5px;">Certificate Type <span style="color: red;">*</span></p>
						<label><input id="MasterClass1" type="radio" name="CertificateTypeMaster" value="MasterClass1"> Inland Master Class1</label>
						<label><input id="MasterClass2" type="radio" name="CertificateTypeMaster" value="MasterClass2"> Inland Master Class2</label>
						<label><input id="MasterClass3" type="radio" name="CertificateTypeMaster" value="MasterClass3"> Inland Master Class3</label>
					</div>					
				</div>

		<form class="formClass" method="post" action="" enctype="multipart/form-data">

				<div id="inputFromDiv">
					<label class="inputBoxSearch"><input type="hidden" name="selectTypeValueInput" id="selectTypeValueInput"></label>
					<label class="inputBoxSearch"><input id="searchInputName" type="text" name="InputYourName" placeholder="Enter Your Name"></label>

					<label class="inputBoxSearch"><input id="searchInputFatherName" type="text" name="InputFatherName" placeholder="Enter Your Father Name"></label>
					<label class="inputBoxSearch"><input id="searchInputMotherName" type="text" name="InputMotherName" placeholder="Enter Your Mother Name"></label>

					<label class="inputBoxSearch"><input id="searchInputPhoneNumber" type="number" name="InputPhoneNumber" placeholder="Enter Phone Number"></label>
					<label class="inputBoxSearch"><input id="searchInputNid" type="number" name="InputNidNumber" placeholder="Enter Nid Number"></label>

					<label class="inputBoxSearch"><input id="searchInputDateBarth" type="date" name="InputdateBarth" placeholder="Enter Your Date of Barth"></label>
					<label class="inputBoxSearch"><input id="searchInputAddress" type="text" name="InputAddress" placeholder="Enter Your Address"></label>

					<div class="profileImage">
						<div id="imageUpload" class="uploadBtn" title="Images">
							<i class="fa-solid fa-file-image"></i>
							<input type="file" name="images" id="papleImage" class="papleImage">
						</div>

						<label class="inputBoxSearch"><input id="papleImageName" type="text" name="papleImageName" placeholder="Image Name"></label>

						<div class="imageViewDiv">
							<img id="papleImageNameIMG">
						</div>
					</div>

				</div>

				

				<input type="submit" class="button" name="AddBtn" id="updateBtn" value="Add">
				<a href="index.php" class="button resetBtn">Search Data</a>
		</form>

		</section>


	<script src="js/add.js"></script>
	</body>
</html>