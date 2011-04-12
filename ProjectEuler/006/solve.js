square = 0;
sum = 0;
for(num=1;num<101;num++) {
	square += Math.pow(num,2);
	sum += num;

}
console.log( Math.pow(sum,2) - square);

