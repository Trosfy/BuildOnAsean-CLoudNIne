@extends('layouts.uni-assessment-layout')
<title>University/Major Assessment? 2 ipa</title>


@section('uniLeft')
<div class="d-flex stepsContainer justify-content-around  mt-4">
    <img src="{{asset('storage/assets/step-1.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-2-active.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-3.svg')}}" alt="">
</div>
<br>
<img src="{{asset('storage/assets/illustrations/major-test-2-ipa.svg')}}" alt="image" class="imgSquare mt-3">
<span class="uniText">
    <br>
    <span class="text-h4 text-blue-dark">
        Input your school grades
    </span>
    <br>
    <span class="text-14-r text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae architecto quis eligendi, alias non corrupti repellendus. 
    </span>
</span>
@endsection

@section('uniRight')
<div class="uniAssessmentContainer">
    <form action="/major-assessment/2" method="POST" class="formUni">
        @csrf

        <table class="table grades-table mt-4" data-aos="fade-up">
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
                            <input id="grade" type="number" class="ml-2 form-control" name="grademat1" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grademat2" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grademat3" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grademat4" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="grademat5" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Bahasa Inggris</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebing1" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebing2" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebing3" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebing4" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebing5" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Bahasa Indonesia</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebindo1" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebindo2" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebindo3" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebindo4" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradebindo5" placeholder="0">
                        </div>
                    </td>
                </tr>
                @if ($jurusan == 'IPS')
                    <tr>
                        <th scope="row" class="text-blue-dark">Ekonomi</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradeekon1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradeekon2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradeekon3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradeekon4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradeekon5" placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-blue-dark">Geografi</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradegeo1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradegeo2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradegeo3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradegeo4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradegeo5" placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-blue-dark">Sosiologi</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradesos1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradesos2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradesos3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradesos4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradesos5" placeholder="0">
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <th scope="row" class="text-blue-dark">Fisika</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradefis1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradefis2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradefis3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradefis4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradefis5" placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-blue-dark">Kimia</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradekimia1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradekimia2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradekimia3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradekimia4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradekimia5" placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-blue-dark">Biologi</th>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradebio1" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradebio2" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradebio3" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradebio4" placeholder="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-group grade-box">
                                <input id="grade" type="number" class="ml-2 form-control" name="gradebio5" placeholder="0">
                            </div>
                        </td>
                    </tr>   
                @endif
                <tr>
                    <th scope="row" class="text-blue-dark">Sejarah</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradesejarah1" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradesejarah2" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradesejarah3" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradesejarah4" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradesejarah5" placeholder="0">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-blue-dark">Komputer</th>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradekomp1" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradekomp2" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradekomp3" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradekomp4" placeholder="0">
                        </div>
                    </td>
                    <td>
                        <div class="form-group grade-box">
                            <input id="grade" type="number" class="ml-2 form-control" name="gradekomp5" placeholder="0">
                        </div>
                    </td>
                </tr>
                {{-- <tr>
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
                </tr> --}}
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
