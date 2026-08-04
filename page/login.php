<div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($_GET['error'])): ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php
                                                switch($_GET['error']) {
                                                    case 'invalid_password':
                                                        echo "Invalid password.";
                                                        break;
                                                    default:
                                                        echo "Login failed.";
                                                }
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                        <form action="index.php?page=proseslogin" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsername" type="text" placeholder="Username" name="username" />
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php?page=register">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>