<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - BudgetWise</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    .welcome {
      padding: 40px 30px 10px;
      font-size: 28px;
      font-weight: bold;
    }
    .dashboard {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      padding: 30px;
      gap: 30px;
    }
    .chart-container, .balance-box, .ai-box {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 20px;
      flex: 1 1 300px;
      max-width: 400px;
    }
    .balance-box h3, .ai-box h3 {
      margin-top: 0;
    }
    .balance-amount {
      font-size: 32px;
      color: #2e7d32;
      margin-top: 10px;
    }
    .ai-box ul {
      padding-left: 20px;
    }
    .ai-box li {
      margin-bottom: 10px;
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

  <center><div class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</div></center>

  <div class="dashboard">

    <div class="chart-container">
      <canvas id="summaryChart"></canvas>
    </div>

    <div class="balance-box">
      <h3>Available Balance</h3>
      <div class="balance-amount">$2,350.75</div>
    </div>

    <div class="ai-box">
      <h3>AI Recommendations</h3>
      <ul>
        <li>Reduce entertainment spending by 10% to save more.</li>
        <li>Consider automating bill payments.</li>
        <li>Set a monthly savings goal of $300.</li>
      </ul>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('summaryChart');
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Expenses', 'Balance'],
        datasets: [{
          data: [1650.25, 2350.75],
          backgroundColor: ['#e53935', '#43a047'],
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          },
          title: {
            display: true,
            text: 'Current Financial Summary'
          }
        }
      }
    });
  </script>

</body>
</html>
