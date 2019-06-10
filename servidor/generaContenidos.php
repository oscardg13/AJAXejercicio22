<? php
	$frases = array("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ",
		"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", 
		"Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","Aenean commodo ligula eget dolor.  ", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ",
		"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", 
		"Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","Aenean commodo ligula eget dolor.  ","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ",
		"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", 
		"Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","Aenean commodo ligula eget dolor.  ", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ",
		"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", 
		"Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","Aenean commodo ligula eget dolor.  ");

	srand((double)microtime()+1000000);
	$numeroAleatorio = rand(0,count($frases)-1);

	echo $frases[$numeroAleatorio];
	?>