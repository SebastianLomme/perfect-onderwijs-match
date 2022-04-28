// Add your custom JS here.

const closeButton = document.getElementById("close-button-popup")
const popUpContainer = document.getElementById("pop-up-container")
const openSollicitatieButton = document.getElementById("menu-item-66")

closeButton.addEventListener("click", () => {
    console.log("Click")
    popUpContainer.classList.add("hide")
})

openSollicitatieButton.addEventListener("click", () => {
    console.log("Click")
    popUpContainer.classList.remove("hide")
})



