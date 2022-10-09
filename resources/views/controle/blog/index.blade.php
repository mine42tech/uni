@extends('bredicoloradmin::layouts.controle')

@section('content')
    <!-- begin breadcrumb -->
    @component('bredicoloradmin::components.migalha')
        <li class="breadcrumb-item"><a href="{{ route('controle.blog.index') }}">Blog</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li> --}}
    @endcomponent
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Posts</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                    @can('controle.post.create')
                    <a href="{{ route('controle.post.create') }}" class="btn btn-xs btn-circle2 btn-success"><i class="fa fa-plus"></i> Novo Registro</a>
                    @endcan
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            </div>
            <h4 class="panel-title">Posts</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped m-b-0 sort-table">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Imagem</th>
                            <th>Data de Publicação</th>
                            <th>Status</th>
                            <th width="20%">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($posts)
                        @forelse ($posts as $post)
                        <tr>
                        <td>{{$post->title}}</td>
                        <td><img src="{{ route('imagem.render', 'posts/p/' . $post->image) }}" /></td>
                        <td>{{dateBr($post->published_at)}}</td>
                        <td>{{setActive($post->active)}}</td>
                        <td><a href="{{route('controle.post.edit', $post->id)}}">
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            </a>
                            <a class="btn btn-danger btn-sm atencao" data-url="{{route('controle.post.destroy', $post->id)}}"
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
        @isset($posts)
        {{$posts->links()}}
        @endisset
        </div> --}}
    </div>
    <!-- end panel -->
@stop

{{-- @section('scripts')
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
@endsection --}}
