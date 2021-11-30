<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : ""); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : ""); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20210621101308" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20210303163100" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1625078104" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1625078104" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<link href="js/photoswipe/photoswipe.css" rel="stylesheet" type="text/css" />
	<link href="js/photoswipe/default-skin/default-skin.css" rel="stylesheet" type="text/css" />
	<script src="js/photoswipe/photoswipe.min.js" type="text/javascript"></script>
	<script src="js/photoswipe/photoswipe-ui-default.min.js" type="text/javascript"></script>
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = true;
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body class="site <?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php if (isset($wbLandingPage) && $wbLandingPage) echo ' data-landing-page="'.$wbLandingPage.'"'; ?>><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom8" style="text-align: center;">Bem vindo</h1>

<h2 class="wb-stl-heading2" style="text-align: center;">Nosso novo website vai estar online em breve</h2>
</div></div><div class="wb_cont_outer"><div id="wb_element_instance1" class="wb_element wb_gallery" data-plugin="Gallery"><script type="text/javascript" src="js/WB_Gallery.class.js?v=20201228172716"></script><script type="text/javascript">
			$(function() {
				new WB_Gallery({"id":"wb_element_instance1","type":"slideshow","interval":7,"speed":400,"fullWidth":true,"imageCover":false,"disablePopup":false,"width":1903,"height":750,"border":{"differ":false,"color":["#00008c","#ffffff","#ffffff","#f0659c"],"style":["none","none","none","none"],"weight":[5,5,5,5],"radius":null,"css":{"border":"5px none #00008c"},"cssRaw":"border: 5px none #00008c;"},"borderWidths":[0,0,0,0],"padding":0,"thumbWidth":100,"thumbHeight":100,"columnWidth":106,"rowHeight":106,"thumbAlign":"center","thumbPadding":6,"thumbOpacity":100,"showPictureCaption":"always","images":[{"thumb":"gallery_gen\/269f27fdf43d02aa3cf1cb0bd2fd7567_400x400.png","image":"gallery_gen\/b85e016d13eec776655b6575267fcf84.png","width":1920,"height":750,"title":"","link":null,"description":""},{"thumb":"gallery_gen\/557b6ec4f9a5cde7633de1ee183afaca_400x400.png","image":"gallery_gen\/ced416e159080b69b8c55267922db29d.png","width":1920,"height":750,"title":"","link":null,"description":""},{"thumb":"gallery_gen\/1a2b76388bd85cddd7aa31901945f195_400x400.png","image":"gallery_gen\/be143bf443c65f894888c2810b8b06ec.png","width":1920,"height":750,"title":"","link":null,"description":""}]});
			});
		</script></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance2" class="wb_element" data-plugin="Form"><form class="wb_form wb_form_ltr" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="e72ae54c"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th class="wb-stl-normal">Nome&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Nome"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr><th class="wb-stl-normal">Endereço&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Endereço"><input class="form-control form-field" type="text" value="" name="wb_input_2" required="required"></td></tr><tr><th class="wb-stl-normal">Como você nos encontrou?&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_3" value="Como você nos encontrou?"><select class="form-control form-field" name="wb_input_3" required="required"><option value="0">Encontrado no google</option><option value="1">link em outro site</option><option value="2">indicação de um amigo</option></select></td></tr><tr class="area-row"><th class="wb-stl-normal">Mensagem&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_4" value="Mensagem"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_4" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Enviar</button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "e72ae54c") { ?>
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("e72ae54c", formValues, formErrors);
				<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode"))) { ?>
					if (window !== window.parent && window.parent.postMessage) {
						var data = {
							event: "wb_contact_form_sent",
							data: {
								state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
								type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
							}
						};
						window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
					}
					<?php } else { ?>
					wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
					<?php } ?>
					<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
				<?php } ?>
			<?php } ?>
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance3" class="wb_element" data-plugin="" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg" style="opacity: 0.7;"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Fechar"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Anterior"></button>
			<button class="pswp__button pswp__button--arrow--right" title="Próximo"></button>
			<div class="pswp__caption"><div class="pswp__caption__center"></div></div>
		</div>
	</div>
</div>
{{hr_out}}</body>
</html>
