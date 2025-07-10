<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transactions - BudgetWise</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }
    .nav-bar {
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 20px 0;
    }
    .nav-bar a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    .container {
      padding: 40px 30px;
    }
    .form-section {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }
    .form-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }
    .form-group {
      flex: 1;
      min-width: 200px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input, .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .btn-group {
      display: flex;
      gap: 15px;
    }
    .btn-group button {
      padding: 10px 20px;
      border: none;
      background-color: #000;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn-group button:hover {
      background-color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>

  <div class="nav-bar">
    <a href="home.php">Home</a>
    <a href="transactions.php">Transactions</a>
    <a href="budget.php">Budget</a>
    <a href="goal.php">Goal</a>
    <a href="notifications.php">Notifications</a>
    <a href="profile.php">Profile</a>
  </div>

  <div class="container">
    <div class="form-section">
      <div class="form-row">
        <div class="form-group">
          <label for="user_id">User ID</label>
          <input type="text" id="user_id" name="user_id">
        </div>
        <div class="form-group">
          <label for="transaction_id">Transaction ID</label>
          <input type="text" id="transaction_id" name="transaction_id">
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <select id="type" name="type">
            <option value="income">Income</option>
            <option value="expense">Expense</option>
          </select>
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="number" id="amount" name="amount">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <input type="text" id="category" name="category">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" id="date" name="date">
        </div>
      </div>
<form method="POST" action="controllers/transactions_controller.php">
  <!-- all your input fields and buttons -->
  <div class="btn-group">
    <button type="submit" name="add">Add</button>
    <button type="submit" name="update">Update</button>
    <button type="submit" name="delete">Delete</button>
  </div>
</form>

    </div>

    <table>
      <thead>
        <tr>
          <th>Transaction ID</th>
          <th>User ID</th>
          <th>Type</th>
          <th>Amount</th>
          <th>Category</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>T001</td>
          <td>U001</td>
          <td>Income</td>
          <td>$500.00</td>
          <td>Salary</td>
          <td>2025-06-01</td>
        </tr>
        <tr>
          <td>T002</td>
          <td>U001</td>
          <td>Expense</td>
          <td>$150.00</td>
          <td>Groceries</td>
          <td>2025-06-05</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
