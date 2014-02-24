function upVote(button) {
	var id = button.id;
	sendVote(id, 1);
}

function downVote(button) {
	var id = button.id;
	sendVote(id, 2);
}

function sendVote(id, option) {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			/*RESPONSE*/
			var notification = document.getElementById('notifications');
			var response = xmlhttp.responseText;
			notification.style.display = "inline-block";
			
			if (response == "1") {
				notification.innerHTML = 'You voted +1';
			} else if (response == "2") {
				notifications.innerHTML = 'You vouted -1';
			} else if (response == "3") {
				notifications.innerHTML = "You've already voted this post";
			} else {
				notification.innerHTML = response;
			}
		}
	}
	
	xmlhttp.open("POST", "core/server_side/topComments.php", true);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&option="+option);
	
	
}