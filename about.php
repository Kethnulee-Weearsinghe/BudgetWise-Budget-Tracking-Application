<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - BudgetWise</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    .nav-bar {
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }
    .nav-left { font-size: 24px; font-weight: bold; }
    .nav-right a {
      color: #fff;
      margin-left: 20px;
      text-decoration: none;
      font-weight: bold;
    }
 .hero-img {
  width: 100%;
  height: 700px;
  background-image: url('../budgetwise/about.png');
  background-size: cover;
  background-position: center;
}

    .about-heading {
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      margin: 40px 0 20px;
    }
    .info-boxes {
      display: flex;
      justify-content: space-around;
      margin: 0 30px;
      gap: 20px;
      flex-wrap: wrap;
    }
    .box {
      flex: 1;
      min-width: 250px;
      max-width: 350px;
      text-align: center;
    }
    .box img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .box-text {
      margin-top: 10px;
      font-size: 16px;
    }
    .about-full-img {
      width: 100%;
      height: 300px;
      background-image: url('../assets/images/full-width.jpg');
      background-size: cover;
      background-position: center;
      margin: 40px 0;
    }
    .about-text-section {
      padding: 0 30px 50px;
      max-width: 900px;
      margin: auto;
    }
    .about-text-section p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 15px;
    }
    .footer {
      background-color: #000;
      color: #fff;
      padding: 20px 30px;
      text-align: center;
    }
    .footer a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header class="nav-bar">
    <div class="nav-left">BudgetWise</div>
    <nav class="nav-right">
      <a href="sign_up.php">Sign Up</a>
      <a href="sign_in.php">Sign In</a>
    </nav>
  </header>

  <div class="hero-img" role="img" aria-label="About Us Banner"></div>
<br>

  <div class="about-heading">About Us</div>
<br>
<br>
  <div class="info-boxes">
    <div class="box">
      <img src="../budgetwise/image.jpg" alt="Our Mission">
            <div class="box-text"><h3>Our Mission</h3></div>
      <div class="box-text">Our mission is to empower people to manage their finances smarter.</div>
    </div>
    <div class="box">
      <img src="../budgetwise/image2.jpg" alt="Our Team">
      <div class="box-text"><h3>Our Team</h3></div>
      <div class="box-text">A diverse team committed to delivering intuitive budget solutions.</div>
    </div>
    <div class="box">
      <img src="../budgetwise/image3.jpg" alt="Our Vision">
      <div class="box-text"><h3>Our Vision</h3></div>
      <div class="box-text">We envision a world where financial literacy is accessible to all.</div>
    </div>
  </div>

  <div class="about-full-img" role="img" aria-label="Team Collaboration Image"></div>

  <section class="about-text-section">
    <p>BudgetWise is a platform built to simplify personal finance management for everyone. Whether you're budgeting for your next vacation or saving for a big goal, we've got you covered.</p>
    <p>Founded with the idea that budgeting shouldn't be a burden, we created a user-friendly interface backed by powerful tools to track, plan, and optimize spending.</p>
    <p>Join thousands of users on their journey to financial freedom with BudgetWise.</p>
  </section>

  <footer class="footer">
    <a href="#">Contact Us</a>
    <a href="#">Support</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms</a>
  </footer>
</body>
</html>
