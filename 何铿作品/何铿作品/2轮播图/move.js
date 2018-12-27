function getStyle(obj,attr){
    var value=null;
    if(window.getComputedStyle){
        value=window.getComputedStyle(obj)[attr];
    }else{
        value=obj.currentStyle[attr];
    }
    return value;

}
function startMove(obj,data,func){
    clearInterval(obj.timer);
    var speed,iCur,name;
     startTimer=obj.timer=setInterval(function(){
         var bStop=true;
         for(var attr in data){
            if(attr=='opacity'){
                name=attr;
                iCur=parseFloat(getStyle(obj,attr))*100;
            }else{
                iCur=parseInt(getStyle(obj,attr));
             }
             speed=(data[attr]-iCur)/8;
            
       speed=speed>0 ? Math.ceil(speed) : Math.floor(speed);
      
           if(attr=='opacity'){
               obj.style.opacity=(iCur+speed)/100;
           }else{
               obj.style[attr]=iCur+speed+'px';
           }
           if(Math.floor(Math.abs(data[attr]-iCur))!=0){
               bStop=false;
           }

    
        }
      
      
      
          
       
       if(bStop){
           clearInterval(obj.timer);
           if(name==='opacity'){
               obj.style.opacity=data[name]/100;
           }
           func();
       }

        
    },30);
   
}