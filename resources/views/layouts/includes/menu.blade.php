<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state hidden-print">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        <li class="{!! request()->is('/')?'active':'' !!}">
            <a href="{{ route('home') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>

        <!-- @ability('super-admin','front-office')
            @if( isset($generalSetting) && $generalSetting->front_desk ==1)
            @endif
        @endability -->

        {{-- Staff & Student --}}
        @ability('super-admin','student-staff')
            @if( isset($generalSetting) && $generalSetting->student_staff ==1)
                <li class="{!! request()->is('student*')||request()->is('staff*')?'active open':'' !!}  hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users" aria-hidden="true"></i>
                    <span class="menu-text"> Student&Staff</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('student*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student')?'active':'' !!} hover">
                                <a href="{{ route('student') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student Detail
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/registration')?'active':'' !!} hover">
                                <a href="{{ route('student.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registration
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/import')?'active':'' !!} hover">
                                <a href="{{ route('student.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bulk Import
                                </a>
                                <b class="arrow"></b>
                            </li>

                            
                            
                            
                            
                        </ul>
                    </li>

                   

                    <li class="{!! request()->is('staff*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Staff
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('staff')?'active':'' !!}  hover">
                                <a href="{{ route('staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Staff Detail
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/add')?'active':'' !!}  hover">
                                <a href="{{ route('staff.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registration
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('staff/import')?'active':'' !!} hover">
                                <a href="{{ route('staff.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bulk Import
                                </a>
                                <b class="arrow"></b>
                            </li>

                           

                           

                            <li class="{!! request()->is('staff/designation')?'active':'' !!} hover">
                                <a href="{{ route('staff.designation') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Designations
                                </a>
                                <b class="arrow"></b>
                            </li>

                            
                        </ul>
                    </li>
                </ul>
            </li>
            @endif
        @endability

        

        @ability('super-admin','inventory')
            @if( isset($generalSetting) && $generalSetting->inventory ==1)
                <li class="{!! request()->is('inventory*') || request()->is('product*') || request()->is('customer*') || request()->is('vendor*') ?'active open':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-shopping-cart"></i>
                    Inventory
                    <b class="arrow fa fa-angle-r"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    
                        <!-- ----------------------- -->

                    <li class="{!! request()->is('product*')?'active open':'' !!}  hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text">Product/Assets</span>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('product/registration*')?'active':'' !!} hover">
                                <a href="{{ route('product.registration') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-plus"></i> Product
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('product')?'active':'' !!} hover">
                                <a href="{{ route('product') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list"></i> Product Detail
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('product/category*')?'active':'' !!} hover">
                                <a href="{{ route('product.category') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list-alt"></i> Category
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    

                    <li class="{!! request()->is('vendor*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Vendor
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('vendor')?'active':'' !!} hover">
                                <a href="{{ route('vendor') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vendor Detail
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('vendor/registration')?'active':'' !!} hover">
                                <a href="{{ route('vendor.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registration
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('vendor/document')?'active':'' !!} hover">
                                <a href="{{ route('vendor.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Document Upload
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('vendor/note')?'active':'' !!} hover">
                                <a href="{{ route('vendor.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Create Notes
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                   {{-- <li class="{!! request()->is('vendor')?'active':'' !!} hover">
                        <a href="{{ route('vendor') }}" accesskey="S">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Vendor Detail
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('vendor/registration')?'active':'' !!} hover">
                        <a href="{{ route('vendor.registration') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Registration
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('customer')?'active':'' !!} hover">
                        <a href="{{ route('customer') }}" accesskey="S">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Customer Detail
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('customer/registration')?'active':'' !!} hover">
                        <a href="{{ route('customer.registration') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Registration
                        </a>

                        <b class="arrow"></b>
                    </li>--}}

                </ul>
            </li>
            @endif
        @endability


<!-- -------------------- -->
        @ability('super-admin','download')
        @if( isset($generalSetting) && $generalSetting->upload_download ==1)
            <li class="{!! request()->is('download*')?'active':'' !!} hover">
                <a href="{{ route('download') }}">
                    <i class="menu-icon fa fa-download"></i>
                    Download
                    <b class="arrow fa fa-angle-r"></b>
                </a>
            </li>
        @endif
        @endability





<!-- -------------------- -->

       

        {{-- Academic --}}
        @ability('super-admin','academic')
            @if( isset($generalSetting) && $generalSetting->academic ==1)
                <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="menu-text"> Academics </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('faculty*') || request()->is('semester*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Academic Level
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('faculty*')?'active':'' !!} hover">
                                <a href="{{ route('faculty') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Department
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('semester*')?'active':'' !!} hover">
                                <a href="{{ route('semester') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Semester
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student-batch*')?'active':'' !!} hover">
                                <a href="{{ route('student-batch') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Batch
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="{!! request()->is('grading*') || request()->is('subject*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Grading/Subject
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('grading*')?'active':'' !!} hover">
                                <a href="{{ route('grading') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grading
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('subject*')?'active':'' !!} hover">
                                <a href="{{ route('subject') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Course / Subject
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('*status')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Status Setting
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student-status*')?'active':'' !!} hover">
                                <a href="{{ route('student-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student Status
                                </a>

                                <b class="arrow"></b>
                            </li>


                            

                            
                        </ul>
                    </li>


                    
                </ul>
            </li>
            @endif
        @endability

        {{-- Help --}}
        @ability('super-admin','help')
            @if( isset($generalSetting) && $generalSetting->help ==1)
                <li class="hover">
                <a href="#" target="_blank" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-question" aria-hidden="true"></i>
                    <span class="menu-text"> Help </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="http://wajahat.com" target="_blank">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Test Demo
                        </a>
                    </li>
                    <li class="hover">
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Video Tutorial
                        </a>
                    </li>
                    
                </ul>
            </li>
            @endif
        @endability
    </ul><!-- /.nav-list -->
</div>
