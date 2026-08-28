<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ContactMessage;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        $services = Service::orderBy('order')->get();
        return view('services', compact('services'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }
    public function blog()
    {
        $articles = Article::orderBy('published_at', 'desc')->get();

        return view('blog', compact('articles'));
    }
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'request_type' => 'nullable|string|in:Suivie de projet,Audit,Gestion de projet,Autre'
        ]);
            ContactMessage::create($request->only('name', 'email', 'subject', 'request_type', 'message'));

        return back()->with('success', true);
    }
}
