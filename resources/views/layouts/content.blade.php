@foreach($categories as $category)

    @if(count($category->sites) != 0)

        <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;"
                                 id="{{ $category->title }}"></i>{{ $category->title }}</h4>

        @php
            foreach ($category->sites->chunk(4) as $sites){
            echo '<div class="row">';

                foreach($sites as $site){
                    echo <<<EOF
                    <div class="col-sm-3">
                        <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('$site->url', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="$site->url">
                            <div class="xe-comment-entry">
                                <a class="xe-user-img">
                                    <img data-original="/uploads/$site->thumb" class="img-circle lazy" width="40">
                                </a>
                                <div class="xe-comment">
                                    <a href="#" class="xe-user-name overflowClip_1">
                                        <strong>$site->title</strong>
                                    </a>
                                    <p class="overflowClip_2">$site->describe</p>
                                </div>
                            </div>
                        </div>
                    </div>
EOF;
                }

                echo '</div>';
            }
        @endphp

    @endif

    <br>
@endforeach