
//Search function to all pages are handled by this js page!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



var buttonUp = () => {

    //const input = document.getElementById(".searchbox-input");
    const input = document.querySelector("#search");
    console.log(input);
   // serchbb
    //const input = document.querySelector(".searchbox-input");
    const cards = document.getElementsByClassName("C");
    let filter = input.value.toUpperCase()
    for (let i = 0; i < cards.length; i++) {
        let title = cards[i].querySelector(".t");
        
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].classList.remove("d-none")
           // cards[i].style.display = "";
        } else {
            cards[i].classList.add("d-none")
            //cards[i].style.display = "none";
        }
    }
}



