@extends('admin/layout')

@section('title', 'Tambah Role | Sofosrobotics')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Tambah Role</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('role')}}" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <form class="form theme-form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Hak Akses</label>
                            <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama Hak Akses" autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
    
@endsection