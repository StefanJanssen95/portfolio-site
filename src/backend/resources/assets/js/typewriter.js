(function(){
	var maxDuration = 1500; // in ms
	var maxDelayPerLetter = 500;
	var el = document.getElementById('typewriter-text');
	var text = el.dataset.text;
	var currentLetterIndex = 0;
	var delay = Math.min(maxDuration / text.length, maxDelayPerLetter);

	// Delay adding letters for half a second.
	window.setTimeout(function(){
		var interval = window.setInterval(function(){
			el.innerHTML += text[currentLetterIndex];
			if( currentLetterIndex < text.length-1 ){

				currentLetterIndex++;
			} else {
				clearInterval(interval);
			}
		}, delay);
	}, 500);
})();