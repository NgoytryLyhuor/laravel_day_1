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
    <h1 class="text-center mt-5">Account</h1><br><br><br><br>
    <div class="container-fluid mt-5">
        <div class="container box p-5 mt-5">
            <div class="container-fluid p-0">
                <h3 class="mt-3">Username : {{ $name }}</h3>
                <h3 class="mt-3">Password : {{ $pass }}</h3>
                <h3 class="mt-3">Comfirm Password : {{ $c_pass }}</h3>
            </div>
        </div>
    </div>
</body>
</html>