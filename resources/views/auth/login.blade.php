<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Nico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Login -->
    <section class="container-fluid loginSection">
        <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                <div class="login-wrapper text-center">
                    <div class="loginContent">
                        <h1>MASUK</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control inputLogin @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengguna" name="email" :value="old('email')" required autofocus>
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control inputLogin @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Kata Sandi" required autocomplete="current-password" name="password">
                            </div>
                            @error('email')
                            <p style="color: #ff4c4c;">Nama pengguna atau kata sandi tidak sesuai</p>
                            @enderror
                            @error('password')
                            <p style="color: #ff4c4c;">Nama pengguna atau kata sandi tidak sesuai</p>
                            @enderror
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>