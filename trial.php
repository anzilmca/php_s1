
<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_name = $_POST['name'];

    echo $_name;
}
?>

</body>
</html>
