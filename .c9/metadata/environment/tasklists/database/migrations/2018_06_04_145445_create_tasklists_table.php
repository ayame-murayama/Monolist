{"filter":false,"title":"2018_06_04_145445_create_tasklists_table.php","tooltip":"/tasklists/database/migrations/2018_06_04_145445_create_tasklists_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":38},"action":"insert","lines":["$table->integer('user_id')->unsigned()->index();","            $table->string('content');"],"id":3}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]},{"start":{"row":20,"column":12},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":70},"action":"insert","lines":["$table->foreign('user_id')->references('id')->on('users');"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":70},"end":{"row":21,"column":70},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528091748771,"hash":"d658336ae2edfca20f358e771dc3e951a0c789ac"}