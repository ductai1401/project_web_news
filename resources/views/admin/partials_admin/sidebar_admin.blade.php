<section class="sidebar"  style="min-height: @yield('heigh');">
    <div id="menu" role="navigation">
        @php 
            $image_url = public_path("uploads/users") . '/' . Auth::user() ->image;
            if(!file_exists($image_url)) {
                $image_url = asset('images/error.jpg');
            } else {
                $image_url = asset("uploads/users") .'/' . Auth::user() ->image;
            }
       @endphp
        <div class="nav_profile">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="#">
                    <img src="{{ $image_url }}" class="img-circle" alt="User Image" height="55px">
                </a>
                <div class="content-profile">
                    <h4 class="media-heading">{{ Auth::user() ->fullname }}</h4>
                    <span class="text-default">Admin</span>
                </div>
            </div>
        </div>
        <ul class="navigation">
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo" aria-expanded="false" >
                    <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                    <span class="mm-text" >News</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo" class="sub-menu collapse" >
                    <li>
                        <a href='{{ route('admin.news.create')}}'>
                            <i class="menu-icon text-success fa fa-pencil"></i> Add News
                        </a>
                    </li>
                    <li>
                        <a  href='{{ route('admin.news.index')}}'>
                            <i class="text-primary menu-icon fa fa-inbox"></i> News List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo2" aria-expanded="false">
                    <i class="text-primary menu-icon fa fa-fw fa-users"></i>
                    <span class="mm-text">Users</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo2" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.user.create')}}'>
                            <i class="text_info fa fa-fw fa-user"></i> Add Users
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.user.index')}}'>
                            <i class="text-primary fa fa-fw fa-user"></i> Users List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo3" aria-expanded="false">
                    <i class="text-primary menu-icon fa-solid fa-list"></i>
                    <span class="mm-text">Category</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo3" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.category.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Category
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.category.index')}}'>
                            <i class="text-success fa-solid fa-table-list"> </i> Category List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo4" aria-expanded="false">
                    <i class="text-primary menu-icon fa-solid fa-person-swimming"></i>
                    <span class="mm-text">Athlete</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo4" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.athlete.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Athlete
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.athlete.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Athlete List 
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo5" aria-expanded="false">
                    <i class="text-primary menu-icon fa-solid fa-medal"></i>
                    <span class="mm-text">Medal</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo5" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.medal.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Medal
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.medal.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Medal List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo6" aria-expanded="false">
                    <i class="text-primary menu-icon fa-solid fa-person-skating"></i>
                    <span class="mm-text">Olympic</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo6" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.olympic.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Olympic
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.olympic.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Olympic List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo10" aria-expanded="false">
                    <i class="text-primary menu-icon fa-regular fa-futbol"></i>
                    <span class="mm-text">Olympic Sports</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo10" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.olympic_sport.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Olympic Sports
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.olympic_sport.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Olympic Sports List 
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo7" aria-expanded="false">
                    <i class="text-primary menu-icon fa-regular fa-futbol"></i>
                    <span class="mm-text">Sport</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo7" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.sport.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Sport
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.sport.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Sport List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo8" aria-expanded="false">
                    <i class="text-primary menu-icon fa-solid fa-globe"></i>
                    <span class="mm-text">Country</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo8" class="sub-menu collapse">
                    <li>
                        <a href='{{ route('admin.country.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Country
                        </a>
                    </li>
                    <li>
                        <a href='{{ route('admin.country.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Country list
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo9" aria-expanded="false">
                    <i class="text-primary menu-icon fa fa-comments text-black"></i>
                    <span class="mm-text">Comment</span>
                    <span class="fa fa-angle-down pull-right"></span>
                </a>
                <ul id="demo9" class="sub-menu collapse">
                    {{-- <li>
                        <a href='{{ route('admin.comment.create')}}'>
                            <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Comment
                        </a>
                    </li> --}}
                    <li>
                        <a href='{{ route('admin.comment.index')}}'>
                            <i class="text-success fa-solid fa-table-list"></i> Comment list
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href='{{route('admin.404')}}'>
                    <i class="text-primary menu-icon fa fa-anchor"></i>
                    <span class="mm-text">404</span>
                </a>
            </li>
            <li>
                <a href='/fitness/FAQ'>
                    <i class="text-primary menu-icon fa fa-file-o"></i>
                    <span class="mm-text">FAQ</span>
                </a>
            </li>
            
        </ul>
        <!-- / .navigation -->
    </div>
    <!-- menu -->
</section>