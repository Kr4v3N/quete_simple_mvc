<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> MVC 3 </title>
</head>
<body>
<main>
    <h1>Category <?= $category['name'] ?></h1>
    <ul>
        <li>Id : <?= $category['id'] ?></li>
    </ul>
    <!--<a href='http://localhost:8000/categories'>Back to list</a>-->
    <a href='index.php?route=categories'>Back to list</a>
</main>
</body>
</html>

