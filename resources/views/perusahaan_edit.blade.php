<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">
</br>
<h1>Edit Data Perusahaan</h1>
</br>
<form method="post" action="{{url('companyform')}}" id="update_perusahaan">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$perusahaan->id}}">
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namaPerusahaan"id="inputNama" value="{{$perusahaan->namap}}" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="emailPerusahaan" id="inputEmail" value="{{$perusahaan->emailp}}"placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputWebsite3" class="col-sm-2 col-form-label">Website</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="websitePerusahaan" id="inputWebsite" value="{{$perusahaan->websitep}}"placeholder="Website">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">File logo</label>
    <input type="file" class="form-control-file" name="logoPerusahaan" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
</br>
</div>
</html>