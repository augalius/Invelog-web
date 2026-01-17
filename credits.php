<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script src="js/app.js"></script>
    <?php echo header_fragment(); ?>
    <div>
        <?php echo nav_fragment(); ?>
        <?php
            $name = "Augustas Giedraitis";
            $studentId = "w24059111";
            $resources = [
                "W3Schools CSS Tutorial - https://www.w3schools.com/css/",
                "KV5049 Mobile & Web App Development Lecture materials - https://elp.northumbria.ac.uk",
                "GitHub Copilot for JavaScrypt tasks - https://github.com/features/copilot",
                "ChatGPT for styling the website with CSS - https://openai.com/chatgpt",
                "Mockup phone for images on the home page - https://mockuphone.com/",
            ];
        ?>
        
        <div class="credits">
            <h1>Credits</h1>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Student ID:</strong> <?php echo $studentId; ?></p>
            <h2>Main Resources Used:</h2>
            <ul>
                <?php foreach ($resources as $resource): 
                    $parts = explode('-', $resource, 2);
                    $resource = trim($parts[0]);
                    $url = trim($parts[1]);?>
                    <li><a href="<?php echo $url; ?>" target="_blank"><?php echo htmlspecialchars($resource); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php echo footer_fragment(); ?>
</body>
</html>