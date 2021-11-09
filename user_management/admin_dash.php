<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <title>Admin|Dash Board</title>
</head>
<body>
    <header class="">
        <div class="bg-success py-2 px-3 mb-3 top">
            <div class="search-bar">
            <button id="side-bar-drop" class="btn rounded-circle text-white">&#9776;</button>
            <!-- <input class="form-control" type="text" name="search" placeholder="search"> -->
            </div>
            
            <p class="text-white">samuelJustin<img class="user" src="image/man.png" alt="user-icon" title="user-icon"></p>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div id="side-bar" class="col-sm-3 col-lg-3 col-md-3 bg-success bg-l">
                <div class="logo-cont px-2 py-3">
                    <h1 class="logo text-white">G<span class="text-warning display-4 fw-bold">A</span>C</h1>
                    <p class="text-white">Greenacademy corporation</p>
                </div>

                <div>
                    <p> <a href=""><i class="icon fas fa-home"></i>Home</a></p>
                </div>
                
                <div class="user-control active">
                  
                        <div  class="dropdown ">
                            <a href="#" class="btn btn-outline-success text-white dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon fas fa-bolt"></i>Users</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="">Create users</a></li>
                                <li><a class="dropdown-item" href="">List users</a></li>
                            </ul>
                        </div>
                    
                </div>
                <div class="user-control">
                    <h5 class="text-white">Account Management</h5>
                    <p><a href=""><i class="icon fas fa-users-cog"></i>Settings</a></p>
                </div>
                <div class="user-control">
                    <p><a href=""><i class="icon fas fa-user"></i>Profile</a></p>
                </div>
                <div class="user-control">
                    <p><a href=""><i class="icon fas fa-sign-out-alt"></i>Logout</a></p>
                </div>

                <div class="text-center">
                    
                </div>
            </div>
            <div id="right-sec" class="col-md-12 col-lg-12">
                <div class="row">
                    <main>
                        <h2 class="text-center">Users</h2>
                        <div class="middle py-2 mt-3 ">
                            <div class="p-3 table-responsive">
                                <table class="table table-stripped  table-primary">
                                    <thead>
                                        <p class="text-success"><strong>Hatch31</strong></p>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Registration date</th>
                                                <th>Name</th>
                                                <th>Registration bonus</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2021-11-06</td>
                                                <td>John Doe</td>
                                                <td>$100</td>
                                                <td>pending</td>
                                                <td>view</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="middle py-2 mt-3">
                            <div class="p-3 table-responsive">
                                <table class="table table-bordered table-striped ">
                                    <thead>
                                        <p class="text-success"><strong>HatchGrowth</strong></p>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Registration date</th>
                                                <th>Name</th>
                                                <th>Registration bonus</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td colspan="6"> No issue pending</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </main>
                </div>
                
            </div>
            
        </div>
    </div>
    <script src="bootstrap-5/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
    <script src="bootstrap-5/js/bootstrap.bundle.js"></script>
</body>
</html>