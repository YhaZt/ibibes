<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $table = 'join_investors';

    protected $fillable = [
        'company_name',
        'type_of_investor',
        'investment_size',
        'country_residence',
        'investor_last_name',
        'investor_first_name',
        'investor_middle_name',
        'investor_image',
        'investor_birthday',
        'gender',
        'email_address',
        'contact_number',
        'industry_problem',
        'business_to_support',
        'is_active',
        'password',
        'token',
        'application_file'
    ];
}

