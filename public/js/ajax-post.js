
$(document).ready(function(){

    //get URL 
    var url = $('#url').val();
    let number_update;

    //Hiển thị modal form cho tạo mới bài viết 
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmPosts').trigger("reset");
        $('#myModal').modal('show');
    });

    //Hiển thị modal form cho edit bài viết
    $(document).on('click','.open_modal',function(){
        var id = $(this).attr("data-id");
        let $this = $(this);
        if(url == 'http://127.0.0.1:8000/posts/search'){
            var my_url = 'http://127.0.0.1:8000/posts';
        }else{
            var my_url = url;
        }

        // Điền dữ liệu trong Sửa Modal Form
        $.ajax({
            type: "GET",
            url: my_url + '/' + 'show/'+ id,
            success: function (data) {
                console.log(data);
                $('#name').val(data.name);
                $('#description').val(data.description);
                $("#id-post").val(data.id);
                $('#btn-save').val("update");
                $('#myModal').modal('show');
                number_update = $this.closest("tr").find(".number-row").text();
                console.log(number_update);
                number_updated = parseInt(number_update);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    //Tạo mới bài viết / Cập nhật bài viết đã tồn tại 
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 
        var formData = {
            name: $('#name').val(),
            description: $('#description').val(),
        }

        //Được sử dụng để xác định động từ http [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //Cho tạo mới tài nguyên
        var id = $('#id-post').val();
        if(url == 'http://127.0.0.1:8000/posts/search'){
            var my_url = 'http://127.0.0.1:8000/posts';
        }else{
            var my_url = url;
        }
        if (state == "update"){
            type = "PUT"; //Để cập nhật tài nguyên hiện có
            my_url += '/' + 'update/' + id;
        }
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                let number;
                if(state=="add"){
                    let lastTr = $("#posts-list .number-row").last().text();
                    number = parseInt(lastTr);
                    number = parseInt(number) + 1; 
                }else if(state === "update"){ 
                    number = number_updated;
                }
                var post = '<tr id="post-' + data.id + '"><td><input type="checkbox" name="delid[]" value="' +
                data.id + '"/></td> <td class="number-row">'+ (number) +'</td> <td><a>' + data.name + '</a></td><td>' + data.description + '</td>';
                post += '<td><a class="btn btn-warning btn-detail open_modal" value="' + data.id + '" data-id = "' +
                data.id + '"><span class="glyphicon glyphicon-edit"></span></a></td>'
                
                if (state == "add"){ //Nếu người dùng thêm một bản ghi mới
                    $('#posts-list').append(post);
                }else{ //Nếu người dùng cập nhật một bản ghi hiện có
                    $("#post-" + id).replaceWith( post );
                }
                $('#frmPosts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    
    
});