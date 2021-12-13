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
            <div class="d-flex justify-content-center">
                <img src="Logo.jpg" alt="" style="width:80px; height:100px">
            </div>
            <div class="mb-5">
                <h4>Heroes don't buy fast food</h4>
                <h4>They share food</h4>
            </div>
            <div class="card mb-5" style="width: 18rem;border-radius:30px">
                <img src="spagetti.jpg" class="card-img-top" alt="..." style="border-radius:30px">
                <div class="card-body">

                    <h5 class="card-title">
                        <i class="fas fa-utensils"
                            style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                        Spagetti
                    </h5>
                    <p class="card-text">Spagetti is spagetti nice ! Spagetti is spagetti nice ! Spagetti is
                        spagetti nice ! Spagetti is spagetti nice !</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="p-3 pt-2 pb-2"
                            style="width:100px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;text-align:center">Take</a>
                    </div>

                </div>
            </div>
            <div class="card mb-5" style="width: 18rem;border-radius:30px">
                <img src="spagetti.jpg" class="card-img-top" alt="..." style="border-radius:30px">
                <div class="card-body">

                    <h5 class="card-title">
                        <i class="fas fa-utensils"
                            style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                        Spagetti
                    </h5>
                    <p class="card-text">Spagetti is spagetti nice ! Spagetti is spagetti nice ! Spagetti is
                        spagetti nice ! Spagetti is spagetti nice !</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="p-3 pt-2 pb-2"
                            style="width:100px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;text-align:center">Take</a>
                    </div>

                </div>
            </div>
            <div class="card mb-5" style="width: 18rem;border-radius:30px">
                <img src="spagetti.jpg" class="card-img-top" alt="..." style="border-radius:30px">
                <div class="card-body">

                    <h5 class="card-title">
                        <i class="fas fa-utensils"
                            style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                        Spagetti
                    </h5>
                    <p class="card-text">Spagetti is spagetti nice ! Spagetti is spagetti nice ! Spagetti is
                        spagetti nice ! Spagetti is spagetti nice !</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="p-3 pt-2 pb-2"
                            style="width:100px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;text-align:center">Take</a>
                    </div>

                </div>
            </div>
            <div style="height:50px"></div>

        </div>


        <div class="d-flex justify-content-evenly align-items-center"
            style="width:100%;position:fixed;bottom:0%;background-color: lightgray; height:80px;">
            <div><i class="bi bi-house-door-fill" style="font-size: 25px; color: gray;"></i></div>
            <div><i class="bi bi-plus-circle" style="font-size: 25px; color: #FA4A0C;"></i></div>
            <div><i class="bi bi-list-check" style="font-size: 25px; color: gray;"></i></div>
        </div>
    </div>



</body>

</html>
