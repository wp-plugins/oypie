/* Oypo 1207 Iframe Template Functions */
/*
 * jQuery postMessage - v0.5 - 9/11/2009
 * http://benalman.com/projects/jquery-postmessage-plugin/
 * 
 * Copyright (c) 2009 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($){var g,d,j=1,a,b=this,f=!1,h="postMessage",e="addEventListener",c,i=b[h];$[h]=function(k,l,m){if(!l){return}k=typeof k==="string"?k:$.param(k);m=m||parent;if(i){m[h](k,l.replace(/([^:]+:\/\/[^\/]+).*/,"$1"))}else{if(l){m.location=l.replace(/#.*$/,"")+"#"+(+new Date)+(j++)+"&"+k}}};$.receiveMessage=c=function(l,m,k){if(i){if(l){a&&c();a=function(n){if((typeof m==="string"&&n.origin!==m)||($.isFunction(m)&&m(n.origin)===f)){return f}l(n)}}if(b[e]){b[l?e:"removeEventListener"]("message",a,f)}else{b[l?"attachEvent":"detachEvent"]("onmessage",a)}}else{g&&clearInterval(g);g=null;if(l){k=typeof m==="number"?m:typeof k==="number"?k:100;g=setInterval(function(){var o=document.location.hash,n=/^#?\d+&/;if(o!==d&&n.test(o)){d=o;l({data:o.replace(n,"")})}},k)}}}})(jQuery);

/* Custom functions */
var $jq = jQuery.noConflict(true);  
var iframe,iframesrc

$jq(function(){

    var oypohost = location.protocol + '//' + 'www.oypo.nl';
	
	// Create URL vars
	url = new Array();
	
	if (mode=='map') {
		url.push(oypohost+'/pixxer/api/templates/1207.asp');
		if (mapid){ url.push('?init=1&id=' + mapid + '&rootid=' + mapid); }else{ alert('Het ID van de fotomap is nog niet ingevuld.'); return; }
		if (nonav && nonav!=0){ url.push('&nonav=' + nonav); }
	} else {
		if (mode=='user') {
			url.push(oypohost+'/pixxer/api/templates/1207-user.asp');
			if (userid){ url.push('?init=1&user=' + userid); }else{ alert('De username is nog niet ingevuld.'); return; }
		} else {
			url.push(oypohost+'/pixxer/api/templates/1207-schoolfotos.asp?init=1');
		}
	}
	
	if (typeof fotomail == 'number' && fotomail==0){ url.push('&fotomail=0'); }
	if (typeof transparency == 'number' && transparency==1){ url.push('&transparency=1'); }
	if (typeof wl == 'string' && wl){ url.push('&wl=' + escape(wl)); }
	if (typeof opties == 'string' && opties){ url.push('&opties=' + escape(opties)); }
	if (typeof css == 'string' && css){ url.push('&css=' + escape(css)); }
	if (typeof taal == 'string' && taal){ url.push('&taal=' + escape(taal)); }
	if (typeof kleur1 == 'string' && kleur1){ url.push('&kleur1=' + escape(kleur1)); }
	if (typeof kleur2 == 'string' && kleur2){ url.push('&kleur2=' + escape(kleur2)); }
	if (typeof kleur3 == 'string' && kleur3){ url.push('&kleur3=' + escape(kleur3)); }
	if (typeof kleur4 == 'string' && kleur4){ url.push('&kleur4=' + escape(kleur4)); }
	if (typeof kleur5 == 'string' && kleur5){ url.push('&kleur5=' + escape(kleur5)); }
	if (typeof kleur6 == 'string' && kleur6){ url.push('&kleur6=' + escape(kleur6)); }
	if (typeof scrolltoponload == 'number' && scrolltoponload==1){
		var scroll_top_onload = true;
		var scroll_duration = 0;
	}else{
		var scroll_top_onload = false;
		var scroll_duration = 500;		
	}
	var check_scroll_enabled = (typeof scroll_on_click == 'number' && scroll_on_click==0) ? false : true;

	// Set vars
	var has_postMessage = window['postMessage'];
	var scroll_pos = 0; 
	var highslide_pos = 0;
	var if_height;
	var iframesrc = (url.join('') + '#' +  document.location.href);
	var min_height = 750; // Minimum height, for highslide
	
    // Append the Iframe into the DOM.
    //var iframe = $jq( '<iframe src="' + iframesrc + '" width="100%" height="'+min_height+'" scrolling="no" frameborder="0" name="pixxerframe" id="pixxerframe"><\/iframe>').appendTo( '#pixxer_iframe' );
	$jq('#pixxer_iframe').html('<iframe src="' + iframesrc + '" width="100%" height="'+min_height+'" scrolling="no" frameborder="0" name="pixxerframe" id="pixxerframe" allowTransparency="true" style="max-height: none; max-width: none;"><\/iframe>');
	var iframe = $jq('#pixxerframe');
	
	// Enable the onload function  
	if(scroll_top_onload){ iframe.bind('load', function() { $jq('html, body').animate({ scrollTop: 0 }, 0); }); }
	
	// JS GET vars function
	String.prototype.get = function(p){ return(this.match(new RegExp("[?|&]?" + p + "=([^&]*)"))[1]); }
	
	// Receive message
	$jq.receiveMessage(function(e){
	
		//Get the vars from the passsed data.
		var h = e.data.get('if_height');
		var action = e.data.get('action');
		
		// Check scroll action
		if(action == 'check_scroll' && check_scroll_enabled){ 
			if($jq(document).scrollTop() < iframe.offset().top){ 
				var position = (scroll_top_onload) ? 0 : iframe.offset().top;
				$jq('html, body').animate({ scrollTop: position }, scroll_duration);
			}
		}
		
		// Check scroll action checkout
		if(action == 'check_scroll_checkout'){ 
			var min_window_height = 670;
			var window_height = parseInt($jq(window).innerHeight());
			var scroll_pos = parseInt(e.data.get('checkout_scroll_pos'));
			var scroll_to = (window_height < min_window_height) ? scroll_pos - window_height + min_window_height : scroll_pos; 
			$jq('html, body').animate({ scrollTop: scroll_to }, scroll_duration);
		}	
		
		// Check mobile close frame
		if(action == 'close_pixxer_mobile'){
			$jq('body').removeClass('pixxer_mobile_noscroll'); 	// Enable scrolling
			$jq('#pixxerframe_mobile').fadeOut();				// Close the mobile frame
		}
		
		// Scroll to top on page entry (not on first page load);
		if(action == 'scroll_to_top'){ 
			var position = (scroll_top_onload) ? 0 : iframe.offset().top;
			$jq('html, body').animate({ scrollTop: position }, scroll_duration);
		}
		
		// Min height check
		if(h > 0 && h < min_height){ h = min_height; }
				
		// Set iframe height
		if ( !isNaN( h ) && h > 0 && h !== if_height ) { iframe.height( if_height = h ); }
		
		// Trigger the resize to reset the window height
		if (has_postMessage){ post_scroll('resize'); }
		
	}, oypohost ); // An optional origin URL (Ignored where window.postMessage is unsupported).
		
	// Post scroll location and window height
	function post_scroll(action){
		var highslide_top = parseInt($jq(document).scrollTop() - iframe.offset().top) > 0 ? parseInt($jq(document).scrollTop() - iframe.offset().top) + 40 : 40; 
		if((highslide_pos != highslide_top) || (action == 'resize')){ 
			highslide_pos = highslide_top;  // SET VARS
			$jq.postMessage({ top: highslide_top, window_height: $jq(window).height(), action: action }, iframesrc, iframe.get(0).contentWindow ); // MAKE THE POST
		}
	}
	
	// Set posting interval and resize events to iframe (only when postmessage is supported)
	if (has_postMessage){ 
		setInterval(function() { post_scroll(''); },500); 
	$jq(window).resize(function() { post_scroll('resize'); });
	}

});