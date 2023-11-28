x = int(input("Podaj liczbę naturalną: "))
x_tekst = str(x)
tablica = []
suma = 0
for y in range(0, len(x_tekst)):
    tablica.append(x_tekst[y])
    suma = suma + int(tablica[y])
print("Suma cyfr liczby", x, "wynosi: ", suma)