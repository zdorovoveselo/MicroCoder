<?php
$Router
->notSafe()
->controllerSpace('MicroModules\Example\Controllers')
->nameSpace('111111')


->End_nameSpace()
->nameSpace('222222')
	->node('/blog')

->route('/', 'ShopController')								->name('micro')
							->GET('show') 		
  	 						->PUT('putAction')
  	 					 ->DELETE('deleteAction')

->node('/cms2')

->route('/{?id}', 'ShopController')		->name('adfa')
  ->GET('show')
  ->PUT('showput')
->regex([
			'id'  => '\d',
		])

->End_node()#cms

		->includeFile(__DIR__.'/modules/Example/routes.php')



	->End_node()#blog
->End_nameSpace()

// ->page404('/404.html')
	


->list('/microroutes')
;# $Router ....................................................................
