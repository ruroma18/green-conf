<?php 
$title="Participants"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
  <table class="table">
    <thead>
      <tr>
        <th>№</th>
        <th>Full Name</th>
        <th>Organization</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "SELECT * FROM participants";
      $result = $conn->query($sql);
      foreach($result as $row){
        echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["first_name"], " ", $row["last_name"] . "</td>";
          echo "<td>" . $row["organization"] . "</td>";
          echo "<td> <a href='" . "mailto:" . $row["email"] . "'>" . $row["email"]. "</a> </td>";
      }
    ?>
    </tbody>
  </table>

</div>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->