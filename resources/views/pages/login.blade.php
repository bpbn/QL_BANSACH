<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    {{-- <link rel="stylesheet" href="csstaba/css/login.css"> --}}
    <link rel="icon" href="csslogin/images/logo.png" type="image/x-icon">
    <link href="csslogin/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Style -->
    <link rel="stylesheet" href="csslogin/css/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1>Web bán sách BookDor</h1>
    <div class="w3layoutscontaineragileits">
        <h2>Đăng nhập</h2>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required=""><br>
            @if ($errors->has('email'))
                <h6>Tài khoản hoặc mật khẩu không chính xác</h6><br>
            @endif
            <ul class="agileinfotickwthree">
                <li>
                    <input type="checkbox" id="brand1" value="">

                    <a href="#">Quên mật khẩu?</a>
                </li>
            </ul>
            <div class="aitssendbuttonw3ls">
                <input type="submit" value="Đăng nhập">
                <p> Tạo tài khoản <span>→</span> <a class="w3_play_icon1" href="{{ route('register') }}"> Click
                        Here</a></p>
                <div class="clear"></div>
            </div>
        </form>
    </div>

    <!-- for register popup -->
    {{-- <div id="small-dialog1" class="mfp-hide">
        <div class="contact-form1">
            <div class="contact-w3-agileits">
                <h3>Register Form</h3>
                <form action="#" method="post">
                    <div class="form-sub-w3ls">
                        <input placeholder="User Name" type="text" required="">
                        <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Email" class="mail" type="email" required="">
                        <div class="icon-agile">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Password" type="password" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Confirm Password" type="password" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="login-check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms &
                            Conditions</label>
                    </div>
                    <div class="submit-w3l">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- //for register popup -->

    <div class="w3footeragile">
        <p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com"
                target="_blank">W3layouts</a></p>
    </div>


    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

    <!-- pop-up-box-js-file -->
    <script src="csslogin/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
</body>

</html>
