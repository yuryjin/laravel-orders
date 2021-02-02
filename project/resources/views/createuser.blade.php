@extends('layout')

@section('title')Создать пользователя@endsection

@section('main_content')



<h1>Форма добавления отзыва</h1>



@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>


@endif



<form method="post" action="/createuser/creation">
    @csrf
	<input type="text" name="username" id="username" placeholder="Введите имя пользователя" class="form-control">
	<input type="text" name="number" id="number" placeholder="Введите число заказов пользователя" class="form-control">
    <button type="submit" class="btn btn-success">Отправить</button>


</form>


@endsection