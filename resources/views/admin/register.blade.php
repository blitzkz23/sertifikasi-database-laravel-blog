<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Register</title>
    <style type="text/css">
        body {
            /* background: #c8e1f7; */
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .background {
            background-image: url("assets/images/bg.png");
            background-size: cover;
            filter: blur(4px);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .foreground {
            backdrop-filter: grayscale(1)
        }

        .container {
            position: relative;
            top: 50%;
            transform: translateY(40%);
        }

        .card {
            border-radius: 18px;
            background: linear-gradient(90deg,
                    rgba(151, 82, 55, 0.8) 100%,
                    rgba(240, 142, 106, 0.6) 50%,
                    rgba(203, 98, 70, 0.8) 100%);
            color: white;
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 700;
        }

        h5,
        h6 {
            font-weight: 500;
        }

        ul,
        li,
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #B96CF0;
            transition: all 0.25s ease-in;
        }

        .hover-underline-animation {
            display: inline-block;
            position: relative;
        }

        .hover-underline-animation:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #B96CF0;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hover-underline-animation:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .logincta {
            font-size: 1.2rem;
        }

        img {
            border-radius: 18px;
        }

    </style>
</head>

<body class="wrapper">
    <div class="background"></div>
    <div class="foreground"></div>
    <div class="container">
        <div class="card">
            <div class="card-body pl-4 pr-4">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-center">
                        <img src="assets/images/bg-register.jpg" alt="card-img-top" style="width:600px">
                    </div>

                    <div class="col-lg-5">
                        <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="mt-4">Register</h3>
                            <hr>
                            <label for="Name">Name</label>
                            <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Name"
                                required>

                            <label for="Email">Email</label>
                            <input type="text" name="email" id="email" class="form-control mb-2" placeholder="Email"
                                required>

                            <label for="Password">Password</label>
                            <input type="password" name="password" id="password" class="form-control mb-3"
                                placeholder="Password" required>

                            <label for="Image">Image</label>
                            <input type="file" name="image" id="image" class="mb-5">
                            <p class="logincta">Already have an account? <a href="login"
                                    class="hover-underline-animation">Log In</a></p>
                            <input type="submit" name="submit" class="btn btn-lg btn-block btn-success mr-3 mb-4"
                                value="Register">

                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($error->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
