rok = int(input("Podaj dowolny rok: "))
rok_tekst = str(rok)
koncowka_liczby = rok_tekst[2] + rok_tekst[3]
koncowka_liczby = int(koncowka_liczby)

if(koncowka_liczby%4 == 0 and (rok%100 != 0 or rok%400 == 0)):
    print("Rok", rok, "jest przestępny")
else:
    print("Rok", rok, "nie jest przestępny")

