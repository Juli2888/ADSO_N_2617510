//Personaje de TV
let nombre ="tanjiro";
let anime = "Demon slayer";
let edad = 16;

let personaje ={
    nombre: "Tanjiro",
    anime:"Demon slayer",
    edad:17,
};
console.log (personaje);
console.log (personaje.nombre);
console.log (personaje['anime']);


personaje.edad =25;
let llave ='edad';
personaje['llave'] =20;


delete personaje.anime;

console.log(personaje);