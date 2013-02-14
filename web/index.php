<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aengeln
 * Date: 2013-02-13
 * Time: 22:15
 * To change this template use File | Settings | File Templates.
 */
include "include/class_dbaccessor.php";

?>

<html>
<head>
    <title>BringStuff</title>
</head>
<body>
    <?php
    $link = mysql_connect('localhost:8889', 'bringstuff', 'bringstuff');
    $connection = new aenDBaccessor();
    $connection->Connect("localhost", 8889, "bringstuff", "bringstuff", "bringstuff")

?>

</body>
</html>