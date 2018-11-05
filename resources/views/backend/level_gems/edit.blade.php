@extends ('backend.layouts.app')

@section ('title', __('labels.backend.level_gems.management') . ' | ' . __('labels.backend.level_gems.edit'))

@section('breadcrumb-links')
@include('backend.level_gems.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($level_gem, 'PATCH', route('admin.level_gem.update', $level_gem->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.level_gems.management') }}
                        <small class="text-muted">{{ __('labels.backend.level_gems.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.level_gems.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.level_gem.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection