@extends('app')
@section('content')
@auth
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<body style="background: rgb(240, 248, 254);">
<span class="bi bi-emoji-smile" aria-hidden="true"></span>
    <div class="container mt-5">
        <div class="row">
        	@foreach($artikel as $isi)
            <div class="col-md-12">
                    <div class="card">
                    	<img src="{{$isi->image}}" class="card-img-top" alt="...">
                    	<div class="card-body">
                    		<h3 class="card-title">{{$isi->judul}}</h3>
                    		<a href="#" class="btn btn-primary">show</a>
                    	</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>	
</body>
@endguest
@endsection