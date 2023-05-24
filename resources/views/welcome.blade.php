<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .main{
        height: 100vh;
    }
    .box{
        border-radius: 20px;
        width: 50% !important;
        box-shadow: rgba(100, 100, 111, 0.367) 0px 7px 29px 0px;
        animation: border 10s infinite; 
    }
    /* @keyframes border{
        0%{
            
            box-shadow: #212529 0px 7px 29px 0px;
        }
        50%{
            box-shadow: rgba(100, 100, 111, 0.367) 0px 7px 29px 0px;
        }
        100%{
            box-shadow: #212529 0px 7px 29px 0px;
        }
    } */
    @media (max-width: 575.98px) {
        .box{
            width: 75% !important;
        }
    }

</style>
<body class="bg-dark text-white">
    <div class="container-fluid main d-flex align-items-center justify-content-center p-0">
        <div class="container box p-5">
            <div class="container-fluid d-flex justify-content-between mb-5 p-0">
                <h3>New User</h3>
                <button class="btn"><i class="fa-solid fa-xmark text-white"></i></button>
            </div>
            <form action="{{ route('data') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="row">
                                <label for="" class="col-md-3 h5">User</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <label for="" class="col-md-3 h5">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="pass" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <label for="" class="col-md-3 h5">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="c_pass" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mt-4">
                            <div class="col-6 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">OK</button>
                            </div>
                            <div class="col-6 col-md-12 text-center">
                                <button type="button" class="btn btn-danger mt-md-4">Close</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
