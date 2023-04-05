<!DOCTYPE html>
<html>
<head>
	<title>Expense Tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
</script>
</head>
<body>
	<header>
		<h1>Expense Tracker</h1>
	</header>
	<div class="container">
    <form method="post" action="add_expense.php" class="expense-form">
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="text" name="date" id="date" required class="datepicker">
        <!-- <input type="date" name="date" id="date" required> -->
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" step="0.01" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Add Expense" class="btn">
      </div>
    </form>
		<table>
			<thead>
				<tr>
					<th>Date</th>
					<th>Description</th>
					<th>Category</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
        <?php

          session_start();
          
          if (isset($_SESSION['expenses'])) {
            foreach($_SESSION['expenses'] as $expense) {
              echo "<tr>";
              echo "<td>" . $expense['date'] . "</td>";
              echo "<td>" . $expense['description'] . "</td>";
              echo "<td>" . $expense['category'] . "</td>";
              echo "<td>" . $expense['amount'] . "</td>";
              echo "</tr>";
            }
          }

        ?>
			</tbody>
		</table>
	</div>
</body>
</html>
