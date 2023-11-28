x = int(input("Wprowadź liczbę naturalną: "))
tablica = []
for y in range(1,x+1):
    if(x % y == 0):
        tablica.append(y)
if(len(tablica) != 2):
    print(x, "nie jest liczbą pierwszą, jej dzielniki to: ", tablica)
else:
    print(x, "jest liczbą pierwszą, jej dzielniki to: ", tablica)
