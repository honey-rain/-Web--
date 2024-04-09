<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про дельфінів</title>
    <link rel="stylesheet" href="index.css"> <!-- Підключення зовнішнього CSS-файлу -->
</head>
<body>

    <h1>Дельфіни</h1>

    <?php
        $description = "Дельфіни - це цікаві морські ссавці, які відносяться до родини дельфінових (Delphinidae).";
        $behavior = "Дельфіни мають гладку, стрімку форму тіла і хвіст з горизонтальною пластинкою, яка допомагає їм плавати. Вони також мають гострий ніс, що допомагає їм у сприйнятті звуку в воді.";
        $social_interaction = "Дельфіни живуть у великих зграях і спілкуються між собою за допомогою різних звуків і жестів. Вони є дуже соціальними тваринами.";
        $threats = "Незважаючи на їхню витривалість, дельфіни стикаються з різними загрозами, такими як забруднення води, полювання та втрата середовища мешкання.";
    ?>

    <p><?php echo $description; ?></p>

    <h2>Опис</h2>
    <p><?php echo $behavior; ?></p>

    <h2>Життя в природі</h2>
    <p><?php echo $social_interaction; ?></p>

    <h2>Загрози</h2>
    <p><?php echo $threats; ?></p>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Інформація про дельфінів</p>
    </footer>
</body>
</html>
