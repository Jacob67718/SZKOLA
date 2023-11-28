import math
print("Zadanie 1.")
def sumaN(x):
    """Oblicza sumę cyfr liczby naturalnej"""
    a = str(x)
    tablica = []
    suma = 0
    for y in range(0, len(a)):
        tablica.append(a[y])
        suma = suma + int(tablica[y])
    return suma

print(sumaN(312313))
print(sumaN(73734))

print(" ")
print("Zadanie 2.")
def najwiekszaCyfra(x):
    """Wybiera największą cyfrę z zapisu liczby"""
    a = str(x)
    tablica = []
    for n in range(0, len(a)):
        tablica.append(int(a[n]))
        tablica.sort()
    return tablica[len(tablica)-1]

print(najwiekszaCyfra(1412))
print(najwiekszaCyfra(37398))

print(" ")
print("Zadanie 3.")
def najwieksza_i_najmniejszaCyfra(x):
    """Wybiera największą i najmniejszą cyfrę z zapisu liczby"""
    a = str(x)
    tablica = []
    for n in range(0, len(a)):
        tablica.append(int(a[n]))
        tablica.sort()
    return tablica[0], tablica[len(tablica)-1]

print(najwieksza_i_najmniejszaCyfra(423167))
print(najwieksza_i_najmniejszaCyfra(785219))

print(" ")
print("Zadanie 4.")
def sumaIloczynow(*x):
    """Oblicza sumę iloczynów"""
    suma = 0
    n = 0
    for y in x:
        n += 1
        suma = suma + (n * y)
    return suma
print(sumaIloczynow(3,4,6,9,7,5,1))
print(sumaIloczynow(2,3,4))

print(" ")
print("Zadanie 5.")
def sumaIloczynow2(*liczby):
    """Oblicza sumę iloczynów"""
    suma = 0
    tablica = []
    n = 0
    for y in liczby:
        tablica.append(y)
    for i in range(0, math.ceil(len(tablica)/2)):
        suma = suma + (tablica[n] * tablica[len(tablica)-1-n])
        n += 1
    return suma
print(sumaIloczynow2(2,3,4,5))
print(sumaIloczynow2(3,4,5))

print(" ")
print("Zadanie 6.")
G = 9.8
def ciezar(x, y):
    """Oblicza ciężar dla danej masy i przyśpieszenia"""
    F = x * y
    return F

print(ciezar(100, G))
print(ciezar(100, y = 9.805))


print(" ")
print("Zadanie 7.")
def ciagi(n):
    """Wyznacza wybrany wyraz ciągu"""
    if n == 1:
        return 1
    else:
        return ciagi(n-1) + (n + 1)
print(ciagi(10))
print(ciagi(1))
