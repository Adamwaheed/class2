<?php 
$blackfriday = new DateTime('2025-07-30'); 
$today = new DateTime(); 
$interval = $today->diff($blackfriday);
$daysUntilBlackFriday = $interval->days;

// Set color class based on day count
if ($daysUntilBlackFriday == 1) {
    $colorClass = 'red';
} elseif ($daysUntilBlackFriday == 0) {
    $colorClass = 'green';
} else {
    $colorClass = 'yellow';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Black Friday Countdown</title>
  <style>
    body {
      background-color: #000;
      color: #FFD700;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .countdown-box {
      background-color: #1a1a1a;
      border: 2px solid #FFD700;
      padding: 30px 40px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .countdown-box h1 {
      font-size: 28px;
      margin-bottom: 15px;
      color: #FFD700;
    }

    .countdown-box p {
      font-size: 48px;
      font-weight: bold;
      margin: 0;
    }

    /* Dynamic Colors */
    .yellow {
      color: #FFD700;
    }

    .red {
      color: #FF4C4C;
    }

    .green {
      color: #00FF88;
    }
  </style>
</head>
<body>

  <div class="countdown-box">
    <h1>Days until Black Friday</h1>
    <p class="<?php echo $colorClass; ?>"><?php echo $daysUntilBlackFriday; ?></p>
  </div>

</body>
</html>
