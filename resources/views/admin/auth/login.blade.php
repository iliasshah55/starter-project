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
            <p class="p-t-35">Sign into your account</p>
            <!-- START Login Form -->
            <form id="form-login" class="p-t-15" role="form" action="#">
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Username/Email</label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="Username/Email" class="form-control" required>
                    </div>
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group">
                    <label>Password</label>
                    <div class="controls">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <!-- START Form Control-->
                <div class="row">
                    <div class="col-md-6 no-padding sm-p-l-10">
                        <div class="checkbox ">
                            <input type="checkbox" value="1" id="checkbox1">
                            <label for="checkbox1">Keep Me Signed in</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <a href="#" class="text-info small">Forgot Password?</a>
                    </div>
                </div>
                <!-- END Form Control-->
                <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>

                <p class="m-t-20">New User? <a class="text-primary" href="{{url('registration')}}">Sign Up</a></p>
            </form>
            <!--END Login Form-->
            <div class="pull-bottom sm-pull-bottom">
                <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                    <div class="col-sm-9 no-padding m-t-10">
                        <p>
                            <small>
                                Create a pages account. If you have a facebook account, log into it for this
                                process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                                                                                                       class="text-info">Google</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
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