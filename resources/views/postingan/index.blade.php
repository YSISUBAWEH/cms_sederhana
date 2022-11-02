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
                    <div class="card-body">
                        <a href='/postingan/create' class="btn btn-md btn-success mb-3"><i class="fa-solid fa-plus" aria-hidden="true"></i></a><div style="float: right;">
                        <form method="get" action="/postingan/search">
                            <input type="text" name="search" class="form-control">
                            <button type="submit" class="btn btn-primary">cari</button>                                
                        </form></div>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID_POST</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($content as $isi)
                                <tr>
                                    <td>{{ $isi->id_post}}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/images/').$isi->image }}" class="rounded-0" style="width: 360px">
                                    </td>
                                    <td>{{ $isi->title }}</td>
                                    <td>{!! $isi->content !!}</td>
                                    <td class="text-center" colspan="2">
                                            <a href='/postingan/edit/{{$isi->id}}' class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm btn-danger" href='postingan/delete/{{$isi->id}}'>HAPUS</a>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          @if ($content->hasPages())
                          <div class="card-footer-primary">  
                          {{ $content->links() }}
                      </div>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>