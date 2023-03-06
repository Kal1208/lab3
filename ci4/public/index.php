<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body 
{
background-image: url("https://img.freepik.com/free-vector/yellow-diagonal-geometric-striped-background-with-halftone-detailed_1409-1451.jpg?w=2000");
}

h1 
{
color: white;
text-align: center;
}

h2 
{
font-family: verdana;
font-size: 30px;
color:white;
text-align: center;
}

p 
{
font-family: verdana;
font-size: 30px;
color:white;
text-align: center;
}

img 
{
display: block;
margin-left: auto;
margin-right: auto;
}

div 
{
font-size: 30px;
background-color: purple;
color: white;

</style>

</head>
<body>

<h1>WEBPROG Kalvin Vertucio</h1>
<p>WELCOME!</p>
<h2>About me</h2>
<p>Nickname: Kal</p>
<p>Birthdate:Oct 8 </p>
<p>I'm an Aspiring Videogame Developer </p>
<img src="https://cdn.discordapp.com/attachments/719542743067525220/1061648420051374122/orca-image--1089497680.jpg" alt="me" width="150" height="200"">
<div>My Top Favorite Games!</div>
<p> <img src="https://assets-prd.ignimgs.com/2022/06/14/zelda-breath-of-the-wild-1655249167687.jpg" alt="botw" width="200" width="150"></p>
<p>1. Legend of Zelda Breath of the Wild</p>
<p> <img src="https://m.media-amazon.com/images/M/MV5BNjUzMWVkYmEtZWMxOC00MTM4LThiNjEtMDMyOGUwMjdmOTBiXkEyXkFqcGdeQXVyMTM3NDc1OTM2._V1_.jpg" alt="p5r" width="180" height="250"></p>
<p>2. Persona 5</p>
<p> <img src="https://cdna.artstation.com/p/assets/images/images/046/713/818/large/keita-okada-er-01.jpg?1645778434" alt="ER" width="300" height="200"></p>
<p><a href="https://en.bandainamcoent.eu/elden-ring/elden-ring">Visit Elden Ring Page</a></p>
<p>3. Elden Ring</p>
<p> <img src="https://assets-prd.ignimgs.com/2022/05/06/danganronpa-2-button-hi-1651874033197.jpg" alt="Dngnrnpa" width="200" height="250"></p>
<p>4. Danganronpa 2: Goodbye Despair</p>
<p> <img src="https://assets1.ignimgs.com/2019/07/17/fire-emblem-three-houses---button-fin-1563322090834.jpg?width=300&crop=1%3A1%2Csmart" alt="FE3h" width="250" height="250"></p>
<p>5. Fire Emblem: Three Houses</p>

<h2>Rate my personal webpage!</h2>

<p>Rate my page with a score of 1-10:</p>

<input id="numb">

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  // Get the value of the input field with id="numb"
  let x = document.getElementById("numb").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid only numbers 1-10 is allowed";
  } else {
    text = "Thank you for rating my page!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>



<?php
//From mysql_insert.php
// if statement below is for the MySQL insert code to execute only AFTER the submit button is pressed

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$servername = "192.168.150.213";
	$username = "webprogmi212";
	$password = "b3ntRhino98";
	$dbname = "webprogmi212";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO kfvertucioMyGuests (firstname, lastname, email)
	VALUES ('$name', '$website', '$email')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}	

?>

</body>
</html>



