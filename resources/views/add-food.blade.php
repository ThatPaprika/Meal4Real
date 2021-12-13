<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body style="background-color:#E5E5E5">
    <div class="container-fluid p-0">

        <div class="p-3 d-flex justify-content-between align-items-center"
            style="width:100%;background-color: #E5E5E5; height:80px;">
            <div><i class="far fa-user-circle" style="font-size: 50px; color: gray;"></i></div>
            <div><i class="fas fa-bars" style="font-size: 25px; color: gray;"></i></div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5 d-flex flex-column align-items-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="d-flex justify-content-center">
                    <img src="Logo.jpg" alt="" style="width:80px; height:100px">
                </div>
                <div class="mb-5">
                    <h2>Don't waste your food</h2>
                    <h2>Give it to someone else </h2>
                </div>
                <div class="d-flex justify-content-center align-items-center"
                    style="width:100%;height:120px;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <i class="far fa-image"></i>
                    <div style="position: relative">
                        <i style="position: absolute;bottom:-50px; right:-80px" class="fas fa-plus-circle"></i>
                    </div>
                </div>


                <div class="mt-5">
                    <i class="fas fa-utensils" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                    <input type="text" name="type" placeholder="Type"
                        style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                </div>
                <div class="mt-3">
                    <i class="fas fa-file-signature"
                        style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                    <input type="text" name="name" placeholder="Name"
                        style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                </div>
                <div class="mt-3">
                    <i class="fas fa-pizza-slice" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                    <input type="text" name="description" placeholder="Description"
                        style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                </div>
                <div class="mt-3">
                    <i class="fas fa-map-pin" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                    <input type="text" name="address" placeholder="Address"
                        style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                </div>

                <div class="d-flex justify-content-center mt-4" style="width:100%">
                    <button class="ml-3"
                        style="width:74px;height:31px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                        {{ __('Add') }}
                    </button>
                </div>

            </form>
        </div>
        <div class="m-0 d-flex justify-content-evenly align-items-center" style="background: lightgray; height:80px;">
            <div><a href="./home"><i class="bi bi-house-door-fill" style="font-size: 25px; color:gray;"></i></a>
            </div>
            <div><a href="./add_food"><i class="bi bi-plus-circle" style="font-size: 25px; color:#FA4A0C;"></i></a>
            </div>
            <div><a href="./food_list"><i class="bi bi-list-check" style="font-size: 25px; color: gary;"></i></a>
            </div>
        </div>


    </div>



</body>

</html>
