<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\models\Article;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
class ArticleController extends Controller
{
    protected function validator (array $data){
        return validator:: make($data , [
            'title' => 'required',
            'body' => 'required'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('welcome')->with('articles' , $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $article = Article::create($request->all());
        $request->session()->flash('message' , ' تم إضافة المدونة');
        return redirect()->route('home');
        $file = $request->file('thumbnail');
        $time = carpon::now();
        storage::disk('public')->putFileAs($directory , $file , $filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::whrer('id' , $id)->firstOrFail();
        return view('article')->with('article' , $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::whrer('id' , $id)->firstOrFail();
        return view('admin.edit')->with('article' , $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articles = Article::whrer('id' , $id)->firstOrFail();
        $article = Article::create($request->all());
        $request->session()->flash('message' , ' تم تعديل المدونة');
        return redirect()->route('home');

        if($request->file('thimbnail')){
            $file = $request->file('thumbnail');
            $time = carpon::now();
            storage::disk('public')->putFileAs($directory , $file , $filename);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
