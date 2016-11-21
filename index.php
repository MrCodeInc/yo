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
<p>Click to yo.</p>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo You wasted your clicks $_SESSION['counter'] times; ?>" />
    <input type="submit" name="button" value="yo." />
    <br/><?php echo $_SESSION['counter']; ?>
</form>
