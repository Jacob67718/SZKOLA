wzrost = float(input("Podaj swój wzrost w metrach (np. 1.8): "))
waga =  int(input("Podaj swoją wagę w kilogramach: "))
BMI = round(waga / (wzrost**2), 1)
if BMI < 18.5:
    print("Twoje BMI jest poniżej 18,5. To za mało!")
elif BMI > 25:
    print("Twoje BMI jest powyżej 25. To za dużo!")
else:
    print("Twoje BMI jest prawidłowe")