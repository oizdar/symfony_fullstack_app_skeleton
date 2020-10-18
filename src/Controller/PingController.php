<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PingController extends AbstractController
{

	public function ping(LoggerInterface $logger): Response
	{
		$logger->debug(__METHOD__);
		return new Response('ok');
	}
}
