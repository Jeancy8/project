$('#delete').click(function() {
    var button = document.getElementById('delete');

    $.ajax({
        type: 'POST',
        url: 'public/ajax/avis.php',
        data: { 'idAvis': button.dataset.idAvis },
        dataType: 'JSON',
        success: function(data) {
            alert('Avis supprimer !');
            window.location.reload();
        }
    });
});