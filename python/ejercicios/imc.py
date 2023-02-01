peso = int(input("introduce tu peso: "))
estatura = float(input("introduce tu estatura: "))

total = peso / (estatura**2)
#to fixed
print(f"Su IMC es de {total:.2f}" )

if total > 25:
    print("usted tiene mucho")
elif total > 15:
    print("esta bien")
elif total < 10:
    print("coma mas")