@extends ('backend.layouts.app')

@section ('title', __('labels.backend.players.management') . ' | ' . __('labels.backend.players.view'))

@section('breadcrumb-links')
@include('backend.players.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.players.management') }}
                        <small class="text-muted">{{ __('labels.backend.players.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.players.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.players.content.created_at') }}:</strong> {{ $player->updated_at->timezone(get_user_timezone()) }} ({{ $player->created_at->diffForHumans() }}),
                        <strong>{{__('labels.backend.players.content.last_updated') }}:</strong> {{ $player->created_at->timezone(get_user_timezone()) }} ({{$player->updated_at->diffForHumans() }})
                        @if ($player->trashed())
                            <strong>{{ __('labels.backend.players.content.deleted_at') }}:</strong> $player->deleted_at->timezone(get_user_timezone())  ($player->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection