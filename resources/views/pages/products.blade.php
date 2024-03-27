@extends('layout.app')
@section('title', 'Products')
@section('content')
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        @if ($category)
                            <li><a href="">{{ $category->name }}</a></li>
                        @endif
                        <li><a href="{{ route('products') }}">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="gry-bg py-4">
        <div class="container-fluid sm-px-0">
            <form class="{{ route('products') }}" id="search-form" action="" method="GET">
                <input type="hidden" name="category" value="{{ $category->slug ?? '' }}">
                <div class="row">
                    <div class="col-xl-3 side-filter d-xl-block">
                        <div class="filter-overlay filter-close"></div>
                        <div class="filter-wrapper c-scrollbar">
                            <div class="filter-title d-flex d-xl-none justify-content-between pb-3 align-items-center">
                                <h3 class="h6">Filters</h3>
                                <button type="button" class="close filter-close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="bg-white sidebar-box mb-3">
                                <div class="box-title text-center">
                                    Categories
                                </div>
                                <div class="box-content">
                                    <div class="category-filter">
                                        <ul>
                                            <li class="active"><a href="{{ route('products') }}" >All Products</a></li>
                                            @if($category)
                                                @forelse ($category->subcategory as $subcategory)
                                                    <li><a class="filter-main-cat" href="{{ route('products') }}?category={{ $subcategory->slug }}">{{ $subcategory->name }} ({{ count($subcategory->products) }})</a>
                                                @empty
                                                @endforelse 
                                            @endif
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="bg-white sidebar-box mb-3">
                                <div class="box-title text-center">
                                    Price range
                                </div>
                                <div class="box-content">
                                    <div class="range-slider-wrapper mt-3">
                                        <!-- Range slider container -->
                                        <div id="input-slider-range" data-range-value-min=" 790 "
                                            data-range-value-max=" 200000 "></div>

                                        <!-- Range slider values -->
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low" data-range-value-low="{{ $request->min_price ?? 2000}}"
                                                    id="input-slider-range-value-low">
                                            </div>

                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high" data-range-value-high="{{ $request->max_price ?? 50000 }}"
                                                    id="input-slider-range-value-high">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9">
                        <!-- <div class="bg-white"> -->

                        <div class="sort-by-bar row no-gutters bg-white mb-3 px-3 pt-2">
                            <div class="col-xl-4 d-flex d-xl-block justify-content-between align-items-end ">
                                <div class="sort-by-box flex-grow-1">
                                    <div class="form-group">
                                        <label>Search</label>
                                        <div class="search-widget">
                                            <input class="form-control input-lg" type="text" name="search_text"
                                                placeholder="Search products" value="{{ $request->search_text ?? '' }}">
                                            <button type="submit" class="btn-inner">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-xl-none ml-3 form-group">
                                    <button type="button" class="btn p-1 btn-sm" id="side-filter">
                                        <i class="la la-filter la-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-7 offset-xl-1">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <div class="sort-by-box px-1">
                                            <div class="form-group">
                                                <label>Sort by</label>
                                                <select class="form-control sortSelect"
                                                    data-minimum-results-for-search="Infinity" onchange="filter();" name="sort_by">
                                                    <option @if($request->sort_by == 1) selected @endif value="1">Newest</option>
                                                    <option @if($request->sort_by == 2) selected @endif value="2">Oldest</option>
                                                    <option @if($request->sort_by == 3) selected @endif value="3">Price low to high</option>
                                                    <option @if($request->sort_by == 4) selected @endif value="4">Price high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="min_price" value="{{ $request->min_price ?? 2000 }}">
                        <input type="hidden" name="max_price" value="{{ $request->max_price ?? 5000 }}">
                        <!-- <hr class=""> -->
                        <div class="products-box-bar p-3 bg-white">
                            <div class="row sm-no-gutters gutters-5">
                                @forelse ($products as $product)
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
                                        @include('pages.product.product-card')
                                    </div>
                                @empty
                                    <p class="text-center">No products found!</p>
                                @endforelse
                            </div>
                        </div>

                        <div class="products-pagination bg-white p-3">
                            {{ $products->links() }}
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
            </form>
        </div>
    </section>
    @push('script')
        <script>
            function filter(){
                $('#search-form').submit();
            }
            function rangefilter(arg){
                $('input[name=min_price]').val(arg[0]);
                $('input[name=max_price]').val(arg[1]);
                filter();
            }
        </script>
    @endpush
@endsection
