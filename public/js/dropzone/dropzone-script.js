Dropzone.autoDiscover = false;
var currentFile = null;
var myDropzone = new Dropzone('.dropzone', {
    addRemoveLinks: true,
    uploadMultiple: true,
    parallelUploads: 100,             
    autoProcessQueue: false,
    previewsContainer: '.viewer',
    removedfile: function(file) {
        file.previewElement.remove();
    }
});

$('#submit_product').click(function(e){
    myDropzone.processQueue();
});