<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateItems</title>
</head>

<body>
    <h1>Welcome to UpdateItems View</h1>
    <form action="<?=site_url('cafe/update/' . $isla_cafe['id']);?>" method="post">
    <label for ="name">Name:</label><br>
    <input type="text"id="name"name="name" value="<?=html_escape($isla_cafe['name'])?>"><br>
    <label for ="description">Description:</label><br>
    <input type="text"id="description"name="description" value="<?=html_escape($isla_cafe['description'])?>"><br>
    <label for ="price">Price:</label><br>
    <input type="text"id="price"name="price" value="<?=html_escape($isla_cafe['price'])?>"><br>
    <label for ="image">image:</label><br>
    <input type="text"id="image"name="image" value="<?=html_escape($isla_cafe['image'])?>"><br>
    <button type="action-btn edit-btn">Submit</button>
    </form>
</body>
</html>