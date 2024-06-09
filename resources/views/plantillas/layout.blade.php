<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])    

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body>
    
    @yield("content")

    @include("plantillas.footer")

    <script>
        function copiarTexto(id_texto, id_boton){
            let texto = document.getElementById(id_texto);
            let boton = document.getElementById(id_boton);

            navigator.clipboard.writeText(texto.textContent);
            boton.textContent = "Copiado";
            setTimeout(() =>{
                boton.textContent = "Copiar";
            }, 2000)
        };
    </script>
<script>
    const rangeFont = document.getElementById("range-font");
const sizeLetra = document.getElementsByClassName("size-letra");

// Almacena el tamaño base de la letra para cada elemento
const tamañosBase = Array.from(sizeLetra).map(element => parseFloat(window.getComputedStyle(element).fontSize));

rangeFont.addEventListener("input", () => {
  const fontSize = parseFloat(rangeFont.value);
  for (var i = 0; i < sizeLetra.length; i++) {
    var element = sizeLetra[i];
    var newSize = tamañosBase[i] + fontSize; // Suma solo una vez por elemento
    element.style.fontSize = newSize + "px";
    console.log(newSize);
  }
});
</script>
</body>
</html>