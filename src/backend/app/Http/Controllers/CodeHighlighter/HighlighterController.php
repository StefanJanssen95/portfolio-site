<?php

namespace App\Http\Controllers\CodeHighlighter;

use \App\Http\Controllers\Controller;

abstract class HighlighterController extends Controller {
	static $parser = [];

	static public function parse( $code ){
		$parsedCode = $code;
		foreach( static::$parser as $className => $regex ){
			if( $regex != "" ){
				$parsedCode = preg_replace($regex, "$1<span class='$className'>$2</span>$3", $parsedCode);
				if( is_null($parsedCode) ){
					return [
						"className" => $className,
						"regex" => $regex,
						"message" => "Something went wrong during code highlighting."
					];
				}
			}
		}
		return $parsedCode;
	}
}