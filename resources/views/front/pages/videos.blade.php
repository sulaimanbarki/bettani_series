@extends('front/layout/layout')
@section('content')
@section('title','Introduction and training Videos')
<main id="content">
    <div class="mb-5 space-bottom-lg-3">
        <div class="py-3 py-lg-7">
            <h6 class="font-weight-medium font-size-7 text-center my-1">Introduction and training Videos</h6>
        </div>
        <!-- <img class="img-fluid" src="../../assets/img/1920x650/img1.jpg" alt="Image-Description"> -->
        <div class="container">
            {{-- list all links with url --}}
            @if (count($data) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($data as $videos)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ $videos['thumbnail'] }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>{{ $videos['title'] }}</h5>

                                                    <a href="#myModal" onclick="launchModal(event)"
                                                        data-link="{{ $videos['url'] }}"
                                                        data-title="{{ $videos['title'] }}"
                                                        class="btn btn-primary btn-lg" data-toggle="modal">Watch
                                                        Videos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>No Videos Found</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">YouTube Video</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315"
                                src="" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@section('script')
<script>
    function launchModal(event) {
        event.preventDefault();
        var link = $(event.target).data('link');
        var title = $(event.target).data('title');
        console.log(link);
        console.log(title);
        $('#cartoonVideo').attr('src', link);
        $('.modal-title').html(title);
        $('#myModal').modal('show');
    }
    $(document).ready(function(){
    var url = $("#cartoonVideo").attr('src');
    
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
});
</script>
@endsection