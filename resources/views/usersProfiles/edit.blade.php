@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User profile</div>
                <div class="panel-body">

                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                    </script>

                    <script>
                        $(document).ready(function(){
                            $("#facultad").hide();
                            $("#legajo").hide();

                            $('#userType').on('change', function() {
                              if ( this.value == 'general_audience')
                              //.....................^.......
                              {
                                $("#facultad").hide();
                                $("#legajo").hide();
                              }  
                              if ( this.value == 'graduated')
                              //.....................^.......
                              {
                                $("#legajo").hide();
                                $("#facultad").show();
                              }
                              if ( this.value == 'student')
                              //.....................^.......
                              {
                                $("#facultad").show();
                                $("#legajo").show();
                              }
                              
                            });
                        });
                    </script>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update', $userProfile->getId()) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="dni" class="col-md-4 control-label">DNI</label>
                            <div class="col-md-6">
                                <input id="name" type="text" type="number" class="form-control" name="dni" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="userType" class="col-md-4 control-label">User Type</label>
                            <div class="col-md-6">
                                <select name="userType" id='userType' required>
                                    <option value="general_audience">General Audience</option>
                                    <option value="student">Student</option>
                                     <option value="graduated">Graduated</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group" id="facultad">
                            <label for="" class="col-md-4 control-label">Region</label>
                            <div class="col-md-6">
                                <select name="facultad">
                                    <option value=""></option>
                                    <option value="buenos-aires">Buenos Aires</option>
                                    <option value="concepcion-uruguay">Concepción del Uruguay</option>
                                    <option value="cordoba">Cordoba</option>
                                    <option value="delta">Delta</option>
                                    <option value="la-plata">La Plata</option>
                                    <option value="mendoza">Mendoza</option>
                                    <option value="resistencia"> Resistencia</option>
                                    <option value="rosario"> Rosario</option>
                                    <option value="san-francisco">San Francisco</option>
                                    <option value="santa-fe">Santa Fe</option>
                                    <option value="tucuman">Tucumán</option>
                                    <option value="villa-maria">Villa María</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group" id="legajo">
                            <label for="legajo" class="col-md-4 control-label">Legajo Student</label>
                            <div class="col-md-6">
                                <input id="legajo" type="text" type="number" class="form-control" name="legajo" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Continue
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
