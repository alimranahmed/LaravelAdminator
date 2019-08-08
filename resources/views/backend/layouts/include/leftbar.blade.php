<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="{{asset('images/logo.png')}}" alt="" class="w-100" style="height: 65px">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active">
                <a class="sidebar-link {{ request()->is('/') ? 'highlight' : '' }}" href="#">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link {{ request()->is('users*') ? 'highlight' : '' }}'
                   href="#">
                    <span class="icon-holder">
                        <i class="c-deep-purple-500 ti-user"></i>
                    </span>
                    <span class="title">Users</span>
                </a>
            </li>
            @can('backend.config.index')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="c-orange-500 ti-settings"></i>
                        </span>
                        <span class="title">Configurations</span>
                        <span class="arrow">
                            <i class="ti-angle-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class='sidebar-link {{ request()->is('settings') ? 'highlight' : '' }}'
                               href="#">Admins</a>
                        </li>
                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</div>
