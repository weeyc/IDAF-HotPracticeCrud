@extends('master')
@section('content')
                <div style="height: 100vh;" class="bg-dark text-light p-5 text-center">
                    <div class="container">
                        <div class="container text-center mb-1">
                            <h1> This is <span class="text-warning"> Student Tables</span> </h1>
                        </div>
                        <form action="{{ route('filter') }}" method="GET">
                          <div class="d-flex flex-row-reverse">
                            <div class="p-2">
                                <button type="submit"  name = "submit" value = "cleared" class="btn btn-secondary px-4">Clear</button>
                            </div>
                            <div class="p-2">
                                <button type="submit"  name = "submit" value = "filtered" class="btn btn-primary px-4">Filter</button>
                            </div>
                            <div class="p-2">
                                <select class="form-select age"  name= "age" aria-label="Default select example">
                                <option selected value="">Age</option>
                                <option value="age>20">Age >20</option>
                            </select>
                            </div>
                            <div class="p-2 ">
                                <select class="form-select gender"  name="gender" aria-label="Default select example">
                                    <option selected value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </form>
                          </div>
                        </div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-dark table-hover table-striped table-bordered table-sm">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                              </tr>
                            </thead>
                            <tbody table-dark>
                        <?php  $count=1; ?>
                        @foreach($Students as $i)
                              <tr >
                                <td>{{ $count }}</td>
                                <td>{{ $i->Name}}</td>
                                <td>{{ $i->Gender}}</td>
                                <td>{{ $i->Age}}</td>
                                <td>{{ $i->Address}}</td>
                              </tr>
                        <?php $count++; ?>
                        @endforeach
                            </tbody>
                          </table>
                </div>
@endsection
