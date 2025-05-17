<?php

define ('HOST','localhost');
define( 'USER','root');
define( 'PASS', '8505'); /* mude a senha, quando for usar */
define ('BASE', 'eleganceetluxe');

$conn = new mysqli(HOST,USER,PASS,BASE,3306);