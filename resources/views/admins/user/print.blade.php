<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://titansupremestarawardsevent.in/admins/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/simplebar/simplebar.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins//js/config.js"></script>
    <link href="https://titansupremestarawardsevent.in/admins/vendors/choices/choices.min.css" rel="stylesheet">
    <link href="https://titansupremestarawardsevent.in/admins/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://titansupremestarawardsevent.in/admins/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://titansupremestarawardsevent.in/admins/css/unicons.css">
    <link href="https://titansupremestarawardsevent.in/admins//css/theme2.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="https://titansupremestarawardsevent.in/admins//css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script src="https://titansupremestarawardsevent.in/admins/js/jquery-3.1.1.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/js/table2excel.js"></script>

    <link rel="stylesheet" type="text/css" href="https://titansupremestarawardsevent.in/admins/vendors/toastr/toastr.min.css">
    <script src="https://titansupremestarawardsevent.in/admins/vendors/toastr/toastr.min.js"></script>
    <title>Visit Management System</title>

    <style>
        .col-md-12{
            /*place-content: center; */
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            /* align-content: center; */
            text-align: -webkit-center;
        }
        body{
            background-color:white;
        }
    </style>
    <script>
        window.print();
    </script>
  </head>
  <body>
      
    <div class="row">
    
        <div class="col-md-12">
            <h2 class="text-center" style="color:#3874ff">Titan Supreme Challange 2 Star Awards.</h2><br>
            <h4 class="text-center">16th July,2023 at Grand Hayatt, Bambolim,GOA</h4><br>
            <!--<h4 class="text-center" style="color:red;">(Scan Me)</h4>-->
            <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExYzg3MDUxZDI4MDgxMmFmMGNjMzYzMGEyOWI2NGFmYjMwYmFmZWEyOSZlcD12MV9pbnRlcm5hbF9naWZzX2dpZklkJmN0PXM/4TEYAdRAhilKdm5OEp/giphy.gif" style="width:170px;">
            
            
            <div class="card" style="border:none;">
                <style>
                    .nav-item table img, svg {
                    height: 269px;
                    width: 220px;
                }
                </style>
                <span class="card-img-top">	{!! QrCode::size(500)->generate(Request::segment(2)) !!}</span>
              <!--<img src="https://www.investopedia.com/thmb/hJrIBjjMBGfx0oa_bHAgZ9AWyn0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/qr-code-bc94057f452f4806af70fd34540f72ad.png" class="card-img-top" alt="...">-->
              <div class="card-body">
                <h5 class="card-title">Name - {{ $list->name }}</h5>
                <h5 class="card-title">Registration Date - {{ $list->created_at }}</h5>
                <h5 class="card-title">Email - {{ $list->email }}</h5>
                <h5 class="card-title">Contact - {{ $list->contact }}</h5>
              </div>
            </div>
        </div>
    </div>



    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <script src="https://titansupremestarawardsevent.in/admins/vendors/popper/popper.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/anchorjs/anchor.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/is/is.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/fontawesome/all.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/lodash/lodash.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/list.js/list.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/feather-icons/feather.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/dayjs/dayjs.min.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/js/deepali.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/js/main.js"></script>
    <script src="https://titansupremestarawardsevent.in/admins/vendors/choices/choices.min.js"></script>
  </body>
</html>