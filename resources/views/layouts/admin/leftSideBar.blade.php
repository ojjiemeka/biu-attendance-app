 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                        <li><a href="dashboard-job.html"><span class="badge rounded-pill text-bg-success float-end" key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>

                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-calendar">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('attendances.index')}}" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-calendar">Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-calendar">Calendar</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->