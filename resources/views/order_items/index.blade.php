
@extends('selamatdatang')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('orderitems.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ORDER ITEM</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Item ID</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Total</th>
                                <th scope="col">Note</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($orders as $order)
                                <tr>
                                    <td class="text-center">
                                        {{$order->order_id}}
                                    </td>
                                    <td>{{ $order->item_id }}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->discount }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->note }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Order belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $orders->links() }}
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