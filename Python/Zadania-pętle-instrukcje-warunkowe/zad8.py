x = int(input("Podaj liczbę naturalną: "))
x_tekst = str(x)
tablica = []
suma = 0
for y in range(len(x_tekst)):
    tablica.append(x_tekst[y])
    if(int(tablica[y]) % 2 != 0):
        suma = suma + int(tablica[y])
print("Suma nieparzystych cyfr liczby", x, "wynosi: ", suma)
