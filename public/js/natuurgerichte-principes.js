document.querySelector('.menu-bar').addEventListener('click',()=>{
    document.querySelector('.links-ul-mobile').classList.toggle('actives')
    document.querySelector('.main__principal__all__page').classList.toggle('actives')
})

 


document.querySelectorAll('.lists__app span').forEach((span)=>{
    if(span.classList.contains('active__links')){
        span.querySelector('a').style.color="#fff" 
    }
})