<?php

$request =  $_REQUEST;

$request = json_encode($request);

$f = file_put_contents('email_request.txt', $request);

?>
