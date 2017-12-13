 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Inventory Management System</a>
    </div>

    @include('layouts.navbar.top-nav')

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>                            
                </li>                        
                <li>
                    <a href="/stock"><i class="fa fa-dashboard fa-fw"></i> Current Stock</a>
                </li>
                <li>
                    <a href="/order"><i class="fa fa-shopping-cart fa-fw"></i> Outgoing Order</a>
                </li>
                <li>
                    <a href="/purchase"><i class="fa fa-truck fa-fw"></i> Incoming Purchase</a>
                </li>
                <li>
                    <a href="/product"><i class="fa fa-cubes fa-fw"></i> Products Management</a>
                </li>
                <li>
                    <a href="/supplier"><i class="fa fa-building fa-fw"></i> Suppliers Management</a>
                </li>
                <li>
                    <a href="/customer"><i class="fa fa-group fa-fw"></i> Customers Management</a>
                </li>                              
            </ul>
        </div>

    </div>

</nav>