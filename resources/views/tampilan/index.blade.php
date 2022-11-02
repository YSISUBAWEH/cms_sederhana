<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
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
                        @foreach($data as $konten)
                        <div class="card-body">
                       <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="{{ Storage::url('public/images/').$konten->image }}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{$konten->title}}</h5>
                        <a href="/tampilan/show/{{$konten->id}}" class="btn btn-primary">show</a>
                      </div>
                    </div> </div>
                    @endforeach
                   
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>