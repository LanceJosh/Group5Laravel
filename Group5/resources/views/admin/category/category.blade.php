<x-app-layout>
  <style>
    footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #0099ff;
      color: white;
      text-align: center;
      padding: 10px 0;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
  </style>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Jobs
          </h2>
        </x-slot>

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="col-md-12">
              <div class="card">

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Job Name</th>
                      <th scope="col">User ID</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp

                    @foreach ($categories as $category)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$category->category_name}}</td>
                      <td>{{$category->user_id}}</td>
                      <td>{{$category->created_at}}</td>

                      <td>
                        <a href="{{url('category/edit/'. $category->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{url('category/delete/'. $category->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="col-md-4">
                <form action="{{ route('categories.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="category_name">Add Job</label>
                    <input type="text" class="form-control" name="category_name">
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>


              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0099ff" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,138.7C384,160,480,192,576,197.3C672,203,768,181,864,154.7C960,128,1056,96,1152,122.7C1248,149,1344,235,1392,277.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <footer>
      <div class="footer-content">
        <p>© 2023 HireLab&Co. | All rights reserved.</p>
      </div>
    </footer>
</x-app-layout>