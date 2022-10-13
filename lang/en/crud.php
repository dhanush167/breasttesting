<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'cancer_types' => [
        'name' => 'Cancer Types',
        'index_title' => 'CancerTypes List',
        'new_title' => 'New Cancer type',
        'create_title' => 'Create CancerType',
        'edit_title' => 'Edit CancerType',
        'show_title' => 'Show CancerType',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'locations' => [
        'name' => 'Locations',
        'index_title' => 'Locations List',
        'new_title' => 'New Location',
        'create_title' => 'Create Location',
        'edit_title' => 'Edit Location',
        'show_title' => 'Show Location',
        'inputs' => [
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'contact_no' => 'Contact No',
            'logo' => 'Logo',
        ],
    ],

    'booking_settings' => [
        'name' => 'Booking Settings',
        'index_title' => 'BookingSettings List',
        'new_title' => 'New Booking setting',
        'create_title' => 'Create BookingSetting',
        'edit_title' => 'Edit BookingSetting',
        'show_title' => 'Show BookingSetting',
        'inputs' => [
            'location_id' => 'Location',
            'year' => 'Year',
            'holidays' => 'Holidays',
            'weekly_working_days' => 'Weekly Working Days',
            'day_start_time' => 'Day Start Time',
            'day_end_time' => 'Day End Time',
            'slot_duration' => 'Slot Duration',
            'status' => 'Status',
        ],
    ],

    'checklists' => [
        'name' => 'Checklists',
        'index_title' => 'Checklists List',
        'new_title' => 'New Checklist',
        'create_title' => 'Create Checklist',
        'edit_title' => 'Edit Checklist',
        'show_title' => 'Show Checklist',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'common_problems' => [
        'name' => 'Common Problems',
        'index_title' => 'CommonProblems List',
        'new_title' => 'New Common problem',
        'create_title' => 'Create CommonProblem',
        'edit_title' => 'Edit CommonProblem',
        'show_title' => 'Show CommonProblem',
        'inputs' => [
            'problem' => 'Problem',
            'short_code' => 'Short Code',
        ],
    ],

    'examination_factors' => [
        'name' => 'Examination Factors',
        'index_title' => 'ExaminationFactors List',
        'new_title' => 'New Examination factor',
        'create_title' => 'Create ExaminationFactor',
        'edit_title' => 'Edit ExaminationFactor',
        'show_title' => 'Show ExaminationFactor',
        'inputs' => [
            'name' => 'Name',
            'type' => 'Type',
        ],
    ],

    'family_histories' => [
        'name' => 'Family Histories',
        'index_title' => 'FamilyHistories List',
        'new_title' => 'New Family history',
        'create_title' => 'Create FamilyHistory',
        'edit_title' => 'Edit FamilyHistory',
        'show_title' => 'Show FamilyHistory',
        'inputs' => [
            'patient_id' => 'Patient',
            'cancer_type_id' => 'Cancer Type',
            'degree' => 'Degree',
            'number_of_relative' => 'Number Of Relative',
        ],
    ],

    'followup_reasons' => [
        'name' => 'Followup Reasons',
        'index_title' => 'FollowupReasons List',
        'new_title' => 'New Followup reason',
        'create_title' => 'Create FollowupReason',
        'edit_title' => 'Edit FollowupReason',
        'show_title' => 'Show FollowupReason',
        'inputs' => [
            'reason' => 'Reason',
        ],
    ],

    'patien_followups' => [
        'name' => 'Patien Followups',
        'index_title' => 'PatienFollowups List',
        'new_title' => 'New Patien followup',
        'create_title' => 'Create PatienFollowup',
        'edit_title' => 'Edit PatienFollowup',
        'show_title' => 'Show PatienFollowup',
        'inputs' => [
            'patient_id' => 'Patient',
            'followup_reason_id' => 'Followup Reason',
            'other_comments' => 'Other Comments',
            'date' => 'Date',
        ],
    ],

    'patients' => [
        'name' => 'Patients',
        'index_title' => 'Patients List',
        'new_title' => 'New Patient',
        'create_title' => 'Create Patient',
        'edit_title' => 'Edit Patient',
        'show_title' => 'Show Patient',
        'inputs' => [
            'user_id' => 'User',
            'reg_no' => 'Reg No',
            'reg_date' => 'Reg Date',
            'age' => 'Age',
            'gender' => 'Gender',
            'marital_status' => 'Marital Status',
            'address' => 'Address',
            'children' => 'Children',
            'reason_for_visit' => 'Reason For Visit',
            'pmhx' => 'Pmhx',
            'pshx' => 'Pshx',
            'pre_pap_date' => 'Pre Pap Date',
            'pre_pap_result' => 'Pre Pap Result',
            'pre_uss_date' => 'Pre Uss Date',
            'pre_uss_result' => 'Pre Uss Result',
            'pre_hpv_date' => 'Pre Hpv Date',
            'pre_hpv_result' => 'Pre Hpv Result',
        ],
    ],

    'patient_bookings' => [
        'name' => 'Patient Bookings',
        'index_title' => 'PatientBookings List',
        'new_title' => 'New Patient booking',
        'create_title' => 'Create PatientBooking',
        'edit_title' => 'Edit PatientBooking',
        'show_title' => 'Show PatientBooking',
        'inputs' => [
            'location_id' => 'Location',
            'patient_id' => 'Patient',
            'booking_date' => 'Booking Date',
            'booking_slot' => 'Booking Slot',
            'booked_by' => 'Booked By',
            'booked_via' => 'Booked Via',
            'status' => 'Status',
        ],
    ],

    'patient_examinations' => [
        'name' => 'Patient Examinations',
        'index_title' => 'PatientExaminations List',
        'new_title' => 'New Patient examination',
        'create_title' => 'Create PatientExamination',
        'edit_title' => 'Edit PatientExamination',
        'show_title' => 'Show PatientExamination',
        'inputs' => [
            'patient_id' => 'Patient',
            'examination_factor_id' => 'Examination Factor',
            'value' => 'Value',
        ],
    ],

    'patient_investigations' => [
        'name' => 'Patient Investigations',
        'index_title' => 'PatientInvestigations List',
        'new_title' => 'New Patient investigation',
        'create_title' => 'Create PatientInvestigation',
        'edit_title' => 'Edit PatientInvestigation',
        'show_title' => 'Show PatientInvestigation',
        'inputs' => [
            'patient_id' => 'Patient',
            'pap' => 'Pap',
            'hpv_dna' => 'Hpv Dna',
        ],
    ],

    'patient_managment_plans' => [
        'name' => 'Patient Managment Plans',
        'index_title' => 'PatientManagmentPlans List',
        'new_title' => 'New Patient managment plan',
        'create_title' => 'Create PatientManagmentPlan',
        'edit_title' => 'Edit PatientManagmentPlan',
        'show_title' => 'Show PatientManagmentPlan',
        'inputs' => [
            'checklist_id' => 'Checklist',
            'patient_id' => 'Patient',
            'date' => 'Date',
        ],
    ],

    'patient_problems' => [
        'name' => 'Patient Problems',
        'index_title' => 'PatientProblems List',
        'new_title' => 'New Patient problem',
        'create_title' => 'Create PatientProblem',
        'edit_title' => 'Edit PatientProblem',
        'show_title' => 'Show PatientProblem',
        'inputs' => [
            'patient_id' => 'Patient',
            'common_problem_id' => 'Common Problem',
        ],
    ],

    'patient_risk_factors' => [
        'name' => 'Patient Risk Factors',
        'index_title' => 'PatientRiskFactors List',
        'new_title' => 'New Patient risk factor',
        'create_title' => 'Create PatientRiskFactor',
        'edit_title' => 'Edit PatientRiskFactor',
        'show_title' => 'Show PatientRiskFactor',
        'inputs' => [
            'patient_id' => 'Patient',
            'age_of_menarche' => 'Age Of Menarche',
            'lrmp' => 'Lrmp',
            'ocp' => 'Ocp',
            'hrt' => 'Hrt',
            'age_of_menopause' => 'Age Of Menopause',
            'post_menopausal_bleeding' => 'Post Menopausal Bleeding',
            'betel_chewing' => 'Betel Chewing',
            'areca_nut' => 'Areca Nut',
            'smoking' => 'Smoking',
            'alcohol' => 'Alcohol',
            'other_risk_factor' => 'Other Risk Factor',
            'sexual_hx' => 'Sexual Hx',
            'occupation_radiation' => 'Occupation Radiation',
        ],
    ],

    'patient_ultra_sound_scans' => [
        'name' => 'Patient Ultra Sound Scans',
        'index_title' => 'PatientUltraSoundScans List',
        'new_title' => 'New Patient ultra sound scan',
        'create_title' => 'Create PatientUltraSoundScan',
        'edit_title' => 'Edit PatientUltraSoundScan',
        'show_title' => 'Show PatientUltraSoundScan',
        'inputs' => [
            'patient_id' => 'Patient',
            'ultra_sound_scan_factor_id' => 'Ultra Sound Scan Factor',
            'value' => 'Value',
        ],
    ],

    'ultra_sound_scan_factors' => [
        'name' => 'Ultra Sound Scan Factors',
        'index_title' => 'UltraSoundScanFactors List',
        'new_title' => 'New Ultra sound scan factor',
        'create_title' => 'Create UltraSoundScanFactor',
        'edit_title' => 'Edit UltraSoundScanFactor',
        'show_title' => 'Show UltraSoundScanFactor',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'user_type' => 'User Type',
            'name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone No',
            'password' => 'Password',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
