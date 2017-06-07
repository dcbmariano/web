/* Script */
var num = 8;
var resto = num % 2;
switch (resto){
	case 0:
	console.log(num+" eh par.");
	break;
	case 1:
	console.log(num+" eh impar.");
	break;
	default:
	console.log("Numero invalido.");
	break;
}