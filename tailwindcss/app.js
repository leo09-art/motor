var nextBtn = document.querySelector('.next'),
        prevBtn = document.querySelector('.prev'),
        carousel = document.querySelector('.carousel'),
        list = document.querySelector('.list'),
        item = document.querySelector('item'),
        runningTime = document.querySelector('.timeRunning');
let timeRunning = 3000;
let timeAutoNext = 7000;

function resetTimeAnimation(){
    runningTime.style.animation= 'none';
    runningTime.offsetHeight; // trigger reflow
    runningTime.style.animation= null; // reset the animation
    runningTime.style.animation='runningTime 7s linear 1 forwards';
}

function showSlider(type){
    let sliderItemsDom = document.querySelectorAll('.item');
    if(type === 'next'){
        list.appendChild(sliderItemsDom[0]);
        carousel.classList.add('next');
    }else{
        list.prepend(sliderItemsDom[sliderItemsDom.length-1]);
        carousel.classList.add('prev');
    }

    clearTimeout(runNextAuto);
    runNextAuto= setTimeout(()=>{nextBtn.click()},timeAutoNext);

    resetTimeAnimation();
}

nextBtn.addEventListener('click', function() {  
    showSlider('next');

})
prevBtn.addEventListener('click', function() {  
    showSlider('prev');
})

let runTimeOut;
let runNextAuto = setTimeout(()=>{nextBtn.click()},timeAutoNext);




