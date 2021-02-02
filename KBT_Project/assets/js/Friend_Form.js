function loadCity(){
	var city = new XMLHttpRequest();
	city.open("GET", "JSON/cities.json", true);
	city.onreadystatechange = function (){
		if (city.readyState == 4 && city.status == 200) {
		     // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
		 	  var response_city=JSON.parse(city.responseText);
		 	 console.log(response_city);
		 }
		
		
	};
	 
	 city.send();
}

function loadstate(){
	var state = new XMLHttpRequest();
	state.open("GET", "<?php base_url()?>JSON/states.json", true);
	state.onreadystatechange = function (){
		if (state.readyState == 4 && state.status == 200) {
		     // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
		 	  var response_state=JSON.parse(state.responseText);
		 	 console.log(response_state);
		 }
		
		
	};
	 
	 state.send();

}




function loadCountry(){
	
	
	var country = new XMLHttpRequest();	
	country.open("GET","JSON/countries.json",true);
	country.onreadystatechange = function () {
	  
	 	 if(country.readystate == 4 && country.status == 200){
	 		 
	 		var response_country=JSON.parse(country.responseText);
	 		console.log(response_country);
	 	 }
   };
	  
	
	country.send();
}

//loadCity();
//loadstate();
loadCountry();






function CheckInvalidInput(){
	
	
	var reg = new RegExp("[^a-z]","gi");
	var first_name= document.getElementById("FirstName").value;
	var middle_name=document.getElementById("MiddleName").value;
	var last_name= document.getElementById("LastName").value;
	//window.alert(first);
	var first= reg.test(first_name);
	var middle = reg.test(middle_name);
	var last=reg.test(last_name);
	console.log("first="+first);
	console.log("Middle="+middle);
	console.log("last="+last);
	var text="Numbers,special characters,symbols are not allowed";
	if(first || middle || last){
		window.alert("true");
		
		document.getElementById("Invalid_FirstName").innerHTML=text;
		//document.getElementById("Invalid_MidName").innerHTML=text;
		//document.getElementById("Invalid_LastName").innerHTML=text;
		
	}
	else{
		window.alert("false");
		document.getElementById("Invalid_FirstName").innerHTML=null;
	}
	//window.alert(con);
	
	
}

function DisableCheckBox(text){
	window.alert('"'+text+'"');
	if(text==="female"){
		document.getElementById("female").checked=false;
	}
	else{
		document.getElementById("male").checked=false;
	}
 
 
}




 