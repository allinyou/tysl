window.onload=function(){



//导航效果
var dh=$(".dh");
var con=$(".con");
var bgg=['statics/images/tysl/bgg1.jpg','statics/images/tysl/bgg2.jpg','statics/images/tysl/bgg3.jpg','statics/images/tysl/bgg4.jpg','statics/images/tysl/bgg5.jpg','statics/images/tysl/bgg6.jpg','statics/images/tysl/bgg7.jpg'];
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
var bnimg=["statics/images/tysl/bn1.jpg","statics/images/tysl/bn2.jpg","statics/images/tysl/bn3.jpg","statics/images/tysl/bn4.jpg"];
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
/*------------------------------------------------------------------*/
// 滑动效果
var imm=$('.win .imm')[0];
var liss=$('.win li');
var btnl=$('.btnl')[0];
var btnr=$('.btnr')[0];
var movebox=$('.movebox')[0];

var tt=setInterval(mmove,2000);
function mmove(){
	animate(imm,{left:-197},function(){
		var first=firstChild(imm);
		imm.appendChild(first);
		imm.style.left=0;
	});

}
btnr.addEventListener('click',function(){
	mmove()
},false)
btnl.onclick=function(){
	var last=lastChild(imm);
	appendBefore(imm,last);
    imm.style.left='-197px';
	animate(imm,{left:0});
}
movebox.onmouseover=function(){
	clearInterval(tt);
}
movebox.onmouseout=function(){
	tt=setInterval(mmove,2000);
}
// ------------------------------------------------------------
//基地风采小视图
var itt=setInterval(xmove,1000);
function xmove(){
	$('.immk').animate({left:-220},1500,function(){
		$(this).animate({left:0},1500)
	})
}
$('.imfg').hover(function(){
	 $(this).mouseover(function(){
	 	 clearInterval(itt);
	 })
},function(){
     $(this).mouseout(function(){
	 	 itt=setInterval(xmove,4000);
	 }) 
})











	
}