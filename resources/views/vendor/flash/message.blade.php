@if (Session::has('flash_notification.message'))
        <script>
	        $(window).on('load', function() {

		        var fvisit = setTimeout(function () {
			        $.niftyNoty({
				        type: '{{ Session::get('flash_notification.level') }}',
				        title: "{{ Session::get('flash_notification.title') }}",
				        message: "{{ Session::get('flash_notification.message') }}",
				        container: "{{ Session::get('flash_notification.style') }}",
				        timer: "{{ Session::get('flash_notification.timer') }}"
			        });
			        clearTimeout(fvisit);
		        }, 3000);

	        });
        </script>
@endif
