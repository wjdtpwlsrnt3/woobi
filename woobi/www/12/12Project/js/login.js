const loginWrapBg = document.querySelector('.loginWrapBg'),
        loginWrap = document.querySelector('.loginWrap');

window.onload = () => {
    if (window.innerWidth > 690) { 
        setTimeout(() => {
            loginWrapBg.style.top = '28%';
            loginWrap.style.top = '28%';
            loginWrapBg.style.transition = '0.7s ease';
            loginWrap.style.transition = '0.7s ease';
        }, 30);
    }
}

// home btn
const homeBtn = document.querySelector('.loginTopWrap_logo > img');
if (homeBtn) {
    homeBtn.onclick = () => {
        location.href = '../home.html';
    }
}


// opacity
const body = document.querySelector('body'),
        userIdBox = document.querySelector('.userIdBox'),
        userPwBox = document.querySelector('.userPwBox'),
        lsw = document.querySelectorAll('.lsw');

body.addEventListener('click', (event) => {
    let target = event.target;
    if (target == userIdBox || target == userPwBox) {
        loginWrapBg.style.opacity = '0.9';
    } else {
        loginWrapBg.style.opacity = '0.3';
    }
});

for (i = 0; i < lsw.length; i++) {
    lsw[i].addEventListener('mouseover', (event) => {
        let target = event.target;
        if (target[i] == lsw[i]) {
            loginWrapBg.style.opacity = '0.9';
        } else {
            loginWrapBg.style.opacity = '0.3';
        }
    });
}