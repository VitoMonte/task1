@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8 col-offset-2">
      <div class="panel panel-default">
        @if(empty($entity))
          <div class="panel-heading">Форма создания данных</div>
        @else
          <div class="panel-heading">Форма изменения данных</div>
        @endif
          <div class="panel-body">
            <form class="form-signin" action="@if(empty($entity)){{ route('products.store') }} @else {{ route('products.update', $entity->id) }} @endif" method="post">
              {{ csrf_field() }}
              @isset($entity)
                {{ method_field('PUT') }}
              @endisset
              
                <h2 class="form-signin-heading">{{$entity->title or 'Новая пластинка'}}</h2>
                @include('admin.fields.text', ['field'=>'singer', 'name'=>'Исполнитель'])
                @include('admin.fields.text', ['field'=>'album', 'name'=>'Альбом'])
                @include('admin.fields.text', ['field'=>'style', 'name'=>'Стиль'])
                @include('admin.fields.text', ['field'=>'country', 'name'=>'Страна'])
                @include('admin.fields.text', ['field'=>'amount', 'name'=>'Прайс'])                
              
              <button class="btn btn-primary" type="submit" value="save">Save</button>
            </form>
          </div>
      </div>
    </div>
  </div>





@endsection