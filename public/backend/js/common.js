function init_rangepicker(id_range_picker) {
    var cb = function (start, end, label) {
        $('#' + id_range_picker).val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
        startDate: moment().subtract(6, 'days'),
        endDate: moment(),
        dateLimit: {days: 60},
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment(new Date(moment().year(), 0, 1)), moment(new Date(moment().year(), 11, 31))]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'DD/MM/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    };

    $('#' + id_range_picker).val(moment().subtract(6, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#' + id_range_picker).daterangepicker(optionSet1, cb);
}

function show_error_loading(loading_icon, loading_text) {
    swal({
        title: "Error :'(",
        text: "Failed when loading data, please contact web administrator to fix",
        type: "warning"
    });
    $(loading_icon).attr('class', 'fa fa-remove fa-5x text-danger');
    $(loading_text).html('Failed to load data');
}

function data_table_each_column_filter(table_id, is_checked, cb_columns, columns_no_filter) {
    is_checked = is_checked || false;
    cb_columns = cb_columns || [];
    columns_no_filter = columns_no_filter || [$('#' + table_id + ' thead tr#filterrow th').length - 1];
    // DataTable
    table = $('#' + table_id).DataTable({
        orderCellsTop: true,
        ordering: false,
        iDisplayLength: 10,
        responsive: true
    });

    if ($(window).width() >= 768) {
        // Setup - add a text input to each footer cell
        $('#' + table_id + ' thead tr#filterrow th').each(function (index, data) {
            if (columns_no_filter.indexOf(index) == -1) {
                if (cb_columns.indexOf(index) != -1) {
                    // Set Column Dropdown
                    var column = table.column(index);
                    // DRAW DROPDOWN
                    var select = $('<select style="width:100%;"><option value="">All</option></select>')
                        .appendTo($(this).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });
                    column.data().unique().sort().each(function (d, j) {
                        d = d.replace('<label class="label label-default">', '');
                        d = d.replace('<label class="label label-blue">', '');
                        d = d.replace('</label>', '');
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                } else {
                    if (is_checked && index == 0) {
                        $(this).html('<input type="checkbox"/><br>All');
                    } else {
                        $(this).html('<input type="text" onclick="stopPropagation(event);" placeholder="Search" style="width:100%" />');
                    }
                }
            } else {
                $(this).html('-');
            }
        });

        // Apply the filter
        $("#" + table_id + " thead input").on('keyup change', function () {
            table
                .column($(this).parent().index() + ':visible')
                .search(this.value)
                .draw();
            $("#" + table_id + " thead input[type=checkbox]").prop('checked', false);
        });
    } else {
        $('#' + table_id + ' thead tr#filterrow').remove();
    }

    $("#" + table_id + " thead input[type=checkbox]").unbind('change');

    $("#" + table_id + " thead input[type=checkbox]").on('change', function () {
        $("#" + table_id + " tbody input[type=checkbox]").each(function () {
            if ($("#" + table_id + " thead input[type=checkbox]").is(":checked")) {
                var total_user = parseInt($('#total-users-selected').html().trim(' '));
                $(this).prop('checked', true);
                $('#total-users-selected').html(total_user + 1);
            } else {
                var total_user = parseInt($('#total-users-selected').html().trim(' '));
                $(this).prop('checked', false);
                $('#total-users-selected').html(total_user - 1);
            }
        });
    });

    //table.on('responsive-resize', function (e, datatable, columns) {
    //    var count = columns.reduce(function (a, b) {
    //        return b === false ? a + 1 : a;
    //    }, 0);
    //    if (count >= 1) {
    //        $('#' + table_id + ' thead tr#filterrow').remove();
    //        table.responsive.recalc();
    //    }
    //});

    //table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
    //    // console.log( 'Details for row '+row.index()+' '+(showHide ? 'shown' : 'hidden') );
    //    $('#' + table_id + ' thead tr#filterrow').remove();
    //} );
    return table;
}

function g_modal_delete(data, form) {
    swal({
        title: "Are you sure?",
        text: data + " , You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f0c541",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            form.submit();
        } else {
            swal.close();
        }
    });
}

function g_modal_approve(data, form) {
    swal({
        title: "Are you sure?",
        text: data + " , You will accept this user as contributors!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f0c541",
        confirmButtonText: "Yes, Approve!",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            form.submit();
        } else {
            swal.close();
        }
    });
}

function g_modal_reject(data, form) {
    swal({
        title: "Are you sure?",
        text: data + " , You will reject this user as contributors!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f0c541",
        confirmButtonText: "Yes, Reject!",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            form.submit();
        } else {
            swal.close();
        }
    });
}

function g_modal_approve_story(data, form) {
    swal({
        title: "Are you sure?",
        text: data + "You will approve this story and will become live on Petz Buzz",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f0c541",
        confirmButtonText: "Yes, Approve!",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            form.submit();
        } else {
            swal.close();
        }
    });
}

function g_modal_reject_story(data, form) {
    swal({
        title: "Are you sure?",
        text: data + "You will reject this story and it will not become live on Petz Buzz",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f0c541",
        confirmButtonText: "Yes, Reject!",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            form.submit();
        } else {
            swal.close();
        }
    });
}

function g_modal(title, description) {
    $('#g-modal-title').html(title);
    $('#g-modal-body').html(description);
    $('#g-modal').modal('show');
}

$(".rupiah").on('keyup', function () {
    var n = $(this).val().match(/[0-9]+/) ? parseInt($(this).val().replace(/\D/g, ''), 10) : '';
    $(this).val(n.toLocaleString());
});

function to_rupiah(value) {
    var n = value.match(/[0-9]+/) ? parseInt(value.replace(/\D/g, ''), 10) : '';
    return "Rp. " + n.toLocaleString();
}

function to_rupiah_without_rp(value) {
    var n = value.match(/[0-9]+/) ? parseInt(value.replace(/\D/g, ''), 10) : '';
    return n.toLocaleString();
}

function init_rupiah() {
    $(".rupiah").on('keyup', function () {
        var n = $(this).val().match(/[0-9]+/) ? parseInt($(this).val().replace(/\D/g, ''), 10) : '';
        $(this).val(n.toLocaleString());
    });
}
