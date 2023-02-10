var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

function Shuffle(ID, Soort, Naam, Foto, Prijs, Aantal, Beschrijving ) {
  let ShuffleLi = document.getElementsByName("OntdekLi");
  let ShuffleLiH1 = document.getElementsByName("OntdekLiH1");
  let ShuffleLiImg = document.getElementsByName("OntdekLiImg");
  for (i = 0; i < ShuffleLi.length; i++) {
    console.log(i + "Shuffle");
    ShuffleLi[i].classList.remove("OntdekLiAnimate");
    ShuffleLi[i].classList.add("OntdekLiAnimate");
    ShuffleLi[i].style.animation = 'none';

    // trigger reflow
    //console.log(ShuffleLi[i].offsetWidth);
    //console.log(ShuffleLi[i].offsetHeight);
    ShuffleLi[i].offsetWidth;
    ShuffleLi[i].offsetHeight;
  
    //Voeg nieuw product toe
    let NewID = Math.floor(Math.random() * ID.length)
    ShuffleLiImg[i].src = Foto[NewID]
    ShuffleLiH1[i].textContent = Naam[NewID]
    console.log(Soort);

    // add animation again
    ShuffleLi[i].style.animation = 'ShuffleLiAnim 2s';
  };

  Naam;
  Foto;
  Prijs;
  Aantal;
  Beschrijving;
  }

  function Search() {
    console.log("Searching")
    let search = document.getElementById("SearchText").value;
    let URL = "https://www.google.nl/search?q=Air up "
    let FinalSearch = URL.concat(search)
    console.log(FinalSearch)
    window.open(FinalSearch)
  }