<?php
// Front-end

Route::get('/', ['as' => 'site.index.index', function () {
  return view('site.index.index');
}]);

Route::get('/sobre', ['as' => 'site.pages.about', function () {
  return view('site.pages.about');
}]);

Route::get('/codigo-de-etica', ['as' => 'site.pages.codigodeetica', function () {
  return view('site.pages.codigodeetica');
}]);

Route::get('/governanca', ['as' => 'site.pages.governanca', function () {
  return view('site.pages.governanca');
}]);

Route::get('/missao', ['as' => 'site.pages.missao', function () {
  return view('site.pages.missao');
}]);

Route::get('/atuacao', ['as' => 'site.pages.atuacao', function () {
  return view('site.pages.atuacao');
}]);

Route::get('/oportunidades', ['as' => 'site.pages.oportunidade', function () {
  return view('site.pages.oportunidade');
}]);

Route::get('/seguranca', ['as' => 'site.pages.seguranca', function () {
  return view('site.pages.seguranca');
}]);

Route::get('/qualidade', ['as' => 'site.pages.qualidade', function () {
  return view('site.pages.qualidade');
}]);

Route::get('/socioambiental', ['as' => 'site.pages.socioambiental', function () {
  return view('site.pages.socioambiental');
}]);

Route::get('/faq', ['as' => 'site.pages.faq', function () {
  return view('site.pages.faq');
}]);

Route::get('/contato', ['as' => 'site.pages.contact', function () {
  return view('site.pages.contact');
}]);

// Blog

// Route::get('/noticias', ['as' => 'site.blog.index', function () {
//   return view('site.blog.index');
// }]);

Route::get('/blog_postname', ['as' => 'site.blog.blog-post', function () {
    return view('site.blog.blog-post');
  }]);

Route::get('/noticias', 'Site\BlogController@index')->name('site.blog.index');
Route::get('/noticia/detalhe/{slug}', 'Site\BlogController@post')->name('site.blog.post-detalhe');

Route::get('/noticia1', ['as' => 'site.blog.noticia-exame', function () {
  return view('site.blog.noticia-exame');
}]);

Route::get('/noticia2', ['as' => 'site.blog.noticia-tecnologistica', function () {
  return view('site.blog.noticia-tecnologistica');
}]);

Route::get('/noticia3', ['as' => 'site.blog.noticia-bunge1', function () {
  return view('site.blog.noticia-bunge1');
}]);

Route::get('/noticia4', ['as' => 'site.blog.noticia-bunge2', function () {
  return view('site.blog.noticia-bunge2');
}]);

Route::get('/noticia5', ['as' => 'site.blog.noticia-globorural', function () {
  return view('site.blog.noticia-globorural');
}]);

Route::get('/noticia6', ['as' => 'site.blog.noticia-folhasp', function () {
  return view('site.blog.noticia-folhasp');
}]);

Route::get('/noticia7', ['as' => 'site.blog.noticia-protecao', function () {
  return view('site.blog.noticia-protecao');
}]);

Route::get('/noticia8', ['as' => 'site.blog.noticia-amaggi', function () {
  return view('site.blog.noticia-amaggi');
}]);

Route::get('/noticia9', ['as' => 'site.blog.noticia-barcarena', function () {
  return view('site.blog.noticia-barcarena');
}]);

Route::get('/noticia10', ['as' => 'site.blog.noticia-ufra', function () {
  return view('site.blog.noticia-ufra');
}]);

Route::get('/conclusao-movimento-proteger', ['as' => 'site.blog.movimento-proteger', function () {
  return view('site.blog.movimento-proteger');
}]);

Route::get('/miritituba-1000-dias-sem-acidentes', ['as' => 'site.blog.noticia-miritituba', function () {
  return view('site.blog.noticia-miritituba');
}]);

Route::get('/unitapajos-quebra-cinco-recordes', ['as' => 'site.blog.noticia-recorde', function () {
  return view('site.blog.noticia-recorde');
}]);


rotasControle(
    function () {
     //Blog
     Route::get('Blog', ['uses' => 'Controle\BlogController@index', 'permissao' => 'controle.blog.index'])->name('controle.blog.index');
     Route::get('blog/create', ['uses' => 'Controle\BlogController@create', 'permissao' => 'controle.blog.create'])->name('controle.blog.create');
     Route::get('blog/edit/{id}', ['uses' => 'Controle\BlogController@edit', 'permissao' => 'controle.blog.edit'])->name('controle.blog.edit');
     Route::post('blog/store', ['uses' => 'Controle\BlogController@store', 'permissao' => 'controle.blog.store'])->name('controle.blog.store');
     Route::put('blog/update/{id}', ['uses' => 'Controle\BlogController@update', 'permissao' => 'controle.blog.update'])->name('controle.blog.update');
     Route::get('blog/delete/{id}', ['uses' => 'Controle\BlogController@destroy', 'permissao' => 'controle.blog.destroy'])->name('controle.blog.destroy');

     //Blog Posts
     Route::get('posts', ['uses' => 'Controle\PostController@index', 'permissao' => 'controle.post.index'])->name('controle.post.index');
     Route::get('post/create', ['uses' => 'Controle\PostController@create', 'permissao' => 'controle.post.create'])->name('controle.post.create');
     Route::get('post/edit/{id}', ['uses' => 'Controle\PostController@edit', 'permissao' => 'controle.post.edit'])->name('controle.post.edit');
     Route::post('post/store', ['uses' => 'Controle\PostController@store', 'permissao' => 'controle.post.store'])->name('controle.post.store');
     Route::put('post/update/{id}', ['uses' => 'Controle\PostController@update', 'permissao' => 'controle.post.update'])->name('controle.post.update');
     Route::get('post/delete/{id}', ['uses' => 'Controle\PostController@destroy', 'permissao' => 'controle.post.destroy'])->name('controle.post.destroy');
});
