<!DOCTYPE html>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

    * {
        box-sizing: border-box;
    }

    body{
        background-color: lavenderblush;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        font-family: 'Lato', sans-serif;
    }

    .box {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        background-color: #f7f7f7;
        text-align: center;
        height: 200px;
        width: 40%;
        margin-top: 13%;
        margin-left: 32%;
    }

    h3 {
        padding-top: 2.7rem;
    }

    h4 {
        padding-top: 1rem;
    }

</style>
</head>
<body>
 
<div class="box">
 
    <h3>Logged out successfully</h3>
    <h4>Click here, to <a href="login.php" id="login">login</a></h4>
<?php    
    session_start();
    session_destroy();
 
?>

</div>

</body>
</html>