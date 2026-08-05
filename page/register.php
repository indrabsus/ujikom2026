<div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="index.php?page=prosesregister" method="POST">
                                            
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Masukan nama lengkap" name="nama_lengkap" />
                                                        <label for="inputFirstName">Nama Lengkap</label>
                                                    </div>
                                         
                                            <div class="form-floating mb-3 mt-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Masukan username" name="username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                         
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Masukan password" name="password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                              
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php?page=login">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>