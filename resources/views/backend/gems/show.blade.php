@extends ('backend.layouts.app')

@section ('title', __('labels.backend.gems.management') . ' | ' . __('labels.backend.gems.view'))

@section('breadcrumb-links')
@include('backend.gems.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.gems.management') }}
                        <small class="text-muted">{{ __('labels.backend.gems.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.gems.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.gems.content.created_at') }}:</strong> {{ $gem->updated_at->timezone(get_user_timezone()) }} ({{ $gem->created_at->diffForHumans() }}),
                        <strong>{{__('labels.backend.gems.content.last_updated') }}:</strong> {{ $gem->created_at->timezone(get_user_timezone()) }} ({{$gem->updated_at->diffForHumans() }})
                        @if ($gem->trashed())
                            <strong>{{ __('labels.backend.gems.content.deleted_at') }}:</strong> $gem->deleted_at->timezone(get_user_timezone())  ($gem->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection