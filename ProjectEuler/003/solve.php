<?php
$number = 600851475143;

echo max(factorize($number));

/**
 * Returns a sorted array of the prime factorization of $num
 * @staticvar array $aFactors
 * @param type int Number to factorize
 * @return type array Prime factors
 */
function factorize($num) {
	// Returns a sorted array of the prime factorization of $num 
	// Caches prior results.  Returns empty array for |$num|<2 
	// eg. factorize(360) => [5, 3, 3, 2, 2, 2] 
	static $aFactors = array();
	if (2 > $num = abs($num))
		return array();  // negatives, 1, 0 

	if ($aFactors[$key = "x$num"]) {	 // handles doubles 
		// Been there, done that 
		if (($factor = $aFactors[$key]) == $num)
			return array($num);
		return array_merge(factorize($num / $factor), array($factor));
	}

	// Find a smallest factor 
	for ($sqrt = sqrt($num), $factor = 2; $factor <= $sqrt; ++$factor)
		if (floor($num / $factor) == $num / $factor)
			return array_merge(factorize($num / $factor), array($aFactors[$key] = $factor));

	return (array($aFactors[$key] = $num));
}
