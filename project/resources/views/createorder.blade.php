@extends('layout')

@section('title')Создать заказ@endsection

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



<form method="post" action="/createorder/creation">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email пользователя" class="form-control">
    <input type="text" name="username" id="username" placeholder="Введите имя пользователя" class="form-control">
    <textarea name="order" id="order" cols="30" rows="10" class="form-control"
        placeholder="Введите заказ"></textarea>
    <button type="submit" class="btn btn-success">Отправить</button>


</form>


@endsection