@extends('layouts.main')

@section('title', 'Home')

@section('custom-css')
@endsection

@section('content')
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
            <div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">Categories</h3>
			</div>
			<div class="row">
                @foreach($categories as $category)
                    <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                        <div class="block1 hov-img-zoom pos-relative m-b-30">
                            <img src="images/{{$category->image}}" alt="{{$category->title}}">
                            <div class="block1-wrapbtn w-size2">
                                <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">{{$category->title}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</div>
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">Our Products</h3>
			</div>
			<div class="tab01">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active sort-button" data-toggle="tab" href="#all" role="tab">All</a>
					</li>
					<li class="nav-item">
						<a class="nav-link sort-button" data-toggle="tab" href="#sale" role="tab">Sale</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link sort-button" data-toggle="tab" href="#new" role="tab">New</a>
					</li>
				</ul>
				<div class="tab-content p-t-35">
                    <div class="product_grid">
                        <x-card />
                    </div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
        $('.sort-button').click(function(event){

        let orderByMark = $(event.target).text();

        $.ajax({
                url: "{{route('orderByMark')}}",
                type: "GET",
                data: {
                    orderBy: orderByMark
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    $('.product_grid').html(data)
                }
            });
        })
    })
</script>
@endsection
