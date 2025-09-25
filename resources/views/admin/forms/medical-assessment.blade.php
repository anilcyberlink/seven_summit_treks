@extends('admin.master')
@section('title', Request::segment(2))

@section('breadcrumb')
@endsection

@section('content')

    <section id="" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="">
            <h4> Medical Assessment </h4>
            <!-- recent orders table -->
            <div class="panel">
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table admin-form table-striped dataTable" id="datatable3">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center" style="width: 60px;">SN</th>
                                    <th style="width: 200px;">Full Name</th>
                                    <th style="width: 250px;">Email</th>
                                    <th style="width: 150px;">Date</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-truncate" style="max-width: 200px;">
                                            <a href="{{ route('admin.medical.detail',$row->id) }}">
                                                {{ $row->fullname }}
                                            </a>
                                        </td>
                                        <td class="text-truncate" style="max-width: 250px;">
                                            {{ $row->email }}
                                        </td>
                                        <td >
                                            {{ $row->created_at->format('Y-m-d') }}
                                        </td>
                                        <td >
                                            <form action="{{ route('admin.medical.delete', $row->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: .tray-center -->
    </section>

@endsection

@section('libraries')
    <!-- Datatables -->
    <script src="{{ asset(env('PUBLIC_PATH') . 'vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>

    <!-- Datatables Tabletools addon -->
    <script
        src="{{ asset(env('PUBLIC_PATH') . 'vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}">
    </script>

    <!-- Datatables ColReorder addon -->
    <script
        src="{{ asset(env('PUBLIC_PATH') . 'vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}">
    </script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src="{{ asset(env('PUBLIC_PATH') . 'vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}">
    </script>
    <script type="text/javascript">
        
        /************/
        $('#datatable3').dataTable({
            "aoColumnDefs": [{
                'bSortable': true,
                'aTargets': [-1]

            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next"
                }
            },
            "iDisplayLength": 10,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

    </script>

@endsection
