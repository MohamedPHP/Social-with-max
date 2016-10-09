$(document).ready(function() {

    // Alert Hide
    $('.clickme').click(function () {
        $(this).slideUp(300)
    });

    var postId = 0; // the post id
    var postBodyElement = null;
    // Edit Modal
    $('.edit').click(function (event) {
        event.preventDefault();
        postBodyElement = event.target.parentNode.parentNode.childNodes[1];
        var postBody = postBodyElement.textContent;
        postId = event.target.parentNode.parentNode.dataset['postid'];
        $('#post-body').val(postBody);
        $('#Edit-Modal').modal();
    });

    // edit posts
    $('#modal-save').click(function () {
        $.ajax({
            method: 'POST',
            url: url,
            data: {body: $('#post-body').val(), postId: postId, _token: token},
        }).done(function (msg) {
            $(postBodyElement).text(msg['new-body']);
        });
    });
});
