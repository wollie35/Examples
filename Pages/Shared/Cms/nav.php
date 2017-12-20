<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Example</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li id="dashboard.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a id="dashboard.php" class="nav-link" onclick="pageChange('dashboard')">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">
                Dashboard</span>
                </a>
            </li>
            <li id="car.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Wagenpark">
                <a id="car.php" class="nav-link" onclick="pageChange('car')">
                    <i class="fa fa-fw fa-car"></i>
                    <span class="nav-link-text">
                Wagenpark</span>
                </a>
            </li>
            <li id="user.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Gebruikers">
                <a id="user.php" class="nav-link" onclick="pageChange('user')">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">
                Gebruikers</span>
                </a>
            </li>
            <li id="team.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Teams">
                <a id="team.php" class="nav-link" onclick="pageChange('team')">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">
                Teams</span>
                </a>
            </li>
            <li id="customer.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Klanten">
                <a id="customer.php" class="nav-link" onclick="pageChange('customer')">
                    <i class="fa fa-fw fa-child"></i>
                    <span class="nav-link-text">
                Klanten</span>
                </a>
            </li>
            <li id="invoice.php" class="nav-item" data-toggle="tooltip" data-placement="right" title="Facturen">
                <a id="invoice.php" class="nav-link" onclick="pageChange('invoice')">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">
                Facturen</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>
            Uitloggen</a>
            </li>
        </ul>
    </div>
</nav>