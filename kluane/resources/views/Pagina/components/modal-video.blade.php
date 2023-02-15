<div class="modal" id="Kluane-video" tabindex="-1" aria-labelledby="Kluane-videoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body" id="modal-body">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        @php
                            $url= $_SERVER["REQUEST_URI"];
                        @endphp
                         @if ($url === '/nosotros')
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe src="https://player.vimeo.com/video/798431130?h=f4ab857dbb" width="640" height="360" frameborder="0" allow="autoplay; fullscreen picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                            </div>
                        @elseif ($url == '/about')
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe src="https://player.vimeo.com/video/798430914?h=689722e591" width="640" height="360" frameborder="0" allow="autoplay; fullscreen picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                            </div>
                        @endif
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>