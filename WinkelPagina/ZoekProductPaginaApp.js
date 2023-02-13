function SliderTextChange() {
    document.getElementById("SliderText").innerHTML = document.getElementById("myRange").value;
    setTimeout(SliderTextChange, 10)
}