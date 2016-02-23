#include <stdio.h>

void main( )
{
	unsigned char primes[100];
	int p;
	int j;
	memset(&primes, 1, 50 );
	for( p = 2; p<=10; p++) {
		if (primes[p]) {
			for(j = p*p; j <= 100; j+= p){
			  primes[j] = 0;
			}
		}
	}
	printf( "Primes:%d\n", sizeof(primes)) ;
	for(p=0;p<sizeof(primes);p++) {
		if(primes[p]) {
			printf( "%d\n",p);
		}
	}
}