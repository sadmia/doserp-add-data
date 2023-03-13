"use strict";


let updateBtn = document.getElementById('updateBtn');
let addData = document.getElementById('addData');

let driver = document.getElementById('Driver');
let master = document.getElementById('Master');

let driverPoient = document.querySelector('.driverPoient');
let masterPoient = document.querySelector('.masterPoient');
let searchSelect = document.querySelector('.searchSelect');

let driverClass1 = document.getElementById('DriverClass1');
let driverClass2 = document.getElementById('DriverClass2');
let driverClass3 = document.getElementById('DriverClass3');

let masterClass1 = document.getElementById('MasterClass1');
let masterClass2 = document.getElementById('MasterClass2');
let masterClass3 = document.getElementById('MasterClass3');

let searchInputName = document.getElementById('searchInputName');
let searchInputFatherName = document.getElementById('searchInputFatherName');
let searchInputMotherName = document.getElementById('searchInputMotherName');
let searchInputPhoneNumber = document.getElementById('searchInputPhoneNumber');
let searchInputNid = document.getElementById('searchInputNid');
let searchInputDateBarth = document.getElementById('searchInputDateBarth');
let searchInputAddress = document.getElementById('searchInputAddress');

let inputFromDiv = document.getElementById('inputFromDiv');
let selectTypeValueInput = document.getElementById('selectTypeValueInput');


let numberRegExp = /01[3,4,5,6,7,8,9][0-9]{8}$/;




searchInputName.addEventListener("input", function(){
	let sinValue = searchInputName.value;
	if (sinValue.length > 50) {
		searchInputName.style.borderColor = "red";
	} else {
		searchInputName.style.borderColor = "green";
	}
})

searchInputFatherName.addEventListener("input", function(){
	let sinValue = searchInputFatherName.value;
	if (sinValue.length > 50) {
		searchInputFatherName.style.borderColor = "red";
	} else {
		searchInputFatherName.style.borderColor = "green";
	}
})

searchInputMotherName.addEventListener("input", function(){
	let sinValue = searchInputMotherName.value;
	if (sinValue.length > 50) {
		searchInputMotherName.style.borderColor = "red";
	} else {
		searchInputMotherName.style.borderColor = "green";
	}
})

searchInputPhoneNumber.addEventListener("input", function(){
	if (searchInputPhoneNumber.value.match(numberRegExp)) {
		searchInputPhoneNumber.style.borderColor = "green";
	} else {
		searchInputPhoneNumber.style.borderColor = "red";
	}
})


searchInputNid.addEventListener("input", function(){
	let sinidVL = searchInputNid.value; 
	if (sinidVL.length == 10 || sinidVL.length == 17) {
		searchInputNid.style.borderColor = "green";
	} else {
		searchInputNid.style.borderColor = "red";
	}
})


searchInputDateBarth.addEventListener("input", function(){
	let sinValue = searchInputDateBarth.value;
	if (sinValue == "") {
		searchInputDateBarth.style.borderColor = "red";
	} else {
		searchInputDateBarth.style.borderColor = "green";
	}
})

searchInputAddress.addEventListener("input", function(){
	let sinValue = searchInputAddress.value;
	if (sinValue.length > 300) {
		searchInputAddress.style.borderColor = "red";
	} else {
		searchInputAddress.style.borderColor = "green";
	}
})



updateBtn.addEventListener("click", function(event){

	let imageExt = papleImage.value.split(".")[1];

	if ((searchInputName.value.length <= 50 && searchInputName.value.length != 0) &&
		(searchInputFatherName.value.length <= 50 && searchInputFatherName.value.length != 0) &&
		(searchInputMotherName.value.length <= 50 && searchInputMotherName.value.length != 0) &&
		(searchInputPhoneNumber.value.match(numberRegExp)) &&
		(searchInputNid.value.length == 10 || searchInputNid.value.length == 17) &&
		searchInputDateBarth.value != "" &&
		(searchInputAddress.value.length <= 300 && searchInputAddress.value.length != 0) &&
		imageExt == "jpg") { 

	} else {
		event.preventDefault();
	}

})



let imageUpload = document.getElementById("imageUpload");
let imageFileUpload = document.getElementById("imageFileUpload");
let papleImage = document.getElementById("papleImage");
let papleImageFile = document.getElementById("papleImageFile");
let papleImageNameIMG = document.getElementById("papleImageNameIMG");
let papleImageName = document.getElementById("papleImageName");


imageUpload.addEventListener("click", function(){
	papleImage.click();
})





papleImage.addEventListener("input", function(){
	let imageName = papleImage.value.split("fakepath\\")[1];
	let imageExt = papleImage.value.split(".")[1];

	if (imageExt == "jpg") {
		let url = URL.createObjectURL(this.files[0]);
		papleImageNameIMG.src = url;
		papleImageName.value = imageName;
		papleImageName.style.borderColor = "green";
	} else {
		papleImageName.value = "";
		papleImageNameIMG.src = "";
		papleImageName.style.borderColor = "red";
	}
	
})


