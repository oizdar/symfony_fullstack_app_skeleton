<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class FinancesController extends AbstractController
{
	private LoggerInterface $logger;

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	public function summary(): JsonResponse
	{
		$this->logger->debug(__METHOD__);
		return new JsonResponse(['data' => 'example summary data']);
	}

	public function incomes(): JsonResponse
	{
		$this->logger->debug(__METHOD__);
		return new JsonResponse(['data' => 'example incomes data']);
	}
}
