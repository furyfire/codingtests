#include <stdio.h>
#include <math.h>

int main( )
{
	long num = 3;
	long tri_add = 2;
	long div;
	int divisors;
	int max = 0;
	do
	{
		num += ++tri_add;
		divisors = 2;
		int square_root = sqrt(num);
		for(div = 2; div <= square_root; div++)
		{
			if(num % div == 0)
				divisors+=2;
		}
	} while(divisors <= 500);
	printf( "%i", num );
}