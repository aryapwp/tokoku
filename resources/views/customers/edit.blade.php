
@extends('selamatdatang')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Customers</h5>
                                </div>
                            </div>
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $customer->name) }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk name -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $customer->address) }}" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk address -->
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $customer->phone) }}" placeholder="Masukkan Nomor Telephone">
                            
                                <!-- error message untuk phone -->
                                @error('phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
    CKEDITOR.replace( 'content' );
</script> -->
</body>
</html>
    @endsection
