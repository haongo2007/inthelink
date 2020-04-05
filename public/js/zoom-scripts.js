
var zoomConfig = {
    zoomType: "inner",
    cursor: "crosshair",
    scrollZoom: true
}; 
$('.imavie').elevateZoom(zoomConfig);

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.imavie').attr('src', e.target.result);
            $('.imavie').data('zoom-image', $(this).data('zoom-image'));
            $('.imavie').elevateZoom(zoomConfig);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('.upload').change(function(event) {
    $('.zoomContainer').remove();
    $('.imavie').removeData('elevateZoom');
    readURL(this);
    if ($(this).next().hasClass('fa') ) {
        $(this).next().removeClass('fa-plus').addClass('fa-times');
    }
    if ($(this).val() == '') {
        if ($(this).next().hasClass('fa') ) {
            $(this).next().removeClass('fa-times').addClass('fa-plus');
        }
    }
});






















