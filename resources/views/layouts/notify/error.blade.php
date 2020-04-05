@if (session()->has('error'))
    <script>
        jQuery(document).ready(function($) {
            theme.showNotification('top','right','{{ session('error') }}',3);
        });
    </script>
@endif