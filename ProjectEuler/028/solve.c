#include <stdio.h>
#define SIZE 1001
#define SIDES 4

int main( )
{

	int sum = 1;
	int result=1;
	int addition;
	for(addition = 2; addition <= SIZE; addition+=2) {
		int cside;
		for(cside = 0; cside < SIDES; cside++) {
			sum += addition;
			result += sum;
		}
	}
	printf( "%i", result );
}