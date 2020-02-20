<div class="card mb-3">
  <img height="350px" src="https://wallpaperaccess.com/full/1771974.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find all the informations about students in the system</p>
    
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->lastName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
        
        <a href="{{ url('/edit/' . $student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

  </div>
</div>



