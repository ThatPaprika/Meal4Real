<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:#E3E3E3">
    <div class="container-fluid p-3">
        <div style="height:10%"></div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="height:30%">

            <div class="mt-5 mb-5 logo" style="height:120px;width:120px;border-radius:140px;background-color:#C4C4C4">
            </div>
        </div>


        <div class="d-flex justify-content-center align-items-center ">

            <form style="width : 100%;" method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <input type="text" name="first_name" placeholder="First Name" class="mt-2 mb-2" id="" style="width:100%;border-radius:10px;height:45px;border:0;">

                </div>
                <div>
                    <input type="text" name="last_name" placeholder="Last Name" class="mt-2 mb-2" id="" style="width:100%;border-radius:10px;height:45px;border:0;">

                </div>
                <div style="width: 100%;">
                    <input type="password" name="password" placeholder="Password" class="mt-2 mb-2" id="" style="width:100%;border-radius:10px;height:45px;border:0;">

                </div>
                <div>
                    <input type="password" name="password" placeholder="Confirm Password" class="mt-2 mb-2" id="" style="width:100%;border-radius:10px;height:45px;border:0;">

                </div>


                <button class="mt-3" style="width:100%;height:54px;background-color:rgba(129, 178, 20, 0.9); border:0; border-radius:30px;font-weight:bold">
                    Log In</button>

                <div class="flex items-center justify-end mt-4 p-2">
                    <a href="">
                        <p style="color:black; font-weight:bold;margin:0;">Forgot your password?</p>
                    </a>
                    <a href="">
                        <p style="color:black; font-weight:bold;">Sign Up</p>
                    </a>

                </div>
            </form>
        </div>
    </div>