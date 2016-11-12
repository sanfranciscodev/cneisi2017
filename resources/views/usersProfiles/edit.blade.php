@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('profiles.heading') }}</div>
                <div class="panel-body">

                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                    </script>

                    <script>
                        $(document).ready(function(){
                            $("#university_region").hide();
                            $("#legajo").hide();

                            $('#userType').on('change', function() {
                                if ( this.value == 'general_audience')
                                {
                                    $("#university_region").hide();
                                    $("#legajo").hide();
                                }  
                                if ( this.value == 'graduated')
                                {
                                    $("#legajo").hide();
                                    $("#university_region").show();
                                }
                                if ( this.value == 'student')
                                {
                                    $("#university_region").show();
                                    $("#legajo").show();
                                }
                            });
                        });
                    </script>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update', $userProfile->getId()) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="dni" class="col-md-4 control-label">{{ trans('profiles.dni') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" type="number" class="form-control" name="dni" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="userType" class="col-md-4 control-label">{{ trans('profiles.type') }}</label>
                            <div class="col-md-6">
                                <select name="userType" id='userType' required>
                                    <option value="general_audience">{{ trans('profiles.general_audience') }}</option>
                                    <option value="student">{{ trans('profiles.student') }}</option>
                                     <option value="graduated">{{ trans('profiles.graduated') }}</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group" id="university_region">
                            <label for="" class="col-md-4 control-label">{{ trans('profiles.region') }}</label>
                            <div class="col-md-6">
                                <select name="university_region">
                                    <option value=""></option>
                                        @foreach ((array) $universities as $key => $value)
                                        {
                                            <option value="{{$key}}">{{$value}}</option>
                                        }
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="legajo">
                            <label for="legajo" class="col-md-4 control-label">{{ trans('profiles.legajo') }}</label>
                            <div class="col-md-6">
                                <input id="legajo" type="text" type="number" class="form-control" name="legajo" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans ('buttons.continue')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
