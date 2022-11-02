<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->content}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: rgb(240, 248, 254);">
<span class="bi bi-emoji-smile" aria-hidden="true"></span>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <img src="{{ Storage::url('public/images/').$data->image }}" class="img-fluid" alt="Renponsive image">
                        <br><br>
                        <h1 style=" text-align:center;  ">{{$data->title}}</h1><br><br>
                       {{$data->content}}
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                   <form> 
                    <div class="form-group">    
                            <label>email</label>
                            <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group"> 
                            <label>comentar</label>
                            <input type="text" class="form-control" name="comen">
                    </div>
                    <div class="form-group"> 
                            <input type="submit" class="btn btn-success" name="kirim" value="send">
                    <div class="form-group"> 
                        </form>
                    </div></div></div></div></div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>