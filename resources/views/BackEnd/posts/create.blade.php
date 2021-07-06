@extends('FrontEnd.layouts.main')

@section('content')

<form  action="{{route ('save.store')}}" method="POST">
        @csrf

<body style="background:#fff">

<style>

.button1 {
  width:60%;
  position: center;
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
  border-radius: 50%;
  box-shadow: 0 9px #262626;
}

.button1:hover {background-color: #008594}

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

<div class="container"style="margin-top:2%;margin-left:18%;">
  <div class="row justify-content-start">
    <div class="col-5">
      
    </div>
    <div class="col-3"style="margin-left:-3%;">
    <input type="submit" name="Direction" value="Forword" class="button1" oninput="this.Direction.value=this.value">
    </div>
    <div class="col-3"style="margin-top:10%;margin-left:-6%;">
    <input type="submit" name="Direction" value="Right" class="button1" oninput="this.Direction.value=this.value">
    </div>
    <div class="col-3"style="margin-top:-5%;margin-left:20%;">
    <input type="submit" name="Direction" value="Left" class="button1" oninput="this.Direction.value=this.value">
    </div><div class="col-3"style="margin-top:-5%;margin-left:-6%;">
    <input type="submit" name="Direction" value="Stop" class="button1" oninput="this.Direction.value=this.value">
    </div>
    </div>
    
    <div class="col-3"style="margin-top:6%;margin-left:39%;">
    <input type="submit" name="Direction" value="Backword" class="button1" oninput="this.Direction.value=this.value">
    </div>
    </form>
    <form  action="/save1" >
        <button class="button2" style="margin-top:6%;margin-left:16%;">Engines</button>
      </form>

    
  </div>
</div>





@endsection