// $( ".menu-nav" ).click(function() {
//     $('.menu-nav').removeClass('active');
//     $(this).addClass('active');
//     // $(this).toggleClass( "active" );
// });

var fileName = '';
$('input[type="file"]').change(function (e) {
    $('#image_show').html('');
    var fileName = '';
    $('.custom-file-lable').html(fileName);

    for (var i = 0; i < e.target.files.length; i++) {
        fileName += e.target.files[i].name + ' ';
        var url = URL.createObjectURL(e.target.files[i]);
        $('#image_show').append('<img class="img_view" src="' + url + '" alt="' + e.target.files[i].name + '">');

    }
    $('.custom-file-lable').html(fileName);
});
