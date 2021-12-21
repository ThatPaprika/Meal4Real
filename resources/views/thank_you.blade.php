<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Thank you page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fruktur&family=Mochiy+Pop+P+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body style=" background-image: linear-gradient(#ceb006, green);color:white">

    <?php include 'navbar.php'; ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col p-0">
                <div class="d-flex justify-content-center">
                    <img src="Logo.png" alt="" style="width:400px;">
                </div>
            </div>
        </div>

        <div class="">
            <div class="p-5 d-flex justify-content-center  col-sx-12 col-sm-4 offset-sm-2">

                <img src="Logo.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6  d-flex justify-content-center align-items-center p-5">
                <div class="d-flex justify-content-center align-items-center "
                    style="height:auto;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <img src="./thank-you.jpg" class="img-fluid" alt="Responsive image" style="border-radius:30px">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 d-flex flex-column align-items-center justify-content-center p-5 mb-5">
                <h4>You're a hero for picking up food from our Food List!</h4><br>
                <h4>Thank you for saving the planet!</h4>
            </div>
            <div class="col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-5 mb-5"
                style="height:calc(100vh - 20%)">

            </div>
        </div>

    </div>
    <?php include 'footer.php'; ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>
</body>
