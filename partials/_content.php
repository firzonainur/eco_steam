<div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Selamat Datang di Izinlancar.id</li>
                                    </ol>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Selamat Datang Admin</h5>
                                                    <p class="text-muted">Izin Lancar Dashboard</p>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Dokumen telah selesai</h5>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Sepanjang Waktu</p>
                                                    <h4>1 Dokumen</h4>
                                                </div>
                                                <div dir="ltr" class="ml-2">
                                                    <input data-plugin="knob" data-width="56" data-height="56" data-linecap=round data-displayInput=false
                                                    data-fgColor="#3051d3" value="56" data-skin="tron" data-angleOffset="56"
                                                    data-readOnly=true data-thickness=".17" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted">Dokumen belum selesai</p>
                                                    <h5 class="mb-0"> 12 Dokumen <span class="font-size-14 text-muted ml-1">Dari 13 Dokumen</span></h5>
                                                </div>

                                                <div class="align-self-end ml-2">
                                                    <a href="#" class="btn btn-primary btn-sm">View more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-inline float-right">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control form-control-sm datepicker-here" data-range="true"  data-multiple-dates-separator=" - " data-language="en" placeholder="Select Date" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="far fa-calendar font-size-12"></i></span>
                                                    </div>
                                                </div>
                                            </form>
                                            <h5 class="header-title mb-4">Pengunjung Website</h5>
                                            <div id="yearly-sale-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- end row -->

                            
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-right ml-2">
                                                <a href="#">View all</a>
                                            </div>
                                            <h5 class="header-title mb-4">Pengguna terbaru</h5>

                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">User ID</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Tanggal Daftar</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Permintaan Dokumen</th>
                                                            <th scope="col">Dokumen Pengirim</th>
                                                            <th scope="col">Aksi</th>
                                                            <th scope="col">Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#">IL001</a>
                                                            </th>
                                                            <td>Mohamad Ainur</td>
                                                            <td>20-11-2023</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Aktif</div>
                                                            </td>
                                                            <td>Dokumen Legal : NIB</td>
                                                            <td>
                                                                <a class="btn btn-primary" href="">Dokumen Persyaratan</a>
                                                            </td>
                                                            <td>
                                                               <div class="row">
                                                                 <div class="form-group form-group-custom mb-4 col-md-6">
                                                                    <label class="col-form-label">Select</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control">
                                                                                <option>Pilih Status</option>
                                                                                <option>Diterima (Lanjut Upload Persyaratan)</option>
                                                                                <option>Dokumen Diterima</option>
                                                                                <option>Dokumen Diproses</option>
                                                                                <option>Dokumen Disetujui</option>
                                                                                <option>Selesai</option>
                                                                            </select>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group form-group-custom mb-4 col-md-6">
                                                                    <a class="btn btn-success" href="#">Submit</a> <br><br>
                                                                    <a class="btn btn-success" data-toggle="modal" data-target="#status1" href="#">Diterima (Lanjut Upload Persyaratan)</a><br><br>
                                                                    <a class="btn btn-success" data-toggle="modal" data-target="#status2" href="#">Dokumen Diterima</a><br><br>
                                                                    <a class="btn btn-success" data-toggle="modal" data-target="#status3" href="#">Dokumen Diproses</a><br><br>
                                                                    <a class="btn btn-success" data-toggle="modal" data-target="#status4" href="#">Dokumen Disetujui</a><br><br>
                                                                    <a class="btn btn-success" data-toggle="modal" data-target="#status5" href="#">Selesai</a>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" data-toggle="modal" data-target="#upload" href="#">Upload Dokumen</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mt-4">
                                                <ul class="pagination pagination-rounded justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="mdi mdi-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="mdi mdi-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                                                        <!-- Konten Modal Status  -->
                                                            <div id="status1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Diterima (Lanjut Upload Persyaratan)</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Diterima (Lanjut Upload Persyaratan)</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Diterima (Lanjut Upload Persyaratan)</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Dokumen Diterima</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Dokumen Diproses</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Dokumen Disetujui</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>

                                                            <div id="status5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Perubahan Status</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Selesai</h5>
                                                                            <p>Catatan :
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea required class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->

                                                            <!-- Konten Modal Upload -->
                                                            <div id="upload" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myModalLabel">Upload Dokumen</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="font-size-16">Upload</h5>
                                                                                 <div>
                                                                                    <form action="#" class="dropzone">
                                                                                        <div class="fallback">
                                                                                            <input name="file" type="file" multiple="multiple">
                                                                                        </div>
                                                                                        <div class="dz-message needsclick">
                                                                                            <div class="mb-3">
                                                                                                <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                                                                            </div>
                                                                                            
                                                                                            <h4>Drop files here to upload</h4>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                </td>

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->
            </div>