jQuery(document).ready(function($) {
    $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        url: window.base_url+'/supplier/brands',
        type: 'GET',
        },
        columns: [
            { data: 'name' },
            { data: 'sort_order'},
            { data: 'banner'},
            { data: 'creator_id'},
            { data: 'created_at'},
            { data: 'action','searchable': false,'sortable':false},
        ],
        "lengthMenu": 
            [5,10, 25, 50],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search users",
        }
    });
});