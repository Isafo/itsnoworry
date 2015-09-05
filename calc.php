<script>


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

	var i;
	for(i = 0; i < arr.timeseries.length; i++) 
	{
		//will it snow?
		if(arr.timeseries[i].pcat == 1)
		{
			//it will snow

			//For how long will it snow?
			var hours = howLongIsThis(i);

			//how much in kg does it snow in a second per square meter in the worst case?
			var quantityPerSec = arr.timeseries[i].pmax;

			//how much does it snow this time intervall?
			var totalQuantity = quantityPerSec*60*60*hours;

			//how much pressure will it be on the roof after this?
			totalPressure += totalQuantity;

			//Is this in the warning zone?
			if(totalPressure >= pressureBounds)
			{
				//In how many days is this?
				var when = whenIsThis(i);
				var days = when / 24;

				return days;
			}
		}
    }

    return 0;	
}

function getDayToShovel(lat, lon, pressureBounds){

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
    		}
	}

	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
	return days;
}

function getCurrentPressure(){
	return 0;
}

</script>

<body>
	calc
</body>