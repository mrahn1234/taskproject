var logout = document.getElementById('logout_ajax');

if(logout){
    logout.onclick = (e) => {
        e.preventDefault();
        var url = '/logout'
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: url,
                dataType: 'json',
                data: null,
                success: function (response) {
                    window.location.href = '/login';
                }
            });
    }
}
