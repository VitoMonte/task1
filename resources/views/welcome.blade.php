<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Логотип</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>Тестовое задание</h1>      
      <p>Список пластинок (просмотр). Редактирование/добавление через регистрацию</p>
    </div>
  </div>

  @if($products->count() > 0)

    <div class="container-fluid bg-3 text-center table"> 
    <h3>Список пластинок</h3><br>

        <div class="row alert alert-success">  
                  <div class="col-sm-2">
            <p></p>
          </div>          
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
         
        </div>
    @foreach($products as $product)

     <div class="row alert alert-warning">
          <div class="col-sm-2">
          </div>
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

        </div> 

          
    @endforeach

  </div>



@else

  No products

@endif





    <br><br>
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>

  </body>
  </html>
