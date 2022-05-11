<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background: -webkit-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -webkit-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
            background: -o-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -o-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
            background: -moz-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -moz-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
            background: linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
        }
        .container-fluid {
            padding-top: 20px;
            
        }
        #form{
            padding-top: 30px;
            margin-right: 40%;
            padding-left: 35%;
        }
    
    
        .btn{
            margin-top: 20px;
        }
        .heading{
            font-size: 32px;
            padding-left: 32%;
            
            
            
            padding-bottom: 30px;
        }
        .customalert{
            margin-top: 5px;
            margin-bottom: 10px;
            padding-top: 0px;
            padding-right: 5px;
            padding-left: 20px;
            padding-bottom: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            border-left-width: 0px;
            border-bottom-width: 0px;

        }
        
    </style>
</head>

<body>
    <div class="container-fluid">

        <form action="{{ url('signup') }}" method="POST" id="form">
           @csrf
            <label class="heading"><b>Signup</b></label>
            <div class="form-group">
            <label>Name</label>
                <input type="text" class="form-control" name="name" required>
               
                @error('name')
                <div class="customalert alert alert-danger">
                    <strong>{{ $message }}</strong> 
                </div>
                @enderror
            </div>
            <div class="form-group">
            <label>Email</label>
                <input type="text" class="form-control" name="email" required>
               
                @error('email')
                <div class="customalert alert alert-danger">
                    <strong>{{ $message }}</strong> 
                </div>
                @enderror
            </div>
          
            <div class="form-group">
            <label>Password</label>
                <input type="password" class="form-control" name="password" required>
                
                @error('password')
                <div class="customalert alert alert-danger">
                    <strong>{{ $message }}</strong> 
                </div>
                @enderror
            </div>
            
            <div class="form-group">
            <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" required>
                
                @error('confirmpassword')
                <div class="customalert alert alert-danger">
                    <strong>{{ $message }}</strong> 
                </div>
                @enderror
            </div>
            <div class="form-group">
            <label><a href="{{ url('login') }}">Already have account clik here to <b>login</b></a></label>
            </div>
            <center>
            <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
       
    </div>
</body>

</html>