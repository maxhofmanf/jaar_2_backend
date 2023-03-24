<?php
$email = $name = $required_username = $emailErr = "";
$required_email = "";
$emailErr = '';

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['username'])) {
        $required_username = "Name is required";
    } else {
        $username = html_check($_POST['username']);
    }

    if (empty($_POST['email'])) {
        $required_email = "Email is required";
    } else {
        $email = html_check($_POST['email']);
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $required_email = "Email is not a valid email address";
    }
}

function html_check($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data = htmlspecialchars($data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if (empty($_POST['username']) || empty($_POST['email']) || $required_email || $required_username) { ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">name:</label><br>
            <input style="display:inline;" type="text" name="username"><span style="color:red;">*<?php echo $required_username; ?></span><br>
            <label for="email">email:</label><br>
            <input style="display:inline;" type="text" name="email"><span style="color:red;">*<?php echo $required_email; ?></span>
            <input type="submit" name="submit">
        </form>
    <?php } else { ?>
        <h1>De ingevulde gegevens zijn: </h1><br>
        <?php
        echo $username;
        echo "<br>";
        echo $email;
        }
        ?>
</body>

</html>