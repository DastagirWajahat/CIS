<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="{{ route('home') }}" class="navbar-brand">
                <small class="text-capitalize">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    @if(isset($generalSetting->institute))
                        {{$generalSetting->institute}}
                    <strong class="text-capitalize orange2"> IMS </strong>
                    @else
                        UNLIMITED Edu Firm
                    @endif
                </small>
            </a>

            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Toggle user menu</span>

                <img src="{{ asset('assets/images/avatars/user.jpg') }}" alt="Jason's Photo" />
            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal user-min">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        @if(isset($profileImageSrc) && $profileImageSrc !== null)
                            <img id="avatar" class="nav-user-photo" alt="" src="{{ asset($profileImageSrc) }}" width="300px" />
                        @else
                            <img class="nav-user-photo" src="{{ asset('assets/images/avatars/user.jpg') }}" alt="" />
                        @endif

                        <span class="user-info">
                            <small>Welcome,</small>
                            {{isset(auth()->user()->name)?auth()->user()->name:""}}
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        @if(isset($profileImageSrc) && $profileImageSrc !== '')
                            <li>
                                <img id="avatar" class="img-responsive" alt="" src="{{ asset($profileImageSrc) }}" width="300px" />
                            </li>
                        @endif
                        <li>
                            @if(isset(auth()->user()->id))
                            <a href="{{ route('user.view', ['id' => encrypt(auth()->user()->id)]) }}">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                            @else
                                <a href="#">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            @endif
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @ability('super-admin','expand-action-menu')
        <div class="navbar-buttons navbar-header pull-left  collapse navbar-collapse" role="navigation">
            <div class="collapse navbar-collapse js-navbar-collapse col-md-12">
                <ul class="nav navbar-nav navbar-nav-mega col-md-12">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list"></span>&nbsp;&nbsp;Expand Actions</a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><i class="fa fa-users" aria-hidden="true"></i> Student</li>
                                    <li><a href="{{ route('student') }}">Detail</a></li>
                                    <li><a href="{{ route('student.registration') }}">Registration</a></li>
                                    <li><a href="{{ route('student.import') }}">Bulk Import</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Guardian</li>
                                    <li><a href="{{ route('guardian') }}">Detail</a></li>
                                    <li><a href="{{ route('guardian.registration') }}">Registration</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Staff</li>
                                    <li><a href="{{ route('staff') }}">Detail</a></li>
                                    <li><a href="{{ route('staff.add') }}">Registration</a></li>
                                    <li><a href="{{ route('staff.import') }}">Bulk Import</a></li>
                                    <li class="divider"></li>
                                    
                                </ul>
                            </li>
                            

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        @endability

        {{--@ability('super-admin','fees-quick-receive-add')
        <a href="{{ route('account.fees.quick-receive') }}" class="button btn-sm btn-warning quick-receive-btn pull-left hidden-sm hidden-xs" data-toggle=""><span class="fa fa-calculator"></span>QuickReceive</a>
        @endability--}}
        @ability('super-admin', 'admin-control')
        <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Admin Control
                            &nbsp;
                            <i class="ace-icon fa fa-angle-down bigger-110"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                            <li> <a href="{{ route('user') }}"> <i class="ace-icon fa fa-users bigger-110 blue"></i> Users </a></li>
                            <li><a href="{{ route('setting.general') }}"><i class="fa fa-cog  bigger-110 blue"></i>&nbsp;General Setting <span class="red">*</span></a></li>
                            
                        </ul>
                    </li>
            </ul>
        </nav>
        @endability
        @ability('super-admin','super-suit')
        {{--<nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        EduFirm Super Suit                        &nbsp;
                        <i class="ace-icon fa fa-angle-down bigger-110"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                        <li>
                            <a href="{{ route('super-suit.user-activity') }}">
                                <i class="ace-icon fa fa-history bigger-110 blue"></i>
                                User Activity
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>--}}
        @endability

    </div><!-- /.navbar-container -->
</div>