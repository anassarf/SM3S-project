require('./bootstrap');

var menuBtn = document.querySelector('.hamburger-menu');
var menu = document.querySelector('.menu');
let showMenu= false;
menuBtn.addEventListener('click',toggleMenu);

function toggleMenu()
{
    if(!showMenu)
    {
        menuBtn.classList.add('close');
        console.log('add')
        menu.classList.add('show');
        // menuNav.classList.add('show');
        // navItems.forEach(item => item.classList.add('show'));
        // innerItems.forEach(inner => inner.classList.add('show'));

        showMenu = true;

    } else{

        menuBtn.classList.remove('close');
        console.log('remove')
        menu.classList.remove('show');
        // menuNav.classList.remove('show');
        // navItems.forEach(item => item.classList.remove('show'));
        // innerItems.forEach(inner => inner.classList.remove('show'));


        showMenu = false;
    }
}






