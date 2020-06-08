    <?php   
    session_start();  
    unset($_SESSION['sess_user']);  
    session_destroy();  
    header("location:h111.php");  
    ?> 
<html>
<head></head>
<body>
<form>
<button type="submit" name="logout">Logout</button>
</form>
</body>
</html>