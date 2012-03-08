#define MAX 1000000-1

#include <stdio.h>
#include <math.h>

int main( )
{
	unsigned int max_steps = 0;
	unsigned int max_start;
	
	unsigned int test;
	
	unsigned long ctest;
	unsigned int steps;

	for(test = MAX; test > 1 ; test--)
	{

		ctest = test;
		steps = 1;
		while(ctest != 1)
		{
			ctest = ( ctest % 2 ) ? ctest * 3 + 1 : ctest / 2;
			steps++;
		}
		if(steps > max_steps)
		{
			max_start = test;
			max_steps = steps;
		}
			
	}
	printf( "%lu", max_start );
}