<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->



        <li class="nav-header">Account settings</li>


        {{--acount settings--}}

        <li class="nav-item">
            <a href="{{route('user.profile')}}" class="nav-link">
                <i class="fas fa-user" aria-hidden="true"></i>
                <p>
                   Profile
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('showChangePasswordGetAdmin')}}" class="nav-link">
                <i class="fas fa-lock" aria-hidden="true"></i>
                <p>
                   Change password
                </p>
            </a>
        </li>



        <li class="nav-header">Manage Packages</li>
        {{--  packages--}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <p>
                   Packages
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('packages.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('packages.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>

                    </ul>




        {{--  manpower--}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-house-user" aria-hidden="true"></i>
                <p>
                    Manpower
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('manpower.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('manpower.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>
            </ul>
        </li>

                <li class="nav-header">Manage users</li>
        {{--  users--}}
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="fa fa-users" aria-hidden="true"></i>
                <p>
                   Users
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add new users</p>
                    </a>
                </li>


            </ul>
        </li>


        <li class="nav-header">Qualification & Country</li>
        {{--  packages--}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-book" aria-hidden="true"></i>
                <p>
                    Qualification
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('qualification.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('qualification.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>

            </ul>



        {{--  country--}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <p>
                    Country
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('country.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('country.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-header">Settings</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-cogs" aria-hidden="true"></i>
                <p>
                  Settings
                </p>
            </a>
        </li>
    </ul>
</nav>
