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
let searchInputPhoneNumber = document.getElementById('searchInputPhoneNumber');
let searchInputNid = document.getElementById('searchInputNid');

let yourName = document.getElementById('YourName');
let phoneNumber = document.getElementById('PhoneNumber');
let nid = document.getElementById('NID');

let selectTypeValueInput = document.getElementById('selectTypeValueInput');


let numberRegExp = /01[3,4,5,6,7,8,9][0-9]{8}$/;


driver.addEventListener("input", function(){
	driverPoient.style.display = "block";
	masterPoient.style.display = "none";
	searchSelect.style.display = "none";
	searchInputName.style.display = "none";
	searchInputPhoneNumber.style.display = "none";
	searchInputNid.style.display = "none";

	driverClass1.checked = false;
	driverClass2.checked = false;
	driverClass3.checked = false;

	yourName.checked = false;
	phoneNumber.checked = false;
	nid.checked = false;
})
master.addEventListener("input", function(){
	masterPoient.style.display = "block";
	driverPoient.style.display = "none";
	searchSelect.style.display = "none";
	searchInputName.style.display = "none";
	searchInputPhoneNumber.style.display = "none";
	searchInputNid.style.display = "none";

	masterClass1.checked = false;
	masterClass2.checked = false;
	masterClass3.checked = false;

	yourName.checked = false;
	phoneNumber.checked = false;
	nid.checked = false;
})


function selectDefunt(){
	yourName.checked = false;
	phoneNumber.checked = false;
	nid.checked = false;

	searchInputName.style.display = "none";
	searchInputPhoneNumber.style.display = "none";
	searchInputNid.style.display = "none";

	searchInputName.value = "";
	searchInputPhoneNumber.value = "";
	searchInputNid.value = "";
}


driverClass1.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = driverClass1.value;
	selectDefunt();
})
driverClass2.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = driverClass2.value;
	selectDefunt();
})
driverClass3.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = driverClass3.value;
	selectDefunt();
})

masterClass1.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = masterClass1.value;
	selectDefunt();
})
masterClass2.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = masterClass2.value;
	selectDefunt();
})
masterClass3.addEventListener("input", function(){
	searchSelect.style.display = "block";
	selectTypeValueInput.value = masterClass3.value;
	selectDefunt();
})





yourName.addEventListener("input", function(){
	searchInputName.style.display = "block";
	searchInputPhoneNumber.style.display = "none";
	searchInputNid.style.display = "none";
	searchInputPhoneNumber.value = "";
	searchInputNid.value = "";
})
phoneNumber.addEventListener("input", function(){
	searchInputName.style.display = "none";
	searchInputPhoneNumber.style.display = "block";
	searchInputNid.style.display = "none";
	searchInputName.value = "";
	searchInputNid.value = "";
})
nid.addEventListener("input", function(){
	searchInputName.style.display = "none";
	searchInputPhoneNumber.style.display = "none";
	searchInputNid.style.display = "block";
	searchInputName.value = "";
	searchInputPhoneNumber.value = "";
})


searchInputName.addEventListener("input", function(){
	let sinValue = searchInputName.value;
	if (sinValue.length > 50) {
		searchInputName.style.borderColor = "red";
	} else {
		searchInputName.style.borderColor = "green";
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
	let sinidVL = searchInputNid.value; console.log(sinidVL);
	if (sinidVL.length == 10 || sinidVL.length == 17) {
		searchInputNid.style.borderColor = "green";
	} else {
		searchInputNid.style.borderColor = "red";
	}
})



updateBtn.addEventListener("click", function(event){

	if (searchInputName.value != "") {
		if (searchInputName.value.length > 50) {
			event.preventDefault();
		}

	} else if (searchInputPhoneNumber.value != "") {
		if (!searchInputPhoneNumber.value.match(numberRegExp)) {
			event.preventDefault();
		}
	} else if (searchInputNid.value != "") {
		if (sinidVL.length != 10 || sinidVL.length != 17) {
			event.preventDefault();
		}
	} else {
		event.preventDefault();
	}

})



let copyYourName = document.getElementById("myInput");
let copyFatherName = document.getElementById("myInput");
let copyMotherName = document.getElementById("myInput");
let copyPhoneNumber = document.getElementById("myInput");
let copyNidNumber = document.getElementById("myInput");
let copyAddress = document.getElementById("myInput");


function textCopy(){
	  copyText.select();
	  copyText.setSelectionRange(0, 99999);
	  navigator.clipboard.writeText(copyText.value);
}