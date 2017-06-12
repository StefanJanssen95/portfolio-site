<?php
namespace App\Http\Middleware;
use Closure;
/**
 * Checks if an Access-Control-Allow-Origin header should be attached to this request.
 */
class Cors
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure                  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if(isset($request->server()['HTTP_ORIGIN'])) {
			$origin = $request->server()['HTTP_ORIGIN'];
			if( (in_array( $origin, config( 'domains.allowed' ) ) ) && !in_array( $origin, config( 'domains.denied' ) ) ){
				header('Access-Control-Allow-Origin: ' . $origin);
				$this->addHeaders();
			} elseif( in_array( '*', config( 'domains.allowed' ) ) ){
				header('Access-Control-Allow-Origin: \'*\'');
				$this->addHeaders();
			}
		}
		return $next($request);
	}

	private function addHeaders() {
		header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization, X-Requested-With');
		header('Access-Control-Expose-Headers: Authorization');
		header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
	}
}