@extends('admin/layout')

@section('title', 'Dashboard | Sofosrobotics')
    
@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Dashboard</h5>
                        </div>
                    </div>
                </div>
                <form action="{{ url('#')}}" method="post">
                    <input type="hidden" name="_token" value="HS33pcueojWJ0ZOYjzPPkRQfNUDtOHGAvsrPsFz0">                
                    <div class="card-body">
                        <div class="form-group">
                            <label>Input Nama Model</label>
                            <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama" autofocus>
                        </div>

                        <div class="form-group">
                            <label>Jenis Pertanyaan</label>
                            <select id="select-idQUser" class="form-control" name="idQUser">
                                <option value="">Pilih</option>
                                <option value="1">Rumah Tangga</option>
                                <option value="2">Pengepul</option>
                                <option value="4">Pemulung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Range Harga</label>
                            <input type="text" id="i-harga" class="form-control" name="harga" placeholder="Harga" autofocus>
                        </div><br>

                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" value="upload gambar"/>
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

@endsection

