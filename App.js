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

function Shuffle() {
  let ShuffleLi = document.getElementsByName("OntdekLi");
  for (i = 0; i < ShuffleLi.length; i++) {
    console.log(i + "Shuffle");
    ShuffleLi[i].classList.remove("OntdekLiAnimate");
    ShuffleLi[i].classList.add("OntdekLiAnimate");
    ShuffleLi[i].style.animation = 'none';

    // trigger reflow
    console.log(ShuffleLi[i].offsetWidth);
    console.log(ShuffleLi[i].offsetHeight);
  
    // add animation again
    ShuffleLi[i].style.animation = 'ShuffleLiAnim 2s';
  };
  }

  function Search() {
    console.log("Searching")
    let search = document.getElementById("SearchText").value;
    let URL = "https://www.google.nl/search?q=Air up "
    let FinalSearch = URL.concat(search)
    console.log(FinalSearch)
    window.open(FinalSearch)
  }