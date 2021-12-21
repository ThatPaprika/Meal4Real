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
    <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body style="background-color:#E5E5E5">
    <div class="container-fluid p-0">


        <div class="row">
            <div class="col p-0">
                <?php include 'navbar.php'; ?>
            </div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center">
                <img src="/Logo.png" alt="" style="width:400px; ">
            </div>
            <div class="mb-5">
                <h4></h4>
                <h4>Send Mail</h4>
            </div>
            <div class="card mb-5" style="max-width:500px;width:100%;border-radius:30px">
                <img src="/uploads/<?php echo $meal_details->picture; ?>" class="card-img-top" alt="..." style="border-radius:30px">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-utensils"
                            style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                        {{ $meal_details->meal_name }}
                    </h5>
                    <p class="card-text">{{ $meal_details->description }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="/detail_page/{{ $meal_details->id }}/reserve" class="p-3 pt-2 pb-2 takeBtn"
                            style="width:100px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;text-align:center">Take</a>
                    </div>

                </div>
            </div>


            <div style="height:50px"></div>

        </div>
    </div>

    <div class="row">
        <div class="col p-0">
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>


</body>

</html>
