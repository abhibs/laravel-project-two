        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">


                        <li>
                            <a href="{{ route('admin-dashboard') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                <i class="mdi mdi-cart-outline"></i>
                                <span> Name </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('name') }}">Name Update</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarCrm" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-multiple-outline"></i>
                                <span> Photo </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('photo') }}">Photo Update</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarEmail" data-bs-toggle="collapse">
                                <i class="mdi mdi-email-multiple-outline"></i>
                                <span> Roles </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('role-create') }}">Add Role</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('role') }}">All Roles</a>
                                    </li>

                                </ul>
                            </div>
                        </li>



                        <li>
                            <a href="#sidebarProjects" data-bs-toggle="collapse">
                                <i class="mdi mdi-briefcase-check-outline"></i>
                                <span> Social Medias </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('social-create') }}">Add Social Media</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('social') }}">All Social Medias</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTasks" data-bs-toggle="collapse">
                                <i class="mdi mdi-clipboard-multiple-outline"></i>
                                <span> About Us </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('about') }}">Update About Us</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarContacts" data-bs-toggle="collapse">
                                <i class="mdi mdi-book-account-outline"></i>
                                <span> Facts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarContacts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('fact') }}">Fact Update</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTickets" data-bs-toggle="collapse">
                                <i class="mdi mdi-lifebuoy"></i>
                                <span> Skills </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTickets">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('skill-create') }}">Add Skill</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('skill') }}">All Skills</a>
                                    </li>
                                </ul>
                            </div>
                        </li>




                        <li>
                            <a href="#sidebarAuth" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span> Education </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAuth">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('education-create') }}">Add Education</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('education') }}">All Education</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="mdi mdi-text-box-multiple-outline"></i>
                                <span> Experience </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('experience-create') }}">Add Experience</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('experience') }}">All Experience</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                <i class="mdi mdi-black-mesa"></i>
                                <span> Category </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseui">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('category-create') }}">Add Category</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category') }}">All Category</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        @php
                            $projectcount = App\Models\Project::count();
                        @endphp
                        <li>
                            <a href="#sidebarLayouts" data-bs-toggle="collapse">
                                <i class="mdi mdi-cellphone-link"></i>
                                <span class="badge bg-blue float-end">{{ $projectcount }}</span>
                                <span> Project </span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('project-create') }}">Add Project</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project') }}">All Projects</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarIcons" data-bs-toggle="collapse">
                                <i class="mdi mdi-bullseye"></i>
                                <span> Certificate </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('certificate-create') }}">Add Certificate</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('certificate') }}">All Certificates</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarForms" data-bs-toggle="collapse">
                                <i class="mdi mdi-bookmark-multiple-outline"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="forms-elements.html">General Elements</a>
                                    </li>
                                    <li>
                                        <a href="forms-advanced.html">Advanced</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatables.html">Data Tables</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarCharts" data-bs-toggle="collapse">
                                <i class="mdi mdi-poll"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="charts-apex.html">Apex Charts</a>
                                    </li>
                                    <li>
                                        <a href="charts-flot.html">Flot Charts</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMaps" data-bs-toggle="collapse">
                                <i class="mdi mdi-map-outline"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Vector Maps</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
