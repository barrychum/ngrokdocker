<?php
echo 'HTTP remote address :<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';
echo '<br><br>';
echo 'HTTP forwarded address :<br>';
echo $_SERVER['HTTP_X_FORWARDED_FOR'].'<br>';
?>
