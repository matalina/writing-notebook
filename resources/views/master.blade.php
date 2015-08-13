<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation 5</title>

    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="css/app.css"/>

    <script src="js/modernizr.js"></script>

</head>
<body>
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="right tab-bar-section">
                    <div class="columns small-6 small-push-6">
                        @if(Auth::guest())
                        <a href="#" data-dropdown="login-drop" class="button tiny right">Login &raquo;</a>
                        <div id="login-drop" class="large content f-dropdown" data-dropdown-content>
                            <p>
                                <a href="" class="button tiny"><i class="fa fa-twitter fa-fw"></i> Login with Twitter</a>
                                <a href="" class="button tiny"><i class="fa fa-facebook-official fa-fw"></i> Login with Facebook</a>
                                <a href="" class="button tiny"><i class="fa fa-google fa-fw"></i> Login with Google</a>
                                <a href="" class="button tiny"><i class="fa fa-github fa-fw"></i> Login with Github</a>
                            </p>
                            <p class="center">- or -</p>
                            {!! Form::open(['url' => 'auth/login']) !!}
                              
                            {!! Form::text('username',Input::old('username'),['placeholder' => 'Username']) !!}
                            {!! Form::password('password',['placeholder' => 'Password']) !!}
                              
                            {!! Form::submit('Login', ['class' => 'button tiny']) !!}
                              
                            {!! Form::close() !!}
                            @else
                            Welcome back!
                            @endif
                        </div>
                    </div>    
                </section>
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                </section>
            </nav>

            <aside class="left-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li><label>Foundation</label></li>
                    <li><a href="#">The Psychohistorians</a></li>
                    <li><a href="#">...</a></li>
                </ul>
            </aside>

            <section class="main-section">
                @yield('body')
            </section>

            <a class="exit-off-canvas"></a>

        </div>
    </div>

<script src="js/all.js"></script>
</body>
</html>