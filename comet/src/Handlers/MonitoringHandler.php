<?php
declare(strict_types=1);

namespace App\Handlers;

use Comet\Request;
use Comet\Response;
use App\Events\Event;
use Illuminate\Database\Capsule\Manager as ORM;

/**
 * Healthcheck Handler
 *
 * Class MonitoringHandler
 * @package App\Handlers
 */
class MonitoringHandler
{
    /**
     * Check the version
     *
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function version(Request $request, Response $response, $args)
    {
        $response->getBody()->write(VERSION);
        return $response->withStatus(200);
    }

    /**
     * Fast online healthcheck - somehow DEPRECATED in favor of AlertJob
     *
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function health(Request $request, Response $response, $args)
    {
        $params = [];

        // Check both DB connection and get new events queue length
        try {
            $count = ORM::select(
                "SELECT COUNT(id) FROM sberprime_events WHERE status = '" . Event::STATUS_NEW . "'"
            );
        } catch (\Exception $e) {
            $params['errors'][] = 'Problems with database!';
        }

        $params['new_events'] = $count['0']->count ?? 0;

        $status = array_key_exists('errors', $params) ? 500 : 200;
        return $response
            ->with($params)
            ->withStatus($status);
    }
}
