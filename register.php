<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-primary">
   <div class="container p-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        image here
                    </div>
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h4 class="grey">Create an Account</h4>
                        </div>
                        <form action="#">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <input class="form-control rounded-pill" type="text" name="firstName" placeholder="firstName">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control rounded-pill" type="text" name="SecondName" placeholder="secondName">
                                </div>
                            </div>
                            <div class="row mb-3">
                            <input class="form-control rounded-pill" type="mail" name="email" placeholder="example@gmail.com">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <input class="form-control rounded-pill" type="password" name="password" placeholder="password">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control rounded-pill" type="password" name="confirmPass" placeholder="confirmPass">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <input  class="rounded-pill btn btn-primary" type="submit" name="submit" value="Register">
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <a href=""  class="rounded-pill btn btn-danger">
                                    <i class="fa fa-google"></i>
                                    Register with google
                                </a>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</body>
</html>