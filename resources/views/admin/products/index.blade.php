@extends('layouts.app')

@section('content')


@if($products->count() > 0)

	  <div class="container-fluid bg-3 text-center table"> 
	  <h3>Список пластинок</h3><br>

	      <div class="row alert alert-success">	      	  
		      <div class="col-sm-2">
		        <p>Исполнитель</p>
		      </div>
		      <div class="col-sm-2">
		        <p>Альбом</p>
		      </div>
		      <div class="col-sm-2">
		        <p>Стиль</p>
		      </div>
		      <div class="col-sm-2">
		        <p>Страна</p>
		      </div>
		      <div class="col-sm-2">
		        <p>Прайс</p>
		      </div>
		      <div class="col-sm-2">
		        <p></p>
		      </div>		      
		    </div>
		@foreach($products as $product)

		 <div class="row alert alert-warning">
		      
		      <div class="col-sm-2">
		        <p>{{$product->singer}}</p>
		      </div>
		      <div class="col-sm-2">
		        <p>{{$product->album}}</p>
		      </div>
		      <div class="col-sm-2">
		        <p>S{{$product->style}}</p>
		      </div>
		      <div class="col-sm-2">
		        <p>{{$product->country}}</p>
		      </div>
		      <div class="col-sm-2">
		        <p>{{$product->amount}}</p>
		      </div>
		      <div class="col-sm-2">
		        <form action="{{ route('products.destroy', $product->id) }}" method="post">
						<a type="btn" class="btn-sm btn-success" href="{{ route('products.edit', $product->id) }}">Изменить</a><br /><br />
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button type="submit" class="btn-sm btn-danger"> Удалить </button>
					</form>
		      </div>
		    </div> 

					
		@endforeach

	</div>



@else

	No products

@endif

@endsection