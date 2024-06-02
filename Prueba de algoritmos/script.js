function sumar() {
    var numero1 = parseInt(document.getElementById('numero1').value);
    var numero2 = parseInt(document.getElementById('numero2').value);
    var resultado = numero1 + numero2;
    document.getElementById('resultado').value = resultado;
}