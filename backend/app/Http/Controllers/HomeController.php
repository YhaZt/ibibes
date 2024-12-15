<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Incubatee;
use App\Models\News;
use App\Models\Mentor;
use App\Models\Investor;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $incubatees = Incubatee::select('company_name', 'product_image')
            ->distinct('company_name')
            ->get();
        $mentors = Mentor::select('company', 'mentor_image')
            ->distinct('company')
            ->get();
        $investors = Investor::select('company_name', 'investor_image')
            ->distinct('company_name')
            ->get();
        $newsItems = News::with('category')
            ->orderBy('publication_date', 'desc')
            ->take(5)
            ->get();

        // dd($newsItems->toArray());
        return view('Homepage.index', compact('incubatees', 'mentors', 'investors', 'newsItems'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
