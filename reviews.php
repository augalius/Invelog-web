<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class>
    <script src="js/reviews.js"></script>
    <?php echo header_fragment(); ?>
    <div>
        <?php echo nav_fragment(); ?>
        <main>
            <div id="reviews-container-wrapper" class="reviews-layout">
                <div class="left-column">
                    <div class="filter-section">
                        <label for="star-filter">Filter by Rating:</label>
                        <select id="star-filter">
                            <option value="all">All</option>
                            <option value="5">⭐ 5 Stars</option>
                            <option value="4">⭐ 4 Stars</option>
                            <option value="3">⭐ 3 Stars</option>
                            <option value="2">⭐ 2 Stars</option>
                            <option value="1">⭐ 1 Star</option>
                        </select>
                    </div>
                <div id="all-reviews"></div>
                </div>
                <div class="right-column">
                    <div id="average-rating"></div>
                    <div id="reviews-container"></div>
                </div>
            </div>
        </main>
    </div>
    <?php echo footer_fragment(); ?>
</body>
</html>
    