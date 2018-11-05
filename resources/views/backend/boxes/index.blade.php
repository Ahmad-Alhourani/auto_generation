@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.boxes.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.boxes.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.boxes.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.boxes.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $boxes->total() !!} {{ trans_choice('labels.backend.boxes.table.total', $boxes->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $boxes->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
