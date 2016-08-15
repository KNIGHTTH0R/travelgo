<script src="<?php echo base_url("assets")?>/scripts/datatables/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/datatables/tools/js/dataTables.tableTools.js"></script>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
                Trip
                <small> Menu to manage tour </small>
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <button type="button" class="btn btn-primary" onclick="do_add()">Add Tour</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl-add" style="display:none" id="btn-manage">Manage Trip</button>
                    <div id="mdl-add" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Manage Tour</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                Username <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="username" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                Password <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="password" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                Fullname <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="fullname" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                Menu <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" id="menus_content">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a id="btn-submit_add" class="btn btn-primary" onclick="do_update()">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_modal" id="remove_resources" style="display:none">Remove</button>
                    <div class="modal fade bs-example-modal-sm" id="remove_modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Remove Tour</h4>
                                </div>
                                <div class="modal-body" id="remove_resources_content">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="confirm_remove()">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_modal_playlist" id="remove_playlist" style="display:none">Remove</button>
                    <div class="modal fade bs-example-modal-sm" id="remove_modal_playlist" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Remove Trip</h4>
                                </div>
                                <div class="modal-body" id="remove_playlist_content">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="confirm_remove_playlist()">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="table_image" class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr class="headings">
                                <th>#</th>
                                <th>Tour Name</th>
                                <th>Tour Nescription</th>
                                <th>Tour Type</th>
                                <th>Tour Location</th>
                                <th style="width:350px">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_body"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var selected_id = 0;
    $(document).ready(function () {
        $.ajax({
            method: "POST",
            url: "<?php echo site_url("trip/get_table")?>"
        }).done(function (msg) {
            $("#table_body").html(msg);
            var asInitVals = new Array();
            var oTable = $('#table_image').dataTable({
                "oLanguage": {
                    "sSearch": "Search all columns:"
                },
                "aoColumnDefs": [
                    {
                        'bSortable': false,
                        'aTargets': [0,3]
                    } //disables sorting for column one
                ],
                'iDisplayLength': 12,
                "sPaginationType": "full_numbers"
            });
            $("tfoot input").keyup(function () {
                /* Filter on the column based on the index of this element's parent <th> */
                oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
            });
            $("tfoot input").each(function (i) {
                asInitVals[i] = this.value;
            });
            $("tfoot input").focus(function () {
                if (this.className == "search_init") {
                    this.className = "";
                    this.value = "";
                }
            });
            $("tfoot input").blur(function (i) {
                if (this.value == "") {
                    this.className = "search_init";
                    this.value = asInitVals[$("tfoot input").index(this)];
                }
            });
        });
    });
    function do_add() {
        selected_id = 0;
        $.ajax({
            method: "POST",
            url: "<?php echo site_url("trip/do_update")?>",
            data: { id: selected_id }
        }).done(function (msg) {
            $("#menus_content").html(msg)
            $("#btn-manage").click();
        });
    }
    function do_edit(text) {
        selected_id = text;
        $.ajax({
            method: "POST",
            url: "<?php echo site_url("trip/get_data")?>",
            data: { id: selected_id }
        }).done(function (msg) {
            data = eval('(' + msg + ')');
            $("#username").val(data.username);
            $("#fullname").val(data.full_name);
            $("#btn-manage").click();
        });
        $.ajax({
            method: "POST",
            url: "action/get_user_menus.aspx",
            data: { id: selected_id }
        }).done(function (msg) {
            $("#menus_content").html(msg)
        });
    }
    function do_remove(id) {
        selected_id = id
        $("#remove_resources_content").html("Are you sure want to remove " + $("#tour_name_" + id).html())
        $("#remove_resources").click();
    }
    function confirm_remove() {
        $.ajax({
            method: "POST",
            url: "<?php echo site_url("trip/do_delete")?>",
            data: { id: selected_id }
        }).done(function (msg) {
            loadUser();
        });
    }
</script>