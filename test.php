<?php

if(isset($_POST["submit"]))
{

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apisandbox.openbankproject.com/obp/v3.0.0/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{  \"email\":\"" . $_POST["email"] .
     "\",  \"username\":\"" . $_POST["username"] .
     "\",  \"password\":\"" . $_POST["password"] .
     "\",  \"first_name\":\"" . $_POST["firstName"] .
     "\",  \"last_name\":\"" . $_POST["lastName"] .
     "\"}",
  CURLOPT_HTTPHEADER => array(
    "authorization: DirectLogin token=\"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyIiOiIifQ.6lJn7XmN0YOxElZerScmJ3kfHNcH89rEsbMkb6D6RW0\"",
    "cache-control: no-cache",
    "content-type: application/json",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  
  //$jsondata = file_get_contents($response);
  
  $array = json_decode($response, true);
  if(array_key_exists('error',$array)){
	echo  $array['error'];
	  echo "shit happens";}
}
if(array_key_exists('user_id',$array)){
	//echo  $array['user_id'];
	/*
	Ready to put to database;
	
	*/
	$f=(string)$_POST["username"];
	$e=(string)$_POST["password"];
	$d=(string)$_POST["email"];
	$c=(string)$_POST["lastName"];
	$b=(string)$_POST["firstName"];
	$a=(string)$array['user_id'];
	//echo $a;
	  echo "user has been added";
	 // echo $b;
	  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apisandbox.openbankproject.com/my/logins/direct",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "authorization: DirectLogin username=\"".$f."\",   password=\"".$e."\",  consumer_key=\"4zmyvq02oy1pnnuvbmefl1kkgvwzffyg1i5ae0ca\"",
    "cache-control: no-cache",
    "content-type: application/json",
  ),
));

$response1 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	
	$array1 = json_decode($response1, true);
  echo $response1;
  $g =(string)$array1['token'];
  
  
$servername = "eu-cdbr-west-02.cleardb.net";
$username = "bf97ff4bac30bc";
$password = "802affa3";
$dbname = "heroku_cae582ac646e5b6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `heroku_cae582ac646e5b6`.`customers` (Firstname, Lastname, username, token, user_id, password, email)
VALUES ('$b', '$c', '$f', '$g', '$a', '$e', '$d')";

if ($conn->query($sql) === TRUE) {
	
	
	
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
  
  
}
	  
	  }

}

?>

<html>
<head>

    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

</head>
<body style="">
 <div style="width:800px; margin:0 auto;">
<form method = "POST" action = "" >
<input  name="username"  type="text"><br/> Username <br/>
  <input  name="firstName"  type="text"> <br/> First Name <br/>
  <input  name="lastName"  type="text"><br/> Last Name <br/>
  <input  name="email"  type="text"> <br/> Email Address <br/>
  <input  name="password"  type="text"><br/> Password<br/>
  <input  type="submit"  name="submit"  value="submit" >
</form>
</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

</body>
</html>