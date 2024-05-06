<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>

<body>
<nav>
        <ul>
            <li><a href="https://mywebtraining.net/webdev/SteveHarvey/mvc-errors/">Home</a></li>
        </ul>
    </nav>
    <h1>Products</h1>
    <?php foreach ($products as $product) : ?>
        <p>
            <a href="./products/<?= htmlspecialchars($product['id']) ?>/show">
                <?= htmlspecialchars($product["name"]) ?>
            </a>
        </p>
    <?php endforeach; ?>

</body>
</html>
