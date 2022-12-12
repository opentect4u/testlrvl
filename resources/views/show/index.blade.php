<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body>
    <h2>Show</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1"> </h5>
                    <div>
                        <form action="javascript:void(0)" method="post" novalidate onsubmit="myFunction()">
                            <input type="submit" value="Click">
                        </form>
                        <a href="" id="addBtn" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="locality" class="display table table-bordered dt-responsive table-hover"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Id #</th>
                                <th>Name</th>
                                <th>Pincode</th>
                                <th>Actions</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id #</th>
                                <th>Name</th>
                                <th>Pincode</th>
                                <th>Actions</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    </script>
    <script>
    var config = {
        routes: {
            localityAjax: "{{route('localityManageAjax')}}",
        },
        models: {
            statusChangeModel: 'Locality'
        },
    };
    </script>

    <script>
    $(document).ready(function() {
        data_table_locality();


    });

    function myFunction() {
        alert('hii')
        data_table_locality();
    }

    function data_table_locality() {
        $('#locality').DataTable({
            "serverSide": true,
            "processing":true,
            "iDisplayLength": 10,
            columnDefs: [{
                orderable: false,
                targets: [3]
            }],
            destroy: true,
            "oLanguage": {
                "sEmptyTable": "No records found"
            },
            "ajax": {
                "url": config.routes.localityAjax,
                "dataType": "json",
                "type": "POST",
                "data": {
                    id: 1,
                },
                error: function(xhr, error, code) {
                    // $("#loaderDiv").hide();
                    alert('error')
                }
            },
            "preDrawCallback": function() {
                // $("#loaderDiv").show();
            },
            "drawCallback": function(settings) {
                let response = settings.json;
                // console.log("response : "+response);
                let tdata = JSON.stringify(response['recordsTotal']);
                console.log("tdata : " + tdata);
                // if (tdata>0) {
                //     $('#addBtn').hide();
                // }
                // $('#addBtn').hide();
                // $("#loaderDiv").hide();
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "value"
                },
                {
                    "data": "pincode"
                },
                {
                    "data": "options"
                },
                {
                    "data": "status"
                },
            ],
        });
    }
    </script>
</body>

</html>