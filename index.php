<?php require('connectDB.php');


if (isset($_POST['AddBtn'])) {
	$SearchType = $_POST['SearchType'];
	$selectTypeValueInput = $_POST['selectTypeValueInput'];
	$InputYourName = $_POST['InputYourName'];
	$InputPhoneNumber = $_POST['InputPhoneNumber'];
	$InputNidNumber = $_POST['InputNidNumber'];

	if ($SearchType == "YourName") {
		if (!empty($InputYourName) && strlen($InputYourName) <= 50) {
			$selectData = "SELECT `id`, `yourName` FROM $selectTypeValueInput";
			$selectDataQuery = mysqli_query($connectDB, $selectData);
			$selectDataArray = mysqli_fetch_array($selectDataQuery);
			$idDB = $selectDataArray['id'];
			$yourNameDB = $selectDataArray['yourName'];

			$pattern = "/$InputYourName/i";
			if (preg_match($pattern, $yourNameDB)) { 
				header("Location: dataView.php?type=".$selectTypeValueInput."&id=".$idDB);
			}
		}
	} else if ($SearchType == "PhoneNumber") {
		if (!empty($InputPhoneNumber) && strlen($InputPhoneNumber) == 11 || strlen($InputPhoneNumber) == 10) {
			$selectData = "SELECT `id`, `phoneNumber` FROM $selectTypeValueInput";
			$selectDataQuery = mysqli_query($connectDB, $selectData);
			$selectDataArray = mysqli_fetch_array($selectDataQuery);
			$idDB = $selectDataArray['id'];
			$numberDB = $selectDataArray['phoneNumber'];

			$pattern = "/$InputPhoneNumber/i";
			if (preg_match($pattern, $numberDB)) {
				header("Location: dataView.php?type=".$selectTypeValueInput."&id=".$idDB);
			}
		}
	} else if ($SearchType == "NID") {
		if (!empty($InputNidNumber) && strlen($InputNidNumber) == 10 || strlen($InputNidNumber) == 17) {
			$selectData = "SELECT `id`, `nidNumber` FROM $selectTypeValueInput";
			$selectDataQuery = mysqli_query($connectDB, $selectData);
			$selectDataArray = mysqli_fetch_array($selectDataQuery);
			$idDB = $selectDataArray['id'];
			$nidNumberDB = $selectDataArray['nidNumber'];

			$pattern = "/$InputNidNumber/i";
			if (preg_match($pattern, $nidNumberDB)) {
				header("Location: dataView.php?type=".$selectTypeValueInput."&id=".$idDB);
			}
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
		<link rel="stylesheet" type="text/css" href="css/style.css">

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
						<label><input id="DriverClass1" type="radio" name="CertificateTypeDriver" value="driverclass1"> Inland Driver Class1</label>
						<label><input id="DriverClass2" type="radio" name="CertificateTypeDriver" value="driverclass2"> Inland Driver Class2</label>
						<label><input id="DriverClass3" type="radio" name="CertificateTypeDriver" value="driverclass3"> Inland Driver Class3</label>
					</div>					
				</div>

				<div class="priceAndFree masterPoient">
					<div class="genderDiv">
						<p style="color: green; padding-bottom: 5px;">Certificate Type <span style="color: red;">*</span></p>
						<label><input id="MasterClass1" type="radio" name="CertificateTypeMaster" value="masterclass1"> Inland Master Class1</label>
						<label><input id="MasterClass2" type="radio" name="CertificateTypeMaster" value="masterclass2"> Inland Master Class2</label>
						<label><input id="MasterClass3" type="radio" name="CertificateTypeMaster" value="masterclass3"> Inland Master Class3</label>
					</div>					
				</div>

			<form class="formClass" method="post" action="">

				<div class="priceAndFree searchSelect">
					<div class="genderDiv">
						<p style="color: green; padding-bottom: 5px;">Search Type <span style="color: red;">*</span></p>
						<label><input id="YourName" type="radio" name="SearchType" value="YourName"> Your Name</label>
						<label><input id="PhoneNumber" type="radio" name="SearchType" value="PhoneNumber"> Phone Number</label>
						<label><input id="NID" type="radio" name="SearchType" value="NID"> NID Number</label>
					</div>					
				</div>

			

				<label class="inputBoxSearch"><input type="hidden" name="selectTypeValueInput" id="selectTypeValueInput"></label>
				<label class="inputBoxSearch"><input id="searchInputName" type="text" name="InputYourName" placeholder="Enter Your Name"></label>
				<label class="inputBoxSearch"><input id="searchInputPhoneNumber" type="number" name="InputPhoneNumber" placeholder="Enter Phone Number"></label>
				<label class="inputBoxSearch"><input id="searchInputNid" type="number" name="InputNidNumber" placeholder="Enter Nid Number"></label>

				

				<input type="submit" class="button" name="AddBtn" id="updateBtn" value="Search">
				<a href="add.php" class="button resetBtn">Add Data</a>
			</form>

		</section>


	<script src="js/castom.js"></script>
	</body>
</html>