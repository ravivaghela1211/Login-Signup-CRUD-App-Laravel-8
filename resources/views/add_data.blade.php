<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container-fluid {
            padding-top: 20px;
            
        }
        #form{
            padding-right: 20%;
            padding-left: 20%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <form action="{{ url('add_data') }}" method="POST" id="form">
           @csrf
            <label>Add Data</label>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
              
            </div>
          
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city">
              
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
    </div>
</body>

</html>