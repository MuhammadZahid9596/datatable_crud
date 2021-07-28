<?php 
include_once ('conn.php');
session_start();
if(isset($_POST['submit'])){
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } 
	else{
			$sql = "INSERT INTO users (name, email, designation, salary, date)
			VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['designation']."','".$_POST['salary']."','".$_POST['date']."')";

			if ($conn->query($sql) === TRUE) {
			  echo "<script>alert('Verification code match !');</script>" ;
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}		
		}
	}
?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<form class="cmxform" id="commentForm" method="post" action="">
  <fieldset>
    <legend>Please provide the data required</legend>
    <p>
      <label for="cname">Name (required, at least 2 characters)</label>
      <input id="cname" name="name" minlength="2" type="text" required>
    </p>
    <p>
      <label for="cemail">E-Mail (required)</label>
      <input id="cemail" type="email" name="email" required>
    </p>
    <p>
      <label for="cdesignation">Designation</label>
      <input id="curl" type="text" name="designation" required>
    </p>
    <p>
      <label for="csalary">Salary</label>
      <input id="csalary" type="number" name="salary" required>
    </p>
    <p>
      <label for="cdate">Date</label>
      <input autocomplete="off" type="text" id="datepicker" name="date" required>
    </p>
    <p>
		<label for="captcha">Please Enter the Captcha Text</label>
		<img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
		<br>
		<input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
    </p>
    <p>
      <input class="submit" name="submit" type="submit" value="Submit">
    </p>
  </fieldset>
</form>
<script>
$('#datepicker').datepicker({
      dateFormat: 'yy-mm-dd'
});
</script>
