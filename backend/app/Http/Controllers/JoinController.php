<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Incubatee;
use App\Models\Mentor;
use App\Models\Investor;
use Illuminate\Support\Facades\Storage;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function store_Incubatee(Request $request)
    {
        $request->validate([
            'companyName' => 'required|string|max:255',
            'productname' => 'required|string|max:255',
            'productimage' => 'required|image|mimes:jpeg,png|max:700',
            'applicationfile' => 'required|mimes:pdf|max:700',
            'productdescription' => 'required|string',
            'innovation' => 'required|string',
            'technology' => 'required|string',
            'grants' => 'required|boolean',
            'founders' => 'required|array|min:1',
            'founders.*.surName' => 'required|string|max:255',
            'founders.*.firstName' => 'required|string|max:255',
            'founders.*.middleName' => 'nullable|string|max:255',
            'founders.*.founderimage' => 'required|image|mimes:jpeg,png,gif|max:700',
            'founders.*.birthDateTest' => 'required|date',
            'founders.*.gender' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $token = Str::uuid();
        $companyName = $request->input('companyName');
        $productImagePath = $request->file('productimage')->store("Incubatee/{$companyName}/productimage", 'public');
        $applicationFilePath = $request->file('applicationfile')->store("Incubatee/{$companyName}/applicationfile", 'public');
        $seenIn = $request->input('seen_in', []);
        $seenInString = implode(',', $seenIn);
        foreach ($request->input('founders') as $index => $founder) {
            $founderDirectoryPath = "Incubatee/{$companyName}/{$founder['surName']},{$founder['firstName']}/founderimage";
            $founderImagePath = '';
            if ($request->hasFile("founders.{$index}.founderimage")) {
                $founderImagePath = $request->file("founders.{$index}.founderimage")->store($founderDirectoryPath, 'public');
            }
            do {
                $token = Str::uuid();
            } while (Incubatee::where('token', $token)->exists());
            Incubatee::create([
                'company_name' => $companyName,
                'product_name' => $request->input('productname'),
                'product_image' => $productImagePath,
                'product_description' => $request->input('productdescription'),
                'innovation_industry' => $request->input('innovation'),
                'technology_readiness' => $request->input('technology'),
                'seed_grant' => $request->boolean('grants'),
                'seen_in' => $seenInString,
                'application_file' => $applicationFilePath,
                'email_address' => $request->input('email'),
                'contact_number' => $request->input('contact'),
                'founder_last_name' => $founder['surName'],
                'founder_first_name' => $founder['firstName'],
                'founder_middle_name' => $founder['middleName'],
                'founder_image' => $founderImagePath,
                'founder_birthday' => $founder['birthDateTest'],
                'gender' => $founder['gender'],
                'password' => bcrypt($request->input('password')),
                'is_active' => true,
                'token' => $token,
            ]);
        }
        return redirect()->back()->with('success', 'Incubatee information saved successfully.');
    }

    // code to get the founder data
    //     $incubatee = Incubatee::find($id); // Get the Incubatee record
    // $founders = explode(';', $incubatee->founders);
    // foreach ($founders as $founderData) {
    //     $founderFields = explode(',', $founderData);
    //     $surName = $founderFields[0];
    //     $firstName = $founderFields[1];
    //     $middleName = $founderFields[2];
    //     $founderImage = $founderFields[3];
    //     $birthDate = $founderFields[4];
    //     $gender = $founderFields[5];
    // }

    public function store_Mentor(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'current_occupation' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'country_residence' => 'required|string|max:255',
                'designation' => 'required|string',
                'year_of_experience' => 'required|string',
                'industry_name' => 'required|string',
                'already_mentored_startups' => 'required|string',
                'why_interested' => 'nullable|string|max:4000',
                'what_can_offer' => 'nullable|string|max:4000',
                'conflict_of_interest' => 'nullable|string|max:4000',
                'other_notes' => 'nullable|string|max:4000',
                'mentor_last_name' => 'required|string|max:255',
                'mentor_first_name' => 'required|string|max:255',
                'mentor_middle_name' => 'nullable|string|max:255',
                'mentor_image' => 'required|image|mimes:jpeg,png,gif|max:700',
                'mentor_birthday' => 'required',
                'gender' => 'required|string',
                'email_address' => 'required|email|max:255',
                'contact_number' => 'required|string|max:20',
                'password' => 'required|string|min:8|confirmed',
            ]);
            $mentorImagePath = $request->file('mentor_image')->store('mentor_images', 'public');
            $token = Str::uuid();
            do {
                $token = Str::uuid();
            } while (Incubatee::where('token', $token)->exists());
            $mentor = Mentor::create([
                'current_occupation' => $request->input('current_occupation'),
                'country_residence' => $request->input('country_residence'),
                'company' => $request->input('company'),
                'designation' => $request->input('designation'),
                'year_of_experience' => $request->input('year_of_experience'),
                'industry_name' => $request->input('industry_name'),
                'what_can_offer' => $request->input('what_can_offer'),
                'conflict_of_interest' => $request->input('conflict_of_interest'),
                'other_notes' => $request->input('other_notes'),
                'already_mentored_startups' => $request->boolean('already_mentored_startups'),
                'why_interested' => $request->input('why_interested'),
                'mentor_last_name' => $request->input('mentor_last_name'),
                'mentor_first_name' => $request->input('mentor_first_name'),
                'mentor_middle_name' => $request->input('mentor_middle_name'),
                'mentor_image' => $mentorImagePath,
                'mentor_birthday' => $request->input('mentor_birthday'),
                'gender' => $request->input('gender'),
                'email_address' => $request->input('email_address'),
                'other_information' => $request->input('other_information'),
                'contact_number' => $request->input('contact_number'),
                'password' => bcrypt($request->input('password')),
                'is_active' => true,
                'token' => $token,
                'application_file' => 'TO BE UPDATED'
            ]);
            return redirect()->back()->with('success', 'Mentor information saved successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred while saving mentor information. Please try again.');
        }
    }
    public function store_Investor(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'type_of_investor' => 'required|string|max:255',
            'investment_size' => 'required|string',
            'country_residence' => 'required|string',
            'investor_last_name' => 'required|string|max:255',
            'investor_first_name' => 'required|string|max:255',
            'investor_middle_name' => 'nullable|string|max:255',
            'investor_image' => 'required|image|mimes:jpeg,png,gif|max:700',
            'investor_birthday' => 'required|date',
            'gender' => 'required|string',
            'email_address' => 'required|email|max:255',
            'business_to_support' => 'nullable|string|max:255',
            'industry_problem' => 'nullable|string|max:255',
            'contact_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $token = Str::uuid();
        do {
            $token = Str::uuid();
        } while (Incubatee::where('token', $token)->exists());
        $investorImagePath = $request->file('investor_image')->store('investor_images', 'public');
        Investor::create([
            'company_name' => $request->input('company_name'),
            'type_of_investor' => $request->input('type_of_investor'),
            'investment_size' => $request->input('investment_size'),
            'country_residence' => $request->input('country_residence'),
            'investor_last_name' => $request->input('investor_last_name'),
            'investor_first_name' => $request->input('investor_first_name'),
            'investor_middle_name' => $request->input('investor_middle_name'),
            'investor_image' => $investorImagePath,
            'investor_birthday' => $request->input('investor_birthday'),
            'gender' => $request->input('gender'),
            'email_address' => $request->input('email_address'),
            'contact_number' => $request->input('contact_number'),
            'industry_problem' => $request->input('industry_problem'),
            'business_to_support' => $request->input('business_to_support'),
            'password' => bcrypt($request->input('password')),
            'is_active' => true,
            'token' => $token,
            'application_file' => 'TO BE UPDATED'
        ]);

        return redirect()->back()->with('success', 'Investor information saved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
