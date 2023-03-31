<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        // $data['articles'] = DB::table('articles')->get();
        $data['articles'] = Article::all();

        return view('articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        $data['categories'] = [
            ['id' => 1, 'name' => 'Sports'],
            ['id' => 2, 'name' => 'Entertainment'],
            ['id' => 3, 'name' => 'Politics'],
            ['id' => 4, 'name' => 'World'],
        ];
        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $inputData = $request->except('_token');
        // $inputData['slug'] = Str::slug($request->input('title'));

        // DB::table('articles')->insert($inputData);
        // Article::insert($inputData);

        $article = new Article();
        // $article->fill($inputData);

        $article->title = $request->input('title');
        $article->slug = Str::slug($request->input('title'));
        $article->description = $request->input('description');
        $article->author_name = $request->input('author_name');
        $article->categories = $request->input('categories');
        $article->save();


        return redirect()->to('articles')->with(['message' => 'article data inserted']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
