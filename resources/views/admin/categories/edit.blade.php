@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/categories/0') }}"><i class="far fa-folder-open"></i> Categorias</a>
</li>
@if($cat->parent != "0")
<li class="breadcrumb-item">
	<a href="{{ url('/admin/category/'.$cat->parent.'/subs') }}"><i class="far fa-folder-open"></i> {{ $cat->getParent->name }}</a>
</li>
@endif
<li class="breadcrumb-item">
	<a href="{{ url('/admin/category/'.$cat->id.'/edit') }}"><i class="far fa-folder-open"></i> Editando {{ $cat->name }}</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title"><i class="fas fa-edit"></i> Editar Categoria</h2>
				</div>

				<div class="inside">
					{!! Form::open(['url' => '/admin/category/'.$cat->id.'/edit', 'files' => true]) !!}
					<label for="name">Nombre:</label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard"></i>
						</span>
						{!! Form::text('name', $cat->name, ['class' => 'form-control']) !!}
					</div>


					<label for="name" class="mtop16">Orden:</label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard"></i>
						</span>
						{!! Form::number('order', $cat->order, ['class' => 'form-control']) !!}
					</div>

					{!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		
	</div>
</div>
@endsection