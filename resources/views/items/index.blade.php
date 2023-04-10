
@extends('selamatdatang')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('items.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($items as $item)
                                <tr>
                                    <td class="text-center">
                                        {{$item->name}}
                                    </td>
                                    <td>{{ $item->price }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('items.destroy', $item->id) }}" method="POST">
                                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Items belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('asset_footer')
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
    @endsection