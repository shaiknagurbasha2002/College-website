<!-- process_form.php -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Firstname = htmlspecialchars($_POST['nn']);
        $Lastname = htmlspecialchars($_POST['ln']);
        $email = htmlspecialchars($_POST['em']);
        $password = htmlspecialchars($_POST['ps']);
        $dateofbith = htmlspecialchars($_POST['']);
        $date = htmlspecialchars($_POST['Date']);
        $Month = htmlspecialchars($_POST['month']);
        $year = htmlspecialchars($_POST['ne']);
        $gender = htmlspecialchars($_POST['ge']);


        
        echo "<h1>Form Data</h1>";
        echo "<p>Firstname: $Firstname</p>";
        echo "<p>Lastname: $Lastname</p>";
        echo "<p>Email: $email</p>";
        echo "<p>password: $password</p>";
        echo "<p>dateofbirth:</p>";
        echo "<p>date: $date</p>";
        echo "<p>Month: $Month</p>";
        echo "<p>year: $year</p>";
        echo "<p>gender: $gender</p>";

    } 
    else {
        echo "<p>No data submitted.</p>";
    }
    ?>
