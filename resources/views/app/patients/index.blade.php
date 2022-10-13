@extends('layouts.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\Patient::class)
                <a
                    href="{{ route('patients.create') }}"
                    class="btn btn-primary"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.patients.index_title')</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.patients.inputs.user_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.reg_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.reg_date')
                            </th>
                            <th class="text-right">
                                @lang('crud.patients.inputs.age')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.gender')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.marital_status')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.address')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.children')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.reason_for_visit')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pmhx')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pshx')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_pap_date')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_pap_result')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_uss_date')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_uss_result')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_hpv_date')
                            </th>
                            <th class="text-left">
                                @lang('crud.patients.inputs.pre_hpv_result')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($patients as $patient)
                        <tr>
                            <td>{{ optional($patient->user)->name ?? '-' }}</td>
                            <td>{{ $patient->reg_no ?? '-' }}</td>
                            <td>{{ $patient->reg_date ?? '-' }}</td>
                            <td>{{ $patient->age ?? '-' }}</td>
                            <td>{{ $patient->gender ?? '-' }}</td>
                            <td>{{ $patient->marital_status ?? '-' }}</td>
                            <td>{{ $patient->address ?? '-' }}</td>
                            <td>{{ $patient->children ?? '-' }}</td>
                            <td>{{ $patient->reason_for_visit ?? '-' }}</td>
                            <td>{{ $patient->pmhx ?? '-' }}</td>
                            <td>{{ $patient->pshx ?? '-' }}</td>
                            <td>{{ $patient->pre_pap_date ?? '-' }}</td>
                            <td>{{ $patient->pre_pap_result ?? '-' }}</td>
                            <td>{{ $patient->pre_uss_date ?? '-' }}</td>
                            <td>{{ $patient->pre_uss_result ?? '-' }}</td>
                            <td>{{ $patient->pre_hpv_date ?? '-' }}</td>
                            <td>{{ $patient->pre_hpv_result ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $patient)
                                    <a
                                        href="{{ route('patients.edit', $patient) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $patient)
                                    <a
                                        href="{{ route('patients.show', $patient) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $patient)
                                    <form
                                        action="{{ route('patients.destroy', $patient) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="18">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="18">{!! $patients->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
