@extends('bredicoloradmin::layouts.controle')

@section('content')
    <!-- begin breadcrumb -->
    @component('bredicoloradmin::components.migalha')
        <li class="breadcrumb-item"><a href="{{ route('controle.banner.index') }}">Banners Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
    @endcomponent
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Banners</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                    @can('controle.banner.create')
                    <a href="{{ route('controle.banner.create') }}" class="btn btn-xs btn-circle2 btn-success"><i class="fa fa-plus"></i> Novo Registro</a>
                    @endcan
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
            <h4 class="panel-title">Banners</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped m-b-0 sort-table">
                    <thead>
                        <tr>
                            <th>Ordem</th>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Status</th>
                            <th width="20%">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($banners)
                        @forelse ($banners as $index => $banner)
                        <tr id="{{ $banner->id }}">
                        <td>|| {{ $index+1 }}</td>
                        <td>{{$banner->name}}</td>
                        <td><img src="{{ route('imagem.render', 'banners/p/' . $banner->image) }}" /></td>
                        <td>{{setActive($banner->active)}}</td>
                        <td><a href="{{route('controle.banner.edit', $banner->id)}}">
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            </a>
                            <a class="btn btn-danger btn-sm atencao" data-url="{{route('controle.banner.destroy', $banner->id)}}"
                                href="javascript:;"><i class="fas fa-trash-alt"></i> Excluir</a>
                        </td>
                        </tr>
                        @empty
                        @endforelse
                        @endisset
                    </tbody>
                </table>
            </div>

        </div>
        {{-- <div class="box-footer">
        @isset($banners)
        {{$banners->links()}}
        @endisset
        </div> --}}
    </div>
    <!-- end panel -->
@stop

@section('scripts')
<script>
	$( ".sort-table tbody" ).sortable({
		forceHelperSize: true,
		stop:function(event,ui){
			let order = [];
			for(cell of event.target.rows){
				order.push(cell.id);
				let viewOrder = 1;
				$( ".sort-table tbody tr" )
				.each(function(val, i){
					$(i).find('td:eq(0)').html('<span style="padding-left: .5rem; padding-right: .5rem;font-weight: bold;cursor:move;">||</span> '+ viewOrder);
					viewOrder++;
				});
			}
			$.ajax({
				url: '{{ route("controle.helper.order") }}',
				data: {'order':order,'obj':'Banner','_token':'{{ csrf_token() }}'},
				dataType: 'html',
				success: function(data) {
					//console.log(data)
				},
				type: 'POST'
			});
		}
	});
</script>
@endsection
