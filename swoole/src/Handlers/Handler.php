<?php
declare(strict_types=1);

namespace App\Handlers;

//use App\ORM;
//use App\Storage;
use Swoole\HTTP\Request;
use Swoole\HTTP\Response;

class Handler
{
    public function process(Request $request, Response $response)
    {
        $response->end('<h1>Hello World!</h1>');
    }

        //public function __invoke(Request $request, Response $response, $args)
    public function __invoke(Swoole\HTTP\Request $request, Swoole\HTTP\Response $response)
    {

        $response->end('<h1>Hello World!</h1>');
/*
    	$queryParams = $request->getQueryParams();
    	$q = (int) $queryParams['q'] ?? 0;
        $query_count = $q > 1 ? min($q, 500) : 1;

    	while ($query_count--) {
        	ORM::$statement->execute([mt_rand(1, 10000)]);
        	$arr[] = ORM::$statement->fetch();
    	}

    	return $response
    		->with($arr)
	    	->withHeader('Date', Storage::$date); */
	}
}

