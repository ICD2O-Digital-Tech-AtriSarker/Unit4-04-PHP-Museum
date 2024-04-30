<b>
  <?php
    // Code
    if(isset($_POST["age"])) 
    {
      // Get user input, years of age
      $age = floatval($_POST["age"]);

      // Get day of week
      $day = $_POST["day"];

      // Scenarios:

      // When the user does not enter their age, it should prompt the user to enter their age
      // When the user does not select a day, it should prompt the user to enter a day
      // When the user’s age is negative, it should prompt the user to enter a valid age
      // When the user’s age is a decimal, it should prompt the user to enter a valid age

      // if they are younger than 5 or older than 95, they get in for FREE
      // otherwise, if they are between 12 and 21 years old, OR if it is Tuesday or Thursday, they get a DISCOUNT (student price)
      // otherwise they have to pay REGULAR price

      $message = "";
      if (is_nan($age)) {
        // Redundant, because floatval() automatically parses empty input as 0
        $message = "Please Enter Positive Integer for Age!";
      }
      else if (($age <= 0) || ($age % 1 != 0)) {
        $message = "Please Enter Positive Integer for Age";
      }
      else if (!$day) {
        // When the user does not select a day, it should prompt the user to enter a day
        // Redundant, this situation cannot happen
        $message = "Please Enter a Day";
      }
      else if ($age < 5 || $age > 95) {
        $message = "You can get in for FREE! 🥳🎉";
      }
      else if (($age > 12 && $age < 21) || ($day=="Tuesday" || $day=="Thursday")) {
        $message = "You get a discount! 🥳";
      }
      else {
        $message = "YOU PAY REGULAR PRICE! 👹👺👿 ";
      }

      // Display Result
      echo $message;
    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 
