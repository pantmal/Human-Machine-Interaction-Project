<?php
require_once "../../settings.php";
 

$string_split = explode('=',$_SERVER['HTTP_REFERER']);
$head_back = $string_split[1];

$username = trim($_POST["uname"]);
$password = trim($_POST["pwd"]);    

// Validate credentials
if(empty($username_err) && empty($password_err)){
    // Prepare a select statement
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = $username;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if username exists, if yes then verify password
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        // Password is correct, so start a new session
                        $cookie_name = "user";
                        $cookie_value = $username;
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        
                        
                        // Redirect user to previous page
                        if (str_contains($head_back, 'index.php')){    
                            header("location:../../" . $head_back);
                        }else{
                            header("location:../" . $head_back);
                        }
                        
                    }else{
                        // Display an error message if password is not valid
                        $password_err = '';
                        echo "<p>Η σύνδεση απέτυχε! <a href=".$_SERVER['HTTP_REFERER'].">Παρακαλούμε ξαναδοκιμάστε.<a></p>";
                    }
                }
            }else{
                // Display an error message if username doesn't exist
                $username_err = "";
                echo "<p>Η σύνδεση απέτυχε! <a href=".$_SERVER['HTTP_REFERER'].">Παρακαλούμε ξαναδοκιμάστε.<a></p>";
            }
        }else{
            echo "<p>Η σύνδεση απέτυχε! <a href=".$_SERVER['HTTP_REFERER'].">Παρακαλούμε ξαναδοκιμάστε.<a></p>";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}

// Close connection
mysqli_close($conn);
//}
?>