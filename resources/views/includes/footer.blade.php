

<!-- FOOTER -->
<!--===================================================-->
<footer id="footer">

	<!-- Visible when footer positions are fixed -->
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class="show-fixed pull-right">
		<ul class="footer-list list-inline">
			<li>
				<p class="text-sm">SEO Proggres</p>
				<div class="progress progress-sm progress-light-base">
					<div style="width: 80%" class="progress-bar progress-bar-danger"></div>
				</div>
			</li>

			<li>
				<p class="text-sm">Online Tutorial</p>
				<div class="progress progress-sm progress-light-base">
					<div style="width: 80%" class="progress-bar progress-bar-primary"></div>
				</div>
			</li>
			<li>
				<button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
			</li>
		</ul>
	</div>



	<!-- Visible when footer positions are static -->
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class="hide-fixed pull-right pad-rgt">Currently v0.3</div>



	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<p class="pad-lft">&#0169; 2015 BossPos</p>



</footer>


<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="{!! asset('plugins/fast-click/fastclick.min.js') !!}"></script>


<!--BootBox Modual [ OPTIONAL ]-->
<script src="{!! asset('plugins/bootbox/bootbox.min.js') !!}"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{!! asset('js/nifty.min.js') !!}"></script>


<!--Skycons [ OPTIONAL ]-->
<script src="{!! asset('plugins/skycons/skycons.min.js') !!}"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="{!! asset('plugins/switchery/switchery.min.js') !!}"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{!! asset('plugins/bootstrap-select/bootstrap-select.min.js') !!}"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="{!! asset('js/demo/nifty-demo.js') !!}"></script>


<!--Bosspos  [ Local editing scripts ]-->
<script src="{!! asset('js/bossposEditing.js') !!}"></script>


<!--Bosspos  [ Local editing scripts ]-->
<script src="{!! asset('js/bosspos.js') !!}"></script>


<!-- React [React imports] -->
<script src="https://fb.me/react-with-addons-0.13.3.js"></script>
<script src="https://fb.me/JSXTransformer-0.13.3.js"></script>


<!--Socket.io  [ Broadcasting server ]-->
<script src="http://192.168.10.10:3000/socket.io/socket.io.js"></script>
<script>var socket = io.connect('http://192.168.10.10:3000');</script>


<!--React  [ React components compiled ]-->
<script type="text/jsx;harmony=true" src="{!! asset('/js/bundle.js')  !!}"></script>



<!--JAVASCRIPT-->
<!--=================================================-->
<script>
	var $i = $(bosspos.projects);
	console.log($i);
	/*
	 * A Double check modal when destroying an object
	 */
	function open_destroy_window(object)
	{

		var interfaceObject = object['id'];
		bootbox.dialog({
					title: "Delete object number: "+interfaceObject,
					message: '<div class="row">  ' +
					'<div class="col-md-12"> ' +
					'<form method="POST" action="http://bosspos1.5/interfaceObjects/'+interfaceObject+'" accept-charset="UTF-8">' +
					'<input type="hidden" name="_token" value="{!! csrf_token() !!}">' +
					'<input name="_method" type="hidden" value="DELETE">' +
					'<input type="submit" value="Delete this object forever?">' +
					'</form>' +
					'</div>  </div>'

				}
		);
	}
</script>

<!--===================================================-->
<!-- END FOOTER -->