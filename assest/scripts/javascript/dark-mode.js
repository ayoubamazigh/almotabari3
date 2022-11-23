if (window.localStorage.getItem('theme')){
    if(window.localStorage.getItem('theme') == 0){
        document.write("<link rel='stylesheet' href='assest/css/light-mode.css' type='text/css'>")
        document.write("<link rel='stylesheet' href='../assest/css/light-mode.css' type='text/css'>")
    }else if(window.localStorage.getItem('theme') == 1){
        document.write("<link rel='stylesheet' href='assest/css/dark-mode.css' type='text/css'>")
        document.write("<link rel='stylesheet' href='../assest/css/dark-mode.css' type='text/css'>")
    }else{
        window.localStorage.setItem('theme', 1)
        location.reload()
    }
}else{
    window.localStorage.setItem('theme', 1)
    location.reload()
}

function darkmode(){

        if(window.localStorage.getItem('theme') == 1){
            window.localStorage.setItem('theme', 0)
            location.reload()
        }else if(window.localStorage.getItem('theme') == 0){
            window.localStorage.setItem('theme', 1)
            location.reload()
        }
}