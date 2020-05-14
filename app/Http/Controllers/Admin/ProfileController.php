<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;


class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $news = new Profile;
        $form = $request->all();
        
        $news->fill($form);
        $news->save();
        return redirect('admin/profile/create');
        
    }
    
    public function index(Request $request)
  {
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
      $posts = Profile::where('title', $cond_title)->get();
    } else {
      $posts = Profile::all();
    }
    return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
    
    public function edit(Request $request)
    {
        $news = Profile::find($request->id);
        return view('admin.profile.edit' ,['news_form' => $news]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $news = Profile::find($request->id);
        
        $news_form = $request->all();
        
        unset($news_form['_token']);
        
        $news->fill($news_form)->save();
        
        return redirect('admin/profile/');
    }
    
    public function delete(Request $request)
    {
      // 該当するNews Modelを取得
      $news = Profile::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/profile/');
    }  
}