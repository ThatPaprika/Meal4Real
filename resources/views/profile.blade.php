<html lang="en">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile page</title>
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

<body style="background-color:#E5E5E5">


    <div class="row">
        <div class="col p-0" >
            <?php include 'navbar.php'; ?>
        </div>
    </div>



    <div class="container-fluid p-2">
        <div class="d-flex flex-column align-items-center">
            <div class="p-3 d-flex flex-column justify-content-center align-items-center"><i class="far fa-user-circle"
                    style="font-size: 120px; color: blue;"></i>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h1>User's Information</h1>
            </div>
            <div class="d-flex flex-column align-items-start" style="width:300px;">
                <span> Firstname : <?php echo $users['first_name']; ?></span>
                <span> Laststname : <?php echo $users['last_name']; ?></span>
                <span> Email : <?php echo $users['email']; ?></span>
                <span> N° : <?php echo $users['street_nr']; ?></span>
                <span> Street name : <?php echo $users['street_name']; ?></span>
                <span> Zip code : <?php echo $users['zip_code']; ?></span>
                <span> City : <?php echo $users['city']; ?></span>
                <span> Country : <?php echo $users['country']; ?></span>
                <span> Phone number : <?php echo $users['phone_number']; ?></span>
            </div>
            <div class="m-5 d-flex flex-column justify-content-center align-items-center">
                <button type="button" class="m-5 btn btn-primary btn-lg"
                    style="background-color: #FA4A0C;width:203px;height:78px;">
                    <a href="/edit-user/{{$users['id']}}" style="color:white;text-decoration: none;"> Edit user information </a>
                </button>
            </div>
        </div>
    </div>


    <div class="row">

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
