<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Voting Eligibility</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
   <form action="" method="get" class="cool-form">
    <input type="text" name="birth_year" placeholder="Enter your birth year " />
    <input type="submit" value="Submit" />
  </form>

    <h1>Voting Eligibility Checker</h1>
    <p>
      <?php
        $birthYear = $_GET['birth_year'] ?? 0; // Get the birth year from the form
        $currentYear = 2024; // Example current year
        $age = $currentYear - $birthYear;


        if ($age >= 18) {
          include 'cardAligible.php'; // <-- Fixed: added semicolon
        } else {
          include 'cardNotEligible.php';
        }
      ?>
    </p>
  </div>
</body>
</html>
