<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppController extends AbstractController
{
	private LoggerInterface $logger;

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	public function index()
	{
		$this->logger->debug(__METHOD__);
		return $this->render('base.html.twig');

	}

}
