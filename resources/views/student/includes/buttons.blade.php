<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="{!! request()->is('student')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('student') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="{!! request()->is('student/registration*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('student.registration') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="{!! request()->is('student/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('student.import') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Bulk Registration</a>
        
    </div>
    <hr class="hr-6 ">
</div>
