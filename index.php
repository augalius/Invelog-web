<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invelog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="home">
    <script src="js/app.js"></script>
    <?php echo header_fragment(); ?>
    <div>
        <?php echo nav_fragment(); ?>
        <main>
            <div class="home-top-container">
                <img src="images/phone_left.png" class="top-phone" alt="Phone Left">
                <div class="top-text-container">
                    <h1>Welcome to Invelog</h1>
                    <p>A journaling app for investors to keep track of the investments
                        and reflect about the financial activity.</p>
                    <a href="https://w24059111.nuwebspace.co.uk/kv5049/coursework/app/" target="_blank" class="home-button">Try it now!</a>
                </div>
            </div>
            <div class="home-bottom-container">
                <img src="images/phone_portrait.png" class="bottom-phone" alt="Phone Portrait">
                <div class="bottom-text-container">
                    <h1>Quick & Simple Logging</h1>
                    <p>Record your trades with just a few taps - including date, name, price,
                        quantity and personal notes.</p>
                    <p> Stay organized and never lose track of your investment decisions.</p>
                </div>
            </div>
        </main>
    </div>
    <?php echo footer_fragment(); ?>
</body>
</html>