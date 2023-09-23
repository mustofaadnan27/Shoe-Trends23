function toggleMenu() {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('active');
}

const currentPageURL = window.location.href;
console.log(currentPageURL);

const menuLinks = document.querySelectorAll('.menu a');

menuLinks.forEach((link)=> {
    if (link.href === currentPageURL) {
        link.parentElement.classList.add('active');
    } else {
        link.parentElement.classList.remove('active');
    }
})

// function myButton() {
//     setTimeout(() => {
//         alert('Belum Berfungsi')
//     }, 2000);
// }

