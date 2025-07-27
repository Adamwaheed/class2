<?php
$amount = $_GET['amount'] ?? 0; // Get the score from the form
$discount = 0;
$class = '';
// Determine the grade based on the score
// Check if $score is not an empty string AND if $score is a number
 

    if ($amount >= 5000) {
        $discount = 0.50 * $amount; // 50% discount
        $class = "grade-a";
    } elseif ($amount >= 4000) {
         $discount = 0.40 * $amount; // 40% discount
        $class = "grade-b";
    } elseif ($amount >= 3000) {
        $discount = 0.30 * $amount; // 30% discount
        $class = "grade-c";
    } elseif ($amount >= 2000) {
        $discount = 0.20 * $amount; // 20% discount
        $class = "grade-d";
    } else {
        $discount = 0; // No discount
        $class = "grade-f";
    }


?>

<form action="" method="get">
    <input value="<?php echo htmlspecialchars($amount); ?>" type="text" name="amount" placeholder="Enter your sales values" />
    <input type="submit" value="Submit" />

    <?php if ($class): ?>
        <h2 class="<?php echo $class; ?>">Discount Amount: <?php echo $discount; ?></h2>
    <?php else: ?>
        <h2>Discount Amount: nill</h2>
    <?php endif; ?>
</form>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f7fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  form {
    background: #fff;
    padding: 25px 30px;
    border-radius: 8px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    width: 320px;
    text-align: center;
  }

  input[type="text"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border: 1.8px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
  }

  input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  /* Grade colors */
  .grade-a {
    color: #2e7d32; /* green */
    font-weight: bold;
  }

  .grade-b {
    color: #388e3c; /* darker green */
  }

  .grade-c {
    color: #f9a825; /* amber */
  }

  .grade-d {
    color: #f57c00; /* orange */
  }

  .grade-f {
    color: #d32f2f; /* red */
  }
</style>
