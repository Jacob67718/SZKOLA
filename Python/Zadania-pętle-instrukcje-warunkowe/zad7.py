x = int(input("Podaj liczbę naturalną: "))
tablica2  = []
for a in range(len(str(x))):
    x_tekst = str(x)
    tablica = []
    suma = 0
    for y in range(0, len(x_tekst)):
        tablica.append(x_tekst[y])
        suma = suma + int(tablica[y])
    tablica2.append(suma)
    x = suma
    if suma < 10 and suma > 0:
        break
print(tablica2)