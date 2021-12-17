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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="./js/googleAPI.js"></script>
</head>

<body class="m-0 p-0" style="background-image: url(icon.jpg);">

    <div class="container-fluid">

        <div class="row">
            <div class="col p-0">
                <?php include 'navbar.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div class="d-flex justify-content-center">
                    <img src="Logo.jpg" alt="" style="width:80px; height:100px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div class="mb-0 d-flex flex-column justify-content-center  align-items-center ">
                    <h2>Earn happyness by</h2>
                    <h2>sharing your meal </h2>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('add-food') }}" enctype="multipart/form-data">
        <div class="row">

                @csrf
                <div class="col-sx-12 col-sm-4 offset-sm-2 p-4">

                    <div
                        style="position: relative;background-color: #c71212;border:0px;max-width:200px;height:200px;max-height:200px;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;s">
                        <img id="preview-image" src="" alt=""
                            style="max-width:500px;max-height:200px;border-radius: 30px;">
                        <i class="far fa-image pt-2 d-flex justify-content-center "
                            style="position:absolute;top:50%;left:50%"></i>
                        <input id="image" type="file" name="meal_picture"
                            style="opacity:0;background-color:white;height:200px; width:100%; position:absolute;top:0;">
                    </div>


                </div>
                <script type="text/javascript">
                    $('#image').change(function() {

                        let reader = new FileReader();
                        reader.onload = (e) => {
                            $('#preview-image').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);

                    });
                </script>
                <div class="col-sx-12 col-sm-6 p-0">
                    <div
                        class=" col-sx-12 col-sm-5 offset-sm-1 pt-4 p-2 d-flex flex-column justify-content-center align-items-center">

                        <div class="mt-1 ">
                            <i class="fas fa-utensils"
                                style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                            <input type="text" name="type" placeholder="Type"
                                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                        </div>
                        <div class="mt-3">
                            <i class="fas fa-file-signature"
                                style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                            <input type="text" name="meal_name" placeholder="Meal Name"
                                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                        </div>
                        <div class="mt-3">
                            <i class="fas fa-pizza-slice"
                                style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                            <input type="text" name="description" placeholder="Description"
                                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                        </div>
                        <div class="mt-3">
                            <i class="fas fa-map-pin"
                                style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                            <input id="my-input-searchbox" type="text" placeholder="Address" name="address"
                                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
                            <div id="map"></div>
                        </div>

                        <div class="d-flex justify-content-start mt-2">
                            <button class="ml-5"
                                style="width:150px;height:35px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                                {{ __('Add') }}
                            </button>
                        </div>

                    </div>


                </div>
            </div>
        </form>
        <div class="row">
            <div class="col p-0">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>
    <!-- Google API -->
    <!-- Replace the value of the key parameter with your own API key. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHA9Ke8jAvquu2NgeobB2S2NSToZFs_WA&libraries=places">
    </script>
</body>

</html>
