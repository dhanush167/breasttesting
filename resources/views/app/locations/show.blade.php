@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('locations.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.locations.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.locations.inputs.name')</h5>
                    <span>{{ $location->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.locations.inputs.address')</h5>
                    <span>{{ $location->address ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.locations.inputs.email')</h5>
                    <span>{{ $location->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.locations.inputs.contact_no')</h5>
                    <span>{{ $location->contact_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.locations.inputs.logo')</h5>
                    <x-partials.thumbnail
                        src="{{ $location->logo ? \Storage::url($location->logo) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('locations.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Location::class)
                <a href="{{ route('locations.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
