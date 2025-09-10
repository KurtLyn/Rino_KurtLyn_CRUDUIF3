<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateUser</title>
</head>
<body>

    <h1>Welcome to CreateUser View</h1>
    <form action="<?=site_url('cafe/create')?>" method="POST">
    <label for ="name">Name:</label><br>
    <input type="text"id="name"name="name"><br>
    <label for ="description">Description:</label><br>
    <input type="text"id="description"name="description"><br>
    <label for ="price">Price:</label><br>
    <input type="text"id="price"name="price"><br>
    <label for ="image">image:</label><br>
    <input type="text"id="image"name="image"><br>
    <button type="submit">Submit</button>
    </form>

    <script>
</body>
</html>