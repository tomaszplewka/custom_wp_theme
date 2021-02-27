const menuBarsWrapper = document.querySelector('.menu-bars');
const menuTimesWrapper = document.querySelector('.menu-times');
const menuItemsContainer = document.querySelector('.menu-header-menu-container');
const body = document.querySelector('body');

[menuBarsWrapper.firstElementChild, menuTimesWrapper.firstElementChild].forEach(item => {
    item.addEventListener('click', () => {
        body.classList.toggle('no-overflow');
        menuBarsWrapper.classList.toggle('hidden');
        menuTimesWrapper.classList.toggle('hidden');
        menuItemsContainer.classList.toggle('show');
    });
});

const formToggleBtn = document.querySelector('.form-toggle-btn-wrapper .btn');
const signUpForm = document.querySelector('form');

formToggleBtn.addEventListener('click', () => {
    if (window.screen.height < 605 || window.screen.width < 489) {
        body.classList.toggle('no-overflow');
        signUpForm.parentElement.classList.toggle('show-form-mobile');
    }
    signUpForm.parentElement.classList.toggle('show');
    menuTimesWrapper.parentElement.classList.toggle('hidden');
    signUpForm.reset();
});

document.addEventListener('click', e => {
    if (e.target.classList.contains('showcase-banner-form')) {
        signUpForm.parentElement.classList.toggle('show');
        menuTimesWrapper.parentElement.classList.toggle('hidden');
        signUpForm.reset();
    }
});

const closeSignUpForm = document.querySelector('.close');

closeSignUpForm.addEventListener('click', () => {
    body.classList.toggle('no-overflow');
    signUpForm.parentElement.classList.toggle('show-form-mobile');
    signUpForm.parentElement.classList.toggle('show');
    menuTimesWrapper.parentElement.classList.toggle('hidden');
    signUpForm.reset();
});