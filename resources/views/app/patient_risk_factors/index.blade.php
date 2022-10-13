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
                @can('create', App\Models\PatientRiskFactor::class)
                <a
                    href="{{ route('patient-risk-factors.create') }}"
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
                <h4 class="card-title">
                    @lang('crud.patient_risk_factors.index_title')
                </h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.patient_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.age_of_menarche')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.lrmp')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.ocp')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.hrt')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.age_of_menopause')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.post_menopausal_bleeding')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.betel_chewing')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.areca_nut')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.smoking')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.alcohol')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.other_risk_factor')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.sexual_hx')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_risk_factors.inputs.occupation_radiation')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($patientRiskFactors as $patientRiskFactor)
                        <tr>
                            <td>
                                {{ optional($patientRiskFactor->patient)->reg_no
                                ?? '-' }}
                            </td>
                            <td>
                                {{ $patientRiskFactor->age_of_menarche ?? '-' }}
                            </td>
                            <td>{{ $patientRiskFactor->lrmp ?? '-' }}</td>
                            <td>{{ $patientRiskFactor->ocp ?? '-' }}</td>
                            <td>{{ $patientRiskFactor->hrt ?? '-' }}</td>
                            <td>
                                {{ $patientRiskFactor->age_of_menopause ?? '-'
                                }}
                            </td>
                            <td>
                                {{ $patientRiskFactor->post_menopausal_bleeding
                                ?? '-' }}
                            </td>
                            <td>
                                {{ $patientRiskFactor->betel_chewing ?? '-' }}
                            </td>
                            <td>{{ $patientRiskFactor->areca_nut ?? '-' }}</td>
                            <td>{{ $patientRiskFactor->smoking ?? '-' }}</td>
                            <td>{{ $patientRiskFactor->alcohol ?? '-' }}</td>
                            <td>
                                {{ $patientRiskFactor->other_risk_factor ?? '-'
                                }}
                            </td>
                            <td>{{ $patientRiskFactor->sexual_hx ?? '-' }}</td>
                            <td>
                                {{ $patientRiskFactor->occupation_radiation ??
                                '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $patientRiskFactor)
                                    <a
                                        href="{{ route('patient-risk-factors.edit', $patientRiskFactor) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $patientRiskFactor)
                                    <a
                                        href="{{ route('patient-risk-factors.show', $patientRiskFactor) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $patientRiskFactor)
                                    <form
                                        action="{{ route('patient-risk-factors.destroy', $patientRiskFactor) }}"
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
                            <td colspan="15">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="15">
                                {!! $patientRiskFactors->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
