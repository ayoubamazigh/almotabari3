var good_title = document.getElementById('good')
var good_first = document.getElementById('good1')
var good_sec = document.getElementById('good2')

var need = document.getElementById('need')
var need1 = document.getElementById('need1')
var need2 = document.getElementById('need2')
var need3 = document.getElementById('need3')

var steps = document.getElementById('steps')
var steps1 = document.getElementById('steps1')

var map = document.getElementById('map')
var map1 = document.getElementById('map1')

var opinions = document.getElementById('opinions')
var opinions1 = document.getElementById('opinions1')

var backtotop = document.getElementById('backtotop')

window.onscroll = function () {

    console.log(window.pageYOffset)

    if (window.pageYOffset >= 200){
        good_title.style.opacity = '1'
    }else{
        good_title.style.opacity = '0'
    }

    if (window.pageYOffset >= 300){
        good_first.style.opacity = '1'
    }else{
        good_first.style.opacity = '0'
    }

    if (window.pageYOffset >= 600){
        good_sec.style.opacity = '1'
    }else{
        good_sec.style.opacity = '0'
    }

    
    if (window.pageYOffset >= 800){
        backtotop.style.opacity = '.8'
    }else{
        backtotop.style.opacity = '0'
    }


    if (window.pageYOffset >= 1100){
        need.style.opacity = '1'
    }else{
        need.style.opacity = '0'
    }

    if (window.pageYOffset >= 1430){
        need1.style.opacity = '1'
    }else{
        need1.style.opacity = '0'
    }

    if (window.pageYOffset >= 1190){
        need2.style.opacity = '1'
    }else{
        need2.style.opacity = '0'
    }

    if (window.pageYOffset >= 1430){
        need3.style.opacity = '1'
    }else{
        need3.style.opacity = '0'
    }

    if (window.pageYOffset >= 1840){
        steps.style.opacity = '1'
    }else{
        steps.style.opacity = '0'
    }

    if (window.pageYOffset >= 2020){
        steps1.style.opacity = '1'
    }else{
        steps1.style.opacity = '0'
    }


    if (window.pageYOffset >= 2720){
        map.style.opacity = '1'
    }else{
        map.style.opacity = '0'
    }

    if (window.pageYOffset >= 2830){
        map1.style.opacity = '1'
    }else{
        map1.style.opacity = '0'
    }


    if (window.pageYOffset >= 3460){
        opinions.style.opacity = '1'
    }else{
        opinions.style.opacity = '0'
    }

    if (window.pageYOffset >= 3630){
        opinions1.style.opacity = '1'
    }else{
        opinions1.style.opacity = '0'
    }

}
