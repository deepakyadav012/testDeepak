<?php
$conn = mysqli_connect('localhost', 'root', '', 'login');
if (!$conn)
{
    echo('not');
}

else{
    echo('succes');
}