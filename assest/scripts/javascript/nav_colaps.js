
var a = 0;

function nav_colaps(){
    if(a == 0){
        document.getElementById('nav_colapsing').style.display = 'block';
        document.getElementById('close-nax-x').style.display = 'flex';
        
        a = 1;
    }else{
        document.getElementById('nav_colapsing').style.display = 'none';
        document.getElementById('close-nax-x').style.display = 'none';
        a = 0;
    }
}