#include <stdio.h>
#include <math.h>

int main( )
{
	int num;
	int result;
	
	int square = 0;
	int sum = 0;
	
	for(num=1; num<=100; num++) {
		square += pow(num,2);
		sum += num;

	}
	result = pow(sum,2) - square;
	printf("%d", result);
}