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
    <form action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-bordered table-striped">
        <thead class="thead-default">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Номер группы</th>
            <th>Баллов</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < 5; $i++): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
    <!--    <div class="d-flex p-2">I'm a flexbox container!</div>-->
</div>


</body>
</html>