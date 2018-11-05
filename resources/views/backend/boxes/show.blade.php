@extends ('backend.layouts.app')

@section ('title', __('labels.backend.boxes.management') . ' | ' . __('labels.backend.boxes.view'))

@section('breadcrumb-links')
@include('backend.boxes.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.boxes.management') }}
                        <small class="text-muted">{{ __('labels.backend.boxes.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.boxes.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.boxes.content.created_at') }}:</strong> {{ $box->updated_at->timezone(get_user_timezone()) }} ({{ $box->created_at->diffForHumans() }}),
                        <strong>{{__('labels.backend.boxes.content.last_updated') }}:</strong> {{ $box->created_at->timezone(get_user_timezone()) }} ({{$box->updated_at->diffForHumans() }})
                        @if ($box->trashed())
                            <strong>{{ __('labels.backend.boxes.content.deleted_at') }}:</strong> $box->deleted_at->timezone(get_user_timezone())  ($box->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection