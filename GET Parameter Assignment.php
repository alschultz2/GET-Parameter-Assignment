<?php
if(isset($_GET["first"]) && isset($_GET["last"])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    if(!empty($firstname) && !empty($lastname)){
        echo "Hello, my name is " . $firstname . " " . $lastname . ".";
    } else {
        echo "It appears that you are missing part of your name. Please try again.";
    }
}
?>
</br>
<?php
if(isset($_GET["age"])){
    $age = $_GET['age'];
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);
    if($age >= 18){
        $older = "I am old enough to vote in the United States.";
        } else{
        $older = "I am not old enough to vote in the united states.";
        }
    if(!empty($age)){
        echo "\nI am " . $age . " years old and " . $older;
    } else {
        echo "It appears that you are missing your age. Please try again.";
    }
}
?>
</br>
<?php
//there wasnt much instruction on what exactly days based on age was supposed to be
$date = date('Y-m-d');
$days = $age * 365.24;
echo "Todays Date: " . $date . " " . "Your age in days: " . $days;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <title>GET Parameter Assignment</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <label for="first">First Name :</label>
    <input type="text" id="first" name="first" autocomplete="off">
    <label for="last">Last Name :</label>
    <input type="text" id="last" name="last" autocomplete="off">
    <label for="age">Age :</label>
    <input type="number" id="age" name="age" autocomplete="off">
    <div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </div>
</body>

</html>