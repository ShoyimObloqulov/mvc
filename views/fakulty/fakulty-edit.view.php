
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@u">
    <meta property="twitter:creator" content="@u">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Online Jadval">
    <meta property="og:title" content="Tizimlashtirilgan Admin">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Fakultet taxrirlash</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.html">Admin</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="../../settings.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="../login.view.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="app-sidebar__user-avatar">
            <i class="fa fa-user"></i>
        </div>
        <div>
            <p class="app-sidebar__user-name">Rustam Omonov</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Fakultet</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="e.html"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="d.html"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-sitemap"></i><span class="app-menu__label">Yo'nalish</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="../direction/direction-eye.html"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="../direction/direction-add.html"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-object-group"></i><span class="app-menu__label">Guruh</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="../group/group-eye.html"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="../group/group-add.html"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Talabalar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="../student/student-eye.html"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="../student/student-add.html"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
    </ul>
</aside>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Fakultetlar taxrirlash </h1>
            <p>Tizimdagi fakultetlarni taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Fakultetlar</a></li>

            <li class="breadcrumb-item"><a href="#">Taxrirlash</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input class="form-control" id="" type="text" value="Fizika fakulteti" aria-describedby="emailHelp" placeholder="Name email"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Qo'shish</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="../js/plugins/pace.min.js"></script>
</body>
</html>