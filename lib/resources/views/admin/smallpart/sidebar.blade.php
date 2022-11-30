<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered" style="position:relative;">
                <a href="{{ asset('admin/profile') }}"><img src="{{ asset('public/upload/info/'.Auth::user()->avatar) }}" class="img-circle" width="80"><span><i class="fa fa-gears fa-xs setting-profile" style=""></i></span></a>
            </p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <p style="text-align:center;">{{ Auth::user()->email }}</p>
       
            @if (Auth::user()->phanquyen==1)
                <li>
                    <a @if ($active_sidebar_admin[1]=='customer') class="active" @endif href="{{ route('admin.customer') }}">
                        <i class="fa fa-comments"></i>
                        <span>Khách hàng </span>
                    </a>
                </li>
            @endif

            {{-- <li>
                <a href="{{ asset('admin/news?type=blog') }}" @if ($active_sidebar_admin[1]=='news') class="active" @endif>
                    <i class="fa fa-book"></i>
                    <span>Tin tức</span>
                </a>
            </li> --}}


            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='project') class="active" @endif>
                    <i class="fa fa-tags"></i>
                    <span>Project</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('admin.project.location') }}">Location</a></li>
                    <li><a href="{{ route('admin.project.major') }}">Ngành nghề</a></li>
                    <li><a href="{{ route('admin.project') }}">Danh sách dự án</a></li>
                </ul>
            </li>


            
            <li>
                <a @if ($active_sidebar_admin[1]=='timeline') class="active" @endif href="{{ route('admin.timeline') }}">
                    <i class="fa fa-comments"></i>
                    <span>Timeline </span>
                </a>
            </li>



            {{-- <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='template') class="active" @endif>
                    <i class="fa fa-th"></i>
                    <span>Template</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/template/whyus') }}">Why us</a></li>
                    <li><a href="{{ asset('admin/template/service') }}">Service</a></li>
                    <li><a href="{{ asset('admin/template/project') }}">Project</a></li>
                    <li><a href="{{ asset('admin/template/social') }}">Cert & CSR</a></li>
                </ul>
            </li> --}}




            
            @if (Auth::user()->phanquyen==1)
                
                <li>
                    <a href="{{ asset('admin/image') }}" @if ($active_sidebar_admin[1]=='image') class="active" @endif>
                        <i class="fa fa-camera"></i>
                        <span>Hình ảnh</span>
                    </a>
                </li>

            
                <li>
                    <a href="{{ asset('admin/setting') }}" @if ($active_sidebar_admin[1]=='setting') class="active" @endif>
                        <i class="fa fa-tasks"></i>
                        <span>Cài đặt chung</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/users') }}" @if ($active_sidebar_admin[1]=='users') class="active" @endif>
                        <i class="fa fa-sitemap"></i>
                        <span>Phân quyền quản trị</span>
                    </a>
                </li>
            @endif
            
       
            <li>
                <a href="{{ asset('admin/logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>