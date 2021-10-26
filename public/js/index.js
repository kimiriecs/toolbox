

const buttons = Array.from(document.querySelectorAll(".sidebar--button"));

buttons.forEach((btn, index) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation()
        const container = e.currentTarget.nextElementSibling
        const icon = e.currentTarget.querySelector('.sidebar--button-icon')
        e.currentTarget.classList.toggle('active')
        container.classList.toggle('show')
        icon.classList.toggle('rotate')

    });
});