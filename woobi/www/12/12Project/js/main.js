const headerBtn = document.querySelectorAll('.headerBtn');

headerBtn[0].onclick = () => {
    location.href = '검색';
}

headerBtn[1].onclick = () => { 
    location.href = 'home.html';
}

headerBtn[2].onclick = () => {
    window.scrollTo({left: 0, top: 1000, behavior: 'smooth'});
}

headerBtn[3].onclick = () => {
    location.href = 'userPage';
}

const listBtn = document.querySelectorAll('#list-header > ul > li'),
        playList = document.getElementById('play-list'),
        foodList = document.getElementById('food-list'),
        cafeList = document.getElementById('cafe-list'),
        infoList = document.getElementById('info-list'),
        communityList = document.getElementById('community-list');

listBtn[0].addEventListener('click', () => {
    playList.style.display = 'block';
    foodList.style.display = 'none';
    cafeList.style.display = 'none';
    infoList.style.display = 'none';
    communityList.style.display = 'none';
});

listBtn[1].addEventListener('click', () => {
    foodList.style.display = 'block';
    playList.style.display = 'none';
    cafeList.style.display = 'none';
    infoList.style.display = 'none';
    communityList.style.display = 'none';
});

listBtn[2].addEventListener('click', () => {
    cafeList.style.display = 'block';
    playList.style.display = 'none';
    foodList.style.display = 'none';
    infoList.style.display = 'none';
    communityList.style.display = 'none';
});

listBtn[3].addEventListener('click', () => {
    infoList.style.display = 'block';
    playList.style.display = 'none';
    foodList.style.display = 'none';
    cafeList.style.display = 'none';
    communityList.style.display = 'none';
});

listBtn[4].addEventListener('click', () => {
    communityList.style.display = 'block';
    playList.style.display = 'none';
    foodList.style.display = 'none';
    cafeList.style.display = 'none';
    infoList.style.display = 'none';
});


const topBtn = document.getElementById('topBtn');
topBtn.onclick = () => {
    window.scrollTo({left: 0, top: 0, behavior: 'smooth'});
}

//--------------------footer------------------------------
// footer영역 버튼
let footerBtn = document.querySelector('.footerBtn'),
    footerBtn_Ch = document.querySelector('.footerBtn_Ch'),
    footerSlide = document.querySelector('.footer_center');

    footerBtn.addEventListener('click', function() {   
    if (footerSlide.style.display == 'none') {
        footerSlide.style.display = 'block';        
    } else {
        footerSlide.style.display = 'none';     
    } 
});