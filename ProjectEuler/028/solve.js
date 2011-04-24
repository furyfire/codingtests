SIZE = 1001;
SIDES = 4

sum = 1;
result=1;
for(addition = 2; addition <= SIZE; addition+=2) {
	for(cside = 0; cside < SIDES; cside++) {
		sum += addition;
		result += sum;
	}
}

console.log(result);