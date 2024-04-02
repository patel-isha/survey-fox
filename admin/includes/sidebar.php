<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        <a href="edit-profile.php" title="Edit Profile"> <i class="fa fa-fw fa-user"></i>
                            <?php
                            $fullname = $_SESSION['admin_name'];
                            echo $fullname;
                            ?> (Admin) <i class="fa fa-fw fa-cog" title="Edit Profile"></i>
                        </a>
                    </li>
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php" aria-expanded="false"><i
                                class="fa fa-fw fa-user-circle"></i>Dashboard</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="city-manage.php" aria-expanded="false"><i
                                class="fa fa-fw fa-map"></i>City Management</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-car"></i>Car
                            Management</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="car-category.php">Category Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="car-brands.php">Brand Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="car-view-all.php">Car List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-users"></i>Owner Management</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="owner-view-all.php">Owner List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="add-new-owner.php">Add Owned Car (Admin Entry) </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-key"></i>Owned Cars
                            Management</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="ownedcar-view-all.php">Owned Car List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="add-ownedcar.php">Add Owned Car (Admin Entry) </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bookings-view-all.php" aria-expanded="false"><i
                                class="fa fa-fw fa-calendar"></i>View Bookings</a>

                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-cubes"></i>Reports</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="report-registered-owners.php">Car Owners Report</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="car-brands.php">Brand Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="car-view-all.php">Car List</a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="reset-password.php" aria-expanded="false"><i
                                class="fa fa-fw fa-unlock"></i>Reset Password</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="logout.php" aria-expanded="false"><i
                                class="fa fa-fw fa-power-off"></i>Logout</a>

                    </li>

                </ul>
            </div>
            </li>

            </ul>
    </div>

    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->