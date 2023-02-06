import random

lista=["jaimito", "ole", "si"]
", ".join(lista)

numero = [1,2,3,4,5,6,7,8,9]
#da saltos del 1 al 9 y con saltos de 2 en 2 
numero[1:9:2] 
[2, 4, 6, 8]

#va al reves con saltos de menos 1 
numero[9::-1]
[9, 8, 7, 6, 5, 4, 3, 2, 1]

#se le da valor a varias variables al mismo tiempo
a, b = 1,2

#sus valores no se modifican
tupla = (1,"sdasdsa")

#diccionario, relacionar una clave a un valor
miinfo = {
    'nombre':"Nat",
    'apellido':"Ticona"
}    
miinfo['nombre']
'Nat'
 
#condicionales
x = int(raw_input("introduce un numero entero: "))
if x > 0:
    x = 0
    print('negativo cambiado a 0')
elif x == 0:
    print('cero')


#bucles 
nums = list(range(0,10)) 
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
# sacar los pares
pares=[par for par in nums if par % 2 == 0]
# lo que sale en el for
pares
[0, 2, 4, 6, 8]

# elevarla al cuadrado cada uno
[x*x for x in nums]

#ternaria, eleva x al cuadrado si x%2=0 sino multiplicalo x*-1
[random.randrange(5,10) for _ in range (0,5)] 

"lo que sale ->" [0, 1, -2, 9, -4, 25, -6, 49, -8, 81]


[x*x if x %2 else -1*x for x in nums]
#ternaria, si los numeros son mayores que 5 mira si es par o impar y hace el if
[x*x if x %2 else -1*x for x in nums if x>5] 
"lo que sale ->" [-6, 49, -8, 81]

# otro array 
fruits = ["apple", "banana", "cherry","kiwi", "mango"]
#otro array 
[inventada.upper() for inventada in fruits]
"lo que sale ->" ['APPLE', 'BANANA', 'CHERRY', 'KIWI', 'MANGO']
