 var url = "/record";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
       
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#for').val(data.for);
            $('#office').val(data.office);
            $('#address').val(data.address);
            $('#subject').val(data.subject);
            $('#receiveby').val(data.receiveby);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmRecords').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-product',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#record" + id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            for: $('#for').val(),
            office: $('#office').val(),
            address: $('#address').val(),
            subject: $('#subject').val(),
            receiveby: $('#receiveby').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var record = '<tr id="record' + data.id + '"><td>' + data.id + '</td><td>' + data.for + '</td><td>' + data.office + '</td><td>' + data.address + '</td><td>' + data.subject + '</td><td>' + data.receiveby + '</td>;
                record += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                record += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#records-list').append(data);
                }else{ //if user updated an existing record
                    $("#record" + id).replaceWith( data );
                }
                $('#frmRecords').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });