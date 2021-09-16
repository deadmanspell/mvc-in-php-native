$(function() {
    
    $('.addButton').on('click', function()
    {
    
        $('#ModalTitle').html('Add New House');
        $('.modal-footer button[type=submit]').html('Add');

    });

    $('.editModal').on('click', function()
    {
        $('#ModalTitle').html('Edit House Data');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/housing/public/catalogue/edit')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/housing/public/catalogue/getEdit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#type').val(data.type);
                $('#price').val(data.price);
                $('#bedroom').val(data.bedroom);
                $('#bathroom').val(data.bathroom);
                $('#garage').val(data.garage);
                $('#id').val(data.id);
                $('#id_tenant').val(data.id_tenant);
            }
        });
    });

});