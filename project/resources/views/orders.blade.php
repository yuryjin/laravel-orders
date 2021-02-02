@extends('layout')

@section('title')Заказы@endsection

@section('main_content')

<h1>Список заказов</h1>
<p>Здесь выводится список заказов</p>

@foreach ($orders as $order)
	<div class="alert alert-success">
		<h4>{{ $order->email }}</h4>
		<p>{{ $order->username }}</p>
		<p>{{ $order->order }}</p>
	</div>
@endforeach


@endsection