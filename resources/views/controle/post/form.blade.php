@extends('bredicoloradmin::layouts.controle')

@section('content')
    <!-- begin breadcrumb -->
    @component('bredicoloradmin::components.migalha')
        <li class="breadcrumb-item"><a href="{{ route('controle.blog.index') }}">Blog</a></li>
    @endcomponent
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Post</h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                    <h4 class="panel-title">Post</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model(isset($post) ? $post : null,['route' => (isset($post->id)
                    ? ['controle.post.update', $post->id, '_method' => 'PUT']
                    : 'controle.post.store'), 'files' => true]) !!}
                        <fieldset>

                            <div class="form-group">
                                <label for="title">Título <span style="color: red">*</span></label>
                                {!! Form::text('title', null, ['class' => 'form-control', 'required', 'maxlength' => '191']) !!}
                            </div>

                            <div class="form-group">
                                <label for="description">Descrição </span></label>
                                {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => '191']) !!}
                            </div>

                            <div class="form-group">
                                <label for="image">Imagem <span style="color: red">*</span></label>
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                                <span>Formatos compatíveis: (jpeg, png, bmp, gif, svg, ou webp)</span>
                            </div>

                            @isset ($post->image)
                            <div class="form-group">
                                <img width="150" height="68" src="{{ route('imagem.render', 'posts/p/' . $post->image) }}">
                            </div>
                            @endisset

                            <div class="form-group">
                                <label for="content">Conteúdo <span style="color: red">*</span></label>
                                {!! Form::textarea('content', null, ['class' => 'form-control tinymce', 'data-editor-size' => "500"]) !!}
                            </div>

                            <div class="form-group">
                                <label for="published_at">Data de Publicação <span style="color: red">*</span></label>
                                {!! Form::date('published_at', null, ['class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="checkbox checkbox-css m-b-20">
                                <div class="form-check m-r-10">
                                    {!! Form::checkbox('active', 1, null, ['class' => 'form-check-input', 'id' => 'active']) !!}
                                    <label class="form-check-label" for="active">Ativo ?</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <span>Campos com (<span style="color:red">*</span>) são obrigatórios.</span>
                            </div>

                            @can((isset($post->id)) ? 'controle.post.update' : 'controle.post.store')
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Salvar</button>
                            @endcan
                            <a href="{{ route('controle.blog.index') }}" class="btn btn-sm btn-default">Cancelar</a>
                        </fieldset>
                    {!! Form::close() !!}

                </div> <!-- panel-body -->
            </div>
            <!-- end panel -->

        </div>
    </div>

@stop
