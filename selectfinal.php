<html>
	<head>
		<title>Scheduling system</title>
		<!-- Latest compiled and minified CSS -->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="scheduling.css">

		<meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="117923577899-3kbde4ua0776dbm175gdm4t8te15u2ho.apps.googleusercontent.com">
        
	</head>
	
	<body style="background-image: url(image.jpeg); background-repeat: no-repeat; background-size: 100% 100%;" >
		<div id="container" >
				<div id="title">
						<center><h1 style="font-family:vivaldi; background-color: #FFF; border-radius: 10px; padding : 10px;"><i>Scheduling System</i></h1></center>
				</div>
				<div id="detail">
					<center>
						<br><br><br><br><br><br>
							<div align="center" id="my-signin2"></div>
						
					</center>
				</div>
		</div>

		<!--google sign in success-->
		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
		<script type="text/javascript" >
		 function renderButton() {
                   gapi.signin2.render('my-signin2', {
                       'scope': 'profile email',
                       'width': 240,
                       'height': 50,
                       'longtitle': true,
                       'theme': 'white',
                       'onsuccess': onSuccess,
                       'onfailure': onFailure
                   });
 }
function onSuccess(googleUser) {
    var profile = googleUser.getBasicProfile();
    var name = profile.getName();
    var email = profile.getEmail();
    var img = profile.getImageUrl();
    var atpos=email.indexOf("@");
    var domain=email.substring(atpos+1);
    email=profile.getEmail();

				console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
				console.log('Name: ' + profile.getName());
			    console.log('Email: ' + profile.getEmail());
			window.location="gmail.php?email="+email;
 	   
     
    
        
 }
   

function onFailure(error) {
                console.log(error);
            }


		 </script>
	</body>
</html>