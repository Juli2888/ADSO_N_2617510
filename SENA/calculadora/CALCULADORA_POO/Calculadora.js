// Calculadora.js

// Clase que representa una calculadora
class Calculadora {
	// Constructor que inicializa las propiedades de la calculadora
	constructor() {
	  // Propiedades para almacenar operandos, operación y resultado
	  this.operandoa = "";
	  this.operandob = "";
	  this.operacion = "";
	  // Elemento del DOM para mostrar el resultado
	  this.resultadoElemento = document.getElementById('resultado');
	}
  
	// Método para limpiar el resultado en el elemento del DOM
	limpiar() {
	  this.resultadoElemento.textContent = "";
	}
  
	// Método para resetear todos los valores de la calculadora
	resetear() {
	  this.resultadoElemento.textContent = "";
	  this.operandoa = 0;
	  this.operandob = 0;
	  this.operacion = "";
	}
  
	// Método para realizar la operación y mostrar el resultado
	resolver() {
	  let res = 0;
	  switch (this.operacion) {
		case "+":
		  res = parseFloat(this.operandoa) + parseFloat(this.operandob);
		  break;
		case "-":
		  res = parseFloat(this.operandoa) - parseFloat(this.operandob);
		  break;
		case "*":
		  res = parseFloat(this.operandoa) * parseFloat(this.operandob);
		  break;
		case "/":
		  res = parseFloat(this.operandoa) / parseFloat(this.operandob);
		  break;
	  }
	  this.resetear();
	  this.resultadoElemento.textContent = res;
	}
  }
  
  // Exportar la clase para su uso en otros módulos
  export default Calculadora;