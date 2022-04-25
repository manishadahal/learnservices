@extends('frontend.layouts.main')
@section('content')
                    <!-- search-right -->
                    <div class="header-search position-relative">
                        <div class="search-right mx-lg-2">
                            <a href="#search" class="btn search-btn p-0" title="search">
                                <i class="fas fa-search"></i></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    {{-- <form action="#search" method="GET" class="search-box"> --}}
                                        {!! Form::open([
                                            'url' => '/contact',
                                            'method' => 'POST',
                                            'class'=>'search-box',
                                            ]) !!}
                                             {!! Form::select('country', ['1' => 'Nepal','2' =>  'Inda', '3' => 'America', '4' => 'China'],'1', [
                                                'name' => "name",
                                                'placeholder' => "Your Country"
                                              ]) !!}
                                        {{-- <input type="search" placeholder="Enter Keyword..." name="search"
                                            required="required" autofocus=""> --}}
                                            {!! Form::text('search', '', [
                                                'name' => "search",
                                                'placeholder' => "Enter Keyword",
                                                'autofocus'=>'',
                                                'required'=>'required',
                                              ]) !!}
                                        <button type="submit" class="btn"><span class="fas fa-search"
                                                aria-hidden="true"></span></button>

                                    {{-- </form> --}}
                                     {!! Form::close() !!}
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- //search popup -->
                        </div>
                    </div>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
   @endsection
