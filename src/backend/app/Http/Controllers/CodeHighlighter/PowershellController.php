<?php

namespace App\Http\Controllers\CodeHighlighter;


class PowershellController extends HighlighterController {
	static $parser = [
		"command"   => "",
		"comment"   => "",
		"keyword"   => "/(^| })(if|else|elseif|while|for|break)(\{\( )/",
		"number"    => "/([= \+\-\*\/\(\)\%])([0-9]+)([ \+\-\*\/\(\);]|[\n\r])/",
		"operator"  => "",
		"string"    => "/(.)\"([\w\W]*?)(?=\")./",
		"type"      => "",
		"variable"  => "/([ \]\(\"=]?)(\\$[a-z_][a-z_0-9]*)([ .)\"=]?)/i",
	];
}