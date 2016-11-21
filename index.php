session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}    

?>

<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
    <input type="submit" name="button" value="Counter" />
    <br/><?php echo $_SESSION['counter']; ?>
</form>
