<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <title>Mumbai Metro</title>
</head>

<body>


<div class="container-fluid">

    <!--Navbar Start Here-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <div class="card-header" style="margin-top: 20px;color: #000000;background-color: #43beff;border-radius: 10px   ">
        <h5 style="text-align: center">Search Customer Transaction</h5>
    </div>


    <div class="card" style="border-radius: 10px">
        <div class="card" style="margin: 10px">
            <table class="table table-borderless">

                <tbody>

                <tr>

                    <td>
                        <label for="FROM DATE" style="margin-left: 120px">FROM DATE :</label>
                        <input type="text" id="FROM DATE" name="FROM DATE" style="margin-left: 95px">
                        <br><br>
                    </td>
                    <td>
                        <label for="TO DATE" style="margin-left: 120px">TO DATE :</label>
                        <input type="text" id="TO DATE" name="TO DATE" style="margin-left: 120px">
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="Email ID" style="margin-left: 120px">Email ID :</label>
                        <input type="text" id="Email ID" name="Email ID" style="margin-left: 123px">
                        <br><br>
                    </td>
                    <td>
                        <label for="Mobile Number" style="margin-left: 120px">Mobile Number :</label>
                        <input type="text" id="Mobile Number" name="Mobile Number" style="margin-left: 70px">
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="Master QR Code NO" style="margin-left: 120px">Master QR Code NO :</label>
                        <input type="text" id="Master QR Code NO" name="Master QR Code NO" style="margin-left: 35px">
                        <br><br>
                    </td>
                    <td>
                        <label for="Slave QR Code NO" style="margin-left: 120px">Slave QR Code NO :</label>
                        <input type="text" id="Slave QR Code NO" name="Slave QR Code NO" style="margin-left: 50px">
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="Operator Order ID" style="margin-left: 120px">Operator Order ID :</label>
                        <input type="text" id="Operator Order ID" name="Operator Order ID" style="margin-left: 50px">
                        <br><br>
                    </td>

                    <td>
                        <button type="button" class="btn btn-danger" style="margin-left: 120px;height: 40px;width: 120px">Go!</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

        <table class="table table-borderless">

            <tbody>

            <tr>
                <td>
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="Name">
                    <br><br>
                </td>


                <td>
                    <label for="Phone Number">Phone Number</label>
                    <input type="text" id="Phone Number" name="Phone Number">
                    <br><br>
                </td>


                <td>
                    <label for="Email">Email</label>
                    <input type="text" id="Email" name="Email">
                    <br><br>
                </td>


                <td>
                    <button type="button" class="btn btn-danger">Export</button>
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
