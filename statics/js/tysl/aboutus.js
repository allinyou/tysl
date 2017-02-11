window.onload=function(){



//导航效果
var dh=$(".dh");
var con=$(".con");
var bgg=['../img/bgg1.jpg','../img/bgg2.jpg','../img/bgg3.jpg','../img/bgg4.jpg','../img/bgg5.jpg','../img/bgg6.jpg','../img/bgg7.jpg'];
var bb=$(".bb");
for(var i=0;i<dh.length;i++){
	dh[i].index=i;
	bb[i].style.background="url("+bgg[i]+")";
	dh[i].onmouseover=function(){
         con[this.index].style.display="block";
	}
	dh[i].onmouseout=function(){
         con[this.index].style.display="none";
	}
}
// banner动画
var banner=$(".banner")[0];
var imgg=$("img",banner)[0];
var uls1=$(".uls1")[0];
var lis=$("li",uls1);
var bnimg=['../img/bn1.jpg','../img/bn2.jpg','../img/bn3.jpg','../img/bn4.jpg'];
var t=setInterval(move,1000);
var next=0;
function move(){
	next++;
	if(next==lis.length){
        next=0;
	}
    imgg.setAttribute('src',bnimg[next]);
    for(var i=0;i<lis.length;i++){
    	lis[i].classList.remove('hot');
    }
    lis[next].classList.add('hot');
}

banner.onmouseover=function(){
	clearInterval(t);
}

banner.onmouseout=function(){
	t=setInterval(move,1000);
}

for(var i=0;i<lis.length;i++){
	lis[i].index=i;
	lis[i].onmouseover=function(){
        for(var j=0;j<lis.length;j++){
        	lis[j].classList.remove("hot");
        }
        lis[this.index].classList.add("hot");
        imgg.setAttribute('src',bnimg[this.index]);
	}
}














	
}