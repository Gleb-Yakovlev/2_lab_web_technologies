<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Первое задание</title>

    <style>
        table.second.td {

            width: 250px;

            margin: 0 auto;

        }

        .second.td td {

            width: 10%;

            text-align: center;

            border: 1px solid #cdc513;

        }
    </style>
</head>
<table align='center'>

    <tr>
        <th>Работа с циклическими структурами </th>
        <th>Работа с файлами</th>
    </tr>

    <tr>
        <td>
            <form action='' method='POST'>
                <select name='action' size='1'>
                    <option value='Выберите действие' selected>Выберите действие</option>
                    <option value='Table'>Таблица умножения</option>
                    <option value='Summ'> Подсчет суммы нечетных чисел</option>
                    <option value='Translation'> Переводчик</option>
                </select><BR>
                <button type='submit' name='OK1' value='ok1'>OK</button>
            </form>
        </td>

        <td>
            <form action='' method='get'>
                <INPUT TYPE='RADIO' NAME='WorkFile' VALUE='Create'>Создание файла<BR>
                <INPUT TYPE='RADIO' NAME='WorkFile' VALUE='Add'>Добавление в файл<BR>
                <INPUT TYPE='RADIO' NAME='WorkFile' VALUE='Out'>Вывод из файла<BR>
                <button type='submit' name='OK2' value='ok2'>OK</button>
            </form>

        </td>
    </tr>

    <tr>
        <td>
            <form method='post'>
            </form>

        </td>
    </tr>

</table>
<?php


if (isset($_GET['WorkFile'])) {
    $action = $_GET['WorkFile'];
    switch ($action) {
        case 'Create':
            $file = fopen("example.txt", "w");
            fclose($file);
            echo "Файл успешно создан.";
            break;
        case 'Add':
            $file = fopen("example.txt", "a");
            fwrite($file, "Данные для добавления в файл\n");
            fclose($file);
            echo "Данные успешно добавлены в файл.";
            break;
        case 'Out':
            $ppp = "example.txt";
            $mmm = file($ppp);
            foreach ($mmm as $stroka) {
                echo $stroka . "<br>";
                $r[] = $stroca;
            }
            echo count($r);
            break;
    }
}

if (isset($_POST['OK1'])) {
    if ($_POST['action'] == 'Table') {
        $rows = 10;
        $cols = 10;
        $tr = 1;
        while ($tr <= $rows) {

            echo "<table  border='1' align='center' width='250'>\n";

            echo "\t<tr>\n";
            $td = 1;
            while ($td <= $cols) {

                echo "\t\t<td width='25'>" . $tr * $td . "</td>\n";
                $td++;
            }

            echo "\t</tr>\n";
            $tr++;
        }

        echo "</table>";
    }

    if ($_POST['action'] == 'Summ') {
        $n = 100;
        $summ = 0;
        for ($i = 1; $i < $n; $i = $i + 2) {
            $summ = $summ + $i;
            echo $summ . ' ';
        }
    }


}

if ($_POST['action'] == 'Translation' or $_POST['word']) {

    echo "<form method='post' >
    Введите слово: <input type='text' name='word'><br>
    </form>";
}
if ($_POST['word']) {
    $trans = [
        ["Кот", "Cat"],
        ["Стол", "Table"],
        ["Яблоко", "Apple"],
        ["Собака", "Dog"],
    ];
    echo $_POST['word'] . '<br>';

    $word = $_POST['word'];
    $flag = 0;
    foreach ($trans as $k) {
        if ($k[0] == $word) {
            echo $k[1] . '<br>';
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo 'Неизвестное слово' . '<br>';
    }
}

?>

</body>

</html>