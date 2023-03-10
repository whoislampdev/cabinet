@extends('./admin.base')

@section('main')
 <div class="modal-body" style="
                    background-color: rgb(250, 250, 250); ">
                    <form action="{{ route('personnals.store') }}" method="POST" style=" color: rgb(5, 5, 5);" enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="id" />
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" name="name"
                            placeholder="name">
                        <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="exampleFormControlInput1" name="prenom"
                            placeholder="prenom">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" name="email"
                            placeholder="name@example.com">
                            <br>
                            <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                        <input type="tel" class="form-control @error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone"
                            placeholder="00 000 00 00">
                            <br>
                        <label for="exampleFormControlInput1" class="form-label">Role</label>
                        <select class="form-select @error('role') is-invalid @enderror select-wrapper" name="role"  aria-label="Default select example">
                            <option value="admin">Admin</option>
                            <option value="pharmacie">Pharmacien</option>
                             <option value="caisse">Agents</option>
                        </select>
                        <br>
                        {{-- <label for="exampleFormControlInput1" class="form-label">Date Naissance</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror " id="" name="date"
                            placeholder="date de naissance"> --}}
                            <label for="exampleFormControlInput1" class="form-label">Fonction</label>
                            <input type="text" class="form-control @error('diplome') is-invalid @enderror" id="exampleFormControlInput1" name="fonction"
                            placeholder="fonction">
                              <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="tel" class="form-control @error('adresse') is-invalid @enderror" id="exampleFormControlInput1" name="adresse"
                            placeholder="nittou thies">
                            <br>
                        
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input class="form-control" type="password" class="@error('password') is-invalid @enderror" id="formFile" name="password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </form>


                </div>

    @endsection
