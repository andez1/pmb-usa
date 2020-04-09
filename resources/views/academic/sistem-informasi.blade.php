@extends('layouts.academic')

@section('content')
<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-bottom: 0em !important;" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Sistem Informasi</h2>
            </div>
        </div>
        <div class="row content-akademik">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim, pariatur optio! Asperiores beatae reprehenderit repellendus nostrum dignissimos, ipsam fugiat, explicabo dolore sunt possimus laudantium expedita maxime alias commodi minima aperiam.</p>
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Introduction</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Curriculum</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Course Description</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lecture</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h3>Introduction</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa libero aut voluptatem exercitationem dignissimos debitis, veniam voluptatum iste vel eum reprehenderit quisquam similique harum a. Obcaecati animi possimus cumque!</p>
                    <h3>Course Characteristics</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dignissimos tenetur et consequuntur quam accusantium perferendis cumque itaque saepe repellat id eligendi, modi incidunt earum consectetur placeat odio praesentium voluptas.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dignissimos tenetur et consequuntur quam accusantium perferendis cumque itaque saepe repellat id eligendi, modi incidunt earum consectetur placeat odio praesentium voluptas.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dignissimos tenetur et consequuntur quam accusantium perferendis cumque itaque saepe repellat id eligendi, modi incidunt earum consectetur placeat odio praesentium voluptas.</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h3>Curruculum</h3>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h3>Course Description</h3>
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Tahun Akademik">
                            </div>
                          <div class="col-2">
                            <select id="inputState" class="form-control">
                                <option selected>Tahun</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                              </select>
                          </div>
                          <div class="col-2">
                            <select id="inputState" class="form-control">
                                <option selected>Semester 1</option>
                                <option>Semester 2</option>
                              </select>
                          </div>
                          <div class="col">
                            <button type="submit" class="btn btn-primary">Search</button>
                          </div>
                          
                        </div>
                      </form>
                    <div class="table" style="margin-top: 24px">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                              <tr>
                                <th rowspan="2">Year</th>
                                <th rowspan="2">Major</th>
                                <th colspan="2">Semester 1</th>
                                <th colspan="2">Semester 2</th>
                              </tr>
                              <tr>
                                <th scope="row">Course Title</th>
                                <th scope="row">Credit</th>
                                <th scope="row">Course Title</th>
                                <th scope="row">Credit</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>2020</td>
                                <td>Major</td>
                                <td>Website Manajemen</td>
                                <td>3</td>
                                <td>Website Manajemen</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>2020</td>
                                <td>Major</td>
                                <td>Website Manajemen</td>
                                <td>3</td>
                                <td>Website Manajemen</td>
                                <td>3</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <h3>Profil Dosen</h3>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4">
                              <div class="card h-100">
                                <img src="{{ asset('homepages/images/gallery/joe_doe_profile.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Joe Doe</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                              <div class="card h-100">
                                <img src="{{ asset('homepages/images/gallery/pic1.jpg') }}"  class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Jurica</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                              <div class="card h-100">
                                <img src="{{ asset('homepages/images/gallery/joe_doe_profile.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Robert</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
@endsection