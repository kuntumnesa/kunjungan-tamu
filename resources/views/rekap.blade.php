<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistik Kunjungan Tamu | RSUD dr DARSONO PACITAN</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">

    @include('kerangka.style')
</head>

<body class="bg-gradient-info justify-content:center">
    <br>
<!-- col-lg-5 -->
<div class="col-5 mb-3">
    <!-- card -->
    <div class="card shadow">
        <!-- card-body -->
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>Hari Ini</td>
                    <td>: 0</td>
                </tr>
                <br>
                <tr>
                    <td>Minggu Ini</td>
                    <td>: 0</td>
                </tr>
                <br>
                <tr>
                    <td>Bulan Ini</td>
                    <td>: 0</td>
                </tr>
                <br>
                <tr>
                    <td>Keseluruhan</td>
                    <td>: 0</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- end col-lg-5 -->

@include('kerangka.statistik')

@include('kerangka.script')
</body>
</html>