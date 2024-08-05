const tweet = 'Aprendiendo JavaScript con el curso de Desarrollo Web Completo';
const producto2 = 'Monitor 40"';

//Para saber el  numero de caracteres
console.log(tweet.length);
console.log(producto2);

//IndexOf busca un elemento en especifico en un string y retorna la psision
console.log(tweet.indexOf('JavaScript'));
//Cuando no lo encuentra manda un -1 
console.log(producto2.indexOf('Tablet'));

//Include nos sirve para buscar un elemento en especifico y retorna uun true o un false 
console.log(tweet.includes('JavaScript'));
console.log(producto2.includes('Tablet'));