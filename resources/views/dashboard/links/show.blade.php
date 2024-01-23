{{-- {{dd($links->vpn)}} --}}

@extends('dashboard.layouts.main')

@section('container')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <h1 class="mb-4">Details</h1>
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Link</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <strong><i class="fas fa-file mr-1"></i> Judul</strong>
                              <p class="text-muted"> {{ $links->title }}</p>

                              <hr>

                              <strong><i class="fas fa-link mr-1"></i> Link</strong>
                              <p class="text-muted">{{ $links->link }}</p>

                              <hr>

                              <strong><i class="fas fa-circle-info"></i> Deskripsi</strong>
                              <p class="text-muted">{{ $links->description }}</p>

                              <hr>

                              <strong><i class="fa-solid fa-globe mr-1"></i> VPN</strong>
                              @if ($links->vpn == 1)
                                <p class="text-muted"> Harus menggunakan VPN </p>
                              @else
                                <p class="text-muted"> Tanpa VPN </p>
                              @endif


                              <hr>

                              <strong><i class="fa-solid fa-tag mr-1"></i> Tag</strong>
                              <p class="text-muted"> {{ $links->tags->title }} </p>

                              <hr>

                              <strong><i class="fa-solid fa-calendar-days mr-1"></i> Tanggal Dibuat</strong>
                              <p class="text-muted"> {{ $links->created_at }} </p>

                              <hr>

                              <strong><i class="fa-solid fa-calculator mr-1"></i> Jumlah Kunjungan</strong>
                              <p class="text-muted"> {{ $links->hit_counter }} </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <h1 class="mb-4"> <span> &#8203; </span> </h1>
                        <a href={{ url("/dashboard/links/$links->id/edit") }} class="btn btn-app bg-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action={{ url("/dashboard/links/$links->id") }} method="post" class='d-inline'>
                            @method('delete')
                            @csrf
                            <button class="btn btn-app bg-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    </div>
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src={{ asset("/AdminLTE/plugins/jquery/jquery.min.js") }}></script>
    <!-- Bootstrap -->
    <script src={{ asset("/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <!-- AdminLTE -->
    <script src={{ asset("/AdminLTE/dist/js/adminlte.js") }}></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src={{ asset("/AdminLTE/plugins/chart.js/Chart.min.js") }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ asset("/AdmiunLTE/dist/js/demo.js") }}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ asset("/AdminLTE/dist/js/pages/dashboard3.js") }}></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
        });
    </script>

@endsection
