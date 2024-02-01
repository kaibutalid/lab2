<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css" > 
    <script defer src="script.js"></script>
    <title><?php echo "Kai's Space"; ?></title>
   
</head>
<body>

    <header>
        <div class="header" id="site-header">
            <img src="planet.png" alt="Planet" class="circle-image1">
            <nav>
                <ul class="head-links">
                    <li><a href="#section1">Home</a></li>
                    <li><a href="#section2">About</a></li>
                    <li><a href="#section3">Contact</a></li>
                    <li><a href="form.php">Form</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section style = "background-color: #cdb4db;" >
    <div style = "margin-top: 100px; padding-top: 8px; padding-left: 10px">
    <?php
// define variables and set tno empty values
$nameErr = $emailErr = $gederErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
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

<h2>Add a Comment!</h2>
<p style = "font-size: 12px; color: gray;"><span class="error">* = required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Comment:</h2>";
echo $name;
echo "<br>";
echo $comment;
?>
</div>
    </section>


</body>
</html>