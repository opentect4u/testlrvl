<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h2>Show Page</h2>

        </div>
    </div>

    <div class="col-md-12">
        <h2>Show Page</h2>

    </div>
    </div>


    <script>
    function data_table() {
        $('#dataTables-example').DataTable({
            processing: true,
            "iDisplayLength": 10,
            // "filter": false, // for removing search field
            "serverSide": true,
            // order: [],
            // columnDefs: [{
            //     orderable: false,
            //     targets: [4, 5]
            // }],
            "ajax": {
                url: "item-manage-ajax.php", // json datasource
                type: "post", // method  , by default get
                data: {
                    name: name,
                    name1: name1,
                    name2: name2
                },
                error: function() { // error handling
                }
            },
        });
    }
    </script>
</body>

</html>