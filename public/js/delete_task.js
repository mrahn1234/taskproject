var btn_delete_task = document.getElementsByClassName('btn_delete_task');
var array_e = Array.from(btn_delete_task);

array_e.forEach((e,i)=>{
    e.addEventListener('click',function(){
        var parentNode = e.parentNode.parentNode;
        var id = parentNode.childNodes[1].textContent;
        var url = '/tasks/'+id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'DELETE',
            url: url,
            dataType: 'json',
            data: {
                id: id
            },
            success: function (response) {
                parentNode.remove();
            }
        });
    })
})
