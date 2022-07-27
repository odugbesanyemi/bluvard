 <?php 
 session_start();
 if (isset($_SESSION['logged_in'])){
     // redirect to index.php
 } else{
     header('location:auth.php');
 }
 include('includes/adminheader.php');
 
 ?>
 <!-- Main content -->

 <div class="h-screen flex-grow-1 overflow-y-lg-auto">
     <!-- Header -->
     <header class="bg-surface-primary border-bottom pb-4 pt-6">
         <div class="container-fluid">
             <div class="mb-npx">
                 <div class="row align-items-center">
                     <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                         <!-- Title -->
                         <h1 class="h2 mb-0 ls-tight">Add Author</h1>
                     </div>
                     <!-- Actions -->
                 </div>
                 <!-- Nav -->
                 <!-- <ul class="nav nav-tabs mt-4 overflow-x border-0">
                     <li class="nav-item ">
                         <a href="#" class="nav-link active">All files</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link font-regular">Shared</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link font-regular">File requests</a>
                     </li>
                 </ul> -->
             </div>
         </div>
     </header>
     <!-- Main -->
     <main class="py-6 bg-surface-secondary">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-xl-7 mx-auto">
                     <!-- Profile picture -->
                     <div class="card shadow border-0 mt-4 mb-10">
                         <div class="card-body">
                             <div class="d-flex align-items-center">
                                 <div>
                                     <div class="d-flex align-items-center">
                                         <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                                             <img alt="..."
                                                 src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80">
                                         </a>
                                         <div class="ms-4">
                                             <span class="h4 d-block mb-0">Julianne Moore</span>
                                             <a href="#" class="text-sm font-semibold text-muted">View Profile</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="ms-auto">
                                     <button type="button" class="btn btn-sm btn-neutral">Upload</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Form -->
                     <div class="mb-5">
                         <h5 class="mb-0">Contact Information</h5>
                     </div>
                     <form class="mb-6" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                         <div class="row mb-5">
                             <div class="col-md-6">
                                 <div class="">
                                     <label class="form-label" for="first_name">First name</label>
                                     <input type="text" class="form-control" id="first_name">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="">
                                     <label class="form-label" for="last_name">Last name</label>
                                     <input type="text" class="form-control" id="last_name">
                                 </div>
                             </div>
                         </div>
                         <div class="row g-5">
                             <div class="col-md-6">
                                 <div class="">
                                     <label class="form-label" for="email">Email</label>
                                     <input type="email" class="form-control" id="email">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="">
                                     <label class="form-label" for="phone_number">Phone number</label>
                                     <input type="tel" class="form-control" id="phone_number">
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="">
                                     <label class="form-label" for="address">Address</label>
                                     <input type="text" class="form-control" id="address">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="">
                                     <label class="form-label" for="city">City</label>
                                     <input type="text" class="form-control" id="city">
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="">
                                     <label class="form-label" for="country">Country</label>
                                     <select class="form-select" id="country" placeholder="Your email"
                                         aria-label="Default select example">
                                         <option selected>Country</option>
                                         <option>select country</option>
                                         <option value="AF">Afghanistan</option>
                                         <option value="AX">Aland Islands</option>
                                         <option value="AL">Albania</option>
                                         <option value="DZ">Algeria</option>
                                         <option value="AS">American Samoa</option>
                                         <option value="AD">Andorra</option>
                                         <option value="AO">Angola</option>
                                         <option value="AI">Anguilla</option>
                                         <option value="AQ">Antarctica</option>
                                         <option value="AG">Antigua and Barbuda</option>
                                         <option value="AR">Argentina</option>
                                         <option value="AM">Armenia</option>
                                         <option value="AW">Aruba</option>
                                         <option value="AU">Australia</option>
                                         <option value="AT">Austria</option>
                                         <option value="AZ">Azerbaijan</option>
                                         <option value="BS">Bahamas</option>
                                         <option value="BH">Bahrain</option>
                                         <option value="BD">Bangladesh</option>
                                         <option value="BB">Barbados</option>
                                         <option value="BY">Belarus</option>
                                         <option value="BE">Belgium</option>
                                         <option value="BZ">Belize</option>
                                         <option value="BJ">Benin</option>
                                         <option value="BM">Bermuda</option>
                                         <option value="BT">Bhutan</option>
                                         <option value="BO">Bolivia</option>
                                         <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                         <option value="BA">Bosnia and Herzegovina</option>
                                         <option value="BW">Botswana</option>
                                         <option value="BV">Bouvet Island</option>
                                         <option value="BR">Brazil</option>
                                         <option value="IO">British Indian Ocean Territory</option>
                                         <option value="BN">Brunei Darussalam</option>
                                         <option value="BG">Bulgaria</option>
                                         <option value="BF">Burkina Faso</option>
                                         <option value="BI">Burundi</option>
                                         <option value="KH">Cambodia</option>
                                         <option value="CM">Cameroon</option>
                                         <option value="CA">Canada</option>
                                         <option value="CV">Cape Verde</option>
                                         <option value="KY">Cayman Islands</option>
                                         <option value="CF">Central African Republic</option>
                                         <option value="TD">Chad</option>
                                         <option value="CL">Chile</option>
                                         <option value="CN">China</option>
                                         <option value="CX">Christmas Island</option>
                                         <option value="CC">Cocos (Keeling) Islands</option>
                                         <option value="CO">Colombia</option>
                                         <option value="KM">Comoros</option>
                                         <option value="CG">Congo</option>
                                         <option value="CD">Congo, Democratic Republic of the Congo</option>
                                         <option value="CK">Cook Islands</option>
                                         <option value="CR">Costa Rica</option>
                                         <option value="CI">Cote D'Ivoire</option>
                                         <option value="HR">Croatia</option>
                                         <option value="CU">Cuba</option>
                                         <option value="CW">Curacao</option>
                                         <option value="CY">Cyprus</option>
                                         <option value="CZ">Czech Republic</option>
                                         <option value="DK">Denmark</option>
                                         <option value="DJ">Djibouti</option>
                                         <option value="DM">Dominica</option>
                                         <option value="DO">Dominican Republic</option>
                                         <option value="EC">Ecuador</option>
                                         <option value="EG">Egypt</option>
                                         <option value="SV">El Salvador</option>
                                         <option value="GQ">Equatorial Guinea</option>
                                         <option value="ER">Eritrea</option>
                                         <option value="EE">Estonia</option>
                                         <option value="ET">Ethiopia</option>
                                         <option value="FK">Falkland Islands (Malvinas)</option>
                                         <option value="FO">Faroe Islands</option>
                                         <option value="FJ">Fiji</option>
                                         <option value="FI">Finland</option>
                                         <option value="FR">France</option>
                                         <option value="GF">French Guiana</option>
                                         <option value="PF">French Polynesia</option>
                                         <option value="TF">French Southern Territories</option>
                                         <option value="GA">Gabon</option>
                                         <option value="GM">Gambia</option>
                                         <option value="GE">Georgia</option>
                                         <option value="DE">Germany</option>
                                         <option value="GH">Ghana</option>
                                         <option value="GI">Gibraltar</option>
                                         <option value="GR">Greece</option>
                                         <option value="GL">Greenland</option>
                                         <option value="GD">Grenada</option>
                                         <option value="GP">Guadeloupe</option>
                                         <option value="GU">Guam</option>
                                         <option value="GT">Guatemala</option>
                                         <option value="GG">Guernsey</option>
                                         <option value="GN">Guinea</option>
                                         <option value="GW">Guinea-Bissau</option>
                                         <option value="GY">Guyana</option>
                                         <option value="HT">Haiti</option>
                                         <option value="HM">Heard Island and Mcdonald Islands</option>
                                         <option value="VA">Holy See (Vatican City State)</option>
                                         <option value="HN">Honduras</option>
                                         <option value="HK">Hong Kong</option>
                                         <option value="HU">Hungary</option>
                                         <option value="IS">Iceland</option>
                                         <option value="IN">India</option>
                                         <option value="ID">Indonesia</option>
                                         <option value="IR">Iran, Islamic Republic of</option>
                                         <option value="IQ">Iraq</option>
                                         <option value="IE">Ireland</option>
                                         <option value="IM">Isle of Man</option>
                                         <option value="IL">Israel</option>
                                         <option value="IT">Italy</option>
                                         <option value="JM">Jamaica</option>
                                         <option value="JP">Japan</option>
                                         <option value="JE">Jersey</option>
                                         <option value="JO">Jordan</option>
                                         <option value="KZ">Kazakhstan</option>
                                         <option value="KE">Kenya</option>
                                         <option value="KI">Kiribati</option>
                                         <option value="KP">Korea, Democratic People's Republic of</option>
                                         <option value="KR">Korea, Republic of</option>
                                         <option value="XK">Kosovo</option>
                                         <option value="KW">Kuwait</option>
                                         <option value="KG">Kyrgyzstan</option>
                                         <option value="LA">Lao People's Democratic Republic</option>
                                         <option value="LV">Latvia</option>
                                         <option value="LB">Lebanon</option>
                                         <option value="LS">Lesotho</option>
                                         <option value="LR">Liberia</option>
                                         <option value="LY">Libyan Arab Jamahiriya</option>
                                         <option value="LI">Liechtenstein</option>
                                         <option value="LT">Lithuania</option>
                                         <option value="LU">Luxembourg</option>
                                         <option value="MO">Macao</option>
                                         <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                         <option value="MG">Madagascar</option>
                                         <option value="MW">Malawi</option>
                                         <option value="MY">Malaysia</option>
                                         <option value="MV">Maldives</option>
                                         <option value="ML">Mali</option>
                                         <option value="MT">Malta</option>
                                         <option value="MH">Marshall Islands</option>
                                         <option value="MQ">Martinique</option>
                                         <option value="MR">Mauritania</option>
                                         <option value="MU">Mauritius</option>
                                         <option value="YT">Mayotte</option>
                                         <option value="MX">Mexico</option>
                                         <option value="FM">Micronesia, Federated States of</option>
                                         <option value="MD">Moldova, Republic of</option>
                                         <option value="MC">Monaco</option>
                                         <option value="MN">Mongolia</option>
                                         <option value="ME">Montenegro</option>
                                         <option value="MS">Montserrat</option>
                                         <option value="MA">Morocco</option>
                                         <option value="MZ">Mozambique</option>
                                         <option value="MM">Myanmar</option>
                                         <option value="NA">Namibia</option>
                                         <option value="NR">Nauru</option>
                                         <option value="NP">Nepal</option>
                                         <option value="NL">Netherlands</option>
                                         <option value="AN">Netherlands Antilles</option>
                                         <option value="NC">New Caledonia</option>
                                         <option value="NZ">New Zealand</option>
                                         <option value="NI">Nicaragua</option>
                                         <option value="NE">Niger</option>
                                         <option value="NG">Nigeria</option>
                                         <option value="NU">Niue</option>
                                         <option value="NF">Norfolk Island</option>
                                         <option value="MP">Northern Mariana Islands</option>
                                         <option value="NO">Norway</option>
                                         <option value="OM">Oman</option>
                                         <option value="PK">Pakistan</option>
                                         <option value="PW">Palau</option>
                                         <option value="PS">Palestinian Territory, Occupied</option>
                                         <option value="PA">Panama</option>
                                         <option value="PG">Papua New Guinea</option>
                                         <option value="PY">Paraguay</option>
                                         <option value="PE">Peru</option>
                                         <option value="PH">Philippines</option>
                                         <option value="PN">Pitcairn</option>
                                         <option value="PL">Poland</option>
                                         <option value="PT">Portugal</option>
                                         <option value="PR">Puerto Rico</option>
                                         <option value="QA">Qatar</option>
                                         <option value="RE">Reunion</option>
                                         <option value="RO">Romania</option>
                                         <option value="RU">Russian Federation</option>
                                         <option value="RW">Rwanda</option>
                                         <option value="BL">Saint Barthelemy</option>
                                         <option value="SH">Saint Helena</option>
                                         <option value="KN">Saint Kitts and Nevis</option>
                                         <option value="LC">Saint Lucia</option>
                                         <option value="MF">Saint Martin</option>
                                         <option value="PM">Saint Pierre and Miquelon</option>
                                         <option value="VC">Saint Vincent and the Grenadines</option>
                                         <option value="WS">Samoa</option>
                                         <option value="SM">San Marino</option>
                                         <option value="ST">Sao Tome and Principe</option>
                                         <option value="SA">Saudi Arabia</option>
                                         <option value="SN">Senegal</option>
                                         <option value="RS">Serbia</option>
                                         <option value="CS">Serbia and Montenegro</option>
                                         <option value="SC">Seychelles</option>
                                         <option value="SL">Sierra Leone</option>
                                         <option value="SG">Singapore</option>
                                         <option value="SX">Sint Maarten</option>
                                         <option value="SK">Slovakia</option>
                                         <option value="SI">Slovenia</option>
                                         <option value="SB">Solomon Islands</option>
                                         <option value="SO">Somalia</option>
                                         <option value="ZA">South Africa</option>
                                         <option value="GS">South Georgia and the South Sandwich Islands</option>
                                         <option value="SS">South Sudan</option>
                                         <option value="ES">Spain</option>
                                         <option value="LK">Sri Lanka</option>
                                         <option value="SD">Sudan</option>
                                         <option value="SR">Suriname</option>
                                         <option value="SJ">Svalbard and Jan Mayen</option>
                                         <option value="SZ">Swaziland</option>
                                         <option value="SE">Sweden</option>
                                         <option value="CH">Switzerland</option>
                                         <option value="SY">Syrian Arab Republic</option>
                                         <option value="TW">Taiwan, Province of China</option>
                                         <option value="TJ">Tajikistan</option>
                                         <option value="TZ">Tanzania, United Republic of</option>
                                         <option value="TH">Thailand</option>
                                         <option value="TL">Timor-Leste</option>
                                         <option value="TG">Togo</option>
                                         <option value="TK">Tokelau</option>
                                         <option value="TO">Tonga</option>
                                         <option value="TT">Trinidad and Tobago</option>
                                         <option value="TN">Tunisia</option>
                                         <option value="TR">Turkey</option>
                                         <option value="TM">Turkmenistan</option>
                                         <option value="TC">Turks and Caicos Islands</option>
                                         <option value="TV">Tuvalu</option>
                                         <option value="UG">Uganda</option>
                                         <option value="UA">Ukraine</option>
                                         <option value="AE">United Arab Emirates</option>
                                         <option value="GB">United Kingdom</option>
                                         <option value="US">United States</option>
                                         <option value="UM">United States Minor Outlying Islands</option>
                                         <option value="UY">Uruguay</option>
                                         <option value="UZ">Uzbekistan</option>
                                         <option value="VU">Vanuatu</option>
                                         <option value="VE">Venezuela</option>
                                         <option value="VN">Viet Nam</option>
                                         <option value="VG">Virgin Islands, British</option>
                                         <option value="VI">Virgin Islands, U.s.</option>
                                         <option value="WF">Wallis and Futuna</option>
                                         <option value="EH">Western Sahara</option>
                                         <option value="YE">Yemen</option>
                                         <option value="ZM">Zambia</option>
                                         <option value="ZW">Zimbabwe</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-2">
                                 <div class="">
                                     <label class="form-label" for="zip">ZIP</label>
                                     <input type="tel" class="form-control" id="zip">
                                 </div>
                             </div>
                         </div>
                         <div class="text-end mt-5">
                             <button type="button" class="btn btn-sm btn-neutral me-2" name="cancelBtn">Cancel</button>
                             <button type="submit" class="btn btn-sm btn-primary" name="saveBtn">Save</button>
                         </div>
                     </form>
                     <hr class="my-10" />
                     <!-- Individual switch cards -->
                 </div>
             </div>
         </div>
     </main>
 </div>

 <?php include('includes/adminfooter.php') ?>