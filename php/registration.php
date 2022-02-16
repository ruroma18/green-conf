<?php 
$title="Registration"; 
require "db.php"; 
require __DIR__ . '/header.php';

$data = $_POST;

if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["sex"]) && isset($_POST["nationality"]) && isset($_POST["organization"]) && isset($_POST["position"]) && isset($_POST["birth_date"]) && isset($_POST["email"])) { 

	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$sex = $_POST["sex"];
	$nationality = $_POST["nationality"];
	$organization = $_POST["organization"];
	$position = $_POST["position"];
	$birth_date = $_POST["birth_date"];
	$email = $_POST["email"];
	try {
		$sql = "INSERT INTO participants (first_name, last_name, sex, nationality, organization, position, birth_date, email)
		VALUES ('$first_name', '$last_name', '$sex', '$nationality', '$organization', '$position', '$birth_date', '$email')";
		$affectedRowsNumber = $conn->exec($sql);

		if($affectedRowsNumber > 0) {
			echo "<script>alert('Registration successful')</script>";
		}
	}
	catch (PDOException $e) {
		echo "Database error: " . $e->getMessage();
	}
}
	
?>

<div class="container mt-4 registration">
		<div class="row">
			<div class="col">
	   <!-- Форма регистрации -->
		<form method="post">

			<input type="text" class="form-control" name="first_name" id="first-name" placeholder="Enter First Name" required><br>

      <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Enter Last Name" required><br>

      <select name="sex" id="sex" class="form-select" aria-label="form-control" required>
        <option selected disabled>Sex</option>
        <option value="man">Man</option>
        <option value="woman">Woman</option>
      </select><br>
			
			<input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter nationality" required><br>
			<input type="text" class="form-control" name="organization" id="organization" placeholder="Enter organization" required><br>
      <input type="text" class="form-control" name="position" id="position" placeholder="Enter position" required><br>
      <input type="date" class="form-control" name="birth_date" id="birth_date" required><br>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required><br>
			<button class="btn btn-success" name="do_register" type="submit">Register</button>
		</form>
			</div>
		</div>
	</div>

<?php require __DIR__ . '/footer.php'; ?> 


