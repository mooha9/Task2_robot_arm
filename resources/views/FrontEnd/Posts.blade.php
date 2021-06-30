@extends('FrontEnd.layouts.Main')

@section('content')





<body style="background:#52b5d1">

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
  
  margin-left: 70%; 
  margin-top: 4%; 
  margin-bottom: 2%;  
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

.button:hover {background-color: #1d5aa5}

.button:active {
  background-color: #1d5aa5;
  box-shadow: 0 5px #262626;
  transform: translateY(4px);
}

.button1 {
  
    margin-left: 50%;
    margin:0px ; 
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

.button1:hover {background-color: #1d5aa5}

.button1:active {
  background-color: #1d5aa5;
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

<form>
    <Br>
    <div class="header">
        <h2> Engine 1 :</h2>

    </div>

    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
</form>
<form>
    <p>&nbsp;</p>
    <div class="header">
        <h2> Engine 2 :</h2>

    </div>
    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
</form>
<form>
    <p>&nbsp;</p>
    <div class="header">
        <h2> Engine 3 :</h2>

    </div>
    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
</form>
<form>
    <p>&nbsp;</p>
    <div class="header">
        <h2> Engine 4 :</h2>

    </div>
    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
</form>
<form>
    <p>&nbsp;</p>
    <div class="header">
        <h2> Engine 5 :</h2>

    </div>
    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
</form>
<form>
    <p>&nbsp;</p>
    <div class="header">
        <h2> Engine 6 :</h2>

    </div>
    <input type="range" name="amountRange" min="0" max="100" value="" oninput="this.form.amountInput.value=this.value" />
    <input type="number" name="amountInput" min="0" max="100" value="" oninput="this.form.amountRange.value=this.value" />
    

    <form action="Posts" method="POST">
        @csrf
    <button class="button" >SAVE</button>
    
</form>

@endsection
