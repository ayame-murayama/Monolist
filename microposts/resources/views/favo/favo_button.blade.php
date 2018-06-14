
    @if (Auth::user()->is_favoring($micropost->id))
            {!! Form::open(['route' => ['user.unfavo', $micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
            {!! Form::close() !!}
    @else
            {!! Form::open(['route' => ['user.favo', $micropost->id]]) !!}
                {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
            {!! Form::close() !!}
    @endif
