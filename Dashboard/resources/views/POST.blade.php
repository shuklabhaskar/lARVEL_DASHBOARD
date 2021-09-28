<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Mumbai Metro</title>
</head>

<body>


<div class="container-fluid">

    <!--Navbar Start Here-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="index">Mumbai Metro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Station Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Station Inventory</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="EquipmentInventory" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Equipment Inventory
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="AGEquipments">AG Equipments</a>
                        <a class="dropdown-item" href="POST">POST Equipments</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">QR Type</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pass Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fare Inventory</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Reports" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        Reports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Sync Failed</a>
                        <a class="dropdown-item" href="#">Transactions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settlement</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Settings" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Users</a>
                        <a class="dropdown-item" href="#">Usergroups</a>
                        <a class="dropdown-item" href="#">Features</a>
                        <a class="dropdown-item" href="#">OTA Configuration Update</a>
                        <a class="dropdown-item" href="#">Configuration Packages</a>
                        <a class="dropdown-item" href="#">Api Access Configuration</a>
                        <a class="dropdown-item" href="#">Operators</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        AFC Engineers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--Navbar End Here-->
    <div class="card-header" style="margin-top:1px;color: #000000;background-color: #43beff;border-radius: 12px">
        <h4 style="text-align: center">POST Equipments</h4>
    </div>

    <div class="card" style="border-radius: 12px;">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="col" id="station_id_field">
                        <label for="station_id"></label>
                        <select id="station_id" class="form-control" name="station_id">
                            <option selected="selected" value="">Select Station</option>
                            <option value="1">Versova</option>
                            <option value="2">D N Nagar</option>
                            <option value="3">Azad Nagar</option>
                            <option value="4">Andheri</option>
                            <option value="5">Western Express Highway</option>
                            <option value="6">Chakala</option>
                            <option value="7">Airport Road</option>
                            <option value="8">Marol Naka</option>
                            <option value="9">Sakinaka</option>
                            <option value="10">Asalpha</option>
                            <option value="11">Jagruti Nagar</option>
                            <option value="12">Ghatkopar</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col" id="equipment_id_field">
                        <label for="equipment_id"></label>
                        <input placeholder="Equipment Id" id="equipment_id" class="form-control" name="equipment_id"
                               type="text">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col" id="toggle_check_field" style="margin-top: 30px">
                        <div class="form-check form-switch" >
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked >
                            <label class="form-check-label" for="flexSwitchCheckChecked" >Show Versions</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="col">
                        <button type="button" class="btn btn-success" style="margin-top: 25px;">Create
                            Equipment <i class="bi bi-pencil-fill" style="color: #ffffff;font-size: 15px"></i></button>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;margin-left: 10px">
                <div class="col-sm">
                    <div class="col">Show Entries Per Page</div>

                </div>
                <div class="col-sm">

                    <div class="col"><label>Search Equipment  :
                        <input type="text" placeholder="Equipment ID">
                    </label></div>
                </div>
            </div>
        </div>




        <table class="table table-bordered" style="margin-top: 20px">
            <thead>
            <tr>
                <th>Equipment ID</th>
                <th>Equipment Type</th>
                <th>IP Address</th>
                <th>Station</th>
                <th>Status</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>256489</td>
                <td>POST</td>
                <td>10.30.3.13</td>
                <td>GHATKOPAR</td>
                <td><i class="bi bi-circle-fill" style="font-size: 20px;color: #0b5bf6;margin-left: 30px"></i></td>
                <td></td>
                <td style="text-align:center" >
                    <a class="edit" title="edit" data-toggle="edit"> <i class="bi bi-pencil-fill"
                                                                        style="color: #ff0000;font-size: 25px"></i></a>&nbsp;&nbsp;

                    <a class="Qr" title="Show QR" data-toggle="tooltip"><i class="bi bi-upc-scan"
                                                                           style="color: #ff8f00;font-size: 30px;"></i></a>&nbsp;&nbsp;
                    <a class="Refresh" title="Refresh" data-toggle="tooltip"><i class="bi bi-arrow-clockwise"
                                                                                style="color: deepskyblue;font-size: 30px"></i></a>

                </td>
            </tr>
            <tr>

                <td>256489</td>
                <td>POST</td>
                <td>10.30.3.13</td>
                <td>GHATKOPAR</td>
                <td><i class="bi bi-circle-fill" style="font-size: 20px;color: #f50000;margin-left: 30px"></i></td>
                <td></td>
                <td style="text-align:center" >
                    <a class="edit" title="edit" data-toggle="edit"> <i class="bi bi-pencil-fill"
                                                                        style="color: #ff0000;font-size: 25px"></i></a>&nbsp;&nbsp;

                    <a class="Qr" title="Show QR" data-toggle="tooltip"><i class="bi bi-upc-scan"
                                                                           style="color: #ff8f00;font-size: 30px;"></i></a>&nbsp;&nbsp;
                    <a class="Refresh" title="Refresh" data-toggle="tooltip"><i class="bi bi-arrow-clockwise"
                                                                                style="color: deepskyblue;font-size: 30px"></i></a>

                </td>
            </tr>
            <tr>

                <td>256489</td>
                <td>POST</td>
                <td>10.30.3.13</td>
                <td>GHATKOPAR</td>
                <td><i class="bi bi-circle-fill" style="font-size: 20px;color: #11ff00;margin-left: 30px"></i></td>
                <td>20/30/50</td>
                <td style="text-align:center" >
                    <a class="edit" title="edit" data-toggle="edit"> <i class="bi bi-pencil-fill"
                                                                        style="color: #ff0000;font-size: 25px"></i></a>&nbsp;&nbsp;

                    <a class="Qr" title="Show QR" data-toggle="tooltip"><i class="bi bi-upc-scan"
                                                                           style="color: #ff8f00;font-size: 30px;"></i></a>&nbsp;&nbsp;
                    <a class="Refresh" title="Refresh" data-toggle="tooltip"><i class="bi bi-arrow-clockwise"
                                                                                style="color: deepskyblue;font-size: 30px"></i></a>

                </td>
            </tr>
            </tbody>
        </table>
    </div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>
