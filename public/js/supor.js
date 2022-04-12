(function($){
    $.getUrlParam = function(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
})(jQuery);
var share=$.getUrlParam('share');
if(share==1){
	window.location.href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx70c5664904f5580b&redirect_uri="+window.location.href+"&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect"
	 // $(location).attr('href', 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx70c5664904f5580b&redirect_uri='+window.location.href+'&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect');
}
// https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx70c5664904f5580b&redirect_uri=https://www.infinitymcn.com/my/public/index.php/home/index/index&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect

//悬浮窗
window.onload = function(){
	let wall = document.getElementById('wall');
	var show = document.getElementsByClassName('release_show')[0];
	var _event,starX,starY,maxW,maxH;
	for (let i = 0; i < 2; i++) {
		let drag = i == 0 ?document.getElementById('dd') : document.getElementById('gg');
			drag.addEventListener('touchstart',(event)=>{
			_event = event||window.event;
			starX = _event.touches[0].clientX - drag.offsetLeft;
			starY = _event.touches[0].clientY - drag.offsetTop;
		});
		drag.addEventListener('touchmove',(event)=>{
			_event = event || window.event;
			let moveX = _event.touches[0].clientX - starX,
				moveY = _event.touches[0].clientY - starY;
				maxW = $(window).width();
				maxH = ($(window).height())-100;
			moveX=0;
			if(moveX<24){
				moveX=0;
			}else if(moveX>(maxW-6)){
				moveX=maxW;
			}
			if(moveY<0){
				moveY=0
			}else if(moveY>(maxH-2)){
				moveY=maxH-2;
			}
			drag.style.left = moveX +'px';
			drag.style.top = moveY +'px';
		},false);
		drag.addEventListener('touchend',(event)=>{
		})
	}
}
//悬浮窗