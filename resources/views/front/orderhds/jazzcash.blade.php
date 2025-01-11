@extends('front/layout/layout')
@section('content')
@section('title','Print Details')
<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop Single</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="#" class="h-primary">Home</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                <a href="#" class="h-primary">Shop</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Shop Single
            </nav>
        </div>
    </div>
</div>
<div id="content" class="site-content bg-punch-light space-bottom-3">
    <div class="col-full container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-6" class="post-6 page type-page status-publish hentry">
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h4 class="entry-title font-size-7 text-center">Checkout</h4>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <form method="POST" action="{{ route('testapplies.printOurSlip') }}" id="auto_submit">
                                @csrf
                                <input type="hidden" name="test_id" id="test_idd" value="{{$data->test_id}}">
                                <input type="hidden" name="cnic" id="cnic" value="{{$data->cnic}}" class="form-control" placeholder="Enter your cnic" required>
                            </form>

                        </div>
                    </div>

                </article>

            </main>

        </div>

    </div>

</div>
@endsection

@section('script')
<script>
    "use strict";
    document.getElementById("auto_submit").submit();
</script>
@stop