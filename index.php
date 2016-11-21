<?php
session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}    
?>

<title>yo.</title>
Click to yo.
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
    <input type="submit" name="button" value="yo." />
    <br/><?php echo You wasted your clicks $_SESSION['counter'] times; ?>
</form>
