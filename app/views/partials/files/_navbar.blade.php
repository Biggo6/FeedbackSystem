            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu {{HelperX::activeRoute('app.dashboard')}}">
                            <a href="{{route('app.dashboard')}}"><i class="md md-dashboard"></i>Dashboard</a>
                        </li>
                        <li class="has-submenu {{HelperX::activeRoute('app.users')}}">
                            <a href="{{route('app.users')}}"><i class="fa fa-users"></i>Users</a>
                        </li>
                        <li class="has-submenu {{HelperX::activeRoute('question.index')}}{{HelperX::activeRoute('question.create')}}">
                            <a href="#"><i class="fa fa-question-circle"></i>Questions</a>
                            <ul class="submenu">
                                <li><a href="{{route('question.create')}}"><i class="fa fa-plus"></i> Add New Question</a></li>
                                <li><a href="{{route('question.index')}}"><i class="fa fa-list"></i> Manage Questions</a></li>
                                <li><a href="components-carousel.html"><i class="fa fa-eye"></i> Preview Questions</a></li>
                                
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-comments-o"></i>Feedback</a>
                        </li>
                        <li class="has-submenu {{HelperX::activeRoute('configure.permissions')}}{{HelperX::activeRoute('configure.roles')}}{{HelperX::activeRoute('configure.subDepartments')}}{{HelperX::activeRoute('configure.departments')}}{{HelperX::activeRoute('configure.system')}}{{HelperX::activeRoute('configure.possibleSolns')}}">
                            <a href="#"><i class="fa fa-wrench"></i>Configuration</a>
                            <ul class="submenu">
                                <li><a href="{{route('configure.departments')}}"><i class="fa fa-th"></i> Departments</a></li>
                                <li><a href="{{route('configure.subDepartments')}}"><i class="fa fa-list"></i> Sub-Department</a></li>
                                <li><a href="{{route('configure.possibleSolns')}}"><i class="fa fa-pencil"></i> Possible Solutions</a></li>
                                <li><a href="{{route('configure.roles')}}"><i class="fa fa-key"></i> Roles</a></li>
                                <li><a href="{{route('configure.permissions')}}"><i class="fa fa-list"></i> Permissions</a></li>
                                <li><a href="{{route('configure.system')}}"><i class="fa fa-cog"></i> System</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-bar-chart"></i>Reports</a>
                            
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-info-circle"></i>Help & Support</a>
                            
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->