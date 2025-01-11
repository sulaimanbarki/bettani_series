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

                                                    <a href="#myModal" onclick="launchModal(event)" data-link="{{ $videos['url'] }}" data-title="{{ $videos['title'] }}" class="btn btn-primary btn-lg" data-toggle="modal">Watch Videos</a>
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

        </div>

        {{-- modal for mobile screen --}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">YouTube Video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315"
                                src="//www.youtube.com/embed/YE7VzlLtp-4" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
    
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });

    // on modal hide pause videos
    $('#myModal').on('hidden.bs.modal', function (e) {
        $('#cartoonVideo').attr('src', $('#cartoonVideo').attr('src'));
    });
    
});
</script>
@endsection