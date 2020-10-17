<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PingController
{
	public function ping(): Response
	{
		return new Response('ok');
	}
}
