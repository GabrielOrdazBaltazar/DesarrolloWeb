//Orden de las operaciones 
let resultado;

//Prioridad por ley de operadores
resultado = 20 + 30 * 2;
console.log(resultado);

//Prioridad por parentecis 
resultado = (20 + 30) * 2;
console.log(resultado);

//Incrementos 
let puntaje = 10;
console.log(puntaje);

//Incrementamos en 1 
console.log(puntaje++);
//primero imprime despues aumenta 
puntaje++;
console.log(puntaje);
//primero incrementa despues muestra
++puntaje;
console.log(puntaje);

//sumas en cantidades 
puntaje += 10;
console.log(puntaje);
//Decrementos 
puntaje--;
console.log(puntaje);