@extends('admin/layout')

@section('title', 'Model Robot | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Model Robot</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('tambahmodel')}}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama Model</th>
                                <th>Gambar</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kaki Dua</td>
                                <td>
                                    Gambar Not Found                             
                                </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kaki Roda</td>
                                <td>
                                    Gambar Not Found                             
                                </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

