<header id="navbar">
    <div id="navbar-container" class="boxed">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">

                <div class="brand-title">
                    <span class="brand-text">Company</span>
                </div>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nav navbar-top-links">
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-list-view"></i>
                    </a>
                </li>
                <li>
                    <div class="custom-search-form">
                        <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                            <i class="demo-pli-magnifi-glass"></i>
                        </label>
                        <form>
                            <div class="search-container collapse" id="nav-searchbox">

                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-top-links">
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <i class="demo-pli-male"></i>
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                        <ul class="head-list">
                            <li>
                                <a href="account_information"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="get">
                                    @csrf<button class="btn-bt" type="submit"><a class="a-btn"><i class="demo-pli-unlock icon-lg icon-fw"></i>Logout  </a></button>
                                    </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="aside-toggle">
                        <i class="demo-pli-dot-vertical"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

