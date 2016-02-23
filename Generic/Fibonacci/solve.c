#include <stdio.h>
#include <string.h>
#define SIZE 20



void add(char *a, char *b, char *result, int size) {
int i = 0;
	for(i=0;i<size;i++) {
		//We have overflow!
		if((a[i] + b[i] + result[i] < a[i]) || (a[i] + b[i] + result[i] < b[i])) {
			result[i+1]++;
		}
		result[i]+= a[i] + b[i];
		

	}
}

int main( )
{	
	unsigned char prev[SIZE];
	unsigned char current[SIZE];
	unsigned char next[SIZE];
	unsigned int i=0;
	memset(prev,0x00,SIZE);
	memset(current,0x00,SIZE);
	memset(next,0x00,SIZE);
	prev[0]=1;
	current[0]=1;
	next[0]=1;
	
	for(i=2;i<100;i++) {

		add(current,prev,next,SIZE);
		memcpy(prev,current,SIZE);
		memcpy(current,next,SIZE);
		//prev = current;
		//current = next;
		int j;
		for(j=0;j<SIZE;j++) {
		printf("%d: %i\n",j,current[j]);
		}
	}
	
	for(i=0;i<SIZE;i++) {
		printf("%d: %i\n",i,current[i]);
	}
	
	return 0;
}