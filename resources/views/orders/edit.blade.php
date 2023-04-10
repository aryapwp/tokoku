
@extends('selamatdatang')
@section('content')
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('orders.store') }}" method="POST" >
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Orders</h5>
                                </div>
                            </div>
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $orders->id }}">
                            <div class="form-group">
                                <label class="font-weight-bold">Code</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" placeholder="Masukkan Code">
                            
                                <!-- error message untuk code -->
                                @error('code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" placeholder="Pilih Tanggal">

                                @error('date')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Customer ID</label>
                                <select class="form-control" name="customer_id">
                                    <option selected disabled>Pilih Customer ID</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->id}} - {{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk address -->
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Sub Total</label>
                                <input type="text" class="form-control @error('subtotal') is-invalid @enderror" name="subtotal" value="{{ old('subtotal') }}" placeholder="Masukkan Subtotal">
                            
                                <!-- error message untuk content -->
                                @error('subtotal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Discount</label>
                                <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" placeholder="Masukkan Discount">
                            
                                <!-- error message untuk content -->
                                @error('discount')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
       @endsection
    @section('asset_footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<!-- <script>
    CKEDITOR.replace( 'name' );
</script> -->
</body>
</html>
@endsection