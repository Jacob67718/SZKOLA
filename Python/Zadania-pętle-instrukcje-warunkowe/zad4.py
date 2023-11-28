x = int(input("Wprowadź liczbę naturalną: "))
print("Dzielniki liczby ", x,": ", sep="")
tablica = []
for y in range(1,x+1):
    if(x % y == 0):
        tablica.append(y)
print(tablica)