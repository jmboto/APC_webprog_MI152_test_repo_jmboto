<!DOCTYPE html>
<html>
<head>
<style>
a {
	color: red;
	}
body {
    background-color: pink;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
h1 {
    color: green;
}
.error {color: #FF0000;}
</style>
</head>
<body>

</style>
</head>
<body background="download1.jpg">

<h1>BALL IS LIFE</h1>

<p id="demo">Hello!!! I am Joemari Boto
</p>

<button type="button" onclick="document.getElementById('demo').style.fontSize='35px'">CLICK!!</button>
<h1>Eat, Ball, SLeep, REPEAT!!!!</h1>

<table>
  <tr>
    <th>Full name</th>
    <th>Nickname</th>
    <th>Interest</th>
	<th>Favorite Website</th>
  </tr>
  <tr>
    <td>Joemari Boto</td>
    <td>Monster</td>
    <td><img src="download3.jpg" alt="basketball" style="width:150px;height:100px;"></td>
	<td><p><a href="http://www.twitter.com">Twitter</a></p></td>

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
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
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
<h2>Exercise 4</h2>

<p><span class="error"> Required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
  Name: <input type="text" name="name" value="">
  <span class="error"> </span>
  <br><br>
  E-mail: <input type="text" name="email" value="">
  <span class="error"> </span>
  <br><br>
  Website: <input type="text" name="website" value="">
  <span class="error"></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> Female
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo <h2>Your Input:</h2><br>
echo $name
echo <br>
echo $email
echo <br>
echo $website
echo <br>
echo $comment
echo <br>
echo $gender
?>
  </tr>
</table>

</body>
</html>