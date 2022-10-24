

if (window.localStorage.getItem('dark')){
            
    if(window.localStorage.getItem('dark') == 1 ){
        
        const h = document.querySelector('body')
        const b1 = document.getElementById('darkmodeimage1')
        const b2 = document.getElementById('darkmodeimage2')
        b1.classList.add("darkmodebody")
        b2.classList.add("darkmodebody")
        h.classList.add("darkmodebody")
        
    }else{

    }
    
    
}else{
    window.localStorage.setItem('dark', 0)
    location.reload()
}


function darkmode (){

    if(window.localStorage.getItem('dark') == '0' ){
        const h = document.querySelector('body')
        const b1 = document.getElementById('darkmodeimage1')
        const b2 = document.getElementById('darkmodeimage2')
        b1.classList.add("darkmodebody")
        b2.classList.add("darkmodebody")
        h.classList.add("darkmodebody")

        window.localStorage.setItem('dark', 1)
    }else{
        const h = document.querySelector('body')
        const b1 = document.getElementById('darkmodeimage1')
        const b2 = document.getElementById('darkmodeimage2')
        b1.classList.remove("darkmodebody")
        b2.classList.remove("darkmodebody")
        h.classList.remove("darkmodebody")

        window.localStorage.setItem('dark', 0)
    }




}



/*
var a = 1;

function darkmode()
{


    
    if(a==1) {
        // document.getElementById("navigationx").style.display="block";
        const h = document.querySelector('body')
        const b1 = document.getElementById('darkmodeimage1')
        const b2 = document.getElementById('darkmodeimage2')
        b1.classList.add("darkmodebody")
        b2.classList.add("darkmodebody")
        h.classList.add("darkmodebody")

        return a=0;
    }else{
        // document.getElementById("navigationx").style.display="flex";
        const h = document.querySelector('body')
        const b1 = document.getElementById('darkmodeimage1')
        const b2 = document.getElementById('darkmodeimage2')
        b1.classList.remove("darkmodebody")
        b2.classList.remove("darkmodebody")
        h.classList.remove("darkmodebody")

        return a=1;
    }
}

*/
