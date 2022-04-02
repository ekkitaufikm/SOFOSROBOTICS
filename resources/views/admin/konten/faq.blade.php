@extends('admin/layout')

@section('title', 'FAQ | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data FAQ</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('tambahfaq')}}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama Pertanyaan</th>
                                <th>Isi</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Non consectetur a erat nam at lectus urna duis?</td>
                                <td>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.                                
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
                                <td>Feugiat scelerisque varius morbi enim nunc?</td>
                                <td>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.                               
                                </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dolor sit amet consectetur adipiscing elit?</td>
                                <td>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis                                
                                </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</td>
                                <td>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.                                
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

