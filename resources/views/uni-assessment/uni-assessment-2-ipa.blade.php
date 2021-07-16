@extends('layouts.uni-assessment-layout')
<title>University/Major Assessment? 2 ipa</title>

@section('uniLeft')
<div class="d-flex stepsContainer justify-content-around">
    <img src="{{asset('storage/assets/step-1.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-2-active.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-3.svg')}}" alt="">
</div>
<br>
<img src="{{asset('storage/assets/icons/search.svg')}}" alt="image" class="imgSquare">
<span class="uniText">
    <br>
    <span class="text-h4 text-blue-dark">
        Input your school grades
    </span>
    <br>
    <span class="text-14-r text-darkgrey">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae architecto quis eligendi, alias non corrupti repellendus. 
    </span>
</span>
@endsection

@section('uniRight')
<div class="uniAssessmentContainer ">
    <form action="/major-assessment/3" method="" class="formUni">
        @csrf

        <table class="table grades-table">

            <thead >
                <tr>
                    <td colspan="6" class="text-18-sb text-blue-dark">Semester</td>
                </tr>
                <tr>
                    <th></th>
                    <th class="text-blue">1</th>
                    <th class="text-blue">2</th>
                    <th class="text-blue">3</th>
                    <th class="text-blue">4</th>
                    <th class="text-blue">5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Mat</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grade" placeholder="0">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    Next
                    <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white">
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
