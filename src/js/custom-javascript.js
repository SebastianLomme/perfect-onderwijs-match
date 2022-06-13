
document.addEventListener('DOMContentLoaded', (event) => {
    const fields = document.getElementsByClassName("gfield")

    Array.from(fields).forEach(field => {
        const input = field.querySelector("input[type='text'], input[type='email'], input[type='tel'], textarea")
        const label = field.querySelector("label")
        if (input) {
            input.addEventListener("input", () => {
                if (input.value) {
                    console.log("input")
                    console.log("value", input.value)
                    label.classList.add("focus-label")
                } else {
                    label.classList.remove("focus-label")
                }
            })
        } if (input && input.value) {
            label.classList.add("focus-label")
            console.log("test")
        } else if (input && !input.value) {
            label.classList.remove("focus-label")
        }
    })
    //the event occurred
})


