!function($,t,n,i){var s=function(i,s){this.elem=i,this.$elem=$(i),this.options=s,this.metadata=this.$elem.data("plugin-options"),this.$win=$(t),this.sections={},this.didScroll=!1,this.$doc=$(n),this.docHeight=this.$doc.height()};s.prototype={defaults:{navItems:"a",currentClass:"current",changeHash:!1,easing:"swing",filter:"",scrollSpeed:750,scrollThreshold:.5,begin:!1,end:!1,scrollChange:!1},init:function(){return this.config=$.extend({},this.defaults,this.options,this.metadata),this.$nav=this.$elem.find(this.config.navItems),""!==this.config.filter&&(this.$nav=this.$nav.filter(this.config.filter)),this.$nav.on("click.onePageNav",$.proxy(this.handleClick,this)),this.getPositions(),this.bindInterval(),this.$win.on("resize.onePageNav",$.proxy(this.getPositions,this)),this},adjustNav:function(t,n){t.$elem.find("."+t.config.currentClass).removeClass(t.config.currentClass),n.addClass(t.config.currentClass)},bindInterval:function(){var t=this,n;t.$win.on("scroll.onePageNav",function(){t.didScroll=!0}),t.t=setInterval(function(){n=t.$doc.height(),t.didScroll&&(t.didScroll=!1,t.scrollChange()),n!==t.docHeight&&(t.docHeight=n,t.getPositions())},250)},getHash:function(t){return t.attr("href").split("#")[1]},getPositions:function(){var t=this,n,i,s;t.$nav.each(function(){n=t.getHash($(this)),s=$("#"+n),s.length&&(i=s.offset().top,t.sections[n]=Math.round(i))})},getSection:function(t){var n=null,i=Math.round(this.$win.height()*this.config.scrollThreshold);for(var s in this.sections)this.sections[s]-i<t&&(n=s);return n},handleClick:function(n){var i=this,s=$(n.currentTarget),e=s.parent(),o="#"+i.getHash(s);e.hasClass(i.config.currentClass)||(i.config.begin&&i.config.begin(),i.adjustNav(i,e),i.unbindInterval(),i.scrollTo(o,function(){i.config.changeHash&&(t.location.hash=o),i.bindInterval(),i.config.end&&i.config.end()})),n.preventDefault()},scrollChange:function(){var t=this.$win.scrollTop(),n=this.getSection(t),i;null!==n&&(i=this.$elem.find('a[href$="#'+n+'"]').parent(),i.hasClass(this.config.currentClass)||(this.adjustNav(this,i),this.config.scrollChange&&this.config.scrollChange(i)))},scrollTo:function(t,n){var i=$(t).offset().top;$("html, body").animate({scrollTop:i-50},this.config.scrollSpeed,this.config.easing,n)},unbindInterval:function(){clearInterval(this.t),this.$win.unbind("scroll.onePageNav")}},s.defaults=s.prototype.defaults,$.fn.onePageNav=function(t){return this.each(function(){new s(this,t).init()})}}(jQuery,window,document);