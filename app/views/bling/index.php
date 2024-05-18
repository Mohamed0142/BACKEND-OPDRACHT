<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Bling Bling Nail Studio Chantel</h1>
    <form method="post" action="/bling/create">
        <div style="display: flex; flex-direction: row">
            <input type="color" value="#014012" name="color_1"/>
            <input type="color" value="#0bb839" name="color_2"/>
            <input type="color" value="#d4d4d4" name="color_3"/>
            <input type="color" value="#303631" name="color_4"/>
        </div>
        <label for="phone_number">Uw telefoonnummer:</label>
        <input id="phone_number" name="phone_number" type="text" placeholder="+31 6 12345689" />
        <label for="email">Uw e-mailadres:</label>
        <input id="email" name="email" type="text" placeholder="example@gmail.com" />
        <label for="date">Afspraak datum:</label>
        <input id="date" name="date" type="date" />
        <div>
            <p>Soort behandeling:</p>
            <label for="nail_biting">Nagelbijt arrangement (termijnbetaling mogelijk) € 180</label>
            <input id="nail_biting" name="nail_biting" type="checkbox" style="float: left"/>
            <br>
            <label for="massage">Luxe manicure (massage en handpakking) € 30</label>
            <input id="massage" name="massage" type="checkbox" style="float: left"/>
            <br>
            <label for="nail_repair">Nagelreparatie per nagel (in eerste week gratis) € 5</label>
            <input id="nail_repair" name="nail_repair" type="checkbox" style="float: left"/>
        </div>
        <button type="submit">Sla op</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
