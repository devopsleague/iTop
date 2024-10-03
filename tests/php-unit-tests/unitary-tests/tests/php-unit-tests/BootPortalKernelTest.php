<?php


namespace Combodo\iTop\Test\UnitTest\Sources\Controller;

use Combodo\iTop\Controller\WelcomePopupController;
use Combodo\iTop\Portal\Controller\AggregatePageBrickController;
use Combodo\iTop\Test\UnitTest\ItopDataTestCase;
use Combodo\iTop\Test\UnitTest\ItopTestCase;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Request;

class BootPortalKernelTest extends ItopDataTestCase
{
	public const SYMFONY_KERNEL_CLASS = 'Combodo\iTop\Portal\Kernel';

	public function testInstantiateServiceInOneStep()
	{
		$controller = static::getContainer()->get(AggregatePageBrickController::class);

		$this->assertInstanceOf(AggregatePageBrickController::class, $controller);
	}

	public function testInstantiateServiceInTwoSteps()
	{
		self::bootKernel();
		$controller = static::getContainer()->get(AggregatePageBrickController::class);

		$this->assertInstanceOf(AggregatePageBrickController::class, $controller);
	}

	/** @dataProvider AFewTestCases */
	public function testMeasureTimeToBootSymfonyKernel($void): void
	{
		$startTime = microtime(true);

		self::bootKernel();
		$endTime = microtime(true);
		$duration = $endTime - $startTime;
		echo "Time to boot Symfony Kernel: $duration seconds\n";

		$startTime = microtime(true);
		$controller = static::getContainer()->get(AggregatePageBrickController::class);
		$endTime = microtime(true);
		$duration = $endTime - $startTime;
		echo "Time to get WelcomePopupController service: $duration seconds\n";

		$this->assertInstanceOf(AggregatePageBrickController::class, $controller);
	}

	public function AFewTestCases()
	{
		return [
			['void'],
			['void'],
			['void'],
			['void'],
			['void'],
			['void'],
			['void'],
		];
	}
}
