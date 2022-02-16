<?php 
$title="Registration"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4 registration">
		<div class="row">
			<div class="col">
	   <!-- Форма регистрации -->
		<form action="registration.php" method="post">
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name" required><br>
      <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Enter Last Name" required><br>
      <select name="sex" id="sex" class="form-select" aria-label="form-control" required>
        <option selected disabled>Sex</option>
        <option value="man">Man</option>
        <option value="woman">Woman</option>
      </select><br>
			
			<input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter nationality" required><br>
			<input type="text" class="form-control" name="organization" id="organization" placeholder="Enter organization" required><br>
      <input type="text" class="form-control" name="position" id="position" placeholder="Enter position" required><br>
      <input type="date" class="form-control" name="date-of-birth" id="date-of-birth" required><br>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required><br>
			<button class="btn btn-success" name="do_register" type="submit">Register</button>
		</form>
			</div>
		</div>
	</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->