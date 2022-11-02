<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kurudhi</title>
    
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendors/chartjs/Chart.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

    <link rel="stylesheet" href="./vendors/iconly/bold.css">

    <link rel="stylesheet" href="./vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="shortcut icon" href="./images/favicon.svg" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/NaviBlueLogo.png?alt=media&token=ff698b21-89d5-42e0-935c-e57a15f4203c" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

             
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="./Dashboard.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
 
                        <li class="sidebar-item">
                            <a href="./abd.php" class='sidebar-link'>
                                <i class="bi bi-plus-square-fill"></i>
                                <span>Add Blood Donor</span>
                            </a>
                           
                        </li>

                        <li class="sidebar-item ">
                            <a href="./manage-query.html" class='sidebar-link'>
                                <i class="bi bi-chat"></i>
                                <span>Manage Query</span>
                            </a>
                            
                        </li>
                        <li class="sidebar-item">
                            <a href="./search-donor.html" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Search Donors</span>
                            </a>
            
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="./upload-database.html" class='sidebar-link'>
                                <i class="bi bi-server"></i>
                                <span>Upload Database</span>
                            </a>
            
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                
                                <!-- <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Administrator</h6>
                                            <p class="mb-0 text-sm text-gray-600"><span id="user" class="message">Hello, <email-id></Email-id></span></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="./images/man.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Admin!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li> -->
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li onclick="logout()"><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">With Validation</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- File uploader with validation -->
                            <input type="file" class="basic-filepond" required multiple data-max-file-size="1GB" data-max-files="3">
                        </div>
                    </div>
                </div>
            </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; Bumble Bees</p>
                        </div>  
                        
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src="./vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <script src="./js/main.js"></script>

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
    
        <script src="./Utility/config.js"></script>
        <script src="./javascript/Dashboard.js"></script>

        <script src="./vendors/chartjs/Chart.min.js"></script>
        <script src="./js/pages/ui-chartjs.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 


     <!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>




            



</body>


</html>