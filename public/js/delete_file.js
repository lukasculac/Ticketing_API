//Makes deleting files asynchronous so that page doesnt have to be reloaded
$(document).ready(function() {
    $('.delete-file').on('click', function(e) {
        e.preventDefault();

        var fileId = $(this).data('id');
        var url = '/delete_file/' + fileId; // This should be the route for deleting a file

        $.ajax({
            url: url,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function() {
                //alert(response.message);
                $('#file-' + fileId).remove();
            }
        });

        e.stopPropagation();
    });
});
