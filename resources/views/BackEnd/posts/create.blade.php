@extends('FrontEnd.layouts.main')

@section('content')

<form  action="{{route ('save.store')}}" method="POST">
        @csrf

<body style="background:#fff">

<style>
    input[type="range"] {
        width:400px;
        opacity:1 ;
        align-content: center;
        position: absolute;
        left: 44%;
        
        margin: -28px 0 0 -100px;
        background: linear-gradient(to right, firebrick 100%, #943100 , #943100 100%, #943100 100%);
        border: solid 1px #943100;
        border-radius: 8px;
        height: 7px;
        outline: none;
        -webkit-appearance: none;

    }
    input[type="number"] {

        position: absolute;
        left: 60%;
        margin: -40px 5px  ;
        width: 50px;
        border-radius: 5px;
        text-align: center;
        
    }
   
    .header {
        text-align: center; 
        margin-top: 90%; 
        margin: 0 600px 0 0 ;
        
    
    }
    .button {
  
  margin-left: 42%; 
  margin-top: 1%;   
  position: center;
  margin-bottom: 2%; 
  display: inline-block;
  padding: 15px 40px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(41, 125, 148);
  border: none;
  border-radius: 15px;
  width:17%;
  box-shadow: 0 9px #262626;
}

.button:hover {background-color: #008594}

.button:active {
  background-color: #02434b;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}

.button1 {
  
  margin-left: 42%; 
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
  border-radius: 15px;
  box-shadow: 0 9px #262626;
}

.button1:hover {background-color: #008594}

.button1:active {
  background-color: #02434b;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}
.button2 {
  
    
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #365d8c;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #262626;
}

.button2:hover {background-color: #1d5aa5}

.button2:active {
  background-color: #1d5aa5;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}


</style>
<div>

    <Br>
    <div class="header">
                            <h2> Engine 1 :</h2>

                        </div>

                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin1.value=this.value" />
                        <input type="number" name="Engin1" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />

                        <br>
                        <div class="header">
                            <h2> Engine 2 :</h2>

                        </div>
                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin2.value=this.value" />
                        <input type="number" name="Engin2" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />

                        <br>
                        <div class="header">
                            <h2> Engine 3 :</h2>

                        </div>
                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin3.value=this.value" />
                        <input type="number" name="Engin3" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />

                        <br>
                        <div class="header">
                            <h2> Engine 4 :</h2>

                        </div>
                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin4.value=this.value" />
                        <input type="number" name="Engin4" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />


                        <br>
                        <div class="header">
                            <h2> Engine 5 :</h2>

                        </div>
                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin5.value=this.value" />
                        <input type="number" name="Engin5" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />

                        <br>
                        <div class="header">
                            <h2> Engine 6 :</h2>

                        </div>
                        <input type="range" name="Engin" min="0" max="90" value="0" oninput="this.form.Engin6.value=this.value" />
                        <input type="number" name="Engin6" min="0" max="90" value="0" oninput="this.form.Engin.value=this.value" />
                        <br>
    <button class="button" >SAVE</button>

    </div>
</form>

<form  action="{{route ('save.index')}}" >
<div class="row row-cols-10 row-cols-lg-6 g-2 g-lg-2" >


<button class="button1" >RESULT</button>

</div>
</form>
@endsection
