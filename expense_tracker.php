<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="et_style.css" />
    <title>Expense Tracker</title>
  </head>
  <body>
    <div class="atag">
    <a href='#' onclick="return reset();">Logout</a>
    </div>
    <h2>Expense Tracker</h2>
    <h3 id="username">Welcome <?php echo $_SESSION['name']; ?>, Track your expenses here</h3>
 <div class="container">
      <h4>Your Balance</h4>
      <h1 id="balance">Rs0.00</h1>

      <div class="inc-exp-container">
        <div>
          <h4>Income</h4>
          <p id="money-plus" class="money plus">+Rs0.00</p>
        </div>
        <div>
          <h4>Expense</h4>
          <p id="money-minus" class="money minus">-Rs0.00</p>
        </div>
      </div>

      <h3>History</h3>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span><button class="delete-btn">x</button>
        </li> -->
      </ul>

      <h3>Add new transaction</h3>
      <form id="form">
        <div class="form-control">
          <label for="text">Text</label>
          <input type="text" id="text" placeholder="Enter text..." />
        </div>
        <div class="form-control">
          <label for="amount"
            >Amount <br />
            (negative - expense, positive - income)</label
          >
          <input type="number" id="amount" placeholder="Enter amount..." />
        </div>
        <button class="btn">Add transaction</button>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>