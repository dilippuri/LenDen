
var email;
var password;
var status1;
var status2;
var status3;
var status4;
var status5;
var status6;
var status7;
var status8;
var status9;
var status10;
var status11;
var status12;
var status13;
var status14;
var status15;
var status16;
var status17;
var status18;
var status19;
var status20;
var status21;
var status22;
var status23;


var err;
var status;
function createXHR(){

	return new XMLHttpRequest();
	
}

function checkLogin(){
	
	username = document.getElementById("login-username");
	password = document.getElementById("login-password");
	/*user_type = document.getElementById("user_type");
	*/
	alert(username.value);
	status1 = false;
	status2 = false;
	status = false;
	err="";
	
	if(username.value == "" || username.value == "Provide username"){
		username.style.borderColor="red";
		err+="Provide Username \n";
	}else{
		username.style.borderColor="#ccc";
		status1=true;
	}
	
	if(password.value == "" || password.value == "Provide password"){
		password.style.borderColor="red";
		err+="Provide Password \n";
	}else{
		password.style.borderColor="#ccc";
		status2=true;
	}
	

	if(status1 == true && status2 == true){

    var xhr = new XMLHttpRequest();
	
    //window.location = "";

	xhr.onreadystatechange = function getInfo(){

		if(xhr.readyState == 4 && xhr.status == 200){		
			
			var response = xhr.responseText;

	
			 if(response.status == "success" ){

			 		//alert(response + "status : " + status);

			 		document.getElementById("status").style.display = "none";
					
					document.getElementById("status").innerHTML = "";

			 	    /*window.location = "user.php?t=" + user_type.value;
					*/
			 	    status = true;

			 	    //alert(response + "status : " + status);
			
			
			 }
			
			 	else{

			 		//alert("Username or password incorrect");

			 		document.getElementById("status").style.display = "block";

			 		document.getElementById("status").style.color = "red";
					
					document.getElementById("status").innerHTML = "Please provide correct credentials";

					status = false;

					//window.location = "login-error.php";

			 		//alert(response + "status : " + status);

			 	}


		}

	};
	
	//alert("xhr.readystate = " + xhr.readystate + " xhr.status " + xhr.status);
	
	xhr.open("GET","login1.php?u="+username.value+"&p="+password.value,true);
	
	xhr.send();
	
	//return status;
	
	}else{
	
	alert(err);
	
	//return false;
	
	}
	
}