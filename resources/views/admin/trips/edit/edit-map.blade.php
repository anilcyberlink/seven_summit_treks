<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Trip Map </span>
            <a class="btn btn-primary pull-right add-map" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add
                Row </a>
        </div>

        <div class="panel-body" id="row_map_body">
            <div class="row">
                <div class="col-md-1"><label>Ordering</label></div>
                <div class="col-md-4"><label>Title</label></div>
                <div class="col-md-6"><label>Thumbnail</label></div>
                <div class="col-md-1"></div>
            </div>
            @if ($maps->count() > 0)
                @foreach ($maps as $row)
                    <div class="row" id="map-rec-{{ $loop->iteration }}">
                        <input type="hidden" name="map_id[]" value="{{ $row->id }}" />
                        <div class="col-md-1">
                            <input type="number" min="1" max="2000" name="map_ordering[]"
                                value="{{ $row->ordering }}" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="map_title[]" value="{{ $row->title }}" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="map_thumbnail[]" class="form-control mapthumb"
                                file-rowid="{{ $row->id }}" />
                            @if ($row->thumbnail)
                                <span class="del-{{ $row->id }}">
                                    <img src="{{ asset('uploads/original/' . $row->thumbnail) }}" width="60"
                                        height="60" />
                                    <a href="{{ $row->id }}" class="delete_maps_thumb">X</a>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-1"><button class="btn btn-danger delete-map"
                                map-rowid="{{ $row->id }}" map-data-id="{{ $loop->iteration }}"><i
                                    class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                @endforeach
            @endif
        </div>

        <div style="display:none;">
            <div id="row_map_additional">
                <div class="row">
                    <input type="hidden" name="map_id[]" value="" />
                    <div class="col-md-1"><input type="number" min="1" max="2000" name="map_ordering[]"
                            class="form-control" placeholder="" /></div>
                    <div class="col-md-4"><input type="text" name="map_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-6"><input type="file" name="map_thumbnail[]" class="form-control mapthumb" />
                     <small> (Width: 1600px Height: 1200px) </small>
                    </div>
                    <div class="col-md-1"><button class="btn btn-danger delete-map" map-data-id="0"><i
                                class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
