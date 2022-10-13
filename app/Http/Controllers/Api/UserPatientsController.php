<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Http\Resources\PatientCollection;

class UserPatientsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $patients = $user
            ->patients()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientCollection($patients);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->authorize('create', Patient::class);

        $validated = $request->validate([
            'reg_no' => ['required', 'string'],
            'reg_date' => ['required', 'date'],
            'age' => ['required', 'numeric'],
            'gender' => ['required', 'in:male,female,other'],
            'marital_status' => ['required', 'string'],
            'address' => ['required', 'string'],
            'children' => ['nullable', 'boolean'],
            'reason_for_visit' => ['nullable', 'string'],
            'pmhx' => ['nullable', 'string'],
            'pshx' => ['nullable', 'string'],
            'pre_pap_date' => ['nullable', 'date'],
            'pre_pap_result' => ['nullable', 'string'],
            'pre_uss_date' => ['nullable', 'date'],
            'pre_uss_result' => ['nullable', 'string'],
            'pre_hpv_date' => ['nullable', 'date'],
            'pre_hpv_result' => ['nullable', 'string'],
        ]);

        $patient = $user->patients()->create($validated);

        return new PatientResource($patient);
    }
}
