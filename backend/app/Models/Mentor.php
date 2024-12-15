<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'join_mentors';

    protected $fillable = [
        'current_occupation',
        'company',
        'designation',
        'year_of_experience',
        'industry_name',
        'why_interested',
        'what_can_offer',
        'already_mentored_startups',
        'conflict_of_interest',
        'other_notes',
        'mentor_last_name',
        'mentor_first_name',
        'mentor_middle_name',
        'mentor_image',
        'mentor_birthday',
        'gender',
        'email_address',
        'contact_number',
        'country_residence',
        'is_active',
        'password',
        'token',
        'application_file'

    ];
}

