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
... 'nombre':"Nat",
... 'apellido':"Ticona"
... }    
miinfo['nombre']
'Nat'
 
#condicionales
x = int(raw_input("introduce un numero entero: "))
if x > 0:
    x = 0
    print 'negativo cambiado a 0'
elif x == 0:
    print 'cero'
