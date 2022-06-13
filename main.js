jQuery(document).ready(function(){
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:-90,
        nav:true,
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});

const germanyElement = document.querySelector('.ge');
const englandElement = document.querySelector('.uk');


germanyElement.addEventListener('click', ()=>{
    germanyElement.hidden = true;
    englandElement.hidden = false;
})

englandElement.addEventListener('click', ()=>{
    germanyElement.hidden = false;
    englandElement.hidden = true;
})


