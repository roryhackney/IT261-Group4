<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Adder Assignment</title>
    <style>
      h1 {color: green;
          text-align: center;}
      form {border: 1px solid red;
          width: 350px;
          margin: 0 auto;
          padding: 10px}
      h2 {text-align: center;}
      .centered {text-align: center;}
    </style>
  </head>

  <body>
    <h1>Adder.php</h1>
    <form action="" method="post">
      <label>Enter the first number:</label>
      <input type="text" name="num1"><br>
      <label>Enter the second number:</label>
      <input type="text" name="num2"><br>
      <input type="submit" value="Add Em!!">
    </form>
  </body>

<?php
  if(isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
    echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>';
    echo '<p class="centered" style="color:red;">and the answer is <br>'
    . $myTotal . '!</p>';
    echo'<p class="centered"><a href="">Reset page</a></p>';
  }
?>

</html>

<!--
  Line 1: Moved PHP block from top to below body
  Line 1: Added <!DOCTYPE html> to the top of file
  Line 2: added lang="en" to html tag
  Line 9: Added line break after h1 closing tag before form opening tag
  Line 10: Removed \ from form opening tag
  Line 10: Added method=post to form opening tag
  Line 11: Added opening <label> tag to first label
  Line 11: Added line break after label and before input
  Line 12: Changed name from Num1 to num1
  Line 13: Deleted \ from label opening tag
  Line 13: Added closing label tag
  Line 13: Added line break between label and input
  Line 15: Added closing quotes after value="Add em"
  Line 16: Added line break between input and form
  Line 21: Removed space between if and ()
  Line 24: Removed - from $mytotal assignment operator
  Line 24: Changed $Num2 to $num2
  Line 25: Changed double quotes to single quotes on the quote after 'You added '
  Line 25: Changed double to single before 'and'
  Line 25: Added a single quote after 'and'
  Line 25: Added closing <h2> tag between the single quotes
  Line 25: Deleted double quote between single quotes
  Line 26: Deleted extraneous spaces
  Line 27: Moved style tag to opening p tag
  Line 27: Changed double quotes to single quotes
  Line 27: Added concatentation operator .
  Line 27: Moved single quote from after ! to after closing p tag
  Line 27: Added semicolon
  Line 28: Added closing p tag
  Line 32: Removed punctuation after closing html tag
  Line 32: Removed extraneous closing PHP tag
  Line 5: Added style declarations to match example
    centered content
    h1: changed text color to green
    form: added red border, changed width and added auto margins, added padding
    p: added centered class
  Line 35: Moved PHP block inside body
-->
