<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class FinancesController
{
	public function summary(): JsonResponse
	{
		return new JsonResponse('example summary data');
	}

	public function incomes(): JsonResponse
	{
		return new JsonResponse('example incomes data');
	}
}
