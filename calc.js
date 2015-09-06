//This file is to be included after getData.php to be usable

function whenIsThis($spotInArray){
	inThisManyHours = 0;
	var i;
	for(i = 0; i < $spotInArray; i++)
	{
		if(i < 42)
			inThisManyHours += 0;
		else if(i < 52)
			inThisManyHours += 3;
		else if(i < 62)
			inThisManyHours += 6;
		else
			inThisManyHours += 12;
	}
	return inThisManyHours;
}

function howLongIsThis(spotInArray){
	if(spotInArray < 42)
		return 1;
	else if(spotInArray < 52)
		return 3;
	else if(spotInArray < 62)
		return 6;
	else
		return 12;
}

//Parses the values in the object array that we are interested in to variables
function parseJSON(arr, pressureBounds) {

	//How much pressure is there on the roof right now?
	var pressureNow = getCurrentPressure();
	var totalPressure = pressureNow;
        		document.getElementById("hej").innerHTML += "Pressure now is "+pressureNow+" kg";

	var i;
	for(i = 0; i < arr.timeseries.length; i++) 
	{
		//will it snow? 1 = snow gives result in kg/m^2/s, 3 = rain givews result in mm/s
		if(arr.timeseries[i].pcat == 1)
		{
			//it will snow

			//For how long will it snow?
			var hours = howLongIsThis(i);

			//how much in kg does it snow in a second per square meter in the worst case?
			var quantityPerSec = arr.timeseries[i].pmax;
        		document.getElementById("hej").innerHTML += "<br/>Snows for "+hours+" hours with "+quantityPerSec+" kg/m^2/s";

			//how much does it snow this time intervall?
			var totalQuantity = quantityPerSec*60*60*hours;
        		document.getElementById("hej").innerHTML += "<br/>which is "+totalQuantity+" kg";

			//how much pressure will it be on the roof after this?
			totalPressure += totalQuantity;
document.getElementById("hej").innerHTML += "<br/>pressure will be " + totalPressure + " kg";

			//Is this in the warning zone?
			if(totalPressure >= pressureBounds)
			{
				//In how many days is this?
				var when = whenIsThis(i);
				var days = when / 24;
document.getElementById("hej").innerHTML += "<br/>shovel in " + days + " days";

				return days;
			}
		}
		else if(arr.timeseries[i].pcat == 3)
		{
			//it will snow

			//For how long will it snow?
			var hours = howLongIsThis(i);

			//how much in mm does it snow in a second per in the worst case?
			var quantityPerSec = arr.timeseries[i].pmax;
        		document.getElementById("hej").innerHTML += "<br/>Snows for "+hours+" hours with "+quantityPerSec+" mm/s";

			//how much does it rain in this time intervall?
			var totalQuantity = quantityPerSec*60*60*hours;
        		document.getElementById("hej").innerHTML += "<br/>which is "+totalQuantity+" mm wich is "+totalQuantity/1000+" m";

			//how much pressure will it be on the roof after this?
			//1 m^3 = 1000 liter
			totalPressure += totalQuantity/1000;
document.getElementById("hej").innerHTML += "<br/>pressure will be " + totalPressure + " kg";

			//Is this in the warning zone?
			if(totalPressure >= pressureBounds)
			{
				//In how many days is this?
				var when = whenIsThis(i);
				var days = when / 24;
document.getElementById("hej").innerHTML += "<br/>shovel in " + days + " days";

				return Math.floor(days);
			}
		}
    }

    return -1;	
}

function getDayToShovel(lat, lon, pressureBounds, elementID){

	//Get data from SMHI
	var xmlhttp = new XMLHttpRequest();
	var url = "http://opendata-download-metfcst.smhi.se/api/category/pmp2g/version/1/geopoint/lat/" + lat + "/lon/" + lon + "/data.json";
	var days = -1;

	//Parse JSON to objects when data is recieved
	xmlhttp.onreadystatechange = function() {
    		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        		var myArr = JSON.parse(xmlhttp.responseText);

        		//Parse the objects into variables
        		days = parseJSON(myArr, pressureBounds);
        		document.getElementById(elementID).innerHTML += "</br>"+days;
    		}
	}

	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
