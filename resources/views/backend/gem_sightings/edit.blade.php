@extends ('backend.layouts.app')

@section ('title', __('labels.backend.gem_sightings.management') . ' | ' . __('labels.backend.gem_sightings.edit'))

@section('breadcrumb-links')
@include('backend.gem_sightings.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($gem_sighting, 'PATCH', route('admin.gem_sighting.update', $gem_sighting->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.gem_sightings.management') }}
                        <small class="text-muted">{{ __('labels.backend.gem_sightings.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.gem_sightings.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.gem_sighting.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection