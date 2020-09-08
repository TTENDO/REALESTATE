<?php
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$message = "";
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$comment = $_POST['comment'];
	$gender = $_POST['gender'];

	$validate = mysqli_query($conn, "select * from try where name='$name' OR email='$email'");

	if (mysqli_num_rows($validate) == 0) {
		$insert_try = mysqli_query($conn, "insert into try(name,email,website,comment,gender) VALUES('$name','$email','$website','$comment','$gender')");
		
		if($insert_try){
			$message = "TRY SUCCESSFULLY SUBMITTED";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php' ?>

<body>


	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="">
		Name: <input type="text" name="name" value="">
		<span class="error">*</span>
		<br><br>
		E-mail: <input type="text" name="email" value="">
		<span class="error">* </span>
		<br><br>
		Website: <input type="text" name="website" value="">
		<span class="error"></span>
		<br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea>
		<br><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="error">* </span>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>

</html>