var op = 0;
var flag = 0;
const navElement = document.getElementById('nav');

window.addEventListener('scroll', () => {
    if(flag == 0) {
        const scrolled = window.scrollY;
        const endHeader = document.getElementById('header').clientHeight;
        const navHeight = navElement.clientHeight;
        const diff = endHeader - navHeight;
        
        const stepzize = 1 / diff;

        op = scrolled * stepzize;
        if(scrolled < 400) {
            navElement.style.backgroundColor = 'rgba(60,78,182, '+ op +')';
        } else {
            navElement.style.backgroundColor = 'rgba(60,78,182, 1)';
        }
    }
});

function toggleBackground() {
    console.log('in Toggle');
    if(flag == 1) {
        navElement.style.backgroundColor = 'rgba(60,78,182, ' + op + ')';
        flag = 0;
        console.log('flag = 0')
    } else {
        navElement.style.backgroundColor = 'rgba(60,78,182, 1)';
        flag = 1;
        console.log('flag = 1')
    }
}
