<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
<h1>Список студентов</h1>
<table class="table">
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Номер группы</th>
        <th>Баллов</th>
    </tr>
    <?php for ($i = 0; $i < 5; $i++): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    <?php endfor; ?>
</table>
</div>
</body>
</html>