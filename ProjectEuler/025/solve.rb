DIGITS = 1000

max = 10 ** (DIGITS-1)
fcurrent = 1
fprev = 1
term = 2
while fcurrent < max do 
	term = term + 1
	fnext = fcurrent + fprev
	fprev = fcurrent;
	fcurrent = fnext;
end
puts term