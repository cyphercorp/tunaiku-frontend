<!--Import jQuery before materialize.js--> 
<script type="text/javascript" src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script> 
<script type="text/javascript">
		$( document ).ready(function() {
   $(".button-collapse").sideNav();
	
			$("#caridonk").click(function(){
    			$(".searchbox").fadeToggle();
});
	$('.scrollspy').scrollSpy();
});
		</script>