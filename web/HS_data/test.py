
f = open('weight.txt', 'r')
x = f.read()
res = x.split("\"")
for index, value in enumerate(res):
	print(index,": ",value)
