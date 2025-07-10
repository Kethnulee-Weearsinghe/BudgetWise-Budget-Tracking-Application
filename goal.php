<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goal - BudgetWise</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
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
    .progress-section {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .progress-bar-wrapper {
      margin-top: 20px;
    }
    .progress-label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .progress-bar {
      background-color: #ddd;
      border-radius: 10px;
      overflow: hidden;
      height: 25px;
    }
    .progress {
      background-color: #4caf50;
      height: 100%;
      width: 70%; /* Example progress */
      text-align: center;
      color: white;
      line-height: 25px;
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
          <label for="goal_id">Goal ID</label>
          <input type="text" id="goal_id" name="goal_id">
        </div>
        <div class="form-group">
          <label for="goal_name">Goal Name</label>
          <input type="text" id="goal_name" name="goal_name">
        </div>
        <div class="form-group">
          <label for="target_amount">Target Amount</label>
          <input type="number" id="target_amount" name="target_amount">
        </div>
        <div class="form-group">
          <label for="saved_amount">Saved Amount</label>
          <input type="number" id="saved_amount" name="saved_amount">
        </div>
      </div>
      <div class="btn-group">
        <button type="button">Add</button>
        <button type="button">Update</button>
        <button type="button">Delete</button>
      </div>
    </div>

    <div class="progress-section">
      <div class="progress-label">Progress to Goal</div>
      <div class="progress-bar-wrapper">
        <div class="progress-bar">
          <div class="progress">70%</div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
