{"filter":false,"title":"show.blade.php","tooltip":"/microposts/resources/views/users/show.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":22,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li><a href=\"#\">TimeLine</a></li>","                <li><a href=\"#\">Followings</a></li>","                <li><a href=\"#\">Followers</a></li>","            </ul>","        </div>","    </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":33,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li><a href=\"#\">Followings</a></li>","                <li><a href=\"#\">Followers</a></li>","            </ul>","            @if (Auth::user()->id == $user->id)","                  {!! Form::open(['route' => 'microposts.store']) !!}","                      <div class=\"form-group\">","                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}","                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}","                      </div>","                  {!! Form::close() !!}","            @endif","            @if (count($microposts) > 0)","                @include('microposts.microposts', ['microposts' => $microposts])","            @endif","        </div>","    </div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":8},"end":{"row":19,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528087494796,"hash":"bebd5c709ebbebf8be9eba541f143b42d3d8c0f8"}