@extends('admin/layout')

@section('title', 'User | Sofosrobotics')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row project-cards">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Data User</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('tambahusers')}}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block row">
                                        <div class="col-sm-12 col-lg-12 col-xl-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-light">
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>jada</td>
                                                            <td>admin</td>
                                                            <td>Super Admin</td>
                                                            <td class="text-center" width="160px">
                                                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                                                    <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                                                    <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>subur</td>
                                                            <td>produksi</td>
                                                            <td>Supplier</td>
                                                            <td class="text-center" width="160px">
                                                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                                                    <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                                                    <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>pembeli</td>
                                                            <td>nama</td>
                                                            <td>Supplier</td>
                                                            <td class="text-center" width="160px">
                                                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                                                    <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                                                    <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
    
@endsection