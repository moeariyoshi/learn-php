<!DOCTYPE html>
<html>
<head>
    <title>PHP Example</title>
</head>
<body>

<?php
// Check if the form is submitted
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input from the text box
    $userInput = $_POST["userInput"];

    // Display the entered text
    echo "<p>You entered: $userInput</p>";

    // Display information from superglobals
    echo "<p>Additional Information:</p>";
    
    // Display the contents of the $_GET superglobal (if any)
    if (!empty($_GET)) {
        echo "<p>Contents of \$_GET:</p>";
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }

    // Display the contents of the $_POST superglobal
    echo "<p>Contents of \$_POST:</p>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Display the contents of the $_SERVER superglobal
    echo "<p>Contents of \$_SERVER:</p>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
}
?>

<!-- HTML form with a text box -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="userInput">Enter Text:</label>
    <input type="text" name="userInput" id="userInput">
    <input type="submit" value="Submit">
</form>

</body>
</html>

<!-- Other examples -->
<?php 
// Arrays
$fruits = array("Apple", "Banana", "Orange");

// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// While Loop
$counter = 1;
echo "<p>Counting using while loop:</p>";
while ($counter <= 5) {
    echo "$counter";
    $counter++;
}

// Foreach Loop
foreach ($fruits as $fruit) {
    echo "$fruit";
}

// Functions
function greet($name) {
    echo "Hello, " . $name;
}

greet("Moe");

// Modules -> use `require` or `include` (less critical)

?>
