<?php
/**
 * Created by PhpStorm.
 * User: Joseph Bethards
 * Date: 4/5/2018
 * Time: 7:44 PM
 */
require '../database/db.php';
getConnection();
$records=getMessages();
echo'<pre>'.print_r($records,1).'</pre>';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Place your content here -->
    <div class="container">
        <div class="row">
            <ul class="list-group">
                <?php
                foreach($records as $record){
                    echo "<li class='list-group-item'>$record[body]</li>";
                }
                ?>
            </ul>
        </div>
    </div>

</body>
</html>
