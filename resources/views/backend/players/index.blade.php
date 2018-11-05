@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.players.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.players.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.players.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.players.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $players->total() !!} {{ trans_choice('labels.backend.players.table.total', $players->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $players->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
