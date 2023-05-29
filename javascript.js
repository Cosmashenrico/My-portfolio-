//javascript code for dynamic greeting
function greeting(){
    const currentTime=new Date();
    const currentHour=currentTime.getHours();
     
    if (currentHour<12){
        return "good morning";
    }
    else if (currentHour<18){
        return "good afternoon";
    }
    else {
        return "good evening";
    }
    

}
window.addEventListener('DOMContentLoaded',function(){
    const greeting=getGreeting();
    const greetingElement=document.getElementById('greeting');
    greetingElement.textContent=greeting
}); 