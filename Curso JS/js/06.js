//Operadores math
let resultado;

//Numero PI
resultado = Math.PI;
console.log(resultado);

//Redondear 
resultado = Math.round(2.5);
console.log(resultado);

//Redondear siempre hacia arriba 
resultado = Math.ceil(2.1);
console.log(resultado);

//Redondear siempre hacia abajo
resultado = Math.floor(2.1);
console.log(resultado);

//Raiz cuadrada
resultado = Math.sqrt(144);
console.log(resultado);

//Convertir de negativo a positivo
resultado = Math.abs(-300);
console.log(resultado);

//Encontrar el minimo 
resultado = Math.min(3,5,6,7,8,0,0,2,4);
console.log(resultado);

//Encontrar el maximo 
resultado = Math.max(3,5,6,7,8,0,0,2,4);
console.log(resultado);

//Numero aleatorio
resultado = Math.random();
console.log(resultado);
//Ahora con numeros >1
resultado = Math.floor(Math.random()*10);
console.log(resultado);