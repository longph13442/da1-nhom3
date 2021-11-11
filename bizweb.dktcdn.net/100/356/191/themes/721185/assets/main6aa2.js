$(document).ready(function ($) {
	awe_backtotop();
	awe_category();
	awe_tab();
	awe_lazyloadImage();
	//$('[data-toggle="tooltip"]').tooltip();
	$('#trigger-mobile').click(function(){
		$(".nav-evo-watch").addClass('active');
		$(".backdrop__body-backdrop___1rvky").addClass('active');
	});
	$('.backdrop__body-backdrop___1rvky').click(function(){
		$("body").removeClass('show-search');
		$(".nav-evo-watch").removeClass('active');
		$(".backdrop__body-backdrop___1rvky").removeClass('active');
	});
	$('#close-nav').click(function() {
		$(".nav-evo-watch").removeClass('active');
		$(".backdrop__body-backdrop___1rvky").removeClass('active');
	});
	$(window).resize( function(){
		if ($(window).width() > 1023){
			$(".nav-evo-watch").removeClass('active');
			$(".backdrop__body-backdrop___1rvky").removeClass('active');
		}
	});
	$('.had-click h3').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$(this).parent().toggleClass('active');
		return false;
	});
	$('.has-childs .fa-angle-down').click(function(e){
		$(this).parent().parent().toggleClass('active');
		return false;
	});
	$('.has-childs2 .fa-angle-right').click(function(e){
		$(this).parent().parent().toggleClass('active');
		return false;
	});
	$('.fix-navs .hmega .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
		return false;
	});
	$('.open-filters').click(function(e){
		$(this).toggleClass('open');
		$('.evo-sidebar').toggleClass('open');
	});
	$('.site-header-search').click(function(){
		$("body").addClass('show-search');
		$(".backdrop__body-backdrop___1rvky").addClass('active');
	});
	$('.site-header__search').click(function(){
		$("body").removeClass('show-search');
		$(".backdrop__body-backdrop___1rvky").removeClass('active');
	});
	if ($(window).width() < 767) {
		$('.evo-tab-product-mobile .tab-content .evo-product-tabs-header').on('click', function(e){
			e.preventDefault();
			var $this = $(this);
			$this.parents('.evo-tab-product-mobile .tab-content').find('.rte').stop().slideToggle();
			$(this).parent().toggleClass('active')
			return false;
		});
		$('.evo-product-summary .evo-product-tabs-header').on('click', function(e){
			e.preventDefault();
			var $this = $(this);
			$this.parents('.evo-product-summary').find('.rte-summary').stop().slideToggle();
			$(this).parent().toggleClass('active')
			return false;
		});
	}
});
var placeholderText = ['Bạn muốn tìm gì?','Sức khỏe - Làm đẹp', 'Trang điểm', 'Chăm sóc da mặt', 'Chăm sóc cơ thể'];
$('.search-auto').placeholderTypewriter({text: placeholderText});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){$('.loading').removeClass('loaded-content');},500);
	return false;
})
function awe_lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazy",
		load_delay: 500,
		threshold: 0
	});
} window.awe_lazyloadImage=awe_lazyloadImage;
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function(){$(selector).animate({right: '-300px'}, 500);}, 3500);
}  window.awe_showNoitice=awe_showNoitice;
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");str= str.replace(/đ/g,"d"); str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");str= str.replace(/-+-/g,"-");str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .Collapsible__Plus').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;
function awe_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100,
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.awe_backtotop=awe_backtotop;
function awe_tab() {
	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
		});    
	});
} window.awe_tab=awe_tab;
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});
$(document).on('keydown','#qty, #quantity-detail, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});