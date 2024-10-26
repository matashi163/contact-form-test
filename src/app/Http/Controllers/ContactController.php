<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        return view('index', ['categories' => Category::all()]);
    }

    public function confirm(ContactRequest $request)
    {
        $confirm = $request->all();
        return view('confirm', $confirm);
    }

    public function store(Request $request)
    {
        $button = $request->confirm_button;
        if($button == 'submit'){
            Contact::create($request->all());
            return view('thanks');
        }else if($button == 'modify'){
            return redirect('/');
        }
        
    }

    public function admin()
    {
        $categories = Category::all();
        $contacts = Contact::paginate(7);
        $category = Contact::with('category')->get();
        return view('admin', compact('categories', 'contacts', 'category'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        if($request->search_button == 'submit'){
           $contacts = Contact::with('category')->WordSearch($request->word)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->date)->paginate(7)->appends($request->query());
        }else if($request->search_button == 'reset'){
            $contacts = Contact::with('category')->paginate(7)->appends($request->query());
        }
        return view('admin', compact('categories', 'contacts'));
    }
}
