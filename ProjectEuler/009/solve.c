#include "stdio.h"
#include "math.h"

int main( )
{
	int a;
	int b;
	int c;
	int cmp;
	for(a = 1; a < 1000; a++)
	{
		for(b = 1; b < 1000; b++)
		{
			//Calculate the only valid value for c
			c = 1000 - a - b;
			if( pow(c,2) == (pow(a, 2 ) + pow( b, 2 )))
			{
				int result = a * b * c;
				printf("%i", result);
				return 0;
			}
		}
	}
}