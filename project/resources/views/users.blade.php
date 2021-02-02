@extends('layout')

@section('title')Пользователи@endsection

@section('main_content')

<h1>Список пользователей</h1>
<p>Здесь выводится список пользователей</p>

@foreach ($users as $user)
	<div class="alert alert-success">
		<h4>{{ $user->username }}</h4>
		<p>{{ $user->number }}</p>
		<div>
			<a href="" class="btn btn-success">Edit</a>
			<a href="/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
			
		</div>
	</div>
@endforeach


@endsection