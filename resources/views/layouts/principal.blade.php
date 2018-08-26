@extends('inicio')

@section('title','Inicio')
@section('seccion')
	<script type="text/javascript">
		var cont1 = 1;
		var cont2 = 2;
		headings = ["Huellitas","ITSchool","ITSchool2"];
		source = ["{{ asset('img/huellitas.png') }}","{{ asset('img/itschool.png') }}","{{ asset('img/itschool.png') }}"];
		textos = ["Huellitas es una aplicacion android de adopcion para el area de Monterrey, Mexico.","ITSchool es una plataforma de aprendizaje tipo e-learning del tipo dinamica.","ITSchool es una plataforma de aprendizaje tipo e-learning del tipo dinamica."];

		function actualizar(lado){
			if (lado) {
				cont1++;
				cont2++;
				if (cont1>3) {cont1=1};
				if (cont2>3) {cont2=1};
				console.log(cont1);
				console.log(cont2);
			}
			else{
				cont1--;
				cont2--;
				if (cont1<1) {cont1=3};
				if (cont2<1) {cont2=3};
				console.log(cont1);
				console.log(cont2);
			}
			document.getElementById('img1').src = source[cont1-1];
			document.getElementById('img2').src = source[cont2-1];
			document.getElementById('texto1').innerHTML = textos[cont1-1];
			document.getElementById('texto2').innerHTML = textos[cont2-1];
			document.getElementById('nombre1').innerHTML = headings[cont1-1];
			document.getElementById('nombre2').innerHTML = headings[cont2-1];
		}
		function overFlechas(flecha){
			if (flecha) {
				document.getElementById('izq').opacity="1";
			}
			else{
				document.getElementById('der').opacity="1";
			}
		}
	</script>
	<div class="row">
		<div class="col-12 pb-5">
			<h1 class="text-center text-white">Proyectos recientes</h1>
		</div>
	</div>
	<article class="row">
		<img class="col" src="{{ asset('img/izq.png') }}" onclick="actualizar(false)" style="opacity: 0.2;" onmouseover="overFlechas(0)">
		<div class="card col-4 text-center text-black p-3 bg-light">
			<div class="card-header"><h2 id="nombre1">Huellitas</h2></div>
			<img id="img1" class="card-img-top mx-auto" src="{{ asset('img/huellitas.png') }}"  style="height: auto; width: auto; max-height: 15vw; max-width: 20vw;">
			<p id="texto1" class="card-title">Huellitas es una aplicacion android de adopcion para el area de Monterrey, Mexico.</p>
			<div class="card-footer"><a href="">Ver mas</a></div>
		</div>
		<div class="card col-4 text-center text-black p-3 bg-light">
			<div class="card-header"><h2 id="nombre2">ITSchool</h2></div>
			<img id="img2" class="card-img-top mx-auto" src="{{ asset('img/itschool.png') }}"  style="height: auto; width: auto; max-height: 15vw; max-width: 20vw;">
			<p id="texto2" class="card-title">ITSchool es una plataforma de aprendizaje tipo e-learning del tipo dinamica.</p>
			<div class="card-footer"><a href="">Ver mas</a></div>
		</div>
		<img class="col" src="{{ asset('img/der.png') }}" onclick="actualizar(true)" style="opacity: 0.2;" onmouseover="overFlechas(1)">
	</article>

@endsection