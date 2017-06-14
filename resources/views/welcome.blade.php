@extends('oficial')

@section('conteudo')
<div class="container">
    <div class="col s12 m10">
      <div class="card-panel teal blue-grey lighten-5">
        <span class="white-text">
          <div class="row">
          @for($i = 0; $i<= 7; $i++)
              <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                      <img src="/image/c.gif" title="Institucional" class="materialboxed" data-caption="{{$descricao}}">
                      <span class="card-title">Nome do aplicativo</span>
                    </div>
                    <div class="card-content">
                      <p class="black-text">{{$descricao}}</p>
                    </div>
                    <div class="card-action">
                      <a href="http://arcg.is/2s6goma" target="_blank">Institucional</a>
                    </div>
                </div>
              </div>
          @endfor
          </div>
        </span>
      </div>
    </div>
  </div>
@endsection
@section('footer')
@endsection
