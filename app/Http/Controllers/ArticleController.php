<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Article;


class ArticleController extends Controller {


  public function createArticle(Request $request) {

    if ($request->isMethod('post')) {

      $article = new Article;
      $article->title = $request->input('title');
      $article->author = $request->input('author');
      $article->body = $request->input('body');
      $article->url = $request->input('url');

      $article->save();

      return redirect('/view-article/' . $article->id);
    }

    return view('edit');

  }


  public function viewArticle($id) {

    $article = Article::find($id);

    if (!$article) {
      throw new ModelNotFoundException();
    }

    return view('view', array('article' => $article));

  }


  public function showArticles() {

    $articles = Article::all();;
    return view('show', ['articles' => $articles]);

  }


  public function deleteArticle($id) {

    $article = Article::find($id);

    if (!$article) {
      throw new ModelNotFoundException();
    }

    $article->delete();

    return redirect('/show-articles');

  }


  public function updateArticle(Request $request, $id) {

    $article = Article::find($id);

    if (!$article) {
      throw new ModelNotFoundException();
    }


    if ($request->isMethod('post')) {

      $article->title = $request->input('title');
      $article->author = $request->input('author');
      $article->body = $request->input('body');
      $article->url = $request->input('url');

      $article->save();

      return redirect('/view-article/' . $article->id);
    }

    return view('edit', array('article' => $article));

  }

}
