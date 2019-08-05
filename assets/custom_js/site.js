jQuery('document').ready(function () {

    var table = $('#item_listing');
    // begin first table
    table.dataTable({
        // Internationalisation. For more info refer to http://datatables.net/manual/i18n
        "language": {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No record available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ records",
            "infoEmpty": "No record found",
            "infoFiltered": "",
            "lengthMenu": "Show _MENU_",
            "search": "Search:",
            "zeroRecords": "No matching record found",
            "paginate": {
                "previous": "Prev",
                "next": "Next",
                "last": "Last",
                "first": "First"
            }
        },
        "bProcessing": false,
        "serverSide": true,
        "sAjaxSource": BASEURL + "WEB/user/geltabledata",
        "sServerMethod": "POST",
        "aoColumns": [
            {"data": "id", "bSearchable": false, "bSortable": false, "bVisible": true},
            {"data": "name", "bSearchable": true, "bSortable": true},
            {"data": "mobile", "bSearchable": true, "bSortable": true},
            {"data": "email", "bSearchable": true, "bSortable": true},
            {"data": "gender", "bSearchable": true, "bSortable": true},
            {"data": "date_of_birth", "bSearchable": true, "bSortable": true},
            {"data": "id", "bSearchable": false, "bSortable": false, "mRender": function (data, type, full) {
                    return '<a href="' + BASEURL + 'userdetail/' + btoa(data) + '" class="btn btn blue" data-bind="' + data + '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a href="javascript:;" class="btn btn red remove_item" data-bind="' + data + '"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                }}
        ],
        "aoColumnDefs": [{"bSortable": true, "aTargets": [1, 2]},
            {"bSearchable": false, "aTargets": [1]}],
        "columnDefs": [{
            "targets": 0,
            "orderable": true,
            "searchable": false
        }],
        "lengthMenu": [
            [5, 15, 20],
            [5, 15, 20] // change per page values here
        ],
        // set the initial value
        "length": 10,
        "pagingType": "bootstrap_full_number",
        "order": [
            //[0, "desc"]
        ] // set first column as a default sort by asc

    });
    $('.dataTables_filter input').removeClass('input-small').addClass('input-medium');
    $('.dataTables_filter label').css('margin-bottom', '0px');
    //datatable code End

    //Add Item
    var add_item_var = $("#add_item_id"),
        r = $(".alert-danger", add_item_var),
        i = $(".alert-success", add_item_var);

    add_item_var.validate({
        errorElement: "span",
        errorClass: "help-block help-block-error",
        focusInvalid: !1,
        ignore: "",
        messages: {
            customer_id: {
                required: "Customer Name is required"
            },
            site_type_id: {
                required: "Site Type is required"
            },
            name: {
                required: "Site Name is required"
            },
            manager_name: {
                required: "Manager Name is required"
            },
            mobile: {
                required: "Manager Mobile No is required"
            },
            qty: {
                required: "Quantity is required"
            },
            rate: {
                required: "Rate is required"
            }

        },
        rules: {
            customer_id: {
                required: !0
            },
            site_type_id: {
                required: !0
            },
            name: {
                required: !0
            },
            manager_name: {
                required: !0
            },
            mobile: {
                required: !0
            },
            qty: {
                required: !0
            },
            rate: {
                required: !0
            }

        },
        errorPlacement: function (add_restaurant, r) {
            r.parent(".input-group").size() > 0 ? add_restaurant.insertAfter(r.parent(".input-group")) : r.attr("data-error-container") ? add_restaurant.appendTo(r.attr("data-error-container")) : r.parents(".radio-list").size() > 0 ? add_restaurant.appendTo(r.parents(".radio-list").attr("data-error-container")) : r.parents(".radio-inline").size() > 0 ? add_restaurant.appendTo(r.parents(".radio-inline").attr("data-error-container")) : r.parents(".checkbox-list").size() > 0 ? add_restaurant.appendTo(r.parents(".checkbox-list").attr("data-error-container")) : r.parents(".checkbox-inline").size() > 0 ? add_restaurant.appendTo(r.parents(".checkbox-inline").attr("data-error-container")) : add_restaurant.insertAfter(r)
        },
        invalidHandler: function (add_restaurant, t) {
            i.hide(), r.show()
        },
        highlight: function (add_restaurant) {
            $(add_restaurant).closest(".form-group > div").addClass("has-error")
        },
        unhighlight: function (add_restaurant) {
            $(add_restaurant).closest(".form-group > div").removeClass("has-error")
        },
        success: function (add_restaurant) {
            add_restaurant.closest(".form-group > div").removeClass("has-error")
        },
        submitHandler: function (add_restaurant) {
            i.show(), r.hide()
            //submit data with ajax
            var formData = new FormData($("#add_item_id")[0]);
            $.ajax({
                url: BASEURL + 'WEB/user/insert_data',
                type: 'POST',
                data: formData,
                async: true,
                dataType: 'json',
                success: function (data) {
                    if (data.success)
                    {
                        toastr.success(data.message, 'Success');
                        $("#add_item_id")[0].reset();
                    }
                    else
                    {
                        toastr.error(data.message, 'Error');
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            //submit data with ajax end
        }
    });
    //Add category form validation and ajax upload End

    //Edit restaurant
    var edit_item_var = $("#edit_item_id"),
        r = $(".alert-danger", edit_item_var),
        i = $(".alert-success", edit_item_var);

    edit_item_var.validate({
        errorElement: "span",
        errorClass: "help-block help-block-error",
        focusInvalid: !1,
        ignore: "",

        errorPlacement: function (add_restaurant, r) {
            r.parent(".input-group").size() > 0 ? add_restaurant.insertAfter(r.parent(".input-group")) : r.attr("data-error-container") ? add_restaurant.appendTo(r.attr("data-error-container")) : r.parents(".radio-list").size() > 0 ? add_restaurant.appendTo(r.parents(".radio-list").attr("data-error-container")) : r.parents(".radio-inline").size() > 0 ? add_restaurant.appendTo(r.parents(".radio-inline").attr("data-error-container")) : r.parents(".checkbox-list").size() > 0 ? add_restaurant.appendTo(r.parents(".checkbox-list").attr("data-error-container")) : r.parents(".checkbox-inline").size() > 0 ? add_restaurant.appendTo(r.parents(".checkbox-inline").attr("data-error-container")) : add_restaurant.insertAfter(r)
        },
        invalidHandler: function (add_restaurant, t) {
            i.hide(), r.show()
        },
        highlight: function (add_restaurant) {
            $(add_restaurant).closest(".form-group > div").addClass("has-error")
        },
        unhighlight: function (add_restaurant) {
            $(add_restaurant).closest(".form-group > div").removeClass("has-error")
        },
        success: function (add_restaurant) {
            add_restaurant.closest(".form-group > div").removeClass("has-error")
        },
        submitHandler: function (add_restaurant) {
            i.show(), r.hide()
            //submit data with ajax
            var formData = new FormData($("#edit_item_id")[0]);
            $.ajax({
                url: BASEURL + 'WEB/user/edit_data',
                type: 'POST',
                data: formData,
                async: true,
                dataType: 'json',
                success: function (data) {
                    if (data.success)
                    {
                        toastr.success(data.message, 'Success');
                        setTimeout(function(){
                            window.location.href = BASEURL+'user';
                        }, 3000);
                    }
                    else
                    {
                        toastr.error(data.message, 'Error');
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            //submit data with ajax end
        }
    });
    //Edit category form validation and ajax upload End

    // Delete restaurent
    $(document).on("click", ".remove_item", function () {
        var Obj = $(this);
        var chap_id = $(this).attr("data-bind");
        bootbox.confirm("Are you sure do you want to delete this unit ?", function (result) {
            //if user confirm ok then process delete blog
            if (result) {
                var dataString = {
                    id: chap_id
                };
                //define ajax path
                var path = BASEURL + 'WEB/user/deletedata';
                $.post(path, {
                        data: dataString
                    },
                    function (res) {
                        if ($.trim(res) == '') {
                            toastr.error('Something went wrong', 'Error');
                            return false;
                        } else {
                            toastr.success('Unit deleted successfully', 'Success');
                            Obj.closest('tr').fadeOut('slow');
                        }
                    }, 'json');
            }
        });
    });

});

// Prepare the preview for Document picture
$(".imgAdd").click(function(){
    $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-3 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
    $(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
        var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }

    });
});

$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
