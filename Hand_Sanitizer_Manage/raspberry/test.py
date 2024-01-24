f = open('weight.txt', 'r')
x = f.read()
res = x.split("\"")
print(len(res))
print(res[39])
print(res[15])

for index, value in enumerate(res):
    print(index, ": ", value)
