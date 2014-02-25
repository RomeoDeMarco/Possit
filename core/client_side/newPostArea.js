function showTextarea() {
	
	var textarea = document.getElementById("postArea");
	textarea.style.display = "block";
}

function hideTextarea() {
	var textarea = document.getElementById("postArea");
	textarea.style.display = "none";
}



function checkPostData() {
	var area = document.getElementById("postAreaText").value;
	
	if (area.length > 0) {
		sendPost(area);
	} else {
		var notifications = document.getElementById("notifications");
		notifications.style.display = "inline-block";
		notifications.innerHTML = "No enough characters";
	}
}
function sendPost(area) {

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			/*RESPUESTA*/
			var response = xmlhttp.responseText;
			var notifications = document.getElementById("notifications");
			
			notifications.style.display = "inline-block";
			
			if (response == "1") {

				notifications.innerHTML = "Post sent";
			} else {
				notifications.innerHTML = xmlhttp.responseText;
			}
			hideTextarea();
			
		}
	}
	
	xmlhttp.open("POST", "core/server_side/sendPost.php", true);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("data="+area);
}