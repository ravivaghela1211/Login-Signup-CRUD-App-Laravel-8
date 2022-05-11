<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(110deg, #a2b9bc 60%, #a2b9bc 60%);
        }
        .container-fluid {
            padding-top: 20px;
            ;
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <h2 style="text-align: center;">Crud operation in laravel</h2>

        <div class="visible-print text-center">
        
        {!! QrCode::size(100)->generate(Session::get('email')); !!}
        <p>Scan me to get your detail .</p>
    </div>
        <a class="btn btn-primary" style="margin-bottom: 10px;" href="/logout" role="button">Log -> Out </a>

        @if(Session::get('status'))
        <div class="alert alert-success">
            <strong>{{Session::get('status') }}</strong> 
        </div>
        
        @endif
        <table border="5" class="table">

            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($user as $user)
            <tr>
                <td>{{ $user->name}}</td>
                <td>{{ $user->city}}</td>
                <td><a class="btn btn-primary" href="edit/{{$user->id}}" role="button">Edit</a></td>
                <td><a class="btn btn-danger" href="delete/{{$user->id}}" role="button">Delete</a></td>
            </tr>
            @endforeach

        </table>
        <center> <a class="btn btn-primary" href="add_data" role="button">Add New Data</a></center>
    </div>
</body>

</html>