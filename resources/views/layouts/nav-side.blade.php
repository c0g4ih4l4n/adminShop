<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">


            <li>
                <div class="user-img-div">
                    <img src="{{ URL::asset('img/user.png') }}" class="img-thumbnail" />

                    <div class="inner-text">
                        Jhon Deo Alex
                    <br />
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="{{ URL::route('home') }}"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Orders <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="grid.html"><i class="fa fa-eyedropper "></i>Create New Order</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-search"></i>Find An Order</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-list"></i>Order List</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Category <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ URL::route('category.create') }}"><i class="fa fa-eyedropper "></i>Create New Category</a>
                    </li>

                    <li>
                        <a href="{{ URL::route('category.index') }}"><i class="fa fa-list"></i>Category List</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>Product <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ URL::route('product.create') }}"><i class="fa fa-eyedropper "></i>Create New Product</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-search"></i>Find Product</a>
                    </li>

                    <li>
                        <a href="{{ URL::route('product.index') }}"><i class="fa fa-list"></i>Product List</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i>User <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="grid.html"><i class="fa fa-eyedropper "></i>Create New User</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-search"></i>Find User</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-list"></i>User List</a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-flag fa-fw"></i>Brand <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ URL::route('home') }}"><i class="fa fa-eyedropper "></i>Create New Brand</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-list"></i>Brand List</a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>

</nav>