{"filter":false,"title":"index.blade.php","tooltip":"/kadaitasklist/resources/views/tasklists/index.blade.php","undoManager":{"mark":79,"position":79,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->","","@endsection"],"id":1}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":41},"action":"remove","lines":["<!-- Write content for each page here -->"],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":12,"column":10},"action":"insert","lines":[" <h1>メッセージ一覧</h1>","","    @if (count($messages) > 0)","        <ul>","            @foreach ($messages as $message)","                <li>{{ $message->content }}</li>","            @endforeach","        </ul>","    @endif"],"id":3}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["覧"],"id":4},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["一"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["ジ"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["セ"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["ッ"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["メ"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["y"],"id":5},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["a"]}],[{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["a"],"id":6},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["y"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":8},"action":"insert","lines":["タスク"],"id":13}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":10},"action":"insert","lines":["一覧"],"id":21}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["s"],"id":22},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["e"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["g"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["a"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["s"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["s"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["e"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["m"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["t"],"id":23},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["a"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["s"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["k"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["l"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["i"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["t"],"id":24},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["s"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["s"],"id":25},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["e"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["g"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["a"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["s"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["s"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["e"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["t"],"id":26},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["a"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["s"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["l"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["l"],"id":27}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["k"],"id":28},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["l"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["i"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["s"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["t"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["s"]}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"remove","lines":["e"],"id":29},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"remove","lines":["g"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"remove","lines":["a"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"remove","lines":["s"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"remove","lines":["s"]},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"remove","lines":["e"]},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":["t"],"id":30},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["a"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["s"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["k"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"insert","lines":["l"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["i"]},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["s"]},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["t"]},{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":["e"],"id":31},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"remove","lines":["g"]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"remove","lines":["a"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["s"]},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["s"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["e"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["t"],"id":32},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["a"]},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["s"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["k"]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"insert","lines":["l"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"insert","lines":["i"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["s"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["t"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":54},"action":"insert","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":34}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["s"],"id":35},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["e"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["g"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["a"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["s"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["s"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["e"]},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"remove","lines":["m"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":["t"],"id":36},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["a"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["s"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["k"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["l"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["i"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["s"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["t"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["a"],"id":37}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["s"],"id":38}],[{"start":{"row":14,"column":48},"end":{"row":14,"column":49},"action":"remove","lines":["稿"],"id":39},{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"remove","lines":["投"]},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"remove","lines":["の"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"remove","lines":["ジ"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"remove","lines":["ー"]},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"remove","lines":["セ"]},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"remove","lines":["ッ"]},{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"remove","lines":["メ"]}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":["t"],"id":40},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["a"]},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["s"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["u"]}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"remove","lines":["u"],"id":41},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"remove","lines":["s"]},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"remove","lines":["a"]},{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"remove","lines":["t"]}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":45},"action":"insert","lines":["タスクの"],"id":50}],[{"start":{"row":14,"column":45},"end":{"row":14,"column":51},"action":"insert","lines":["リストアップ"],"id":65}],[{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"remove","lines":["s"],"id":66}],[{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"remove","lines":["s"],"id":67}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["1"],"id":68}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["1"],"id":69}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":39},"action":"insert","lines":["{{ $tasklist->id }}"],"id":70}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":63},"action":"remove","lines":["{{ $tasklist->id }}{{ $tasklist->content }}"],"id":71}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":122},"action":"insert","lines":["{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}"],"id":72}],[{"start":{"row":9,"column":109},"end":{"row":9,"column":110},"action":"remove","lines":["e"],"id":73},{"start":{"row":9,"column":108},"end":{"row":9,"column":109},"action":"remove","lines":["g"]},{"start":{"row":9,"column":107},"end":{"row":9,"column":108},"action":"remove","lines":["a"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["s"]},{"start":{"row":9,"column":105},"end":{"row":9,"column":106},"action":"remove","lines":["s"]},{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"remove","lines":["e"]},{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"insert","lines":["t"],"id":74},{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"insert","lines":["a"]},{"start":{"row":9,"column":105},"end":{"row":9,"column":106},"action":"insert","lines":["s"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"insert","lines":["k"]},{"start":{"row":9,"column":107},"end":{"row":9,"column":108},"action":"insert","lines":["l"]},{"start":{"row":9,"column":108},"end":{"row":9,"column":109},"action":"insert","lines":["i"]},{"start":{"row":9,"column":109},"end":{"row":9,"column":110},"action":"insert","lines":["s"]},{"start":{"row":9,"column":110},"end":{"row":9,"column":111},"action":"insert","lines":["t"]},{"start":{"row":9,"column":111},"end":{"row":9,"column":112},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"remove","lines":["e"],"id":75},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["g"]},{"start":{"row":9,"column":83},"end":{"row":9,"column":84},"action":"remove","lines":["a"]},{"start":{"row":9,"column":82},"end":{"row":9,"column":83},"action":"remove","lines":["s"]},{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":["s"]},{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"remove","lines":["e"]},{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"insert","lines":["t"],"id":76},{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"insert","lines":["a"]},{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"insert","lines":["s"]},{"start":{"row":9,"column":82},"end":{"row":9,"column":83},"action":"insert","lines":["k"]},{"start":{"row":9,"column":83},"end":{"row":9,"column":84},"action":"insert","lines":["l"]},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["i"]},{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"insert","lines":["s"]},{"start":{"row":9,"column":86},"end":{"row":9,"column":87},"action":"insert","lines":["t"]},{"start":{"row":9,"column":87},"end":{"row":9,"column":88},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":62},"end":{"row":9,"column":63},"action":"remove","lines":["e"],"id":77},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"remove","lines":["g"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"remove","lines":["a"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"remove","lines":["s"],"id":78},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"remove","lines":["e"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"insert","lines":["t"],"id":79},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"insert","lines":["a"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"insert","lines":["s"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"insert","lines":["k"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"insert","lines":["l"]},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"insert","lines":["i"]},{"start":{"row":9,"column":62},"end":{"row":9,"column":63},"action":"insert","lines":["s"]},{"start":{"row":9,"column":63},"end":{"row":9,"column":64},"action":"insert","lines":["t"]},{"start":{"row":9,"column":64},"end":{"row":9,"column":65},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"remove","lines":["s"],"id":80},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"remove","lines":["e"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"remove","lines":["g"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["a"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["s"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["s"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["e"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["t"],"id":81},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["a"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["s"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["l"]}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["l"],"id":82}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["k"],"id":83},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["l"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["i"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["s"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["r"]},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"remove","lines":["s"],"id":84},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"remove","lines":["r"]}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["t"],"id":85},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["s"]}],[{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"insert","lines":["s"],"id":86}],[{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"remove","lines":[">"],"id":87},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["i"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["l"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["<"]}],[{"start":{"row":9,"column":129},"end":{"row":9,"column":130},"action":"remove","lines":[">"],"id":88},{"start":{"row":9,"column":128},"end":{"row":9,"column":129},"action":"remove","lines":["i"]},{"start":{"row":9,"column":127},"end":{"row":9,"column":128},"action":"remove","lines":["l"]},{"start":{"row":9,"column":126},"end":{"row":9,"column":127},"action":"remove","lines":["/"]},{"start":{"row":9,"column":125},"end":{"row":9,"column":126},"action":"remove","lines":["<"]}],[{"start":{"row":9,"column":125},"end":{"row":9,"column":126},"action":"insert","lines":[","],"id":89}],[{"start":{"row":9,"column":125},"end":{"row":9,"column":126},"action":"remove","lines":[","],"id":90}],[{"start":{"row":9,"column":125},"end":{"row":9,"column":126},"action":"insert","lines":["<"],"id":91},{"start":{"row":9,"column":126},"end":{"row":9,"column":127},"action":"insert","lines":["l"]},{"start":{"row":9,"column":127},"end":{"row":9,"column":128},"action":"insert","lines":["i"]}],[{"start":{"row":9,"column":126},"end":{"row":9,"column":127},"action":"insert","lines":["/"],"id":92},{"start":{"row":9,"column":127},"end":{"row":9,"column":128},"action":"insert","lines":[">"]}],[{"start":{"row":9,"column":127},"end":{"row":9,"column":128},"action":"remove","lines":[">"],"id":93}],[{"start":{"row":9,"column":129},"end":{"row":9,"column":130},"action":"insert","lines":[">"],"id":94}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["<"],"id":95},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["l"]},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":["i"]}],[{"start":{"row":9,"column":19},"end":{"row":9,"column":25},"action":"insert","lines":["></li>"],"id":96}],[{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":[">"],"id":97},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["i"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["l"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["/"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["<"]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":53},"action":"remove","lines":["tasklists.show"],"id":98}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":53},"action":"insert","lines":["tasklists.show"],"id":99}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":134},"action":"remove","lines":["<li>{!! link_to_route('tasklists.show', $tasklists->id, ['id' => $tasklists->id]) !!} : {{ $tasklists->content }}</li>"],"id":100}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":127},"action":"insert","lines":["<li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>"],"id":101}],[{"start":{"row":9,"column":109},"end":{"row":9,"column":110},"action":"remove","lines":["e"],"id":102},{"start":{"row":9,"column":108},"end":{"row":9,"column":109},"action":"remove","lines":["g"]},{"start":{"row":9,"column":107},"end":{"row":9,"column":108},"action":"remove","lines":["a"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["s"]},{"start":{"row":9,"column":105},"end":{"row":9,"column":106},"action":"remove","lines":["s"]},{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"remove","lines":["e"]},{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"insert","lines":["r"],"id":103}],[{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"remove","lines":["r"],"id":104}],[{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"insert","lines":["t"],"id":105},{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"insert","lines":["a"]},{"start":{"row":9,"column":105},"end":{"row":9,"column":106},"action":"insert","lines":["s"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"insert","lines":["k"]},{"start":{"row":9,"column":107},"end":{"row":9,"column":108},"action":"insert","lines":["l"]},{"start":{"row":9,"column":108},"end":{"row":9,"column":109},"action":"insert","lines":["i"]},{"start":{"row":9,"column":109},"end":{"row":9,"column":110},"action":"insert","lines":["s"]},{"start":{"row":9,"column":110},"end":{"row":9,"column":111},"action":"insert","lines":["t"]},{"start":{"row":9,"column":111},"end":{"row":9,"column":112},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"remove","lines":["e"],"id":106},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["g"]},{"start":{"row":9,"column":83},"end":{"row":9,"column":84},"action":"remove","lines":["a"]},{"start":{"row":9,"column":82},"end":{"row":9,"column":83},"action":"remove","lines":["s"]},{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":["s"]},{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"remove","lines":["e"]},{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"insert","lines":["t"],"id":107},{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"insert","lines":["a"]},{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"insert","lines":["s"]},{"start":{"row":9,"column":82},"end":{"row":9,"column":83},"action":"insert","lines":["k"]},{"start":{"row":9,"column":83},"end":{"row":9,"column":84},"action":"insert","lines":["l"]}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["i"],"id":108},{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"insert","lines":["s"]},{"start":{"row":9,"column":86},"end":{"row":9,"column":87},"action":"insert","lines":["t"]},{"start":{"row":9,"column":87},"end":{"row":9,"column":88},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":62},"end":{"row":9,"column":63},"action":"remove","lines":["e"],"id":109},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"remove","lines":["g"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"remove","lines":["a"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"remove","lines":["s"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"remove","lines":["s"]},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"remove","lines":["e"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"insert","lines":["t"],"id":110},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"insert","lines":["a"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"insert","lines":["s"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"insert","lines":["k"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"insert","lines":["l"]},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"insert","lines":["i"]},{"start":{"row":9,"column":62},"end":{"row":9,"column":63},"action":"insert","lines":["s"]},{"start":{"row":9,"column":63},"end":{"row":9,"column":64},"action":"insert","lines":["t"]},{"start":{"row":9,"column":64},"end":{"row":9,"column":65},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"remove","lines":["s"],"id":111},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"remove","lines":["e"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"remove","lines":["g"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["a"]}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["s"],"id":112},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["s"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["e"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["t"],"id":113},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["a"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["s"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["k"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["i"]}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["i"],"id":114}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["l"],"id":115},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["i"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["s"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["t"]},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":3.3333334922790527,"selection":{"start":{"row":16,"column":11},"end":{"row":16,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527059105949,"hash":"55e9377db78b6c0c4d52579c57b351597fee1a72"}