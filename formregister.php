<html lang=en>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha512-vTyD31Uf4ECqwljZroI6Z/DaCMBwgxogznCqvG3t0NcNvrtTVgVbHBR2TzSiZVLuV1w9XC8j4CEVls18zPFqYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-BHlY6W3Jhm1b+J3a9js0mq+YxkKVRcZ0A8Qo9DmFVdYbt76XOhN7SB2prCkF3q6t0ehdGPRaezOKInhGNyX1+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js" integrity="sha512-VCg0cO8SoMQ+gqdfX4L/l3bif5kPTUmL91pFFm+/HQmC1pVM6bP2MiMdnkMhneXaW0dqFue73K7OxEH3vW72uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style type="text/css">
    #section1 {
        padding: 25px;
    }

    #body {
        padding-left: 300px;
        padding-right: 300px;
        background-color: #F9C8FF;
    }

    #satusatu {
        background-color: white;
    }
</style>

<body id="body">
    <div id="section1" class="text-center">
        <h2>Register</h2>
    </div>
    <div id="satusatu" class="border border-secondary">
        <form action="register.php" method="POST" style="margin: 50px;">
            <div class="form-group">
                <label for="exampleInputNama1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Anda">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email Anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password Anda">
            </div>
            <a href="formlogin.php">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </a>
        </form>
    </div>
    <div id="section1">
        <a class="btn btn-secondary" href="formlogin.php" role="button">Kembali untuk Login</a>
    </div>
</body>

</html>
<!-- -->