<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            font-size: 29px;
            padding-left: 10%;
            
           
            padding-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <form action="{{ url('login') }}" method="POST" id="form">
           @csrf
            <label class="heading"><b>Login to the System</b></label>
            @if(Session::get('status'))
            <div class="msg alert alert-danger">
                <strong>{{Session::get('status') }}</strong> 
            </div>
            @endif
            @if(Session::get('success'))
            <div class="msg alert alert-success">
                <strong>{{Session::get('success') }}</strong> 
            </div>
            @endif
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required>
              
            </div>
          
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
              
            </div>
            <div class="form-group">
                <center><label><a href="{{ url('signup') }}">Create account </a></label></center>
            </div>
            <center>
            <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
       
    </div>
</body>

</html>
<script> 
    $(document).ready(function(){
     
        setTimeout(function(){
            if ($('.msg').length > 0) {
                $('.msg').fadeOut(1000,function(){ $(this).remove();})
            
            }
              
        }, 5000);
    });
</script> 