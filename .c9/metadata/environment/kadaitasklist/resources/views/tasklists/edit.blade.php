{"filter":false,"title":"edit.blade.php","tooltip":"/kadaitasklist/resources/views/tasklists/edit.blade.php","undoManager":{"mark":19,"position":19,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->","","@endsection"],"id":1}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":41},"action":"remove","lines":["<!-- Write content for each page here -->"],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["<h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}",""],"id":3}],[{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"remove","lines":["ジ"],"id":4},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"remove","lines":["セ"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["ッ"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["メ"]}],[{"start":{"row":4,"column":28},"end":{"row":4,"column":31},"action":"insert","lines":["タスク"],"id":10}],[{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"remove","lines":["ジ"],"id":11},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"remove","lines":["ー"]},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"remove","lines":["セ"]},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"remove","lines":["ッ"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"remove","lines":["メ"]}],[{"start":{"row":8,"column":36},"end":{"row":8,"column":39},"action":"insert","lines":["タスク"],"id":18}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["e"],"id":19},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["g"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["a"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["s"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["s"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["e"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["m"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["t"],"id":20},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["a"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["s"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["k"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["l"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["i"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["s"]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["t"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"remove","lines":["e"],"id":21},{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"remove","lines":["g"]},{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"remove","lines":["a"]},{"start":{"row":6,"column":49},"end":{"row":6,"column":50},"action":"remove","lines":["s"]},{"start":{"row":6,"column":48},"end":{"row":6,"column":49},"action":"remove","lines":["s"]},{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"remove","lines":["e"]},{"start":{"row":6,"column":46},"end":{"row":6,"column":47},"action":"remove","lines":["m"]}],[{"start":{"row":6,"column":46},"end":{"row":6,"column":47},"action":"insert","lines":["t"],"id":22},{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"insert","lines":["a"]},{"start":{"row":6,"column":48},"end":{"row":6,"column":49},"action":"insert","lines":["s"]},{"start":{"row":6,"column":49},"end":{"row":6,"column":50},"action":"insert","lines":["k"]},{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"insert","lines":["l"]},{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"insert","lines":["i"]},{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"insert","lines":["s"]},{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"insert","lines":["t"]},{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"remove","lines":["s"],"id":23}],[{"start":{"row":6,"column":72},"end":{"row":6,"column":73},"action":"remove","lines":["e"],"id":24},{"start":{"row":6,"column":71},"end":{"row":6,"column":72},"action":"remove","lines":["g"]},{"start":{"row":6,"column":70},"end":{"row":6,"column":71},"action":"remove","lines":["a"]},{"start":{"row":6,"column":69},"end":{"row":6,"column":70},"action":"remove","lines":["s"]},{"start":{"row":6,"column":68},"end":{"row":6,"column":69},"action":"remove","lines":["s"]},{"start":{"row":6,"column":67},"end":{"row":6,"column":68},"action":"remove","lines":["e"]},{"start":{"row":6,"column":66},"end":{"row":6,"column":67},"action":"remove","lines":["m"]}],[{"start":{"row":6,"column":66},"end":{"row":6,"column":67},"action":"insert","lines":["t"],"id":25},{"start":{"row":6,"column":67},"end":{"row":6,"column":68},"action":"insert","lines":["a"]},{"start":{"row":6,"column":68},"end":{"row":6,"column":69},"action":"insert","lines":["s"]},{"start":{"row":6,"column":69},"end":{"row":6,"column":70},"action":"insert","lines":["k"]},{"start":{"row":6,"column":70},"end":{"row":6,"column":71},"action":"insert","lines":["l"]},{"start":{"row":6,"column":71},"end":{"row":6,"column":72},"action":"insert","lines":["i"]},{"start":{"row":6,"column":72},"end":{"row":6,"column":73},"action":"insert","lines":["s"]},{"start":{"row":6,"column":73},"end":{"row":6,"column":74},"action":"insert","lines":["t"]},{"start":{"row":6,"column":74},"end":{"row":6,"column":75},"action":"insert","lines":["s"]}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["e"],"id":26},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["g"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["a"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["s"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["s"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["e"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["m"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["t"],"id":35},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["a"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["s"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["k"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["l"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["i"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["s"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["t"]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":["s"],"id":36}],[{"start":{"row":6,"column":73},"end":{"row":6,"column":74},"action":"remove","lines":["s"],"id":37}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["s"],"id":38}],[{"start":{"row":6,"column":74},"end":{"row":6,"column":75},"action":"insert","lines":["s"],"id":39}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":75},"end":{"row":6,"column":75},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527056656779,"hash":"23955279535ed2ed211ecaaf99aa9a3b49da3ea1"}