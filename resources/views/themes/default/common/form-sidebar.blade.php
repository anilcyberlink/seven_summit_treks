<div class="uk-width-auto@m w-350" uk-visible@m>
    <div class="  uk-clearfix" style="z-index: 9;" uk-sticky="offset: 150; bottom: #uk-stop-sticky;">
        <!--  -->
        <div>
            <div class="uk-card uk-card-default uk-margin">
                <h5 class="uk-margin-remove uk-text-center uk-text-uppercase bg-primary uk-text-bold text-white uk-padding-small ">
                    Useful Info</h5>

                <div class="uk-card-body uk-padding-small">
                    <ul class="uk-list  uk-list-divider">
                        @foreach($pagetypes as $row)
                            <li>
                                @if($row->external_link)
                                    <a href="{{$row->external_link}}">
                                        {{ $row->page_type }}
                                    </a>
                                @else
                                    <a href="{{ url('info/'.$row->uri) }}">
                                        {{ $row->page_type }}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <!--  -->
</div>