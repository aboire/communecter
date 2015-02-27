<?php 
$cs = Yii::app()->getClientScript();

$cs->registerCssFile(Yii::app()->request->baseUrl. '/css/vis.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/api.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/vis.min.js' , CClientScript::POS_END);

$cs->registerCssFile("http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css");
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.ie.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.Default.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/dvf.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/sig.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/news.css');
//$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.awesome-markers.css');


?>

<style>
	<?php //solve bug polygones invisible ?>
	svg{
		height:auto;
		width:auto;		
	}
</style>

<div class="mapCanvas" id="mapCanvas" style="background-color:#2C2F3B;">
</div> 

 <!-- 	RIGHT TOOL MAP (PSEUDO SEARCH + LIST ELEMENTS) -->		
	<div id="right_tool_map">
		<!-- 	PSEUDO SEARCH -->	
		<div id="map_pseudo_filters">
			<input type="text" placeholder="recherche par pseudo..." id="input_txt_pseudo_filter"/>
			<a href="#" id="btn_pseudo_filter">
				<center><img src='<?php echo $this->module->assetsUrl; ?>/images/sig/ico_filter_pseudo.png' style='margin-top:3px;' width=22></center>
			</a>
		</div>
		<!-- 	PSEUDO SEARCH -->	
		<!-- 	LIST ELEMENT -->	
		<div id="liste_map_element">
		</div>
	</div>
<!-- 	RIGHT TOOL MAP (PSEUDO SEARCH + LIST ELEMENTS) -->	

<!-- 	LEFT BAR MAP -->
	<div id="left_barre_tool_map">	
		<!-- 	BTN HOME -->
		<a href="javascript:zoomToMyPosition()" id="btn_home" class="btn_right_barre_tool_map" style="padding-top:12px; padding-bottom:8px;">
			<center><i class='fa fa-home fa-2x' title='zoomer sur votre position'></i></center>
		</a>
		<!-- 	BTN ZOOM IN -->
		<a href="javascript:zoomIn()" id="btn_zoom_in" class="btn_right_barre_tool_map" style="font-size:25px;">
			<center>+</center>
		</a>
		<!-- 	BTN ZOOM OUT -->
		<a href="javascript:zoomOut()" id="btn_zoom_out" class="btn_right_barre_tool_map" style="font-size:25px;">
			<center>-</center>
		</a>
		<!-- 	BTN RELOAD MAP -->
		<a href="#" id="btn_reload_map" class="btn_right_barre_tool_map" style="padding-top:10px; padding-bottom:10px;">
			<center><i class="fa fa-refresh fa-lg"></i></center>
		</a>
		
		
	</div>
<!-- 	LEFT BAR MAP -->