<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('staff')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('staff') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Staff Detail</a>
        <a class="{!! request()->is('staff/add*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="{!! request()->is('staff/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.import') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Bulk Registration</a>
            </div>
</div>
<hr class="hr-6">