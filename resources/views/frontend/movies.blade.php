@extends('frontend.layout.layout')


@section('content')
    <main id="content">
        <div class="bg-gray-1100 dark">
            <div class="container px-md-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb dark font-size-1">
                        <li class="breadcrumb-item"><a href="./" class="text-gray-1300">Trang chủ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Danh sách phim</li>
                    </ol>
                </nav>
                
                    <div class="col-lg">
                        <section>
                            <div class="mb-4">
                                <div class="home-section mb-5">
                                    <header
                                        class="d-md-flex align-items-center justify-content-between mb-3 mb-lg-1 pb-2 w-100 border-bottom border-gray-3900">
                                        <h6
                                            class="d-block position-relative font-size-24 font-weight-medium overflow-md-hidden m-0 text-white">
                                            Phim</h6>
                                    </header>
                                    <div class="d-xl-flex align-items-center justify-content-between">
                                        <div
                                            class="d-none d-xl-flex align-items-center justify-content-center justify-content-md-start mb-3 mb-md-0">
                                            
                                            
                                        </div>
                                        <div class="d-xl-flex align-items-center">
                                            <ul class="d-none d-xl-flex nav justify-content-center justify-content-md-start mr-md-4 mb-3 mb-md-0 tab-nav-shop"
                                                id="pills-tab" role="tablist">
                                                <li class="nav-item mr-3">
                                                    <a class="nav-link font-size-22 p-0 active"
                                                        id="pills-one-example1-tab" data-toggle="pill"
                                                        href="#pills-one-example1" role="tab"
                                                        aria-controls="pills-one-example1" aria-selected="true">
                                                        <div
                                                            class="d-md-flex justify-content-md-center align-items-md-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                                height="15px">
                                                                <path fill-rule="evenodd" fill="rgb(180, 187, 192)"
                                                                    d="M16.500,10.999 C15.671,10.999 15.000,10.327 15.000,9.500 C15.000,8.671 15.671,7.999 16.500,7.999 C17.328,7.999 18.000,8.671 18.000,9.500 C18.000,10.327 17.328,10.999 16.500,10.999 ZM16.500,6.999 C15.671,6.999 15.000,6.328 15.000,5.499 C15.000,4.671 15.671,3.999 16.500,3.999 C17.328,3.999 18.000,4.671 18.000,5.499 C18.000,6.328 17.328,6.999 16.500,6.999 ZM16.500,3.000 C15.671,3.000 15.000,2.328 15.000,1.499 C15.000,0.671 15.671,-0.001 16.500,-0.001 C17.328,-0.001 18.000,0.671 18.000,1.499 C18.000,2.328 17.328,3.000 16.500,3.000 ZM11.500,14.999 C10.672,14.999 10.000,14.328 10.000,13.499 C10.000,12.671 10.672,11.999 11.500,11.999 C12.328,11.999 13.000,12.671 13.000,13.499 C13.000,14.328 12.328,14.999 11.500,14.999 ZM11.500,10.999 C10.672,10.999 10.000,10.327 10.000,9.500 C10.000,8.671 10.672,7.999 11.500,7.999 C12.328,7.999 13.000,8.671 13.000,9.500 C13.000,10.327 12.328,10.999 11.500,10.999 ZM11.500,6.999 C10.672,6.999 10.000,6.328 10.000,5.499 C10.000,4.671 10.672,3.999 11.500,3.999 C12.328,3.999 13.000,4.671 13.000,5.499 C13.000,6.328 12.328,6.999 11.500,6.999 ZM11.500,3.000 C10.672,3.000 10.000,2.328 10.000,1.499 C10.000,0.671 10.672,-0.001 11.500,-0.001 C12.328,-0.001 13.000,0.671 13.000,1.499 C13.000,2.328 12.328,3.000 11.500,3.000 ZM6.500,14.999 C5.671,14.999 5.000,14.328 5.000,13.499 C5.000,12.671 5.671,11.999 6.500,11.999 C7.328,11.999 8.000,12.671 8.000,13.499 C8.000,14.328 7.328,14.999 6.500,14.999 ZM6.500,10.999 C5.671,10.999 5.000,10.327 5.000,9.500 C5.000,8.671 5.671,7.999 6.500,7.999 C7.328,7.999 8.000,8.671 8.000,9.500 C8.000,10.327 7.328,10.999 6.500,10.999 ZM6.500,6.999 C5.671,6.999 5.000,6.328 5.000,5.499 C5.000,4.671 5.671,3.999 6.500,3.999 C7.328,3.999 8.000,4.671 8.000,5.499 C8.000,6.328 7.328,6.999 6.500,6.999 ZM6.500,3.000 C5.671,3.000 5.000,2.328 5.000,1.499 C5.000,0.671 5.671,-0.001 6.500,-0.001 C7.328,-0.001 8.000,0.671 8.000,1.499 C8.000,2.328 7.328,3.000 6.500,3.000 ZM1.500,14.999 C0.671,14.999 -0.000,14.328 -0.000,13.499 C-0.000,12.671 0.671,11.999 1.500,11.999 C2.328,11.999 3.000,12.671 3.000,13.499 C3.000,14.328 2.328,14.999 1.500,14.999 ZM1.500,10.999 C0.671,10.999 -0.000,10.327 -0.000,9.500 C-0.000,8.671 0.671,7.999 1.500,7.999 C2.328,7.999 3.000,8.671 3.000,9.500 C3.000,10.327 2.328,10.999 1.500,10.999 ZM1.500,6.999 C0.671,6.999 -0.000,6.328 -0.000,5.499 C-0.000,4.671 0.671,3.999 1.500,3.999 C2.328,3.999 3.000,4.671 3.000,5.499 C3.000,6.328 2.328,6.999 1.500,6.999 ZM1.500,3.000 C0.671,3.000 -0.000,2.328 -0.000,1.499 C-0.000,0.671 0.671,-0.001 1.500,-0.001 C2.328,-0.001 3.000,0.671 3.000,1.499 C3.000,2.328 2.328,3.000 1.500,3.000 ZM16.500,11.999 C17.328,11.999 18.000,12.671 18.000,13.499 C18.000,14.328 17.328,14.999 16.500,14.999 C15.671,14.999 15.000,14.328 15.000,13.499 C15.000,12.671 15.671,11.999 16.500,11.999 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item mr-3">
                                                    <a class="nav-link font-size-22 p-0" id="pills-two-example1-tab"
                                                        data-toggle="pill" href="#pills-two-example1" role="tab"
                                                        aria-controls="pills-two-example1" aria-selected="false">
                                                        <div
                                                            class="d-md-flex justify-content-md-center align-items-md-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17px"
                                                                height="15px">
                                                                <path fill-rule="evenodd" fill="rgb(180, 187, 192)"
                                                                    d="M15.500,8.999 C14.671,8.999 14.000,8.328 14.000,7.499 C14.000,6.671 14.671,5.999 15.500,5.999 C16.328,5.999 17.000,6.671 17.000,7.499 C17.000,8.328 16.328,8.999 15.500,8.999 ZM15.500,2.999 C14.671,2.999 14.000,2.328 14.000,1.499 C14.000,0.671 14.671,-0.000 15.500,-0.000 C16.328,-0.000 17.000,0.671 17.000,1.499 C17.000,2.328 16.328,2.999 15.500,2.999 ZM8.500,14.999 C7.671,14.999 7.000,14.328 7.000,13.499 C7.000,12.671 7.671,11.999 8.500,11.999 C9.328,11.999 10.000,12.671 10.000,13.499 C10.000,14.328 9.328,14.999 8.500,14.999 ZM8.500,8.999 C7.671,8.999 7.000,8.328 7.000,7.499 C7.000,6.671 7.671,5.999 8.500,5.999 C9.328,5.999 10.000,6.671 10.000,7.499 C10.000,8.328 9.328,8.999 8.500,8.999 ZM8.500,2.999 C7.671,2.999 7.000,2.328 7.000,1.499 C7.000,0.671 7.671,-0.000 8.500,-0.000 C9.328,-0.000 10.000,0.671 10.000,1.499 C10.000,2.328 9.328,2.999 8.500,2.999 ZM1.500,14.999 C0.671,14.999 -0.000,14.328 -0.000,13.499 C-0.000,12.671 0.671,11.999 1.500,11.999 C2.328,11.999 3.000,12.671 3.000,13.499 C3.000,14.328 2.328,14.999 1.500,14.999 ZM1.500,8.999 C0.671,8.999 -0.000,8.328 -0.000,7.499 C-0.000,6.671 0.671,5.999 1.500,5.999 C2.328,5.999 3.000,6.671 3.000,7.499 C3.000,8.328 2.328,8.999 1.500,8.999 ZM1.500,2.999 C0.671,2.999 -0.000,2.328 -0.000,1.499 C-0.000,0.671 0.671,-0.000 1.500,-0.000 C2.328,-0.000 3.000,0.671 3.000,1.499 C3.000,2.328 2.328,2.999 1.500,2.999 ZM15.500,11.999 C16.328,11.999 17.000,12.671 17.000,13.499 C17.000,14.328 16.328,14.999 15.500,14.999 C14.671,14.999 14.000,14.328 14.000,13.499 C14.000,12.671 14.671,11.999 15.500,11.999 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                            <div class="d-flex align-items-center ml-auto">

                                                <div class="hs-unfold d-xl-none">
                                                    <a class="js-hs-unfold-invoker text-white font-weight-bold"
                                                        href="javascript:;"
                                                        data-hs-unfold-options="{
                                                                &quot;target&quot;: &quot;#sidebarContent-menu&quot;,
                                                                &quot;type&quot;: &quot;css-animation&quot;,
                                                                &quot;animationIn&quot;: &quot;fadeInLeft&quot;,
                                                                &quot;animationOut&quot;: &quot;fadeOutLeft&quot;,
                                                                &quot;hasOverlay&quot;: &quot;rgba(55, 125, 255, 0.1)&quot;,
                                                                &quot;smartPositionOff&quot;: true
                                                            }"><i
                                                            class="fas fa-sliders-h"></i><span
                                                            class="ml-2 font-secondary">FILTERS</span>
                                                    </a>
                                                </div>


                                                <aside id="sidebarContent-menu"
                                                    class="hs-unfold-content sidebar sidebar-left">
                                                    <div class="sidebar-scroller bg-gray-3100">
                                                        <div class="sidebar-container">
                                                            <div class="sidebar-footer-offset"
                                                                style="padding-bottom: 7rem;">

                                                                <div
                                                                    class="d-flex justify-content-end align-items-center pt-4 px-4">
                                                                    <div class="hs-unfold">
                                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary"
                                                                            href="javascript:;"
                                                                            data-hs-unfold-options="{
                                                                                    &quot;target&quot;: &quot;#sidebarContent-menu&quot;,
                                                                                    &quot;type&quot;: &quot;css-animation&quot;,
                                                                                    &quot;animationIn&quot;: &quot;fadeInLeft&quot;,
                                                                                    &quot;animationOut&quot;: &quot;fadeOutLeft&quot;,
                                                                                    &quot;hasOverlay&quot;: &quot;rgba(55, 125, 255, 0.1)&quot;,
                                                                                    &quot;smartPositionOff&quot;: true
                                                                                }">
                                                                            <svg width="10" height="10"
                                                                                viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill="currentColor"
                                                                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                                <div class="scrollbar sidebar-body">
                                                                    <div class="sidebar-content py-4 px-3">
                                                                        <div class="bg-gray-3100">
                                                                            <div class="sidebar-area">
                                                                                <div class="mx-1 mb-1">
                                                                                    <div class="mb-6">

                                                                                        <h6
                                                                                            class="font-size-22 font-weight-medium border-bottom border-gray-3700 pb-2 mb-5 text-white">
                                                                                            danh mục</h6>
                                                                                        <div class="row mb-4 pb-1">
                                                                                            <div class="col-md">
                                                                                                <ul
                                                                                                    class="list-unstyled mb-0">
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Action">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Action">Action</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Adventures">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Adventures">Adventures</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Animation">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Animation">Animation</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Bio">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Bio">Biography</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Comedy">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Comedy">Comedy</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Crime">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Crime">Crime</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Doc">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Doc">Documentary</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Drama">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Drama">Drama</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Family">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Family">Family</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Fantasy">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Fantasy">Fantasy</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="col-md">
                                                                                                <ul
                                                                                                    class="list-unstyled mb-0">
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="History">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="History">History</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Horror">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Horror">Horror</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Music">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Music">Music</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Mystery">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Mystery">Mystery</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Romance">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Romance">Romance</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Sci">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Sci">Sci-Fi</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Sports">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Sports">Sports</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="mb-1">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center">

                                                                                                            <div
                                                                                                                class="custom-control custom-checkbox">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input"
                                                                                                                    id="Thriller">
                                                                                                                <label
                                                                                                                    class="custom-control-label custom-control-label-custom text-gray-1800"
                                                                                                                    for="Thriller">Thriller</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul
                                                                                            class="list-unstyled d-flex mb-0">
                                                                                            <li
                                                                                                class="h-bg-2 bg-gray-3800 py-2 px-2 mr-1">
                                                                                                <a href="#">
                                                                                                    <div
                                                                                                        class="d-flex flex-column">
                                                                                                        <i
                                                                                                            class="far fa-window-maximize text-gray-5000 d-flex justify-content-center font-size-20"></i>
                                                                                                        <span
                                                                                                            class="font-size-10 font-weight-semi-bold text-gray-1300">4K
                                                                                                            ULTRA</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="h-bg-2 bg-gray-3800 py-2 px-2 mr-1">
                                                                                                <a href="#">
                                                                                                    <div
                                                                                                        class="d-flex flex-column">
                                                                                                        <i
                                                                                                            class="fas fa-chess-knight text-gray-5000 d-flex justify-content-center font-size-20"></i>
                                                                                                        <span
                                                                                                            class="font-size-10 font-weight-semi-bold text-gray-1300">BROTHER</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="h-bg-2 bg-gray-3800 py-2 px-2 mr-1">
                                                                                                <a href="#">
                                                                                                    <div
                                                                                                        class="d-flex flex-column">
                                                                                                        <i
                                                                                                            class="fab fa-teamspeak text-gray-5000 d-flex justify-content-center font-size-20"></i>
                                                                                                        <span
                                                                                                            class="font-size-10 font-weight-semi-bold text-gray-1300">DUBBING</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="h-bg-2 bg-gray-3800 py-2 px-2 mr-0">
                                                                                                <a href="#">
                                                                                                    <div
                                                                                                        class="d-flex flex-column">
                                                                                                        <i
                                                                                                            class="fas fa-chess-knight text-gray-5000 d-flex justify-content-center font-size-20"></i>
                                                                                                        <span
                                                                                                            class="font-size-10 font-weight-semi-bold text-gray-1300">HERO</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>

                                                                                    </div>
                                                                                    <div class="mb-6 pb-1">
                                                                                        <h6
                                                                                            class="font-size-22 text-white font-weight-medium border-bottom border-gray-3700 pb-2 mb-4">
                                                                                            Phim by Year</h6>
                                                                                        <ul
                                                                                            class="list-unstyled d-flex flex-wrap mb-0">
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2020</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2019</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2018</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2017</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2016</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2015</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2014</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2013</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2012</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-1 pb-1">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2011</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="pr-0 pb-0">
                                                                                                <div
                                                                                                    class="h-bg-3 bg-gray-5100 px-2 py-2 d-inline-block">
                                                                                                    <a href="#"
                                                                                                        class="mx-1">2010</a>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="mb-5">
                                                                                        <h6
                                                                                            class="font-size-22 text-white font-weight-medium border-bottom border-gray-3700 pb-2 mb-3">
                                                                                            Filter by Rating</h6>
                                                                                        <a href="#">
                                                                                            <div
                                                                                                class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-1 pb-1">
                                                                                                <span
                                                                                                    class="d-block text-primary">
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                </span>
                                                                                                <small
                                                                                                    class="text-gray-1300 font-size-15">(2)</small>
                                                                                            </div>
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <div
                                                                                                class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-1 pb-1">
                                                                                                <span
                                                                                                    class="d-block text-primary">
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                </span>
                                                                                                <small
                                                                                                    class="text-gray-1300 font-size-15">(10)</small>
                                                                                            </div>
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <div
                                                                                                class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-1 pb-1">
                                                                                                <span
                                                                                                    class="d-block text-primary">
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                </span>
                                                                                                <small
                                                                                                    class="text-gray-1300 font-size-15">(27)</small>
                                                                                            </div>
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <div
                                                                                                class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-1 pb-1">
                                                                                                <span
                                                                                                    class="d-block text-primary">
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                </span>
                                                                                                <small
                                                                                                    class="text-gray-1300 font-size-15">(13)</small>
                                                                                            </div>
                                                                                        </a>
                                                                                        <a href="#">
                                                                                            <div
                                                                                                class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-0">
                                                                                                <span
                                                                                                    class="d-block text-primary">
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="fas fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                    <i
                                                                                                        class="far fa-star"></i>
                                                                                                </span>
                                                                                                <small
                                                                                                    class="text-gray-1300 font-size-15">(1)</small>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content dark mb-4">
                                <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                                    aria-labelledby="pills-one-example1-tab">
                                    <div class="border-bottom border-gray-3800 mb-4 pb-5">
                                        <div class="row mx-n2">
                                            @foreach($movies as $movie)
                                            <div class="col-md-3 col-lg-2 px-2">
                                                <div class="product mb-4">
                                                    <div class="product-image mb-2">
                                                        <a class="d-block position-relative stretched-link"
                                                            href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}">
                                                            <img class="img-fluid" src="{{ Storage::url($movie->hinhanh) }}" alt="Image-Description">
                                                        </a>
                                                    </div>
                                                    <div class="product-meta font-size-12">
                                                        <!-- Thay đổi các trường thông tin phim -->
                                                        <span><a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}"
                                                                class="h-g-primary" tabindex="0">{{ $movie->nsx }}</a></span>
                                                        <span><a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}"
                                                                class="h-g-primary" tabindex="0">{{ $movie->theloai }}</a></span>
                                                        <!-- Thêm các trường thông tin phim khác nếu cần -->
                                                    </div>
                                                    <h6 class="font-size-1 font-weight-bold mb-0 product-title d-inline-block">
                                                        <a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}">{{ $movie->atenphim }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            @endforeach



                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-two-example1" role="tabpanel"
                                    aria-labelledby="pills-two-example1-tab">
                                    <div class="border-bottom border-gray-3800 mb-4 pb-5">
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-wd-5 mx-n2">
                                            @foreach($movies as $movie)
                                            <div class="col-md-3 col-lg-2 px-2">
                                                <div class="product mb-4">
                                                    <div class="product-image mb-2">
                                                        <a class="d-block position-relative stretched-link"
                                                            href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}">
                                                            <img class="img-fluid" src="{{ Storage::url($movie->hinhanh) }}" alt="Image-Description">
                                                        </a>
                                                    </div>
                                                    <div class="product-meta font-size-12">
                                                        <!-- Thay đổi các trường thông tin phim -->
                                                        <span><a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}"
                                                                class="h-g-primary" tabindex="0">{{ $movie->nsx }}</a></span>
                                                        <span><a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}"
                                                                class="h-g-primary" tabindex="0">{{ $movie->theloai }}</a></span>
                                                        <!-- Thêm các trường thông tin phim khác nếu cần -->
                                                    </div>
                                                    <h6 class="font-size-1 font-weight-bold mb-0 product-title d-inline-block">
                                                        <a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}">{{ $movie->atenphim }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-md-flex align-items-center justify-content-between">
                                <div
                                    class="font-secondary font-size-1 font-weight-normal text-gray-1300 text-center text-md-left mb-3 mb-md-0">
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
