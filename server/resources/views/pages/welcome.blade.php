@extends('layouts.master')

@section('content')

<div class="row">
  <div class="column text-center">
    <form method="get" action="login-transporte.html">


  <div class="div1">
<h1>Selecciona tus intereses</h1>

<div class="wrap-intereses">

    <input id="deporte" type="checkbox"><label for="deporte">Deportes</label>
    <input id="tecnologia" type="checkbox"><label for="tecnologia">Tecnología</label>
    <input id="arte" type="checkbox"><label for="arte">Arte</label>
    <input id="idiomas" type="checkbox"><label for="idiomas">Idiomas</label>
    <input id="historia" type="checkbox"><label for="historia">Historia</label>
    <input id="viajes" type="checkbox"><label for="viajes">Viajes</label>
    <input id="mascotas" type="checkbox"><label for="mascotas">Mascotas</label>
    <input id="hogar" type="checkbox"><label for="hogar">Hogar</label>
    <input id="actualidad" type="checkbox"><label for="actualidad">Actualidad</label>

</div>
<hr>
<div class="text-center">
  <button class="button" type="submit" id="next">
     Siguiente 
  <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M32,16.009c0-0.267-0.11-0.522-0.293-0.714  l-9.899-9.999c-0.391-0.395-1.024-0.394-1.414,0c-0.391,0.394-0.391,1.034,0,1.428l8.193,8.275H1c-0.552,0-1,0.452-1,1.01  s0.448,1.01,1,1.01h27.586l-8.192,8.275c-0.391,0.394-0.39,1.034,0,1.428c0.391,0.394,1.024,0.394,1.414,0l9.899-9.999  C31.894,16.534,31.997,16.274,32,16.009z" fill-rule="evenodd" id="Arrow_Forward"/><g/><g/><g/><g/><g/><g/></svg>
    </button></div>

    </div>

<div class="div2" style="display: none;">

<h1>Seleciona los transportes que utilizas</h1>

<div class="transporte-elegir">
<ul class="tabs" data-tabs id="transportes">
  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Metro</a></li>
  <li class="tabs-title"><a href="#panel2c">Bus</a></li>
  <li class="tabs-title"><a href="#panel3c">Cercanias</a></li>
</ul>

<div class="tabs-content text-left" data-tabs-content="transportes">
   <div class="tabs-panel is-active" id="panel1c">
    
      <ul class="vertical menu">
          <li class="l1"><label for="linea1">
            <input id="linea1" type="checkbox">
            
            <span class="numLinea">1</span>
            <span class="nombreLinea">Linea 1</span>
            </label>
          </li>
           <li class="l2"><label for="linea2">
            <input id="linea2" type="checkbox">
            
            <span class="numLinea">2</span>
            <span class="nombreLinea">Linea 2</span>
            </label>
          </li>
           <li class="l3"><label for="linea3">
            <input id="linea3" type="checkbox">
            
            <span class="numLinea">3</span>
            <span class="nombreLinea">Linea 3</span>
            </label>
          </li>
         <li class="l4"><label for="linea4">
            <input id="linea4" type="checkbox">
            
            <span class="numLinea">4</span>
            <span class="nombreLinea">Linea 4</span>
            </label>
          </li>
          <li class="l5"><label for="linea5">
            <input id="linea5" type="checkbox">
            
            <span class="numLinea">5</span>
            <span class="nombreLinea">Linea 5</span>
            </label>
          </li>
             <li class="l6"><label for="linea6">
            <input id="linea6" type="checkbox">
            
            <span class="numLinea">6</span>
            <span class="nombreLinea">Linea 6 Circular</span>
            </label>
          </li>
          <li class="l7"><label for="linea7">
            <input id="linea7" type="checkbox">
            
            <span class="numLinea">7</span>
            <span class="nombreLinea">Linea 7</span>
            </label>
          </li>
           <li class="l8"><label for="linea8">
            <input id="linea8" type="checkbox">
            
            <span class="numLinea">8</span>
            <span class="nombreLinea">Linea 8</span>
            </label>
          </li>
           <li class="l9"><label for="linea9">
            <input id="linea9" type="checkbox">
            
            <span class="numLinea">9</span>
            <span class="nombreLinea">Linea 9</span>
            </label>
          </li>
           <li class="l10"><label for="linea10">
            <input id="linea10" type="checkbox">
            
            <span class="numLinea">10</span>
            <span class="nombreLinea">Linea 10</span>
            </label>
          </li>
           <li class="l11"><label for="linea11">
            <input id="linea11" type="checkbox">
            
            <span class="numLinea">11</span>
            <span class="nombreLinea">Linea 11</span>
            </label>
          </li>
          <li class="l12"><label for="linea12">
            <input id="linea12" type="checkbox">
            
            <span class="numLinea">12</span>
            <span class="nombreLinea">Linea 12 MetroSur</span>
            </label>
          </li>
      </ul>
  </div>
  <div class="tabs-panel" id="panel2c">
        No disponible todavía
  </div>
  <div class="tabs-panel" id="panel3c">
         No disponible todavía
  </div>
</div>
</div>
<hr>
<div class="text-center">
  <button class="button" type="submit">
     Siguiente 
  <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M32,16.009c0-0.267-0.11-0.522-0.293-0.714  l-9.899-9.999c-0.391-0.395-1.024-0.394-1.414,0c-0.391,0.394-0.391,1.034,0,1.428l8.193,8.275H1c-0.552,0-1,0.452-1,1.01  s0.448,1.01,1,1.01h27.586l-8.192,8.275c-0.391,0.394-0.39,1.034,0,1.428c0.391,0.394,1.024,0.394,1.414,0l9.899-9.999  C31.894,16.534,31.997,16.274,32,16.009z" fill-rule="evenodd" id="Arrow_Forward"/><g/><g/><g/><g/><g/><g/></svg>
    </button></div>


</div>



</form>



    

@endsection