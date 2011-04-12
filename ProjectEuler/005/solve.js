for(i=20;true;i+=20) {
	div = 19;

	while(!(i % div)) {
		div--;
		if(div == 0) {
			console.log( i );
			process.exit(0);
		}
	}
}
