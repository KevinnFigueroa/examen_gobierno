n = [36,42,8,38,31,56,59,24,96,3,88]
array_len = len(n)
i = 1

for index in range(0,int(len(n)/2)):
	
	if n[index] > n[array_len-i]:
		n[index], n[array_len-i] = n[array_len-i],n[index]
	i+= 1

print("Imprimimos lista modificada: ", n)