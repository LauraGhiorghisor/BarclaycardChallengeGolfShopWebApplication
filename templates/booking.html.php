
                        <form class="container w-50 max-auto h-100 py-5">
          
                            <div class="form-row">
                              
                                <div class="col">
                                    <div class="form-group"><label for="email"><strong>Email
                                                Address</strong></label><input class="form-control" type="email"
                                            placeholder="ana" name="email"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="first_name"><strong>First
                                                Name</strong></label><input class="form-control" type="text"
                                            placeholder="John" name="first_name"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label for="last_name"><strong>Last
                                                Name</strong></label><input class="form-control" type="text"
                                            placeholder="Doe" name="last_name"></div>
                                </div>
                            </div>
                            <div class="form-group"><label for="last_name" class="form-control"><strong>Date:</strong></label>
                            <?php
                                require 'datepick.php';
                            ?>
                            <form action="checkbox-form.php" method="post">
                                Do you require a buggy (£15 charge)?
                            <input type="checkbox" name="formBuggy" value="Yes" />
                            </form>
                            <div class="form-group"><button class="btn btn-profile btn-sm px-4 mt-2" type="submit"> Book
                                    </button></div>
        </div>







  
