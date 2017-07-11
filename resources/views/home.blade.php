@extends('layouts.app')

@section('content')
	<div style="background-color: antiquewhite">
		<div class="container">
			<div class="col-md-6 col-md-offset-3" style="padding: 160px 0px;">
				<div class="inner-addon right-addon">
					<i class="glyphicon glyphicon-search"></i>
					<input class="primary-search" type="text" placeholder="Buscar" name="search">
				</div>
				<p class="uppercase text-right"><span class="buy-sell">Compra, Vende</span><br>
				<span class="anuncia">Anuncia!</span></p>
			</div>
		</div>
	</div>
<div style="background-color: #ffffff">
	<div class="container" style="padding: 80px 0px; ">
		<div class="col-sm-3 box-services">
			<i class="fa fa-registered" aria-hidden="true"></i><br>
			<h2>Registrate</h2>
			<p class="deco-line">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
			</p>
		</div>
		<div class="col-sm-3 box-services">
			<i class="fa fa-bullhorn" aria-hidden="true"></i><br>
			<h2>Anunciate</h2>
			<p class="deco-line">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
			</p>
		</div>
		<div class="col-sm-3 box-services">
			<i class="fa fa-phone-square" aria-hidden="true"></i><br>
			<h2>Contacta</h2>
			<p class="deco-line">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
			</p>
		</div>
		<div class="col-sm-3 box-services">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
			<h2>Vende</h2>
			<p class="deco-line">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
			</p>
		</div>
	</div>
</div>
@endsection