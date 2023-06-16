<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
            color: white;
        }

        .card {
            background-color: #FFFFFF;
            border: none;
        }

        .card-title {
            color: #333333;
            font-weight: bold;
        }

        .form-control {
            background-color: #F1F1F1;
            border: none;
            color: #333333;
        }

        .btn-primary {
            background-color: #745AF2;
            border: none;
        }

        .btn-primary:hover {
            background-color: #563CD3;
        }

        a {
            color: #745AF2;
        }

        a:hover {
            color: #563CD3;
        }
        
        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <a href="formregister.php">Belum Punya Akun? Register disini</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js" integrity="sha512-VCg0cO8SoMQ+gqdfX4L/l3bif5kPTUmL91pFFm+/HQmC1pVM6bP2MiMdnkMhneXaW0dqFue73K7OxEH3vW72uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.style.opacity = "0";
            setTimeout(function() {
                document.body.style.transition = "opacity 1s";
                document.body.style.opacity = "1";
            }, 500);
        });
    </script>
</body>

</html>
