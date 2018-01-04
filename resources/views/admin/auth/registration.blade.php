<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Starter - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('public')}}/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('public')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('public')}}/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('public')}}/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public')}}/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public')}}/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('public')}}/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
      window.onload = function()
      {
        // fix for windows 8
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
          document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
      }
    </script>
</head>
<body class="fixed-header ">
<div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="{{asset('public')}}/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="{{asset('public')}}/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="{{asset('public')}}/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">
                Pages make it easy to enjoy what matters the most in the life</h2>
            <p class="small">
                images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © <?= date('Y') ?>.
            </p>
        </div>
        <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <strong>STARTER PROJECT</strong>
            {{--<img src="{{asset('public')}}/assets/img/logo.png" alt="logo" data-src="{{asset('public')}}/assets/img/logo.png" data-src-retina="{{asset('public')}}/assets/img/logo_2x.png" width="78" height="22">--}}
            <p class="p-t-35">Sign up your account</p>
            <!-- START Login Form -->
            <form id="form-login" class="p-t-15 scrollable" role="form" action="#">
                <!-- START Form Control-->
                <div class="form-group">
                    <label>First Named</label>
                    <div class="controls">
                        <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Middle Named</label>
                    <div class="controls">
                        <input type="text" name="mname" placeholder="Middle Name" class="form-control">
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Last Named</label>
                    <div class="controls">
                        <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Username</label>
                    <div class="controls">
                        <input type="text" name="username" placeholder="User Name" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Email</label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Phone Number</label>
                    <div class="controls">
                        <input type="text" name="phone_number" placeholder="Phone Number" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Password</label>
                    <div class="controls">
                        <input type="password" class="form-control" name="password" placeholder="Credentials" required>
                    </div>
                </div>

                <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign Up</button>

                <p class="m-t-20">Have a account? <a class="text-primary" href="{{url('login')}}">Sign In</a></p>
            </form>
            <!--END Login Form-->
        </div>
    </div>
    <!-- END Login Right Container-->
</div>

<!-- BEGIN VENDOR JS -->
<script src="{{asset('public')}}/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="{{asset('public')}}/assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{asset('public')}}/assets/plugins/classie/classie.js"></script>
<script src="{{asset('public')}}/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="{{asset('public')}}/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END VENDOR JS -->
<script src="{{asset('public')}}/pages/js/pages.min.js"></script>
<script>
  $(function()
  {
    $('#form-login').validate({
      onkeyup: false,
      focusCleanup: true
    })
  })
</script>
</body>
</html>