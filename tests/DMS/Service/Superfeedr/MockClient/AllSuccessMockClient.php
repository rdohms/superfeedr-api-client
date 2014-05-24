<?php

namespace DMS\Service\Superfeedr\MockClient;

use DMS\Service\Superfeedr\SuperfeedrClient;
use Guzzle\Http\Message\Response;

class AllSuccessMockClient extends SuperfeedrClient
{
    public function subscribeFeed($feed, $callbackUrl, $format = 'ATOM')
    {
        return new Response(200);
    }

    public function unsubscribeFeed($feed, $callbackUrl = null)
    {
        return new Response(200);
    }

    public function listFeeds($callbackUrl, $page = 1)
    {
        return new Response(200);
    }

    public function retrieveFeeds($feed, array $config = [])
    {
        return new Response(200);
    }

    public function validateRequest($signature, $content)
    {
        return true;
    }

}
