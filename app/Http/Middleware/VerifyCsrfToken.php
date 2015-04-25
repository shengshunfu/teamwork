<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * 不需要 csrf 的路由，POST Method
	 *
	 */
	private $exceptRoutes = [
		'knowledge/repo_hook',
	];

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$requestPath = $request->path();
		$requestMethod = $request->method();

		if (in_array($requestPath, $this->exceptRoutes) && in_array($requestMethod, ['POST',])) {
			return $next($request);
		}

		return parent::handle($request, $next);
	}

}
