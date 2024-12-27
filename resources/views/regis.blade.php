<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register | Buku Kunjungan Tamu RSUD dr. DARSONO PACITA</title>
    <link rel="icon" href="/tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">

    @include('kerangka.style')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-lg-block bg-primary shadow-lg p-5 text-center">
                        <img src="/tamplate/assets/img/Logo-RSUD.png" width="200">
                        <br>
                        <br>
                        <h3 class="text-white">Sistem Informasi Buku Tamu
                            <br> <small>RSUD dr. DARSONO PACITAN </small> 
                        </h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun!</h1>
                            </div>
                            <form class="user" action="/registeruser" method="POST">
                                @csrf
                                <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            id="exampleInputUsername" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <button  class="btn btn-primary btn-user btn-block">
                                    Sign In
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('kerangka.script')

</body>

</html>