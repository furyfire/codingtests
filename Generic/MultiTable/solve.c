#include <stdio.h>
#define SIZE_X 12
#define SIZE_Y 12
void main()
{
    int x,y;
	int MemorizeThis[SIZE_X][SIZE_Y];
    for (x =1; x <= SIZE_X; x++)
    {
        for (y = 1; y <= SIZE_Y; y++)
        {
            MemorizeThis[x-1][y-1] = x * y;
			printf("[%03d]", MemorizeThis[x-1][y-1]);
            
        }
		printf("\n");
    }
	printf("\n");
	return;
}