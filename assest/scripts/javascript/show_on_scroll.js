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


window.onscroll = function () {

    console.log(window.pageYOffset)

    if (window.pageYOffset >= 100){
        good_title.style.opacity = '1'
    }else{
        good_title.style.opacity = '0'
    }

    if (window.pageYOffset >= 200){
        good_first.style.opacity = '1'
    }else{
        good_first.style.opacity = '0'
    }

    if (window.pageYOffset >= 500){
        good_sec.style.opacity = '1'
    }else{
        good_sec.style.opacity = '0'
    }

    if (window.pageYOffset >= 1000){
        need.style.opacity = '1'
    }else{
        need.style.opacity = '0'
    }

    if (window.pageYOffset >= 1090){
        need1.style.opacity = '1'
    }else{
        need1.style.opacity = '0'
    }

    if (window.pageYOffset >= 1090){
        need2.style.opacity = '1'
    }else{
        need2.style.opacity = '0'
    }

    if (window.pageYOffset >= 1330){
        need3.style.opacity = '1'
    }else{
        need3.style.opacity = '0'
    }

    if (window.pageYOffset >= 1740){
        steps.style.opacity = '1'
    }else{
        steps.style.opacity = '0'
    }

    if (window.pageYOffset >= 1920){
        steps1.style.opacity = '1'
    }else{
        steps1.style.opacity = '0'
    }


    if (window.pageYOffset >= 2620){
        map.style.opacity = '1'
    }else{
        map.style.opacity = '0'
    }

    if (window.pageYOffset >= 2730){
        map1.style.opacity = '1'
    }else{
        map1.style.opacity = '0'
    }


    if (window.pageYOffset >= 3360){
        opinions.style.opacity = '1'
    }else{
        opinions.style.opacity = '0'
    }

    if (window.pageYOffset >= 3430){
        opinions1.style.opacity = '1'
    }else{
        opinions1.style.opacity = '0'
    }

}
