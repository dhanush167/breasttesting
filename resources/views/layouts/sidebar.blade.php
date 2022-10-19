<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="https://vemto.app/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">breasttesting</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @auth

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Manage Patient
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            @can('view-any', App\Models\FamilyHistory::class)
                                <li class="nav-item">
                                    <a href="{{ route('family-histories.index') }}" class="nav-link {{ (request()->is('admin/family-histories')) ? 'active' : '' }}">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Family Histories</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\PatienFollowup::class)
                                <li class="nav-item">
                                    <a href="{{ route('patien-followups.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patien Followups</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\Patient::class)
                                <li class="nav-item">
                                    <a href="{{ route('patients.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patients</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\PatientBooking::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-bookings.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Bookings</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\PatientExamination::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-examinations.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Examinations</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\PatientInvestigation::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-investigations.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Investigations</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\PatientManagmentPlan::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-managment-plans.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Managment Plans</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\PatientProblem::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-problems.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Problems</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\PatientRiskFactor::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-risk-factors.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Risk Factors</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\PatientUltraSoundScan::class)
                                <li class="nav-item">
                                    <a href="{{ route('patient-ultra-sound-scans.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Patient Ultra Sound Scans</p>
                                    </a>
                                </li>
                            @endcan


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Manage Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-any', App\Models\CancerType::class)
                                <li class="nav-item">
                                    <a href="{{ route('cancer-types.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Cancer Types</p>
                                    </a>
                                </li>
                            @endcan


                            @can('view-any', App\Models\Location::class)
                                <li class="nav-item">
                                    <a href="{{ route('locations.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Locations</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\Checklist::class)
                                <li class="nav-item">
                                    <a href="{{ route('checklists.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Checklists</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\CommonProblem::class)
                                <li class="nav-item">
                                    <a href="{{ route('common-problems.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Common Problems</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\ExaminationFactor::class)
                                <li class="nav-item">
                                    <a href="{{ route('examination-factors.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Examination Factors</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\FollowupReason::class)
                                <li class="nav-item">
                                    <a href="{{ route('followup-reasons.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Followup Reasons</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\UltraSoundScanFactor::class)
                                <li class="nav-item">
                                    <a href="{{ route('ultra-sound-scan-factors.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Ultra Sound Scan Factors</p>
                                    </a>
                                </li>
                            @endcan


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Manage Settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                        @can('view-any', App\Models\User::class)
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\BookingSetting::class)
                                <li class="nav-item">
                                    <a href="{{ route('booking-settings.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Booking Settings</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) ||
                        Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon icon ion-md-key"></i>
                                <p>
                                    Manage Access
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('view-any', Spatie\Permission\Models\Role::class)
                                    <li class="nav-item">
                                        <a href="{{ route('roles.index') }}" class="nav-link">
                                            <i class="nav-icon icon ion-md-radio-button-off"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                @endcan

                                @can('view-any', Spatie\Permission\Models\Permission::class)
                                    <li class="nav-item">
                                        <a href="{{ route('permissions.index') }}" class="nav-link">
                                            <i class="nav-icon icon ion-md-radio-button-off"></i>
                                            <p>Permissions</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif
                @endauth


                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon icon ion-md-exit"></i>
                            <p>{{ __('Logout') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
