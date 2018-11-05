@extends ('backend.layouts.app')

@section ('title', __('labels.backend.gem_sightings.management') . ' | ' . __('labels.backend.gem_sightings.view'))

@section('breadcrumb-links')
@include('backend.gem_sightings.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.gem_sightings.management') }}
                        <small class="text-muted">{{ __('labels.backend.gem_sightings.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.gem_sightings.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.gem_sightings.content.created_at') }}:</strong> {{ $gem_sighting->updated_at->timezone(get_user_timezone()) }} ({{ $gem_sighting->created_at->diffForHumans() }}),
                        <strong>{{__('labels.backend.gem_sightings.content.last_updated') }}:</strong> {{ $gem_sighting->created_at->timezone(get_user_timezone()) }} ({{$gem_sighting->updated_at->diffForHumans() }})
                        @if ($gem_sighting->trashed())
                            <strong>{{ __('labels.backend.gem_sightings.content.deleted_at') }}:</strong> $gem_sighting->deleted_at->timezone(get_user_timezone())  ($gem_sighting->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection