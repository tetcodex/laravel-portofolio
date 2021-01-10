@extends('layouts.home')

@section('navbar')
  <x-navbar status="active"/>
@endsection

@section('content')
     @foreach ($data->chunck(3) as $datas)
      <div class="row">
        
      </div>
     @endforeach
     @foreach ($datas as $article)
          <div class="card-header">
            <img src="/img/icons/instagram.svg" alt="">
          </div>
            <h4>{{ ucfirst($article->title) }}</h4>
            <h6>{{ ucfirst($article->subtitle) }}</h6>
          <div class="card-footer">
            <a href="#article{{$article->id}}" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#article{{$article->id}}"> Read Detail </a>
          </div>    
          <div class="modal fade" id="article{{$article->id}}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">{{ ucfirst($article->title) }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h4 class="modal-title">{{ ucfirst($article->subtitle) }}</h4>
                      <p  class="modal-title">{{ ucfirst($article->content) }}</p>
                    </div>
                  </div>
                </div>
          </div>
      @endforeach
@endsection

