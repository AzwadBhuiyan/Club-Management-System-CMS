<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationInfo extends Model
{
    protected $table = 'application_info'; // Set the correct table name

    protected $fillable = [
        'application_title',
        'application_type',
        'application_date',
        'application_description',
        'applicant_name',
        'club_name',
        'onm_status',
        'cits_status',
        'facilities_status',
        'security_status',
        'finance_status',
        'administration_status',
        'councilaffairs_status',
        'mpr_status',
        'vc_status',
        'dean_status',
        'dosa_status',
        'onm_response',
        'cits_response',
        'facilities_response',
        'security_response',
        'finance_response',
        'adminisrtration_response',
        'councilaffairs_response',
        'mpr_response',
        'vc_response',
        'dean_response',
        'dosa_response',
    ];
}
