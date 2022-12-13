$(".input-video").on("change", function(e) {
    var $source = $('.video-preview');
    $source[0].src = URL.createObjectURL(this.files[0]);
    $source.parent()[0].load();
});

$(".action__btn-delete").on("click", function() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).parent().submit();
        }
    });
});

$(".form-upload").validate({
    submitHandler: function (e) {
        $(".form-upload").submit();
    }
});