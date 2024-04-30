<?php

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['SERVER_PROTOCOL'];
echo $_SERVER['SERVER_METHOD'];
print (isset($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'].'<br>' : 'No query parameters in URL<br>';
print (isset($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'].'<br>' : 'No server name<br>';
print (isset($_SERVER['REQUEST_TIME'])) ? $_SERVER['REQUEST_TIME'].'<br>' : 'No request time<br>';
print (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'].'<br>' : 'No remote address<br>';
print (isset($_SERVER['SERVER_PORT'])) ? $_SERVER['SERVER_PORT'].'<br>' : 'No server port<br>';
?>
