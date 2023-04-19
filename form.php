<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Человеческие сверхспособности</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div id="название">
            <h1>Сверхспособности</h1>
        </div>
    </header>
    <div class="form">
        <form action="index.php" method="POST">
            <label>
                Введите имя:<br>
                <input name="name" placeholder="Введите имя" /><br>
            </label>
            <label>
                Адрес электронной почты:<br>
                <input name="email" type="email" placeholder="Введите email" /><br>
            </label>
            <label for="year">Год рождения</label>
            <select name="year">
    <?php 
    for ($i = 1923; $i <= 2023; $i++) {
      printf('<option value="%d">%d</option>', $i, $i);
    }
    ?>
  </select>
            <br>
            Выберите пол:<br>
            <label><input type="radio" checked="checked" name="gender" value="female" />
                Женский</label>
            <label><input type="radio" name="gender" value="male" />
                Мужской</label>
            <br>
            Количество конечностей:<br>
            <label><input type="radio" checked="checked" name="limbs" value="1" />
                1</label>
            <label><input type="radio" name="limbs" value="2" />
                2</label>
            <label><input type="radio" name="limbs" value="3" />
                3</label>
            <label><input type="radio" name="limbs" value="4" />
                4</label>
            <label>
                <br>
                Сверхспособности:<br>
                <select name="powers[]" multiple="multiple">
                    <option value="invisibility">Невидимость</option>
                    <option value="stoppingtime" selected="selected">Остановка времени</option>
                    <option value="ignition">Воспламенение</option>
                    <option value="elements">Управление стихиями</option>
                </select>
                <br>
                Биография:<br>
                <textarea name="biography">Напишите о себе</textarea><br>
                <label><input type="checkbox" checked="checked" name="check-kontrol" />
                    с контрактом ознакомлен(а)</label>
                <br>
                <input type="submit" class="submit" value="Отправить" />

        </form>
    </div>

</body>
