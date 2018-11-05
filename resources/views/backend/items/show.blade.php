@extends ('backend.layouts.app')

@section ('title', __('labels.backend.items.management') . ' | ' . __('labels.backend.items.view'))

@section('breadcrumb-links')
@include('backend.items.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.items.management') }}
                        <small class="text-muted">{{ __('labels.backend.items.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.items.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.items.content.created_at') }}:</strong> {{ $item->updated_at->timezone(get_user_timezone()) }} ({{ $item->created_at->diffForHumans() }}),
                        <strong>{{__('labels.backend.items.content.last_updated') }}:</strong> {{ $item->created_at->timezone(get_user_timezone()) }} ({{$item->updated_at->diffForHumans() }})
                        @if ($item->trashed())
                            <strong>{{ __('labels.backend.items.content.deleted_at') }}:</strong> $item->deleted_at->timezone(get_user_timezone())  ($item->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection