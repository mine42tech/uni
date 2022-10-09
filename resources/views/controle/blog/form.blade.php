@extends('bredicoloradmin::layouts.controle')

@section('content')
    <!-- begin breadcrumb -->
    @component('bredicoloradmin::components.migalha')
        <li class="breadcrumb-item"><a href="{{ route('controle.banner.index') }}">Banners Home</a></li>
    @endcomponent
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Banner</h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                    <h4 class="panel-title">Banner</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model(isset($banner) ? $banner : null,['route' => (isset($banner->id)
                    ? ['controle.banner.update', $banner->id, '_method' => 'PUT']
                    : 'controle.banner.store'), 'files' => true]) !!}
                        <fieldset>

                            <div class="form-group">
                                <label for="name">Nome <span style="color: red">*</span></label>
                                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="image">Imagem <span style="color: red">*</span></label>
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                                <span>Formatos compatíveis: (jpeg, png, bmp, gif, svg, ou webp)</span>
                                <br>
                                <span>Tamanho Recomendado: (<strong>Altura: 648px / Largura: 1920px</strong>)</span>
                            </div>

                            @isset ($banner->image)
                            <div class="form-group">
                                <img width="150" height="68" src="{{ route('imagem.render', 'banners/p/' . $banner->image) }}">
                            </div>
                            @endisset

                            <div class="checkbox checkbox-css m-b-20">
                                <div class="form-check m-r-10">
                                    {!! Form::checkbox('active', 1, null, ['class' => 'form-check-input', 'id' => 'active']) !!}
                                    <label class="form-check-label" for="active">Ativo ?</label>
                                </div>

                            </div>

                            <div class="form-group">
                                <span>Campos com (<span style="color:red">*</span>) são obrigatórios.</span>
                            </div>

                            @can((isset($banner->id)) ? 'controle.banner.update' : 'controle.banner.store')
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Salvar</button>
                            @endcan
                            <a href="{{ route('controle.banner.index') }}" class="btn btn-sm btn-default">Cancelar</a>
                        </fieldset>
                    {!! Form::close() !!}

                </div> <!-- panel-body -->
            </div>
            <!-- end panel -->

        </div>
    </div>

@stop
