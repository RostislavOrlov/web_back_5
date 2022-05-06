<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@700&display=swap" rel="stylesheet">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@700&display=swap');
</style>
<body>

<form id="form" action="" method="POST">
    <!-- Вывод сообщений об отправке -->
    <?php
    if ($messages['save'] != '') {
        print '<div class="notification has-text-black">'.$messages["save"].$messages['savelogin'].'</div>';
    }
    if ($messages['notsave'] != '') {
        print '<div class="notification has-text-danger">'.$messages["notsave"].'</div>';
    }
    ?>
    <!-- Имя -->
    <div class="field">
        <label for="nameInput" class="label">Имя</label>
        <div class="control">
            <input id="nameInput" class="input is-rounded <?php if ($errors['name']) print 'is-danger'; else print 'is-black' ?>" type="text" name="name" placeholder="Ваше имя" value="<?php print $values['name']; ?>" />
        </div>
        <?php print '<p class="help is-danger">'.$messages['name'].'</p>'; ?>
    </div>
    <!-- ./Имя -->
    <!-- Email -->
    <div class="field">
        <label for="emailInput" class="label">Почта</label>
        <div class="control">
            <input id="emailInput" class="input is-rounded <?php if ($errors['email']) print 'is-danger'; else print 'is-blac' ?>" type="email" name="email" placeholder="Ваше Email" value="<?php print $values['email']; ?>" />
        </div>
        <?php print '<p class="help is-danger">'.$messages['email'].'</p>'; ?>
    </div>
    <!-- ./Email -->
    <!-- Year -->
    <div class="field">
        <label for="yearSelect" class="label">Год рождения</label>
        <div class="control">
            <div class="select is-black is-rounded ">
                <select name="year" id="yearSelect">
                    <?php
                    for ($i = 2014; $i > 1955; $i--) {
                        print('<option value="'.$i.'"');
                        if ($values['year'] == $i) {
                            print('selected');
                        }
                        print('>'.$i.'</option>');
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <!-- ./Year -->
    <!-- gender -->
    <div class="field">
        <label class="label">Пол</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="gender" value="male" <?php if ($values['gender'] == 'male') print(' checked'); ?> />
                М
            </label>
            <label class="radio">
                <input type="radio" name="gender" value="female" <?php if ($values['gender'] == 'female') print(' checked'); ?> />
                Ж
            </label>
        </div>
    </div>
    <!-- ./gender -->
    <!-- count -->
    <div class="field">
        <label class="label">Количество конечностей</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="count" value="1" <?php if ($values['count'] == 1) print(" checked "); ?> />
                1
            </label>
            <label class="radio">
                <input type="radio" name="count" value="2" <?php if ($values['count'] == 2) print(" checked "); ?>  />
                2
            </label>
            <label class="radio">
                <input type="radio" name="count" value="3" <?php if ($values['count'] == 3) print(" checked "); ?>  />
                3
            </label>
            <label class="radio">
                <input type="radio" name="count" value="4" <?php if ($values['count'] == 4) print(" checked "); ?>  />
                4
            </label>
        </div>
    </div>
    <!-- ./count -->
    <!-- Powers -->
    <div class="field">
        <label for="countSelect" class="label">Сверхспособности</label>
        <div class="control">
            <div class="select is-multiple <?php if ($errors['powers']) print 'is-danger'; else print 'is-black' ?>">
                <select id="countSelect" name="powers[]" multiple size="3">
                    <?php
                    foreach ($powers as $key => $value) {
                        $selected = empty($values['powers'][$key]) ? '' : ' selected="selected" ';
                        printf('<option value="%s",%s>%s</option>', $key, $selected, $value);
                    }
                    ?>
                </select>
            </div>
        </div>
        <?php print '<p class="help is-danger">'.$messages['powers'].'</p>'; ?>
    </div>
    <!-- ./Powers -->
    <!-- Bio -->
    <div class="field">
        <label for="bioText" class="label">Биография</label>
        <div class="control">
            <textarea id="bioText" name="bio" class="textarea <?php if ($errors['bio']) print 'is-danger'; else print 'is-black' ?>" placeholder="Расскажите о себе"><?php print $values['bio']; ?></textarea>
        </div>
        <?php print '<p class="help is-danger">'.$messages['bio'].'</p>'; ?>
    </div>
    <!-- ./Bio -->
    <!-- Checkbox -->
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="check" value="ok">
                С контрактом</a> ознакомлен(а).
            </label>
        </div>
        <?php print '<p class="help is-danger">'.$messages['check'].'</p>'; ?>
    </div>
    <!-- ./Checkbox -->
    <!-- Button -->
    <div class="field is-grouped">
        <div class="control">
            <button name="btn" type="submit" class="btn button is-black is-outlined" value="ok">Отправить</button>
        </div>
    </div>
    <!-- ./Button -->
</form>
<!-- ./Form -->
</body>
</html>
