const rangeFont = document.getElementById("range-font");
const sizeLetra = document.getElementsByClassName("size-letra");

rangeFont.addEventListener("input", () => {
  const fontSize = rangeFont.value;
  for (var i = 0; i < sizeLetra.length; i++) {
    var element = sizeLetra[i];
    var elementTag = element.tagName;
    element.style.fontSize = fontSize + "px";
    if (elementTag == "INPUT"){
      element.style.height = (fontSize * 3.5) +"px";
    };
    var cards = element.getElementsByClassName("card");
    for (var j = 0; j < cards.length; j++) {
      var card = cards[j];
      card.style.width = (13 + fontSize/4) + "rem"
    }
  }
});
