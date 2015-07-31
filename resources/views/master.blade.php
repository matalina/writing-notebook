<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation 5</title>

    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="css/app.css">

    <script src="js/modernizr.js"></script>

</head>
<body>

    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                </section>

                <section class="middle tab-bar-section">
                    <h1 class="title">Foundation</h1>
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