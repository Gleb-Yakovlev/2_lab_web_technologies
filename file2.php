<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Второе задание</title>

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
    <H1>Извещение о посылке</H1>
</head>

<form action='' method='post'>
    Персональная информация:<br>
    ДАТА СОЗДАНИЯ <INPUT TYPE='date' NAME='data' value="<?php echo date('Y-m-d'); ?>"><br>

    ВВЕДИТЕ ИМЯ <input type='text' name='name'><br>

    ВВЕДИТЕ E-MAIL <input type='text' name='mail'><br>

    ВВЕДИТЕ КОММЕНТАРИЙ: <br> <textarea cols=20 rows=8 name='textK'></textarea><br>

    Дополнительная информация:<br>

    ДОСТАВКА:<br>
    <INPUT TYPE='checkbox' NAME='dost[]' VALUE='Курьер'>Курьер<BR>
    <INPUT TYPE='checkbox' NAME='dost[]' VALUE='Самолет'>Самолет<BR>
    <INPUT TYPE='checkbox' NAME='dost[]' VALUE='Поезд'>Поезд<BR>
    <INPUT TYPE='checkbox' NAME='dost[]' VALUE='Авто'>Авто<BR>


    ФОРМА ПОСЫЛКИ:<br>
    <select name='form' size='1'>
        <option value='vibery form' selected>Выберите форму</option>
        <option value='Прямоугольный'>Прямоугольный</option>
        <option value='Квадратный'>Квадратный</option>
        <option value='Треугольный'>Треугольный</option>
    </select><BR>

    ЦВЕТ ПОСЫЛКИ:<br>
    <INPUT TYPE='color' NAME='mycolor'><br>

    КОЛИЧЕСТВО:<input type='text' name='count'><br>

    ТАРА:<br>
    <select name='tara[]' size='4' selected multiple>
        <option value='Бьющаяся'> Бьющаяся </option>
        <option value='Хрупкая' selected>Хрупкая</option>
        <option value='Водопроницаемая'> Водопроницаемая</option>
        <option value='Пожароопасная'> Пожароопасная</option>
    </select><BR>

    ВЕС:<br>
    <INPUT TYPE='RADIO' NAME='ves' VALUE='Меньше 50 кг'>Меньше 50 кг<BR>
    <INPUT TYPE='RADIO' NAME='ves' VALUE='Больше 50 кг' checked>Больше 50 кг<BR>

    <button type='submit' name='send' value='send'>Отправить</button>
    <button type='submit' name='clear' value='clear'>Очистить</button>
</form>
<?php
$counStr = 0;

if (isset($_GET['WorkFile'])) {
    $action = $_GET['WorkFile'];
    switch ($action) {
        case 'Create':
            $counStr = 0;
            $file = fopen("example.txt", "w");
            fclose($file);
            echo "Файл успешно создан.";
            break;
        case 'Add':
            $counStr =+ 1;
            $file = fopen("example.txt", "a");
            fwrite($file, "$counStr) Строка\n");
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

?>

</body>

</html>