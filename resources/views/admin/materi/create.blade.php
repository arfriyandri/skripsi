@include('admin.component.head')

<body>
    <div id="wrapper">
        @include('admin.component.partisial.navbar')

        <div id="page-wrapper" class="gray-bg">

            <header>
                @include('admin.component.partisial.header')
            </header>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ $data['title'] }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/admin/materi">Data Materi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <strong>Tambah Data</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <br>
            <form action="/admin/materi" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row wrapper border-bottom white-bg page-heading">
                    <h2 class="pasien">Upload Materi</h2>
                    <div class="custom-file">
                        <input id="file" name="file" type="file" class="custom-file-input" required>
                        <label for="file" class="custom-file-label">Choose file...</label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Judul</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;"><input type="text" class="form-control" name="judul" required></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button submit" class="btn pasien" name="Submit" value="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
@include('admin.component.foot')
<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });
</script>
