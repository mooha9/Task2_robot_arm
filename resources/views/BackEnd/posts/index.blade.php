@extends('FrontEnd.layouts.main')

@section('content')
<style>
.button1 {
  width: 100%;
  margin-bottom:3%;
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(41, 125, 148);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #262626;
}

.button1:hover {background-color:#008594}

.button1:active {
  background-color: #02434b;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}

.button2 {
  width: 60%;
  
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(41, 125, 148);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #262626;
}

.button2:hover {background-color:#008594}

.button2:active {
  background-color: #02434b;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}
</style>
<br>
<h2 style="padding-left:45% ;">THE RESULT</h2>
<br>



  @foreach($arms as $arm)
  
  <div class="container">
    
    
    
    
    <div class="row row-cols-2 row-cols-lg-1 g-2 g-lg-2"style="position:center; text-align: center; " >
      <div class="col">
        <div class="p-1 border bg-light"> ID :     {{$arm->id}} </div>
      </div>
      <div class="col">
        <div class="p-1 border bg-light"> Last Move :     {{$arm->Direction}}</div>
      </div>
     

      </div>
    
      </div>
      <br><br><br><br>
      <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-2" >
      <form  action="{{route ('save.create')}}" >
        <button class="button2" >BACK</button>
      </form>
      <button class="button1" >START</button>
      </div>
    </div>
  </div>
</div>


@endforeach

@endsection
