<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use App\Models\News;
use App\Models\Category;
use App\Models\Tag;
use App\Models\NewsVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class NewsController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.news-management', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        Log::info('Raw content being saved: ' . $request->content);  // Logs raw content
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
            'publication_date' => 'required|date',
        ]);
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'publication_date' => $request->publication_date,
        ]);
        $news->tags()->attach($request->tags);
    }

    public function index()
    {
        $newsItems = News::with('tags')->paginate(3);
        $importantCategoryId = Category::where('name', 'Important')->value('id');
        $latestNews = News::orderBy('publication_date', 'desc')->take(5)->get();
        $importantNews = News::where('category_id', $importantCategoryId)
            ->orderBy('publication_date', 'desc')
            ->take(5)
            ->get();
        $topViews = NewsVisitor::orderBy('number_of_visit', 'desc')->take(5)->get();
        $milestoneCategoryId = Category::where('name', 'Milestone')->value('id');
        $milestonesNews = News::where('category_id', $milestoneCategoryId)
            ->orderBy('publication_date', 'desc')
            ->take(5)
            ->get();
        return view('news.index', compact('newsItems','latestNews', 'importantNews', 'topViews', 'milestonesNews'));
    }



    public function show($id)
    {
        try {
            $decryptedId = Crypt::decrypt($id);
            $shownews = News::findOrFail($decryptedId);
            return view('homepage.news-page', compact('shownews'));
        } catch (\Exception $e) {
            abort(404, 'News not found');
        }
    }

}
