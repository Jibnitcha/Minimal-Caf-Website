<?php
    session_start();
    include("connection.php");
    if(isset($_POST['submit'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if the user exists in the database
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Store username in session
        $_SESSION['username'] = $row['username'];
        // Redirect to the homepage after successful login$
        header("Location: Homepagecofffee.php");
    } else {
        echo '<script>
            window.location.href = "Loginpagecoffee.php";
            alert("Login failed. Invalid username or password!!!"); 
        </script>';
    }
}
?>