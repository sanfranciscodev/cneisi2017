@extends('layoutSpeakers')

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
                                <th> <h2>{{ trans('speakers.identificator') }}</h2> </th>
                                <th> <h2>{{ trans('speakers.picture') }}</h2></th>
                                <th> <h2>{{ trans('speakers.data') }}</h2> </th>
                                <!-- <th style="width: 126px"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($speakers as $speaker)
                                <tr>
                                    <td>{{ $speaker->getId( ) }}</td>
                                    <td>
                                        @if($speaker->hasPicture())
                                            <p>
                                                <img src="{{$speaker->getPicture()}}" 
                                                width="100";
                                                height="100";
                                                >
                                            </p>
                                        @endif
                                    </td>
                                    <td>
                                        <p class="text-muted text-center">
                                        <h3><b>{{ trans('speakers.name') }}</b></h3>{{ $speaker->getName() }}
                                        <h3><b>{{ trans('speakers.tagline') }}</b></h3>{{ $speaker->getTagline() }}
                                        <h3><b>{{ trans('speakers.description') }}</b></h3>{{ $speaker->getDescription() }}
                                        </p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ trans('speakers.no_results') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <!--<div class="box-tools pull-right">
                        {{--!! $speakers->render() !!--}}
                    </div>-->
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div>
    </div>
</section>
@endsection