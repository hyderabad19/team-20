<?php
session_start();
session_unset();
session_destroy();
$_SESSION=array();
include 'Login1.php';
?>
<html>
    <script>
            history.pushState(null, null, location.href);
            window.onpopstate = function () 
            {
                history.go(1);
            };
    </script>
    
</html