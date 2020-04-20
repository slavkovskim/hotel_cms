<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('/cms/news/index')->with('news', $news);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cms/news/create_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new News();

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $blog->cover_image = $cover->getFilename() . '.' . $extension;
            $blog->title = request('title');
            $blog->description = request('description');
            $blog->save();


        }
        else
        {
            $blog->title = request('title');
            $blog->description = request('description');
            $blog->save();


        }
        return \redirect('/cms/news/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('/cms/news/edit_news')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news_id = request('id_news');
        $blog = News::find($news_id);

//        $blog = new News();

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $blog->cover_image = $cover->getFilename() . '.' . $extension;
            $blog->title = request('title');
            $blog->description = request('description');
            $blog->save();


        }
        else
        {
            $blog->title = request('title');
            $blog->description = request('description');
            $blog->save();


        }
        return \redirect('/cms/news/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('news')->where('id', '=', $id)->delete();
        return redirect('/cms/news/index');
    }
}
