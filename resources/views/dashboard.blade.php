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
            <h4>welcome to Dashboard</h4>
            <hr>
            <table class="table">
               <thead>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Action</th>
               </thead>
               <tbody>
                   <td>{{$data->name}}</td>
                   <td>{{$data->Email}}</td>
                   <td><a href="login">logout</a></td>
               </tbody>
            </table>
            
        </div>

    </div>
</div>

    
</body>
</html>