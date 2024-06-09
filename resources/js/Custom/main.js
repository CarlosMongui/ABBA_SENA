function responsividad() {
    const width = Math.max(
      document.documentElement.clientWidth,
      window.innerWidth || 0
    )

    if (width <= 576){return "xs"}
    if (width <= 768){return "sm"}
    if (width <= 992){return "md"}
    if (width <= 1200){return "lg"}
    if (width <= 1400){return "xl"}
    if (width <= 1600){return "xxl"}
    if (width <= 1900){return "xxxl"}
    if (width <= 2600){return "xxxxl"}
    if (width <= 3400){return "xxxxxl"}
    return "giant"
};

var u = responsividad();


function responsiveFont(){
    var elements = document.getElementsByClassName("size-letra");

    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        let fontSize = element.style.fontSize
        if (u == "xxl"){
            element.style.fontSize = (33) + "px";
        }
        if (u == "xxxl"){
            element.style.fontSize = (40) + "px";
        }
        if (u == "xxxxl"){
            element.style.fontSize = (57) + "px";
        }
        if (u == "xxxxxl"){
            element.style.fontSize = (70) + "px";
        }
        if (u == "giant"){
            element.style.fontSize = (157) + "px";
        }
    }
};

document.addEventListener("DOMContentLoaded", responsiveFont, false)




var navbarTitle = document.getElementById("navbar-title");

navbarTitle.style.position = "absolute";


var navbarSubtitle = document.getElementById("navbar-subtitle")
var i
if (navbarSubtitle != null){
    i = -15;
}else{
    i = 0
};




function copiarTexto(id_texto, id_boton){
    let texto = document.getElementById(id_texto);
    let boton = document.getElementById(id_boton);

    navigator.clipboard.writeText(texto.textContent);
    boton.textContent = "Copiado";
    setTimeout(() =>{
        boton.textContent = "Copiar";
    }, 2000)
};



var elipse = document.getElementById("navbar-elipse");
var title = document.getElementById("navbar-title");
var subtitle = document.getElementById("navbar-subtitle");
var j
if (u == "sm"||u == "xs"){
    elipse.style.width = "200px";
    elipse.style.height = "150px";

    title.style.fontSize = "60px";
    j = 0
    subtitle.style.fontSize = "24px";
    subtitle.style.top = "45px"
}else if (u == "md"||u == "lg"||u == "xl"||u == "xxl"||u == "xxxl"||u == "xxxxl"||u == "xxxxxl"){
    elipse.style.width = "500px";
    elipse.style.height = "205px";
    
    title.style.fontSize = "120px";
    j = 10
    subtitle.style.fontSize = "40px";
    subtitle.style.top = "90px"
}else if (u == "giant"){
    elipse.style.width = "610px";
    elipse.style.height = "250px";
    
    title.style.fontSize = "150px";
    j = 10;
    subtitle.style.fontSize = "60px";
    subtitle.style.top = "110px";  
};


navbarTitle.style.top = -j + i + "px";


document.getElementById('image').onchange=function(e){
    let reader=new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload=function(){
        let preview=document.getElementById('preview');
        if (document.getElementById('imagen-post')){
            (document.getElementById('imagen-post')).remove();
        };
        let image=document.createElement('img');
        image.src=reader.result;
            image.onload = function () {
            console.log(image.naturalWidth > image.naturalHeight*(175/111))
            if (image.naturalWidth > image.naturalHeight*(175/111)){
                image.style.width="350px";
                preview.style.width="350px";
            }else{
                const newWidth = (image.naturalWidth * 222) / image.naturalHeight;
                preview.style.width = Math.round(newWidth) + "px";
                console.log(preview.style.width);
            };
            image.style.height="222px";
            image.id="imagen-post";
            preview.append(image);
        };
    }
}