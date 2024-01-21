<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Php Calculator</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form action="file.php" method="post">
        <div class="title">
          <div class="hr"></div>
          <h1 data-text="Php Calculator">Php <br />Calculator</h1>
        </div>
        <div class="form-box">
          <div class="block">
            <div class="input1">
              <input type="text" name="num1" placeholder="Enter Number" />
            </div>
            <div class="input2">
              <input type="text" name="num2" placeholder="Enter Number" />
            </div>
          </div>
          <div class="option">
            <select name="operator" id="select">
              <option value="#">Select Option</option>
              <option value="Add">Addition</option>
              <option value="Sub">Subtraction</option>
              <option value="Div">Division</option>
              <option value="Mul">Multiplication</option>
            </select>
          </div>
          <div class="btn">
            <button type="submit" name="calculate">Submit</button>
          </div>
        </div>
      </form>
      <p>
            <?php
if(isset($_POST['calculate']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch($operator)
{
    case 'Add':
        $result =$num1 + $num2;
        echo "The addition of two number is ${result}";
        break;
        case 'Sub':
          $result =$num1 - $num2;
          echo "The subtraction of two number is ${result}";
          break;
          case 'Div':
            $result =$num1 / $num2;
            echo "The division of two number is ${result}";
            break;
            case 'Mul':
              $result =$num1 * $num2;
              echo "The multiplication of two number is ${result}";
        break;
}
}
?>
            </p>
    </div>
  </body>
</html>
