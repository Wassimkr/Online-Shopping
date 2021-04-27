<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/images/dashboard/favicon.png" type="image/x-icon">
    <title>Admin Panel</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>

<body>
    <!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="/"><i data-feather="user"></i>Home</a></li>
                            <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img  class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle blur-up lazyloaded" src="/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">JOHN</h6>
                    <p>general manager.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="/produits"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="/produits/create"><i class="fa fa-circle"></i>Add Product</a></li>
                                    <li><a href="/categorie/create"><i class="fa fa-circle"></i>Add Category</a></li>
                                    <li><a href="/listc"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="/listp"><i class="fa fa-circle"></i>Category List</a></li>
                                </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="/"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a></li>
    
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Add Products
                                    <small>Tepyach Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Products</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    <div class="col-xl-7">
                                        {!! Form::open(['route' => 'produits.create', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <div class="form-group">
                {{ Form::label('nom', 'Name') }}
                {{ Form::text('nom', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('prix', 'Prix') }}
                {{ Form::text('prix', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('descript', 'Description') }}
                {{ Form::text('descript', null, array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('quantite', 'Quantite') }}
                {{ Form::text('quantite', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('categorie_id', 'Categories') }}
                {{ Form::select('categorie_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Categorie']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}
            

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

    </div>

</div>



<!-- latest jquery-->
<script src="/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="/js/icons/feather-icon/feather.min.js"></script>
<script src="/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="/js/sidebar-menu.js"></script>

<!-- touchspin js-->
<script src="/js/touchspin/vendors.min.js"></script>
<script src="/js/touchspin/touchspin.js"></script>
<script src="/js/touchspin/input-groups.min.js"></script>

<!-- form validation js-->
<script src="/js/dashboard/form-validation-custom.js"></script>

<!-- ckeditor js-->
<script src="/js/editor/ckeditor/ckeditor.js"></script>
<script src="/js/editor/ckeditor/styles.js"></script>
<script src="/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="/js/editor/ckeditor/ckeditor.custom.js"></script>

<!-- Zoom js-->
<script src="/js/jquery.elevatezoom.js"></script>
<script src="/js/zoom-scripts.js"></script>

<!--Customizer admin-->
<script src="/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="/js/chat-menu.js"></script>

<!--script admin-->
<script src="/js/admin-script.js"></script>

</body>
</html>

    
