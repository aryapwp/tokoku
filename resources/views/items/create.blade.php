
@extends('selamatdatang')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('items.store') }}" method="POST" >
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Item</h5>
                                </div>
                            </div>
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk nama -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga">
                            
                                <!-- error message untuk content -->
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('descrption') }}" placeholder="Masukkan Deskripsi">
                            
                                <!-- error message untuk address -->
                                @error('deskripsi')
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