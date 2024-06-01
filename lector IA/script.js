function leerContenido() {
    // Obtener el contenido a leer
    var contenido = document.getElementById("content").innerText;
    
    // Enviar el contenido a un servidor PHP para procesarlo con IA
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Recibir la respuesta del servidor
        var respuesta = this.responseText;
        
        // Leer la respuesta en voz alta utilizando un sintetizador de voz
        var synth = window.speechSynthesis;
        var utterance = new SpeechSynthesisUtterance(respuesta);
        synth.speak(utterance);
      }
    };
    xhttp.open("POST", "procesar.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("contenido=" + contenido);
  }