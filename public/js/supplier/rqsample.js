$('.datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.base_url+'supplier/requests/sample',
            type: 'GET',
        },
        columns: [
            { data: 'id'},
            { data: 'influencer','searchable': false,'sortable':false},
            { data: 'product','sortable':false},
            { data: 'message','searchable': false,'sortable':false},
            { data: 'status','searchable': false,'sortable':false},
            { data: 'created_at','searchable': false,'sortable':false},
            { data: 'action','searchable': false,'sortable':false},
        ],
        "lengthMenu": 
            [5,10, 25, 50],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search..",
        }
    });