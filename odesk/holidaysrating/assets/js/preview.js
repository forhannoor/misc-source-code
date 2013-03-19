$(document).ready(	
	function() {
		var $container = $(".container");
		$container.wtRotator({
			width:980,
			height:413,
			button_width:24,
			button_height:24,
			button_margin:5,
			auto_start:true,
			delay:6000,
			transition:"random",
			transition_speed:800,
			block_size:75,
			vert_size:55,
			horz_size:50,
			cpanel_align:"BR",
			timer_align:"top",
			display_thumbs:true,
			display_dbuttons:true,
			display_playbutton:true,
			tooltip_type:"image",
			display_numbers:true,
			display_timer:true,
			mouseover_pause:false,
			cpanel_mouseover:false,
			text_mouseover:false,
			text_effect:"fade",
			text_sync:true,
			shuffle:true,
			block_delay:25,
			vstripe_delay:73,
			hstripe_delay:183
		});
		
		var $submitButton = $("#submit-btn");
		var $resetButton =  $("#reset-btn");
		var $trans = 		$("#transitions");
		var $easings =		$("#easing");
		var $textEffects = 	$("#texteffects");
		var $cpAlign = 		$("#cpalignments");
		var $cpPos = 		$("input[name='cp-pos']");
		var $cpanelCB = 	$("#cpanel-cb");
		var $ttType = 		$("#tt-type");
		var $thumbCB = 		$("#thumbs-cb");
		var $dBtnsCB = 		$("#dbuttons-cb");
		var $playBtnCB = 	$("#playbutton-cb");
		var $timerCB = 		$("#timer-cb");
		var $pauseCB = 		$("#pause-cb");
		var $textCB = 		$("#text-cb");
		
		$submitButton.click(function() {
			$container.undoChanges();
			
			$container.setTransition($trans.val());
			$container.setEasing($easings.val());
			$container.setTextEffect($textEffects.val());	
			$container.setCpanelAlign($cpAlign.val());
			$container.setCpanelPos($cpPos.filter(":checked").val());
			$container.setTooltipType($ttType.val());			
			$container.setThumbs($thumbCB.attr("checked"));
			$container.setDButtons($dBtnsCB.attr("checked"));
			$container.setPlayButton($playBtnCB.attr("checked"));
			$container.setTimerBar($timerCB.attr("checked"));	
			$container.setMouseoverText($textCB.attr("checked"));			
			$container.setMouseoverPause($pauseCB.attr("checked"));
			$container.setMouseoverCPanel($cpanelCB.attr("checked"));
			
			$container.updateChanges();	
		});
		
		$resetButton.click(function() {
			init();
			$submitButton.trigger("click");
		});
		
		$trans.change(
			function() {		
				$easings.attr("disabled", $(this).val() == "none"); 
			}
		);
		
		$cpPos.change(
			function() {		
				$cpanelCB.attr("disabled", $(this).filter(":checked").val() == "outside"); 
			}
		);
		
		$thumbCB.change(
			function() {
				$ttType.attr("disabled", !$(this).attr("checked")); 
				checkCPanel();	
			}
		);
		
		$dBtnsCB.change(function() { checkCPanel(); });
		$playBtnCB.change(function() { checkCPanel(); });			
		
		var init = function() {
			$trans.val("random");
			$easings.val("").attr("disabled", false);
			$textEffects.val("fade");
			$cpAlign.val("BR").attr("disabled", false);
			$cpPos.attr("disabled", false);
			$("input#pos-inside").attr("checked", true);
			$ttType.val("image").attr("disabled", false); 
			$thumbCB.attr("checked", "checked");
			$dBtnsCB.attr("checked", "checked");
			$playBtnCB.attr("checked", "checked");
			$timerCB.attr("checked", "checked");
			$pauseCB.attr("checked", "");
			$textCB.attr("checked", "");
			$cpanelCB.attr("checked", "").attr("disabled", false);
		}
		
		var checkCPanel = function() {
			var val = ($thumbCB.attr("checked") || $dBtnsCB.attr("checked") || $playBtnCB.attr("checked"));
			$cpanelCB.attr("disabled", !val || $cpPos.filter(":checked").val() == "outside");
			$cpPos.attr("disabled", !val);
			$cpAlign.attr("disabled", !val);
		}	
		
		init();
	}
);