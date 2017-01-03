
<title>My bank</title>
<h1></h1>
<ul id="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="About.php">About Us</a></li>
    <li><a href="Branches.php">Branches</a></li>
    <li><a href="Atms.php">Atms</a></li>
    <?php if (!isset($_SESSION['user_id'])) { ?>

        <li><a href="Admin logIn.php">Admin login</a></li>
    <?php
    } else {
        echo "<li><a href='admin-account.php'>Admin's Account</a></li>";
        echo "<li><a href='LogOut.php'>Log Out</a></li>";
    }
    ?>

    
    <?php if (!isset($_SESSION['id'])) { ?>

        <li><a href="LogIn.php">Log In</a></li>
    <?php
    } else {
        echo "<li><a href='my-account.php'>My Account</a></li>";
        echo "<li><a href='LogOut.php'>Log Out</a></li>";
    }
    ?>
</ul>