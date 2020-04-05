jQuery(document).ready(function($) {
    $('.inputrange').daterangepicker({
        timePicker: true,
        opens: 'right',
        locale: {
            format: 'YYYY/MM/DD H:mm'
        },
        minDate: moment(),
    });
    if ($('.sdrange').is(":checked")) {
        $('.inputrange').data('daterangepicker').setStartDate($('.startday').val());
        $('.inputrange').data('daterangepicker').setEndDate($('.endday').val());
        $('.inputrange').removeClass('d-none');
    }
    $(document).on('change','.sdrange',function(event) {
        if ($(this).prop('checked')) {
            $('.inputrange').removeClass('d-none');
            $('.inputrange').click();
            var drp = $('.inputrange').data('daterangepicker');
            $('.startday').val(drp.startDate.format('YYYY/MM/DD H:mm'));
            $('.endday').val(drp.endDate.format('YYYY/MM/DD H:mm'));
        }else{
            $('.inputrange').addClass('d-none');
            $('.inputrange').data('daterangepicker').hide();
        }
    });
    $('.inputrange').on('apply.daterangepicker', function(ev, picker) {
        $('.startday').val(picker.startDate.format('YYYY/MM/DD H:mm'));
        $('.endday').val(picker.endDate.format('YYYY/MM/DD H:mm'));
    })
});         