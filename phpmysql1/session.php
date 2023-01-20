<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION Variable Example</title>
</head>
<body>
    <form action="nextpage.php" method="post">
        Username : <input type="text" name="name" id="">
        <br>
        Password : <input type="password" name="password" id="">
        <br>
        <input type="submit" value="Sign In" name="Login">
    </form>
    <?php



        if(isset($_POST['Login'])){
            $userName = $_POST['name'];
            $password = $_POST['password'];

            session_start();

            $_SESSION['name'] = $userName;
            $_SESSION['password'] = $password;

            if(empty($userName) && empty($password)){
                echo "Please Provide Username and Password";
            }

            if(isset($_SESSION['name'])){
                echo "Hello , ",$_SESSION['name'];
                //header("Location: nextpage.php");
                
            }
            else{
                echo "Login Now";
            }
        }
        else{
            echo "Please Submit The Form";
        }



    ?>

</body>
</html>