@extends('layout')

@section('title')Главная страница@endsection



@section('main_content')

<div class="container">
	<h1>Главная</h1>
	<p>Здесь можно создать заказы</p>
	<a class="btn btn-primary" href="/review">Создать заказ</a>
	<a class="btn btn-primary" href="/review">Создать пользователя</a>
</div>


@endsection

