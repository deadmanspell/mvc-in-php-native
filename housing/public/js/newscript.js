$(function(){

    $('.addButton').on('click',function()
    {
        $('#ModalTitle').html('Add House Data');
        $('.modal-footer button[type=submit]').html('Add');
    });

    $('.showEditModal').on('click', function()
    {
        $('#ModalTitle').html('Edit House Data');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/housing/public/catalogue/edit');
        

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
            }
        })
    });

});