<!doctype html>
<html lang="en">

<head>
    <title>U&D | Administration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="admin-page">
<!-- WRAPPER -->
<div id="wrapper">
    <!-- SIDEBAR -->
    <div class="burger-open">
        <span id="arrow-open" class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    </div>
    <div class="sidebar">
        <div class="brand">
            <div class="burger-close">
                <span id="arrow-close" class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
            </div>
            <a href="/"><img src="/img/simple-logo-white.png" alt="Logo" class="img-responsive logo"></a>
        </div>
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="/admin" class="<?=(isset($active) && $active === 'index') ? 'active' : ''?>"><i class="lnr lnr-home"></i> <span>Accueil</span></a></li>
                    <li><a href="/admin/news" class="<?=(isset($active) && $active === 'news') ? 'active' : ''?>"><i class="lnr lnr-code"></i> <span>Actualités</span></a></li>
                    <li><a href="/admin/team" class="<?=(isset($active) && $active === 'team') ? 'active' : ''?>"><i class="lnr lnr-chart-bars"></i> <span>L'équipe</span></a></li>
                    <li><a href="/admin/admins" class="<?=(isset($active) && $active === 'admins') ? 'active' : ''?>"><i class="lnr lnr-cog"></i> <span>Administrateurs</span></a></li>
                    <li><a href="/admin/settings" class="<?=(isset($active) && $active === 'settings') ? 'active' : ''?>"><i class="lnr lnr-cog"></i> <span>Réglages</span></a></li>
                    <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Se déconnecter</span></a></li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT -->
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017. All credits for U&D</p>
            </div>
        </footer>
    </div>
    <!-- END MAIN -->
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="/js/jquery.js"></script>
<script src="/js/jquery/jquery-2.1.0.min.js"></script>
<script src="/js/news.js"></script>
<script src="/js/admin.js"></script>
</body>

</html>
