<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Budget - BudgetWise</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
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
    .chart-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
          <label for="budget_id">Budget ID</label>
          <input type="text" id="budget_id" name="budget_id">
        </div>
        <div class="form-group">
          <label for="month">Month</label>
          <input type="month" id="month" name="month">
        </div>
        <div class="form-group">
          <label for="income">Planned Income</label>
          <input type="number" id="income" name="income">
        </div>
        <div class="form-group">
          <label for="expenses">Planned Expenses</label>
          <input type="number" id="expenses" name="expenses">
        </div>
      </div>
      <div class="btn-group">
        <button type="button">Add</button>
        <button type="button">Update</button>
        <button type="button">Delete</button>
      </div>
    </div>

    <div class="chart-container">
      <canvas id="budgetChart"></canvas>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('budgetChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [
          {
            label: 'Income',
            data: [3000, 2800, 3200, 3100, 3050],
            backgroundColor: '#4caf50'
          },
          {
            label: 'Expenses',
            data: [2000, 2200, 2500, 2400, 2300],
            backgroundColor: '#f44336'
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top'
          },
          title: {
            display: true,
            text: 'Monthly Budget Overview'
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
