{"filter":false,"title":"2018_06_08_101513_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_08_101513_create_user_follow_table.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":62},"action":"insert","lines":["$table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();"],"id":3}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]},{"start":{"row":20,"column":12},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":22,"column":93},"action":"insert","lines":["$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');"],"id":5}],[{"start":{"row":22,"column":93},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":23,"column":0},"end":{"row":23,"column":12},"action":"insert","lines":["            "]},{"start":{"row":23,"column":12},"end":{"row":24,"column":0},"action":"insert","lines":["",""]},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":53},"action":"insert","lines":["$table->unique(['user_id', 'follow_id']);"],"id":7}]]},"ace":{"folds":[],"scrolltop":283,"scrollleft":0,"selection":{"start":{"row":29,"column":22},"end":{"row":29,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528420599270,"hash":"3e32f5782ebb9b057dff9d9381095e8d3e8c8c72"}