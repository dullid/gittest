<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>GIT</h1>
<p>Lorem</p>
<pre>

    <?php
        // подключение к базе данных
        $mysqli =   new mysqli ("127.0.0.1", "root", "", "mybase");

        // проверка соединения
        if ($mysqli->connect_errno) {
            printf("Соединение не удалось: %s\n", $mysqli->connect_error);
            exit();
        }

        // установка кодировки utf8
        $mysqli ->  query   ("SET NAMES 'UTF8'");
        // =================================================================================
        $query = "SELECT * FROM `users`";
        if ($resultset = $mysqli -> query($query)) {            
            while ($row = $resultset -> fetch_assoc()) {
                    print_r($row);echo "<br/>";
                    //echo $row['login'];echo "<br/>";
                }
            echo "Количество записей равно = ".$resultset->num_rows."<br>---------------------------------------";            
        } else {
            print_r($resultset);
            echo "Не удалось выполнить запрос. Время ".date("H:i:s", microtime(true));
            echo "<br/>";
            exit;
        }    
        // удаление выборки
        $resultset -> free();
        // =================================================================================
        $mysqli -> close();                                         // закрытие соединения с базой данных
    ?>


</pre>    
</body>
</html>