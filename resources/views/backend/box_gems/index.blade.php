@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.box_gems.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.box_gems.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.box_gems.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.box_gems.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $box_gems->total() !!} {{ trans_choice('labels.backend.box_gems.table.total', $box_gems->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $box_gems->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
