$(document).ready(function() {
    $('#ajax-form').on('submit', function() {
        $.ajax({
            method: "POST",
            url: "ajax.php",
            dataType: 'json',
            data: {
                firstname: $('input[name="firstname"]').val(),
                lastname: $('input[name="lastname"]').val()
            }
        }).done(function(response) {
            if (response.firstname != '' && response.lastname != '') {
                var count = ++$('#data-table tbody tr').length;
                $('#data-table tbody').append(
                    '<tr>'+
                        '<td>' + count + '</td>'+
                        '<td>' + response.firstname + '</td>'+
                        '<td>' + response.lastname + '</td>'+
                    '</tr>'
                );
            }
        });

        return false;
    });
});