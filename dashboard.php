<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
include 'db.php';
?>

<h2>Welcome, <?php echo $_SESSION["username"]; ?> (<?php echo $_SESSION["role"]; ?>)</h2>
<link rel="stylesheet" href="style.css">
<div class="container">
  <h2>Welcome, <?php echo $_SESSION["username"]; ?> (<?php echo $_SESSION["role"]; ?>)</h2>
  <p><a href="logout.php">Logout</a></p>

  <?php if ($_SESSION["role"] == "admin"): ?>
  <form action="add_item.php" method="post">
    <input type="text" name="name" placeholder="Item Name" required>
    <input type="number" name="qty" placeholder="Quantity" required>
    <input type="submit" value="Add Item">
  </form>
  <?php endif; ?>

  <table>
    <tr><th>ID</th><th>Name</th><th>Quantity</th><?php if ($_SESSION["role"] == "admin") echo "<th>Action</th>"; ?></tr>
    <?php
    $result = $conn->query("SELECT * FROM inventory");
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['quantity']}</td>";
      if ($_SESSION["role"] == "admin") {
        echo "<td><a href='delete_item.php?id={$row['id']}'>Delete</a></td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</div>
