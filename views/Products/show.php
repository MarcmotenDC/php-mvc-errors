<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
</head>

<body>
<nav>
        <ul>
            <li><a href="https://mywebtraining.net/webdev/SteveHarvey/mvc-errors/">Home</a></li>
            <li><a href="https://mywebtraining.net/webdev/SteveHarvey/mvc-errors/products">Products</a></li>
        </ul>
    </nav>
    <h1>Show Product Page</h1>
    <h2><?= $product["name"] ?></h2>
    <p><?= $product["description"] ?></p>

</body>
</html>