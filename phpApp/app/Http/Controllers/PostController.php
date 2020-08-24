<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use DB;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('posts.create');
    }


    public function createPost(Request $request)
    {
        $userdummy = Auth::user()->id;

        if ($this->findbyUserId($userdummy) == false) {
            return redirect()->action('PostController@getError');
        } else
            $post = Post::create([
                'answer' => $request->answer,
                'user_id' => Auth::user()->id,
            ]);

        return redirect()->action('PostController@getThePostStats');

    }

    public function checkIfAnswered()
    {
        return DB::table('posts')->where('user_id', Auth::user()->id)->value('answer');
    }

    public function getError()
    {
        return view('posts.error');
    }


    public function show($id)
    {
        return findbyUserId($id);

    }


    public function findbyUserId($id)
    {
        $data = DB::table('posts')->where('user_id', $id)->value('answer');
        if ($data == null) return true;
        else return false;
    }


    public function getThePostStats()
    {
        $data = DB::table('posts')
            ->select(
                DB::raw('answer as answer'),
                DB::raw('count(*) as number'))
            ->groupBy('answer')
            ->get();

        $dataForSurvey[] = ['Answer', 'Number'];
        foreach ($data as $key => $value) {
            $dataForSurvey[++$key] = [$value->answer, $value->number];
        }
        return view('posts.chart')->with('dataSurvey', json_encode($dataForSurvey));


    }


}
