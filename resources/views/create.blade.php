<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO | Create</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>
<body style="text-align:center">

    <body class="bg-info">
        <div class="container w-25 mt-5">
            <div class="card shadow-sm">
                <div class="card-body">
    <h2> Create your TODO</h2>
    <h3>
        <x-alert />
    </h3>
    <form action= "/upload" method="post">
        @csrf
    <input type="text" name="title" />
    <input type="submit" class="btn btn-success" data-toggle="modal" value="Create" />
    </form>
    <br>
    <a href="/index" class="container w-25, btn btn-success" data-toggle="modal">View todo list</a>
</body>
</html>