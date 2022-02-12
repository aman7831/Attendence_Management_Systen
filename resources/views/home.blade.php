@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">

            <div class="col-3">
                <div class="shadow p-3 mb-5 bg-black rounded">   
                    <center><img src="img/user.png" class="card-img-top" alt="logo" style="height: 150px; width: 150px;">
                <h5 style="color: blue;">{{auth()->user()->name}}</h5>
                <h6 style="color: blue;"><a href=""><i class="fas fa-info-circle"> My Info</i></a></h6>
              </center>
              <hr>
              <!-- <p><i class="fas fa-clock"> Attendance</i></p>  -->
              <!-- <hr> -->
              <center>
                @if(!empty($clocked_in))
                 <p>You Signed In Today at {{$clocked_in}} AM!</p>
                @else
                <p>please sign in</p>
                @endif
                  <p style="color: blue;">06:00:23</p>
                  <button id="signin" type="submit" class="btn btn-primary" ><a href="/attendence/create">present</a></button>
                <br><br>
                <div class="card-footer text-muted">
                    Feburary 8
                  </div>
                </div></center>
            </div>

            <div class="col-6">
                <div class="shadow p-3 mb-5 bg-black rounded">   
                    <center>
                        <button type="button" class="btn btn-outline-primary "> MISSING ENTRY </button>
                        <button type="button" class="btn btn-outline-primary "> ABSENT ENTRY </button>
                        <button type="button" class="btn btn-outline-primary "> LEAVE SUMMARY </button>
                    </center>
                    <br>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SNo</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Request</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1.</th>
                            <td>05-Feb-2022</td>
                            <td><a href="">Absent</a></td>
                            <td style="color: blue;"><a href="">Leave</a> / <a href="">Attendance</a></td>
                          </tr>
                          <tr>
                            <th scope="row">2.</th>
                            <td>06-Feb-2022</td>
                            <td><a href="">Missing</a></td>
                            <td><a href="">Leave / Attendance</a></td>
                          </tr>
                          <tr>
                            <th scope="row">3.</th>
                            <td>07-Feb-2022</td>
                            <td><a href="">Absent</a></td>
                            <td><a href="">Leave / Attendance</a></td>
                          
                          </tr>
                        </tbody>
                      </table>    
                </div>
            </div>


            <div class="col-3">
                <div class="shadow p-3 mb-5 bg-black rounded">   
                    <center><p>ATTENDANCE SUMMARY</p>
                
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col"></th>
                            <th scope="col">Balance</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Present</th>
                            <th scope="col"></th>
                            <td>5.00</td>
                          </tr>
                          <tr>
                            <th scope="row">Absent</th>
                            <th scope="col"></th>
                            <td>2.00</td>
                          </tr>
                          <tr>
                            <th scope="row">Leave</th>
                            <th scope="col"></th>
                            <td>0.00</td>
                          
                          </tr>
                        </tbody>
                      </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
