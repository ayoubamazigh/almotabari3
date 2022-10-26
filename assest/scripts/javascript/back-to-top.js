var backtotop = document.getElementById('backtotop')

window.onscroll = function () {

    if (window.pageYOffset >= 700){
        backtotop.style.display = 'block'
    }else{
        backtotop.style.display = 'none'
    }
}


function gototop(){
    scrollTo(0,0)
}