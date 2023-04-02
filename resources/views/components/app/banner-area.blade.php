@props(["bgImage","title"])
<div id="banner-area"  class="banner-area" style="background-image:url('{{($bgImage)}}')">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">{{$title}}</h1>
                        {{$slot}}
                    </div>
                </div><!-- Col end -->
            </div>
        </div>
    </div>
</div>
