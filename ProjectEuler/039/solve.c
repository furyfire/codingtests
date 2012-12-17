#include <stdio.h>
#define P_VALUE 1000

int p, a, b, c, max, key, result = 0;
int main( )
{
	for(p=2;p<P_VALUE;p++)
	{

		for(a=2;a<p;a++)
		{
			for(b=a;b<p;b++)
			{
				//Find C so it runs faster...
				c = p - a - b;
					if(a*a+b*b == c*c) {
						result++;
					}
			}
		}
		if(result > max) {
			max = result;
			key = p;
		}
		result = 0;
	}
	printf( "%i", key);
}