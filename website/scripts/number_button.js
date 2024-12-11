const number_inputs = document.getElementsByClassName("button-custom-quantity")
for (const number_input of number_inputs) {
    const inc_button = number_input.previousElementSibling
    const dec_button = number_input.nextElementSibling
    let min = 1
    let max = 1000
    max_attr = Math.trunc(Number(number_input.getAttribute("max")))
    if (number_input.getAttribute("min") != null) {
        min = Math.trunc(Number(number_input.getAttribute("min")))
        console.log("min changed to: ", min)
    }
    if (number_input.getAttribute("max") != null) {
        max = Math.trunc(Number(number_input.getAttribute("max")))
        console.log("max changed to: ", max)
    }
    console.log(min, max)

    // we do some currying
    function add(amount) {
        return function() {
            const prev_val = Number(number_input.value)
            if (!prev_val && number_input.value != "0") {
                number_input.value = min
            } else {
                number_input.value = Math.min(max, Math.max(min, prev_val + amount))
            }
        }
    }

    inc_button.addEventListener("mousedown", add(-1))
    dec_button.addEventListener("click", add(1))

    // if we want to disable writing wrong things inside input field
    //number_input.addEventListener("input", add(0))
    //number_input.addEventListener("paste", add(0))
    //number_input.addEventListener("change", add(0))
    //number_input.addEventListener("keypress", add(0))
}
