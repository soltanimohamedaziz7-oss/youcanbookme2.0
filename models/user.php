 <?php
 require_once PATH_ROOT.'/models/sql_connection.php';


function set_user($username, $email, $hash) {

    open_connection();

    $sql = "INSERT INTO Users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($GLOBALS['connection'], $sql);

    // "sss" signifie trois paramètres de type string
    mysqli_stmt_bind_param($stmt, "sss", $username, $hash, $email);

    $result = mysqli_stmt_execute($stmt);
    close_connection();
    return $result;
}

function get_user_by_username($username) {
    $user = null;
    open_connection();

    $sql = "SELECT id, username, password FROM Users WHERE username = ?";

    $stmt = mysqli_prepare($GLOBALS['connection'] , $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ( mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    }

    close_connection();

    return $user;
}



