window.addEventListener('load', (event)=>{
    const H1_WIDTH = document.querySelector('.m-h1').getBoundingClientRect().width;
    document.documentElement.style.setProperty('--h1-width', H1_WIDTH + 'px');

    checkBoxEvent();
});


window.addEventListener('resize', (event)=>{
    H1_WIDTH = document.querySelector('.m-h1').getBoundingClientRect().width;

    document.documentElement.style.setProperty('--h1-width', H1_WIDTH + 'px');
});


 
function checkBoxEvent(){
    const checkbox_arr = document.getElementsByName("tab-btn");

}