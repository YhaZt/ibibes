<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incubatee extends Model
{
        use HasFactory;

        protected $table = 'join_incubatees';
        protected $fillable = [
            'company_name',
            'product_name',
            'product_image',
            'product_description',
            'innovation_industry',
            'technology_readiness',
            'seed_grant',
            'founder_last_name',
            'founder_first_name',
            'founder_middle_name',
            'founder_image',
            'founder_birthday',
            'gender',
            'email_address',
            'contact_number',
            'seen_in',
            'is_active',
            'password',
            'token',
            'application_file',
            'are_you',
            'way_to',
            'product_to',
            'solution_to',
            'help_from',
            'address',
            'age'

        ];
    }
