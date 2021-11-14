/**
 * accordion logic
 */
const buttons = Array.from(document.querySelectorAll(".accordion--button"));
    
buttons.forEach((btn, index) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation()
        const container = document.getElementById(e.currentTarget.dataset.target)
        const icon = e.currentTarget.querySelector('.accordion--button-icon')
        e.currentTarget.classList.toggle('active')
        container.classList.toggle('show')
        icon.classList.toggle('rotate')

    });
});