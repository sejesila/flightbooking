@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div>
        <small class="m-3 text-primary">Flights</small>

        <div class="mw-100">

            <div class="">
                <div class="">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="d-inline-flex justify-content-evenly  py-1 mx-2">

                    <select class="form-select form-select-sm border-0 border text-primary w-auto"
                            aria-label=".form-select-lg example">
                        <option selected>Round Trip</option>
                        <option value="1">One Way</option>
                    </select>

                    <select class="mx-auto form-select form-select-sm border-0 text-primary w-auto"
                            aria-label=".form-select-lg example">
                        <option selected>1 Traveler</option>
                        <option value="1">2 Travelers</option>
                    </select>

                    <select class="form-select form-select-sm border-0 text-primary w-auto"
                            aria-label=".form-select-lg example">
                        <option selected>Economy</option>
                        <option value="1">Business Class</option>
                    </select>

                    <select class="form-select form-select-sm border-0 text-primary w-auto"
                            aria-label=".form-select-lg example">
                        <option selected>Airline</option>
                        @foreach ($airlines as $airline)
                            <option value="{{ $airline->id }}">{{ $airline->name }}</option>
                        @endforeach

                    </select>
                    <select class="form-select form-select-sm border-0 text-primary w-auto"
                            aria-label=".form-select-lg example">
                        <option selected>More Options</option>
                        <option value="1">Kenya Airways</option>
                        <option value="2">Qatar Airways</option>
                    </select>
                </div>

                <div class="bg-white">
                    <form action="#">


                        <div class="form-group d-sm-flex margin">
                            <div class="col-12 col-sm-4 col-md-3 p-2">
                                <div class="form-floating p-1">
                                    <select class="form-select form-select-sm" id="floatingSelect"
                                            aria-label="Floating label select example" name="from">
                                        <option selected>From</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Flying from</label>
                                </div>

                            </div>

                            <div class="col-12 col-sm-4 col-md-3 p-2">
                                <div class="form-floating p-1">

                                    <select class="form-select form-select-sm ps-6" id="floatingSelect" name="to"
                                            aria-label="Floating label select example">
                                        <option selected>To</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Flying to</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2 p-2">
                                <div class="form-floating p-1">
                                    <input type="date" required placeholder="Depart Date" name="depart_date"
                                           class="form-control">
                                    <label for="floatingSelect">Departing</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-2 p-2">
                                <div class="form-floating p-1">
                                    <input type="date" required placeholder="Return Date" name="returning_date"
                                           class="form-control">
                                    <label for="floatingSelect">Returning</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 p-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>


                        <div class="form-group my-3">

                        </div>
                    </form>
                </div>
                <hr>
                <div class="d-flex">
                    <!-- Columns start at 50% wide on mobile and divide the screen in the ratio of 2:7:3 while on desktop -->
                    <div class="col-6 col-md-2 p-2">
                        <small>Filter by</small>
                        <div class="pt-3  d-flex justify-content-between">
                            <h6 class="h6 mb-0 text-gray-800">Stops</h6>
                            <h6 class="mr-1">From</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small class="form-check-label " for="exampleCheck1"> 1 Stop(1)</small>
                            </div>

                            <small class="my-1"><span class="input-group-btn "> $1200  </span></small>

                        </div>

                        <div class="pt-3 d-flex justify-content-between">
                            <h6 class="h6 mb-0 text-gray-800">Airlines</h6>
                            <h6 class="mr-1">From</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small class="form-check-label mt-1" for="exampleCheck1">Qatar Airways</small>
                            </div>

                            <small class="mt-1 mr-1"><span class="input-group-btn "> $1200  </span></small>

                        </div>
                        <div class="pt-3 d-flex justify-content-between">

                            <h6 class="h6 mb-0 text-gray-800">Travel and baggage</h6>
                            <h6 class="mr-1">From</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small class="form-check-label mt-1" for="exampleCheck1">No cancel fee</small>
                            </div>

                            <small class="mt-1 mr-1"><span class="input-group-btn "> $1200  </span></small>

                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small class="form-check-label mt-1" for="exampleCheck1">No change fee</small>

                            </div>

                            <small class="mt-1 mr-1"><span class="input-group-btn "> $1200  </span></small>

                        </div>
                        <h5 class="h6 pt-2">Departure time in Nairobi</h5>
                        <span><i class="fas fa-sun"></i></span>
                        <h5 class="h6 pt-2">Arrival time in New York</h5>
                        <span><i class="fas fa-moon-o" aria-hidden="true"></i></span>


                    </div>
                    <div class="vr mx-2"></div>
                    <div class="col-6 col-md-7">
                        <nav class="mt-3"
                             style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                             aria-label="breadcrumb">
                            <ol class="breadcrumb text-decoration-none">
                                <li class="breadcrumb-item active "><a href="#">Choose departing flight</a></li>
                                <li class="breadcrumb-item " aria-current="page">Choose returning flight</li>
                                <li class="breadcrumb-item " aria-current="page">Review your trip</li>
                            </ol>
                        </nav>
                        <hr class="mt-4" style="height: 2px">
                        <div class="d-flex justify-content-evenly flex-row">

                            <small class="ms-3">
                                Prices displayed include taxes and may change based on availability. You can review any
                                additional fees before checkout. Prices are not final until you complete your purchase
                            </small>


                            <div class="form-floating p2">
                                <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                    <option selected>Price</option>
                                    <option value="1">Price(highest)</option>

                                </select>
                                <label for="floatingSelect">Sort by</label>
                            </div>
                        </div>
                        @foreach ($flights as $flight)
                        <div class="d-flex flex-row justify-content-between mb-3">

                                <div class="p-2 d-flex flex-column">
                                    <h6>5:00pm - 6:00pm</h6>
                                    <small>

                                        {{ $flight->from_cities->name}} - {{ $flight->to_cities->name}}
                                    </small>
                                    <small>
                                        {{ $flight->airlines->name}}
                                    </small>

                                </div>

                                <div class="p-2 bd-highlight">1hr 0m (Nonstop)</div>
                                <div class="d-flex align-content-end flex-column">
                                    <small>
                                        1 left at
                                    </small>


                                    <h6>$ {{$flight->routes->route_economy_fare}}</h6>


                                    <small>
                                        Roundtrip per traveler
                                    </small>

                                </div>

                        </div>
                        @endforeach


                    </div>

                    <div class="vr mx-2"></div>

                    <div class="col-6 col-md-2">.col-6 .col-md-3</div>
                </div>
            </div>

        </div>
    </div>
@endsection