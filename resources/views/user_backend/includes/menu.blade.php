<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


        {{--  Posts--}}
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="fas fa-book" aria-hidden="true"></i>
                <p>
                   Job Post
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                              <li class="nav-item">
                    <a href="{{route('job.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Jobs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('job.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jobs List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="fas fa-book" aria-hidden="true"></i>
                <p>
                   Job type
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('jtype.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Job types</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('jtype.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jobs type List</p>
                    </a>
                </li>

            </ul>
        </li>


{{--        --}}{{--  contacts--}}
{{--        <li class="nav-item">--}}
{{--            <a href="" class="nav-link">--}}
{{--                <i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--                <p>--}}
{{--                   Contacts--}}
{{--                </p>--}}
{{--            </a>--}}
{{--        </li>--}}

        <li class="nav-header">Account settings</li>


        {{--acount settings--}}

        <li class="nav-item">
            <a href="{{route('users.profile')}}" class="nav-link">
                <i class="fas fa-user" aria-hidden="true"></i>
                <p>
                   Profile
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('changePasswordGet')}}" class="nav-link">
                <i class="fas fa-lock" aria-hidden="true"></i>
                <p>
                   Change password
                </p>
            </a>
        </li>
{{--        <li class="nav-header">Manage users</li>--}}
{{--        --}}{{--  users--}}
{{--        <li class="nav-item has-treeview">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="fa fa-users" aria-hidden="true"></i>--}}
{{--                <p>--}}
{{--                   Users--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>All users</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Add new users</p>--}}
{{--                    </a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}

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
