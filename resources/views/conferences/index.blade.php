@extends('layoutConferences')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    @include('includes.success-messages')
                    @include('includes.error-messages')

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> <h2>{{ trans('conference.title') }}</h2> </th>
                                <th> <h2>{{ trans('conference.description') }}</h2></th>
                                <th> <h2>{{ trans('conference.speaker') }}</h2> </th>
                                <th> <h2>{{ trans('conference.date') }}</h2> </th>
                                <!-- <th style="width: 126px"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($conferences as $conference)
                                <tr>
                                    <td>{{ $conference->getTitle() }}</td>
                                    <td>{{ $conference->getDescription() }}</td>
                                    <td>
                                        <p class="text-muted text-center">
                                                @if($conference->speaker->hasPicture())
                                                <p>
                                                    <img src="{{$conference->speaker->getPicture()}}" 
                                                    width="100";
                                                    height="100";
                                                    >
                                                </p>
                                                @endif                                        
                                            {{ $conference->speaker->getName() }}
                                        </p>
                                    </td>
                                    <td>{{ $conference->getDate() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ trans('conferences.no_results') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <!--<div class="box-tools pull-right">
                        {{--!! $conferences->render() !!--}}
                    </div>-->
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div>
    </div>
</section>
@endsection