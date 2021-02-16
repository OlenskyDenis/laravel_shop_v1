@extends('layouts.main')

@section('title', 'Shop')

@section('custom-css')
@endsection

@section('content')
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<h4 class="m-text14 p-b-7">Categories</h4>
						<ul class="p-b-54">
                            @foreach($categories as $category)
                                <li class="p-t-4">
                                    <a href="#" class="s-text13 active1">{{$category->title}}</a>
                                </li>
                            @endforeach
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="dropdown ">
                                <a class="btn btn-secondary rs2-select2 bo4 w-size12 m-t-5 m-b-5 m-r-10" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</a>
                                <div class="dropdown-menu bo4 w-size12 m-t-5 m-b-5 m-r-10" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item sort-button" href="#Price hight-low" data-toggle="tab" role="tab">Price hight-low</a>
                                  <a class="dropdown-item sort-button" href="#Price low-hight" data-toggle="tab" role="tab">Price low-hight</a>
                                </div>
                              </div>
                        </div>
						<span class="s-text8 p-t-5 p-b-5">Showing 1– {{$products->count()}} results</span>
					</div>
                    <div class="product_grid">
                        <x-card />
                    </div>
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
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

            let orderBy = $(event.target).text();
                console.log(orderBy);
            $.ajax({
                    url: "{{route('orderByPrice')}}",
                    type: "GET",
                    data: {
                        orderBy: orderBy
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
