
/*

 一、IE（8几以下）低版本不支持用document.getElementsByClassName选取对象的集合，
 所以需要通过已有的方法来模拟一个优这样的指定对象的集合，比如说数组。

 用getClass(classname)这个函数来获取这样的一个数组
  
 classname就是指定的类名

 1、思路
     用document.getElementsByClassName在浏览器中判断是否有这种方法
     有返回方法的函数体，无返回undefined；

 2、如果浏览器有这种方法，就直接用这个方法来获取集合，
       document.getElementsByClassName
     如果没有，从已知道的方法 来模拟，从所有的对象中筛
     选className=classname（指定的类名）  ----obj.className(任一对象的类名)

3、给它设定范围（range）,让它能够再具体地获取指定类名对象的集合
*/


function getClass(classname,range){
  range= range===undefined?document:range;
     //range=range?range:document;
     // range=range||document
	if(document.getElementsByclassName){
	  return range.getElementsByclassName(classname);
	 }else{
		var newarr=[];
		var all=range.getElementsByTagName("*");
		for(var i=0;i<all.length;i++){
		    var flag=checkClass(all[i].className,classname);
  			if(flag){
				newarr.push(all[i]);
			  }
      }
			return newarr;
	}


}

/*二如果一个标签有多个类名，得先判断类名中是否
包含指定类名（classname），包含则给他添加上
如果包含，给他添进集合，否侧不添加*/
function checkClass(str,values){
     var arr=str.split(" ");
     for(var i=0;i<arr.length;i++){
     	if(arr[i]==values){
     	return true;
     	}
     }
     return false;
}



/*三、为了不每次都用很长的代码，如:(document.getElementById\document.getElementsByClassName)
    来获取指定的对象集合（ById时是对象），所以用简单的调用函数方式来代替
    1.$(.one)                      通过类名获得指定对象的集合
    2.$(#one)                      通过Id名获得指定对象的集合
    3.$(标签(div\hi\p......))      通过标签名获得指定标签对象的集合
    4.$(function(){})==window.onload=function(){};
    5.select-代表是传进来的参数，可以是字符串，也可以是函数;
    6.ranges-代表范围，类型是对象，不能是字符串;*/
    

function $(select,ranges){
  // 第一种、select是字符串
  if(typeof(select)=='string'){
      ranges= ranges===undefined?document:ranges;
  //  ranges=ranges||document;
      var first=select.charAt(0);
      if(first=='.'){
        //通过类名来定义一个对象 的集合
        return getClass(select.slice(1),ranges)
      }else if(first=='#'){
        //通过Id
        return ranges.getElementById(select.slice(1));
      }else if(/^[a-zA-Z][a-zA-Z1-6]{0,8}$/.test(select)){
        //通过标签名
       return ranges.getElementsByTagName(select);
      }else if(/^<[a-zA-Z][a-zA-Z1-6]{0,8}$>/.test(select)){
       return  document.createElement(select.slice(1,-1))
       //创建一个元素标签如$("<div>");
      }
   
  }else if(typeof(select)=='function')
  // 第二种、select函数
   window.onload=function(){
    select();
   }                                                                                                                                                      
}


/*四、setText(obj[,value])
设置或者获取obj的文本
obj：指定的对象
value：设置文本
思路：
  1、判断value进行设置或是获取文本
  2、判断浏览器
     innerText(textContent)
  3、设置文本
     obj.innerText=value 
  4、获取文本
  obj.innerText=value                                                                                                     
 */

function setText(obj,value){
  if (value){
    // 设置...
    if(document.getElementsByclassName){
       obj.innerText=value;
    }else{
      obj.textContent=value;
    }
}else{
    // 获取...
    if(obj.innerText){
     return  obj.innerText=value;
    }else{
     return  obj.textContent=value;
    }
}
}




/*五、获取某一个指定的对象的某一个属样式的函数
getStyle(obj,attr)
obj:指定的对象
attr：指定对象的样式
思路：
1、判断浏览器
2、返回属性值
getComputedStyle(obj,null).attr*/

function getStyle(obj,attr){
  if(window.getComputedStyle){
     return getComputedStyle(obj,null)[attr];
  }else{
     return obj.currentStyle[attr];
  }
}


/*六、获取obj所有子元素节点集合方法函数
有些还需要获取有意义的文本节点type
1、obj父对象
2、type=true,获取子元素节点和有意义（值）的文本节点
3、type=false，只获取子元素节点
4、默认只获取子元素节点
5、低版本浏览器可能不支持trim()方法
*/
function getChilds(obj,type){
  type=type||false;
   var arr=[];
   var childs=obj.childNodes;
   if(type){
    for(var i=0;i<childs.length;i++){
    if(childs[i].nodeType==1||(childs[i].nodeType==3&&childs[i].nodeValue.trim()!=0)){
      arr.push(childs[i]);
    }
    }
    return arr;
   }else{for(var i=0;i<childs.length;i++){
    if(childs[i].nodeType==1){
      arr.push(childs[i]);
    }
   }
   return arr;
  }
} 



/*七、获取下一个兄弟元素(元素节点)的getNext函数
      1、获取obj的兄弟元素next
         next=obj.nextSibling
      2、判断next是否是一个元素节点
         next.nodeType==1
      3、更新next=next.nextSibling
*/

function getNext(obj){
  var next=obj.nextSibling;
  if(next.nodeType==null){
    return false;
  }
  
  while(next.nodeType!=null){
    if(next.nodeType==1){
      return next;
    }
    next=next.nextSibling;
   }
  return false;
}

/*获取一个对象中的第一个元素节点*/
function firstChild(obj){
  var first=getChilds(obj)[0];
  return first;
}


/*获取一个对象中的最后一个元素节点*/
function lastChild(obj){
  var childs=getChilds(obj);
  var last=childs[childs.length-1]
  return last;
}


//八、获取上一个兄弟元素节点的getPrev函数
function getPrev(obj){
  var prev=obj.previousSibling;
  if(prev.nodeType===null){
    return false;
  }
  while(prev.nodeType!=null){
    if(prev.nodeType==1){
      return prev;
    }
    prev=prev.previousSibling;
  }
  return false;
}

/*
把一个特定元素nnode插入到指定元素pnode的后面
1、先找到pnode的下一个兄弟元素sibling=getNext(pnode);
2、把nnode插入到pnode兄弟元素(sibling)的前面
3、parent.insertBfore(nnode,phode)插入进去
*/

function insertAfter(nnode,pnode){
    var sibling=getNext(pnode);
    if(sibling){
      var parent=pnode.parentNode;
      parent.insertBefore(nnode,sibling);
    }else{
      var parent=pnode.parentNode;
      parent.appendChild(nnode);
    }
}

/*
把一个特定元素(ele)插入到插入到另一个对象(parent)里的最前面
*/

function appendBefore(parent,ele){
    var first=firstChild(parent);
     parent.insertBefore(ele,first)
}

/*把一个特定元素(ele)插入到插入到另一个对象(parent)里的最后面*/
function appendAfter(parent,ele){
   parent.appendChild(ele);
}
