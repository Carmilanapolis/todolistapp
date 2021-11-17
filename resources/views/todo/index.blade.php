<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Home</title>
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

    <h2>All your TODOs</h2>

  

    <div
        class="col-xs-6">
        <a href="/create" class="container w-25, btn btn-success" data-toggle="modal"> <span>Create</span></a>
    </div>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li>
            
                {{$todo->title}}
            
            <a href="{{asset('/' . $todo->id . '/edit')}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
			<a href="{{asset('/' . $todo->id . '/delete')}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
        </li>
    @endforeach
</body>
</html>