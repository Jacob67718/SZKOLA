n = int(input("Podaj liczbę naturalną: "))
x = 1.0
y = 2.0
suma = 0.0
for a in range(n):
    suma = suma + (x/y)
    x = x+1
    y = y+1

print(suma)