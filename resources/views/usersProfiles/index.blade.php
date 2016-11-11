@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">INDEX USER</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">

                        <strong>YOU MADE IT {{$user->getName()}}, CONGRATULATIONS.</strong>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

