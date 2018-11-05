@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.gem_sightings.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.gem_sightings.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.gem_sightings.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.gem_sightings.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $gem_sightings->total() !!} {{ trans_choice('labels.backend.gem_sightings.table.total', $gem_sightings->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $gem_sightings->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
