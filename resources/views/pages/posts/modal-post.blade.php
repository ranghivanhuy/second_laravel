<!-- Passing BASE URL to AJAX -->
<input id="url" type="hidden" value="{{ \Request::url() }}">

<!-- MODAL SECTION -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Post Form</h4>
            </div>
            <div class="modal-body">
                <form id="frmPosts" name="frmPosts" data-target="#outcomeFormDialog" class="form-horizontal" novalidate="">
                <div class="form-group error">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Post Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter description"></textarea>
                    </div>
                </div>
                
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="hidden" id="id-post" name="id" value="0">
                <div class="val_error">
                    <div class="val_error" id="name_error"></div>
                    <div class="val_error" id="description_error"></div>
                </div>
            </div>
        </div>
    </div>
</div>