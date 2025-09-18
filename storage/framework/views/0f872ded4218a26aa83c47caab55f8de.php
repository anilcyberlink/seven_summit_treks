<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Trip Maps </span>
            <a class="btn btn-primary pull-right add-map" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add
                Row </a>
        </div>

        <div class="panel-body" id="row_map_body">
            <div class="row">
                <div class="col-md-1">
                    <label>Ordering</label>

                </div>
                <div class="col-md-4">
                    <label>Title</label>

                </div>
                <div class="col-md-6">
                    <label>Thumbnail</label>

                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row" id="map-rec-1">

            </div>
        </div>

        <div style="display:none;">
            <div id="row_map_additional">
                <input type="hidden" name="map_id[]" value="" />
                <div class="row">
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="map_ordering[]"
                            class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="map_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="map_thumbnail[]" class="form-control" />
                        <small> (Width: 1600px Height: 1200px) </small>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-danger delete-map" schedule-data-id="0"><i
                                class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
<?php /**PATH /home/sevensummittreks/public_html/resources/views/admin/trips/create/create-map.blade.php ENDPATH**/ ?>