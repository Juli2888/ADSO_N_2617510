function cualEsMayor( a, b) {
if (a > b) {  // solucion con if
    return a;
}else { 
    return b;
    
}
}
// return (a > b) ? a : b; solucion ternaria 
let mayor = cualEsMayor (5 , 9);

console.log(mayor);