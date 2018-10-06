<?php declare(strict_types = 1);

namespace App\Controllers;

use Apitte\Core\Annotation\Controller\Controller;
use Apitte\Core\Annotation\Controller\ControllerPath;
use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;

/**
 * @Controller
 * @ControllerPath("/")
 */
final class HelloController extends BaseV1Controller
{

	/**
	 * @Path("/")
	 * @Method("GET")
	 */
	public function index(ApiRequest $request, ApiResponse $response): ApiResponse
	{
		return $response->writeJsonBody(['hello' => ['world']]);
	}

	/**
	 * @Path("/pure")
	 * @Method("GET")
	 */
	public function pure(): array
	{
		return ['hello' => 'apitte'];
	}

	/**
	 * @Path("/scalar")
	 * @Method("GET")
	 */
	public function scalar(): string
	{
		return 'OK';
	}

}
