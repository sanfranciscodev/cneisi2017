@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('profiles.heading' )}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">

                        <strong>{{ $user->getName() }},</strong>
                        <strong>{{ trans('profiles.success') }}</strong>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

