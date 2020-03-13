
<!-- Intro Section -->
<section id="intro">


    <div class="container">
        <div class="row">
            <!-- Left section -->
            <div class="col-10 col-md-7 mx-auto intro-text">
                <h1>Luxury cars at less</h1>
                <div class="logo about-logo">
                    <img src="assets/img/main_logo.png" alt="" />
                </div>
                <div class="lsection-text my-2 p-3">
                    <p>Love the road</p>
                    <p>Make your trip enjoyable</p>
                    <p>Get a car for rent here</p>
                </div>
            </div>
            <!-- End Left section -->



            <!-- Right section -->
            <div class="col-11 mx-auto col-md-5 form-col">
                <?php Messages::display() ?>
                <form method="post" action="<? $_SERVER['PHP_SELF'];?>">
                    <!-- Car Company -->
                    <div class="form-group">
                        <label for="car-company">Choose car manufactor:</label>
                        <select required name="carcompany_id" class="form-control" id="car-company" onchange="onCarCompanyClicked(this.value)">
                            <option value="" disabled selected style="display:none;">Choose car company</option>
                            <?php foreach($carCompanies as $company) :?>
                                <option value="<?= $company['company_id'] ?>"><?= $company['company_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- End Car Company -->

                    <!-- Car Model -->
                    <div class="form-group">
                        <label for="car-model">Choose car model:</label>
                        <select required name="model_name" class="form-control" id="car_model" >
                        </select>
                    </div>
                    <!-- End Car Model -->

                    <!-- Date pickup-->
                    <div class="form-row mb-3" id="date">
                        <div class="col ">
                            <label for="from_date">Pick-up:</label>
                            <input required
                                name="from_date"
                                onchange="dateHandler(this.value)"
                                id="from-date"
                                type="date"
                                class="form-control"
                                placeholder="Pick-up date"
                            />
                        </div>

                        <div class="col">
                            <label for="name-lname">Drop-off:</label>
                            <input required
                                name="to_date"
                                id="to-date"
                                type="date"
                                class="form-control"
                                placeholder="Drop-off date"
                            />
                        </div>
                    </div>
                    <!-- End Date pickup -->

                    <!-- Name and Last Name -->
                    <label for="name-lname">Full name:</label>
                    <div class="form-row" id="name-lname">
                        <div class="col">
                            <input required
                                name="fname"
                                type="text"
                                class="form-control"
                                placeholder="First name"
                            />
                        </div>
                        <div class="col">
                            <input required
                                name="lname"
                                type="text"
                                class="form-control"
                                placeholder="Last name"
                            />
                        </div>
                    </div>
                    <!-- End Name and Last Name -->
                    <!-- Age -->
                    <div class="form-group my-3">
                        <label for="age">Your age(from 16 to 99 acceptable):</label>
                        <input required
                            name="age"
                            id="age"
                            type="number"
                            min="16"
                            max="99"
                            class="form-control"
                            placeholder="Age"
                        />
                    </div>
                    <!-- End Name and Last Name -->

                    <!-- Contacts -->
                    <label for="name-lname " class="my-2">Contacts:</label>
                    <div class="form-row" id="email">
                        <div class="col">
                            <input required
                                name="email"
                                type="email"
                                class="form-control"
                                placeholder="E-mail"
                            />
                        </div>
                        <div class="col">
                            <input required
                                name="phone_number"
                                type="text"
                                class="form-control"
                                placeholder="Phone number"
                            />
                        </div>
                    </div>
                    <!-- End Contacts -->

                    <!-- Check -->
                    <div class="form-group form-check my-2">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="driver-check"
                            onchange=''/>
                        <label class="form-check-label" for="driver-check">I'm not a driver</label>
                    </div>
                    <!-- End Check -->

                    <!-- Other driver hidden by default -->
                    <div id="other-driver">
                        <label for="o_name" class="my-2">Driver's info:</label>
                        <div class="form-row" id="o_name">
                            <div class="col">
                                <input
                                    name="o_name"
                                    type="text"
                                    class="form-control"
                                    placeholder="Name"
                                />
                            </div>
                            <div class="col">
                                <input
                                    name="o_number"
                                    type="number"
                                    class="form-control"
                                    placeholder="Phone number"
                                />
                            </div>
                        </div>
                        <!-- Other driver hidden by default -->
                    </div>
                    <button name="submit" type="submit" class="btn" value="submit">Submit</button>
                </form>
            </div>
            <!-- End of Right section -->
        </div>
    </div>
</section>
<!-- End Intro Section -->
