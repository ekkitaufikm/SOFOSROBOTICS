@extends('admin/layout')

@section('title', 'Tambah Resources | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Tambah Resources</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('resources')}}" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <input type="hidden" name="_token" value="sxj9BwTpFVuYAAEDxtmulBRcfa0cepIL8wFz5yBI">                <div class="card-body">
                        <div class="form-group">
                            <label>Nama Bahan</label>
                            <input type="text" id="i-nama" class="form-control" name="namaModel" placeholder="Nama Bahan" autofocus>
                        </div>
    
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

