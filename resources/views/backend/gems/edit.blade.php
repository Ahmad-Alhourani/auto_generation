@extends ('backend.layouts.app')

@section ('title', __('labels.backend.gems.management') . ' | ' . __('labels.backend.gems.edit'))

@section('breadcrumb-links')
@include('backend.gems.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($gem, 'PATCH', route('admin.gem.update', $gem->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.gems.management') }}
                        <small class="text-muted">{{ __('labels.backend.gems.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.gems.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.gem.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection