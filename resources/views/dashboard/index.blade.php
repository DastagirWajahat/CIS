@extends('layouts.master')
@section('css')
<!-- page specific plugin styles -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
@endsection
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            @include('layouts.includes.template_setting')
            <div class="page-header">
                @include('includes.flash_messages')
                @include('dashboard.includes.notice')
                @include('dashboard.includes.buttons')
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->


                    {{--Chart Begans--}}
                    @role(['super-admin', 'admin', 'account'])
                    <div class="row">
                        <div class="col-md-6">
                            <div>{!! $data['studentDeptChart']->container() !!}</div>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>{!! $data['batchbarchart']->container() !!}</div>
                        </div>

                        <div class="col-md-6">
                            @include('dashboard.includes.summary')
                            {{--Chart Begans--}}
                            @role(['super-admin', 'admin', 'account'])

                        </div>
                    </div>
                </div>
                @endrole
                {{--chart end--}}
                @endrole
                {{--chart end--}}
            </div><!-- /.row -->
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
@endsection
@section('js')

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
 {!! $data['studentDeptChart']->script() !!}ss
 {!! $data['batchbarchart']->script() !!}ss
@endsection