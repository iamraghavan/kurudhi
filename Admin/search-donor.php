<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kurudhi</title>


    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="stylesheet" href="./vendors/iconly/bold.css">
    <link rel="stylesheet" href="./vendors/choices.js/choices.min.css" />
    <link rel="stylesheet" href="./vendors/simple-datatables/style.css">

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
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat"></i>
                                <span>Manage Query</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Search Donors</span>
                            </a>
            
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
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

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <!-- <img width="200px" src="../assets/img/logo.png" alt="" srcset=""> -->
                                
                            </div>
                           
                            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar
                                        </li>
                                    </ol>
                                </nav>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="bi bi-search"></i></span>
                            

                                

                                  <select class=" countries form-select" id="idName">
                                    
                                        <option value="">Country</option>
                                  
                                  </select>

                                  <select name="state" class="states form-select" id="idCountry">
                                    <option value="">Select State</option>
                                </select>

                                <select name="city" class="cities form-select" id="idAge">
                                    <option value="">Select City</option>
                                </select>

                                <select class="form-select" id="idSalary">
                                    <option selected>Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="A1+">A1+</option>
                                    <option value="A1-">A1-</option>
                                    <option value="A1B+">A1B+</option>
                                    <option value="A1B-">A1B-</option>
                                    <option value="A2+">A2+</option>
                                    <option value="A2-">A2-</option>
                                    <option value="A2B+">A2B+</option>
                                    <option value="A2B-">A2B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                                    <option value="INRA">INRA</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                  </select>


                            <button class="btn btn-outline-secondary" type="button" onclick="SearchData();" value="Submit">Search</button>
                        </div>
                    </div>

     
               
          <br> 

                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                Blood Donor Details
                            </div>

   
                               
              
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Contact Number</th>
                                            <th>Alternative Number</th>
                                            <th>Blood Group</th>
                                            <th>Data of Last Blood Donate</th>
                                            <th>Address</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Area</th>
                                            <th>Status</th>
                                        </tr>
                                    
                                    </thead>

                                    <tbody id ="tbody1">

                                        <!-- <tr>
                                            <td>Anbu Raghavan</td>
                                            <td>raghavanofficials@gmail.com</td>
                                            <td>Male</td>
                                            <td>19</td>
                                            <td>9942502245</td>
                                            <td>6382087377</td>
                                            <td>B+</td>
                                            <td>2022-02-13</td>
                                            <td>Dheremer Street Collector Office Post</td>
                                            <td>India</td>
                                            <td>Tamil Nadu</td>
                                            <td>Nagapattinam</td>
                                            <td>Nagapattinam</td>
                                            <td>Available</td>
                                        </tr> -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                    </section>

                </div>

                <!-- Enter your age: <input id="age">
                <button onclick="check()">Check</button> -->

                
            </div>
        </div>
    </div>

        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-database.js"></script>

  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://demos.phplift.net/country-state-and-city-dropdown-jquery/js/countrystatecity.js?v3"></script> 
        <script src="./vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/main.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script> -->
        <script type="module" src="./Utility/config.js"></script>
        <script type="module" src="./javascript/databaseTable.js"></script>
        <script type="module" src="./javascript/Dashboard.js"></script>
        <script src="./vendors/simple-datatables/simple-datatables.js"></script>
        <!-- <script type="module" src="./javascript/realtimeDatabase.js"></script> -->
            <!-- <script data-main="scripts/main" src="scripts/require.js"></script> -->
            <script src="./vendors/simple-datatables/simple-datatables.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 


         


<!-- ---------------------------------------- -->

<!-- <script>
    $(document).ready(function() {
        $("#gfg").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbody1 tr").filter(function() {
                $(this).toggle($(this).text()
                .toLowerCase().indexOf(value) > -1)
            });
        });
    });



</script> -->
<!-- <script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script> -->

<script>
    const table = document.getElementById("table1");
// save all tr
const tr = table.getElementsByTagName("tr");

function SearchData() {

var name = document.getElementById("idName").value.toUpperCase();
var country = document.getElementById("idCountry").value.toUpperCase();
var age = document.getElementById("idAge").value.toUpperCase();
var salary = document.getElementById("idSalary").value.toUpperCase();

for (i = 1; i < tr.length; i++) {

var rowName = tr[i].getElementsByTagName("td")[0].textContent.toUpperCase();
var rowCountry = tr[i].getElementsByTagName("td")[1].textContent.toUpperCase();
var rowAge = tr[i].getElementsByTagName("td")[2].textContent.toUpperCase();
var rowSalary = tr[i].getElementsByTagName("td")[3].textContent.toUpperCase();

var isDiplay = true;

if (name != 'ALL' && rowName != name) {
  isDiplay = false;
}
if (country != 'ALL' && rowCountry != country) {
  isDiplay = false;
}
if (age != 'ALL' && rowAge != age) {
  isDiplay = false;
}
if (salary != 'ALL' && rowSalary != salary) {
  isDiplay = false;
}

if (isDiplay) {
  tr[i].style.display = "";
} else {
  tr[i].style.display = "none";
}


}
}
  </script>

<!-- ----------------------------------------- -->


</body>


</html>
