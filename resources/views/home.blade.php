@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                                <div class="card" style="min-height:395px;">
                                    <div class="card-block">
                                        <div class="text-center">
                                            <img src="img/b.jpg" class="rounded-circle" width="100" height="100">
                                        </div>
                                        <div class="text-center mt-3">
                                            <i class="fa fa-quote-right icon-grey-big"></i>
                                        </div>
                                        <h5 class="text-center font-weight-bold txt-brand-color">{{Auth::user()->name}}</h5>
                                        <h6 class="text-center text-muted">CLUB: <?php
                                        use Illuminate\Support\Facades\DB;

                                        $clubsid = DB::table('club_sides')->where('id', '=', Auth::user()->club)->get();


                                        ?>
                                        @foreach ($clubsid as $clubsid)
                                            {{ $clubsid -> club_name }}
                                        @endforeach
                                        </h6>
                                        <?php if (Auth::user()->status=="unpaid"): ?>
                                          <h3><a href="#" class="btn btn-danger btn-block">click here to pay</a></h3>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                            <?php if (Auth::user()->status=="paid"): ?>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                                  <div class="card" style="min-height:395px;">
                                      <div class="card-block">
                                          <h5 class="card-title mb-4">Employees</h5>
                                          <table class="table table-hover table-striped">

                                              <thead class="text-primary">
                                                  <tr>
                                                      <th>Name</th>
                                                      <th>club</th>
                                                  </tr>
                                              </thead>
                                              <tbody>

                                                  <tr>
                                                      <td>{{Auth::user()->name}}</td>
                                                      <td>{{ $clubsid -> club_name }}</td>

                                                  </tr>
                                                  @if(count($players2)>0)
                                                  @foreach($players2->all() as $players2)
                                                    <tr>
                                                        <td>{{ $players2 -> name }}</td>
                                                        <td>{{ $clubsid -> club_name }}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                  <tr>
                                                      <td class="text-primary"><h3>VS</h3></td>
                                                  </tr>
                                                  @if(count($players3)>0)
                                                  @foreach($players3->all() as $players3)
                                                    <tr>
                                                        <td>{{ $players3 -> name }}</td>
                                                        <td>{{ $clubsid -> club_name }}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                @if(count($players4)>0)
                                                @foreach($players4->all() as $players4)
                                                  <tr>
                                                      <td>{{ $players4 -> name }}</td>
                                                      <td>{{ $clubsid -> club_name }}</td>
                                                  </tr>
                                                  @endforeach
                                              @endif

                                              </tbody>

                                          </table>
                                      </div>
                                  </div>
                              </div>

                            <?php endif; ?>

                        </div>




            </div>
        </div>
    </div>
</div>
@endsection
