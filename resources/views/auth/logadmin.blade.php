<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custom authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
 crossorigin="anonymous">
</script>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>login</h4>
            <hr>
            <form action="{{route('log-admin')}}"  method="POST">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" placeholder="ENTER Email" 
                    name="Email" value="{{old('Email')}}">
                    <span class='text-danger'>@error('Email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" placeholder="ENTER password" 
                    name="password" value="">
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Login

                    </button>
                    </div>
                    <br>
                    <a href="registration">CREATE ACCOUNT</color></a>

            </form>
        </div>

    </div>
</div>

    
</body>
</html>