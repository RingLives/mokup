<?php
  include("layouts/master.php");
  include("layouts/preloader.php");
  include("layouts/navbar.php");
  include("layouts/sidebar.php");
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Settings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="accordion-content clearfix">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="accordion-box">
                                    <div class="panel-group" id="SettingTabs">
                                        <div class="panel panel-default">
                                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" >
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="nav-icon fas fa-chart-pie"></i>
                                                        <p>General Settings<i class="right fas fa-angle-left"></i></p>
                                                    </a>

                                                    <ul class="nav nav-treeview" style="display: none;">
                                                        <li class="nav-item active">
                                                            <a href="#customize_admin" data-toggle="tab" class="nav-link">Customize Admin</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#maintenance" data-toggle="tab"
                                                                aria-expanded="true" class="nav-link">Maintenance</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#store" data-toggle="tab" aria-expanded="true" class="nav-link">Store</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                             <div class="col-lg-9 col-md-8">
                                <div class="accordion-box-content">
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane fade" id="customize_admin">
                                            <h3 class="tab-content-title">Customize Admin</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                    <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="maintenance">
                                            <h3 class="tab-content-title">Maintenance</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="maintenance_mode"
                                                            class="col-md-3 control-label text-left">Maintenance
                                                            Mode</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="maintenance_mode"><input type="checkbox"
                                                                    name="maintenance_mode" class="" id="maintenance_mode"
                                                                    value="1"><label for="maintenance_mode">Put the
                                                                    application into maintenance mode</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in active" id="store">
                                            <h3 class="tab-content-title">Store</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="box-content clearfix">
                                                        <div class="form-group"><label for="translatable[store_name]"
                                                                class="col-md-3 control-label text-left">Store Name<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="translatable[store_name]"
                                                                    class="form-control " id="translatable[store_name]"
                                                                    value="Consumartbd" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="translatable[store_tagline]"
                                                                class="col-md-3 control-label text-left">Store
                                                                Tagline</label>
                                                            <div class="col-md-9"><input name="translatable[store_tagline]"
                                                                    class="form-control " id="translatable[store_tagline]"
                                                                    value="" rows="2" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_email"
                                                                class="col-md-3 control-label text-left">Store Email<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="store_email"
                                                                    class="form-control " id="store_email"
                                                                    value="admin@example.test" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_phone"
                                                                class="col-md-3 control-label text-left">Store Phone<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="store_phone"
                                                                    class="form-control " id="store_phone"
                                                                    value="017000000001" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_address_1"
                                                                class="col-md-3 control-label text-left">Store Address
                                                                1</label>
                                                            <div class="col-md-9"><input name="store_address_1"
                                                                    class="form-control " id="store_address_1" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_address_2"
                                                                class="col-md-3 control-label text-left">Store Address
                                                                2</label>
                                                            <div class="col-md-9"><input name="store_address_2"
                                                                    class="form-control " id="store_address_2" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_city"
                                                                class="col-md-3 control-label text-left">Store City</label>
                                                            <div class="col-md-9"><input name="store_city"
                                                                    class="form-control " id="store_city" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="store_country"
                                                                class="col-md-3 control-label text-left">Store
                                                                Country</label>
                                                            <div class="col-md-9"><select name="store_country"
                                                                    class="form-control custom-select-black "
                                                                    id="store_country">
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AC">Ascension Island</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD" selected="">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="VG">British Virgin Islands</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="IC">Canary Islands</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="BQ">Caribbean Netherlands</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="EA">Ceuta &amp; Melilla</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo - Brazzaville</option>
                                                                    <option value="CD">Congo - Kinshasa</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Côte d’Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czechia</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DG">Diego Garcia</option>
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
                                                                    <option value="EZ">Eurozone</option>
                                                                    <option value="FK">Falkland Islands</option>
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
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong SAR China</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
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
                                                                    <option value="XK">Kosovo</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macau SAR China</option>
                                                                    <option value="MK">Macedonia</option>
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
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar (Burma)</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestinian Territories</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn Islands</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">São Tomé &amp; Príncipe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SX">Sint Maarten</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia &amp; South Sandwich
                                                                        Islands</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="BL">St. Barthélemy</option>
                                                                    <option value="SH">St. Helena</option>
                                                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                                                    <option value="LC">St. Lucia</option>
                                                                    <option value="MF">St. Martin</option>
                                                                    <option value="PM">St. Pierre &amp; Miquelon</option>
                                                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                                    <option value="TA">Tristan da Cunha</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks &amp; Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UM">U.S. Outlying Islands</option>
                                                                    <option value="VI">U.S. Virgin Islands</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="UN">United Nations</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican City</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="WF">Wallis &amp; Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select></div>
                                                        </div>
    
                                                        <div class="store-state input hide">
                                                            <div class="form-group"><label for="store_state"
                                                                    class="col-md-3 control-label text-left">Store
                                                                    State</label>
                                                                <div class="col-md-9"><input name="store_state"
                                                                        class="form-control " id="store_state" value=""
                                                                        type="text"></div>
                                                            </div>
                                                        </div>
    
                                                        <div class="store-state select">
                                                            <div class="form-group"><label for="store_state"
                                                                    class="col-md-3 control-label text-left">Store
                                                                    State</label>
                                                                <div class="col-md-9"><select name="store_state"
                                                                        class="form-control custom-select-black "
                                                                        id="store_state">
                                                                        <option value="BAG">Bagerhat</option>
                                                                        <option value="BAN">Bandarban</option>
                                                                        <option value="BAR">Barguna</option>
                                                                        <option value="BARI">Barisal</option>
                                                                        <option value="BHO">Bhola</option>
                                                                        <option value="BOG">Bogra</option>
                                                                        <option value="BRA">Brahmanbaria</option>
                                                                        <option value="CHA">Chandpur</option>
                                                                        <option value="CHI">Chittagong</option>
                                                                        <option value="CHU">Chuadanga</option>
                                                                        <option value="COM">Comilla</option>
                                                                        <option value="COX">Cox's Bazar</option>
                                                                        <option value="DHA">Dhaka</option>
                                                                        <option value="DIN">Dinajpur</option>
                                                                        <option value="FAR">Faridpur </option>
                                                                        <option value="FEN">Feni</option>
                                                                        <option value="GAI">Gaibandha</option>
                                                                        <option value="GAZI">Gazipur</option>
                                                                        <option value="GOP">Gopalganj</option>
                                                                        <option value="HAB">Habiganj</option>
                                                                        <option value="JAM">Jamalpur</option>
                                                                        <option value="JES">Jessore</option>
                                                                        <option value="JHA">Jhalokati</option>
                                                                        <option value="JHE">Jhenaidah</option>
                                                                        <option value="JOY">Joypurhat</option>
                                                                        <option value="KHA">Khagrachhari</option>
                                                                        <option value="KHU">Khulna</option>
                                                                        <option value="KIS">Kishoreganj</option>
                                                                        <option value="KUR">Kurigram</option>
                                                                        <option value="KUS">Kushtia</option>
                                                                        <option value="LAK">Lakshmipur</option>
                                                                        <option value="LAL">Lalmonirhat</option>
                                                                        <option value="MAD">Madaripur</option>
                                                                        <option value="MAG">Magura</option>
                                                                        <option value="MAN">Manikganj </option>
                                                                        <option value="MEH">Meherpur</option>
                                                                        <option value="MOU">Moulvibazar</option>
                                                                        <option value="MUN">Munshiganj</option>
                                                                        <option value="MYM">Mymensingh</option>
                                                                        <option value="NAO">Naogaon</option>
                                                                        <option value="NAR">Narail</option>
                                                                        <option value="NARG">Narayanganj</option>
                                                                        <option value="NARD">Narsingdi</option>
                                                                        <option value="NAT">Natore</option>
                                                                        <option value="NAW">Nawabganj</option>
                                                                        <option value="NET">Netrakona</option>
                                                                        <option value="NIL">Nilphamari</option>
                                                                        <option value="NOA">Noakhali</option>
                                                                        <option value="PAB">Pabna</option>
                                                                        <option value="PAN">Panchagarh</option>
                                                                        <option value="PAT">Patuakhali</option>
                                                                        <option value="PIR">Pirojpur</option>
                                                                        <option value="RAJB">Rajbari</option>
                                                                        <option value="RAJ">Rajshahi</option>
                                                                        <option value="RAN">Rangamati</option>
                                                                        <option value="RANP">Rangpur</option>
                                                                        <option value="SAT">Satkhira</option>
                                                                        <option value="SHA">Shariatpur</option>
                                                                        <option value="SHE">Sherpur</option>
                                                                        <option value="SIR">Sirajganj</option>
                                                                        <option value="SUN">Sunamganj</option>
                                                                        <option value="SYL">Sylhet</option>
                                                                        <option value="TAN">Tangail</option>
                                                                        <option value="THA">Thakurgaon</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
    
                                                        <div class="form-group"><label for="store_zip"
                                                                class="col-md-3 control-label text-left">Store Zip</label>
                                                            <div class="col-md-9"><input name="store_zip"
                                                                    class="form-control " id="store_zip" value=""
                                                                    type="text"></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="box-content clearfix">
                                                        <h4 class="section-title">Privacy Settings</h4>
    
                                                        <div class="form-group"><label for="store_phone_hide"
                                                                class="col-md-3 control-label text-left">Hide Store
                                                                Phone</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="store_phone_hide"><input type="checkbox"
                                                                        name="store_phone_hide" class=""
                                                                        id="store_phone_hide" value="1"><label
                                                                        for="store_phone_hide">Hide store phone from the
                                                                        storefront</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="store_email_hide"
                                                                class="col-md-3 control-label text-left">Hide Store
                                                                Email</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="store_email_hide"><input type="checkbox"
                                                                        name="store_email_hide" class=""
                                                                        id="store_email_hide" value="1"><label
                                                                        for="store_email_hide">Hide store email from the
                                                                        storefront</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="currency">
                                            <h3 class="tab-content-title">Currency</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="supported_currencies[]-selectized"
                                                            class="col-md-3 control-label text-left">Supported
                                                            Currencies<span class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><select name="supported_currencies[]"
                                                                class="selectize prevent-creation selectized"
                                                                id="supported_currencies[]" multiple="multiple"
                                                                tabindex="-1" style="display: none;">
                                                                <option value="BDT" selected="selected">Bangladeshi Taka
                                                                </option>
                                                            </select>
                                                            <div
                                                                class="selectize-control selectize prevent-creation multi plugin-remove_button">
                                                                <div
                                                                    class="selectize-input items not-full has-options has-items">
                                                                    <div class="item" data-value="BDT">Bangladeshi Taka<a
                                                                            href="javascript:void(0)" class="remove"
                                                                            tabindex="-1">×</a></div><input
                                                                        type="select-multiple" autocomplete="off"
                                                                        tabindex="" id="supported_currencies[]-selectized"
                                                                        style="width: 4px;">
                                                                </div>
                                                                <div class="selectize-dropdown multi selectize prevent-creation plugin-remove_button"
                                                                    style="display: none;">
                                                                    <div class="selectize-dropdown-content"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="default_currency"
                                                            class="col-md-3 control-label text-left">Default Currency<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><select name="default_currency"
                                                                class="form-control custom-select-black "
                                                                id="default_currency">
                                                                <option value="AFN">Afghan Afghani</option>
                                                                <option value="ALL">Albanian Lek</option>
                                                                <option value="DZD">Algerian Dinar</option>
                                                                <option value="AOA">Angolan Kwanza</option>
                                                                <option value="ARS">Argentine Peso</option>
                                                                <option value="AMD">Armenian Dram</option>
                                                                <option value="AWG">Aruban Florin</option>
                                                                <option value="AUD">Australian Dollar</option>
                                                                <option value="AZN">Azerbaijani Manat</option>
                                                                <option value="BSD">Bahamian Dollar</option>
                                                                <option value="BHD">Bahraini Dinar</option>
                                                                <option value="BDT" selected="">Bangladeshi Taka</option>
                                                                <option value="BBD">Barbadian Dollar</option>
                                                                <option value="BYN">Belarusian Ruble</option>
                                                                <option value="BZD">Belize Dollar</option>
                                                                <option value="BMD">Bermudan Dollar</option>
                                                                <option value="BTN">Bhutanese Ngultrum</option>
                                                                <option value="BOB">Bolivian Boliviano</option>
                                                                <option value="BOV">Bolivian Mvdol</option>
                                                                <option value="BAM">Bosnia-Herzegovina Convertible Mark
                                                                </option>
                                                                <option value="BWP">Botswanan Pula</option>
                                                                <option value="BRL">Brazilian Real</option>
                                                                <option value="GBP">British Pound</option>
                                                                <option value="BND">Brunei Dollar</option>
                                                                <option value="BGN">Bulgarian Lev</option>
                                                                <option value="BIF">Burundian Franc</option>
                                                                <option value="XPF">CFP Franc</option>
                                                                <option value="KHR">Cambodian Riel</option>
                                                                <option value="CAD">Canadian Dollar</option>
                                                                <option value="CVE">Cape Verdean Escudo</option>
                                                                <option value="KYD">Cayman Islands Dollar</option>
                                                                <option value="XAF">Central African CFA Franc</option>
                                                                <option value="CLP">Chilean Peso</option>
                                                                <option value="CLF">Chilean Unit of Account (UF)</option>
                                                                <option value="CNY">Chinese Yuan</option>
                                                                <option value="COP">Colombian Peso</option>
                                                                <option value="COU">Colombian Real Value Unit</option>
                                                                <option value="KMF">Comorian Franc</option>
                                                                <option value="CDF">Congolese Franc</option>
                                                                <option value="CRC">Costa Rican Colón</option>
                                                                <option value="HRK">Croatian Kuna</option>
                                                                <option value="CUC">Cuban Convertible Peso</option>
                                                                <option value="CUP">Cuban Peso</option>
                                                                <option value="CZK">Czech Koruna</option>
                                                                <option value="DKK">Danish Krone</option>
                                                                <option value="DJF">Djiboutian Franc</option>
                                                                <option value="DOP">Dominican Peso</option>
                                                                <option value="XCD">East Caribbean Dollar</option>
                                                                <option value="EGP">Egyptian Pound</option>
                                                                <option value="ERN">Eritrean Nakfa</option>
                                                                <option value="ETB">Ethiopian Birr</option>
                                                                <option value="EUR">Euro</option>
                                                                <option value="FKP">Falkland Islands Pound</option>
                                                                <option value="FJD">Fijian Dollar</option>
                                                                <option value="GMD">Gambian Dalasi</option>
                                                                <option value="GEL">Georgian Lari</option>
                                                                <option value="GHS">Ghanaian Cedi</option>
                                                                <option value="GIP">Gibraltar Pound</option>
                                                                <option value="GTQ">Guatemalan Quetzal</option>
                                                                <option value="GNF">Guinean Franc</option>
                                                                <option value="GYD">Guyanaese Dollar</option>
                                                                <option value="HTG">Haitian Gourde</option>
                                                                <option value="HNL">Honduran Lempira</option>
                                                                <option value="HKD">Hong Kong Dollar</option>
                                                                <option value="HUF">Hungarian Forint</option>
                                                                <option value="ISK">Icelandic Króna</option>
                                                                <option value="INR">Indian Rupee</option>
                                                                <option value="IDR">Indonesian Rupiah</option>
                                                                <option value="IRR">Iranian Rial</option>
                                                                <option value="IQD">Iraqi Dinar</option>
                                                                <option value="ILS">Israeli New Shekel</option>
                                                                <option value="JMD">Jamaican Dollar</option>
                                                                <option value="JPY">Japanese Yen</option>
                                                                <option value="JOD">Jordanian Dinar</option>
                                                                <option value="KZT">Kazakhstani Tenge</option>
                                                                <option value="KES">Kenyan Shilling</option>
                                                                <option value="KWD">Kuwaiti Dinar</option>
                                                                <option value="KGS">Kyrgystani Som</option>
                                                                <option value="LAK">Laotian Kip</option>
                                                                <option value="LBP">Lebanese Pound</option>
                                                                <option value="LSL">Lesotho Loti</option>
                                                                <option value="LRD">Liberian Dollar</option>
                                                                <option value="LYD">Libyan Dinar</option>
                                                                <option value="MOP">Macanese Pataca</option>
                                                                <option value="MKD">Macedonian Denar</option>
                                                                <option value="MGA">Malagasy Ariary</option>
                                                                <option value="MWK">Malawian Kwacha</option>
                                                                <option value="MYR">Malaysian Ringgit</option>
                                                                <option value="MVR">Maldivian Rufiyaa</option>
                                                                <option value="MRO">Mauritanian Ouguiya</option>
                                                                <option value="MUR">Mauritian Rupee</option>
                                                                <option value="MXV">Mexican Investment Unit</option>
                                                                <option value="MXN">Mexican Peso</option>
                                                                <option value="MDL">Moldovan Leu</option>
                                                                <option value="MNT">Mongolian Tugrik</option>
                                                                <option value="MAD">Moroccan Dirham</option>
                                                                <option value="MZN">Mozambican Metical</option>
                                                                <option value="MMK">Myanmar Kyat</option>
                                                                <option value="NAD">Namibian Dollar</option>
                                                                <option value="NPR">Nepalese Rupee</option>
                                                                <option value="ANG">Netherlands Antillean Guilder</option>
                                                                <option value="TWD">New Taiwan Dollar</option>
                                                                <option value="NZD">New Zealand Dollar</option>
                                                                <option value="NIO">Nicaraguan Córdoba</option>
                                                                <option value="NGN">Nigerian Naira</option>
                                                                <option value="KPW">North Korean Won</option>
                                                                <option value="NOK">Norwegian Krone</option>
                                                                <option value="OMR">Omani Rial</option>
                                                                <option value="PKR">Pakistani Rupee</option>
                                                                <option value="PAB">Panamanian Balboa</option>
                                                                <option value="PGK">Papua New Guinean Kina</option>
                                                                <option value="PYG">Paraguayan Guarani</option>
                                                                <option value="PEN">Peruvian Sol</option>
                                                                <option value="PHP">Philippine Peso</option>
                                                                <option value="PLN">Polish Zloty</option>
                                                                <option value="QAR">Qatari Rial</option>
                                                                <option value="RON">Romanian Leu</option>
                                                                <option value="RUB">Russian Ruble</option>
                                                                <option value="RWF">Rwandan Franc</option>
                                                                <option value="SVC">Salvadoran Colón</option>
                                                                <option value="WST">Samoan Tala</option>
                                                                <option value="SAR">Saudi Riyal</option>
                                                                <option value="RSD">Serbian Dinar</option>
                                                                <option value="SCR">Seychellois Rupee</option>
                                                                <option value="SLL">Sierra Leonean Leone</option>
                                                                <option value="SGD">Singapore Dollar</option>
                                                                <option value="SBD">Solomon Islands Dollar</option>
                                                                <option value="SOS">Somali Shilling</option>
                                                                <option value="ZAR">South African Rand</option>
                                                                <option value="KRW">South Korean Won</option>
                                                                <option value="SSP">South Sudanese Pound</option>
                                                                <option value="LKR">Sri Lankan Rupee</option>
                                                                <option value="SHP">St. Helena Pound</option>
                                                                <option value="SDG">Sudanese Pound</option>
                                                                <option value="SRD">Surinamese Dollar</option>
                                                                <option value="SZL">Swazi Lilangeni</option>
                                                                <option value="SEK">Swedish Krona</option>
                                                                <option value="CHF">Swiss Franc</option>
                                                                <option value="SYP">Syrian Pound</option>
                                                                <option value="STD">São Tomé &amp; Príncipe Dobra</option>
                                                                <option value="TJS">Tajikistani Somoni</option>
                                                                <option value="TZS">Tanzanian Shilling</option>
                                                                <option value="THB">Thai Baht</option>
                                                                <option value="TOP">Tongan Paʻanga</option>
                                                                <option value="TTD">Trinidad &amp; Tobago Dollar</option>
                                                                <option value="TND">Tunisian Dinar</option>
                                                                <option value="TRY">Turkish Lira</option>
                                                                <option value="TMT">Turkmenistani Manat</option>
                                                                <option value="USD">US Dollar</option>
                                                                <option value="UGX">Ugandan Shilling</option>
                                                                <option value="UAH">Ukrainian Hryvnia</option>
                                                                <option value="AED">United Arab Emirates Dirham</option>
                                                                <option value="UYU">Uruguayan Peso</option>
                                                                <option value="UYI">Uruguayan Peso (Indexed Units)</option>
                                                                <option value="UZS">Uzbekistani Som</option>
                                                                <option value="VUV">Vanuatu Vatu</option>
                                                                <option value="VEF">Venezuelan Bolívar</option>
                                                                <option value="VND">Vietnamese Dong</option>
                                                                <option value="CHE">WIR Euro</option>
                                                                <option value="CHW">WIR Franc</option>
                                                                <option value="XOF">West African CFA Franc</option>
                                                                <option value="YER">Yemeni Rial</option>
                                                                <option value="ZMW">Zambian Kwacha</option>
                                                                <option value="ZWL">Zimbabwean Dollar</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="form-group"><label for="currency_rate_exchange_service"
                                                            class="col-md-3 control-label text-left">Exchange Rate
                                                            Service</label>
                                                        <div class="col-md-9"><select name="currency_rate_exchange_service"
                                                                class="form-control custom-select-black "
                                                                id="currency_rate_exchange_service">
                                                                <option value="">Select Service</option>
                                                                <option value="fixer">Fixer</option>
                                                                <option value="forge">Forge</option>
                                                                <option value="currency_data_feed">Currency Data Feed
                                                                </option>
                                                            </select></div>
                                                    </div>
    
                                                    <div class="currency-rate-exchange-service" id="-service">
                                                    </div>
                                                    <div class="currency-rate-exchange-service hide" id="fixer-service">
                                                        <div class="form-group"><label for="fixer_access_key"
                                                                class="col-md-3 control-label text-left">Fixer Access
                                                                key<span class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="fixer_access_key"
                                                                    class="form-control " id="fixer_access_key"
                                                                    value="12345678" type="password"></div>
                                                        </div>
                                                    </div>
                                                    <div class="currency-rate-exchange-service hide" id="forge-service">
                                                        <div class="form-group"><label for="forge_api_key"
                                                                class="col-md-3 control-label text-left">Forge API key<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="forge_api_key"
                                                                    class="form-control " id="forge_api_key" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                    <div class="currency-rate-exchange-service hide"
                                                        id="currency_data_feed-service">
                                                        <div class="form-group"><label for="currency_data_feed_api_key"
                                                                class="col-md-3 control-label text-left">Currency Data Feed
                                                                API Key<span class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="currency_data_feed_api_key"
                                                                    class="form-control " id="currency_data_feed_api_key"
                                                                    value="" type="password"></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="form-group"><label for="auto_refresh_currency_rates"
                                                            class="col-md-3 control-label text-left">Auto Refresh</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="auto_refresh_currency_rates"><input
                                                                    type="checkbox" name="auto_refresh_currency_rates"
                                                                    class="" id="auto_refresh_currency_rates" value="1"
                                                                    checked=""><label
                                                                    for="auto_refresh_currency_rates">Enable auto-refreshing
                                                                    currency rates</label></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="" id="auto-refresh-frequency-field">
                                                        <div class="form-group"><label
                                                                for="auto_refresh_currency_rate_frequency"
                                                                class="col-md-3 control-label text-left">Frequency<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><select
                                                                    name="auto_refresh_currency_rate_frequency"
                                                                    class="form-control custom-select-black "
                                                                    id="auto_refresh_currency_rate_frequency">
                                                                    <option value="daily">Daily</option>
                                                                    <option value="weekly" selected="">Weekly</option>
                                                                    <option value="monthly">Monthly</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="sms">
                                            <h3 class="tab-content-title">SMS</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="box-content clearfix">
                                                        <div class="form-group"><label for="sms_from"
                                                                class="col-md-3 control-label text-left">SMS From</label>
                                                            <div class="col-md-9"><input name="sms_from"
                                                                    class="form-control " id="sms_from" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="sms_service"
                                                                class="col-md-3 control-label text-left">SMS Service</label>
                                                            <div class="col-md-9"><select name="sms_service"
                                                                    class="form-control custom-select-black "
                                                                    id="sms_service">
                                                                    <option value="">Select Service</option>
                                                                    <option value="vonage">Vonage</option>
                                                                    <option value="twilio">Twilio</option>
                                                                </select></div>
                                                        </div>
    
                                                        <div class="sms-service hide" id="-service">
                                                        </div>
                                                        <div class="sms-service hide" id="vonage-service">
                                                            <div class="form-group"><label for="vonage_key"
                                                                    class="col-md-3 control-label text-left">API Key<span
                                                                        class="m-l-5 text-red">*</span></label>
                                                                <div class="col-md-9"><input name="vonage_key"
                                                                        class="form-control " id="vonage_key" value=""
                                                                        type="text"></div>
                                                            </div>
                                                            <div class="form-group"><label for="vonage_secret"
                                                                    class="col-md-3 control-label text-left">API Secret<span
                                                                        class="m-l-5 text-red">*</span></label>
                                                                <div class="col-md-9"><input name="vonage_secret"
                                                                        class="form-control " id="vonage_secret" value=""
                                                                        type="password"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sms-service hide" id="twilio-service">
                                                            <div class="form-group"><label for="twilio_sid"
                                                                    class="col-md-3 control-label text-left">Account
                                                                    SID<span class="m-l-5 text-red">*</span></label>
                                                                <div class="col-md-9"><input name="twilio_sid"
                                                                        class="form-control " id="twilio_sid" value=""
                                                                        type="text"></div>
                                                            </div>
                                                            <div class="form-group"><label for="twilio_token"
                                                                    class="col-md-3 control-label text-left">Auth Token<span
                                                                        class="m-l-5 text-red">*</span></label>
                                                                <div class="col-md-9"><input name="twilio_token"
                                                                        class="form-control " id="twilio_token" value=""
                                                                        type="password"></div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="box-content clearfix">
                                                        <h4 class="section-title">Customer Notification Settings</h4>
    
                                                        <div class="form-group"><label for="welcome_sms"
                                                                class="col-md-3 control-label text-left">Welcome SMS</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="welcome_sms"><input type="checkbox"
                                                                        name="welcome_sms" class="" id="welcome_sms"
                                                                        value="1"><label for="welcome_sms">Send welcome SMS
                                                                        after registration</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="box-content clearfix">
                                                        <h4 class="section-title">Order Notification Settings</h4>
    
                                                        <div class="form-group"><label for="new_order_admin_sms"
                                                                class="col-md-3 control-label text-left">New Order Admin
                                                                SMS</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="new_order_admin_sms"><input type="checkbox"
                                                                        name="new_order_admin_sms" class=""
                                                                        id="new_order_admin_sms" value="1"><label
                                                                        for="new_order_admin_sms">Send new order
                                                                        notification to the admin</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="new_order_sms"
                                                                class="col-md-3 control-label text-left">New Order
                                                                SMS</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="new_order_sms"><input type="checkbox"
                                                                        name="new_order_sms" class="" id="new_order_sms"
                                                                        value="1"><label for="new_order_sms">Send new order
                                                                        notification to the customer</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="sms_order_statuses[]-selectized"
                                                                class="col-md-3 control-label text-left">SMS Order
                                                                Statuses</label>
                                                            <div class="col-md-9"><select name="sms_order_statuses[]"
                                                                    class="selectize prevent-creation selectized"
                                                                    id="sms_order_statuses[]" multiple="multiple"
                                                                    tabindex="-1" style="display: none;"></select>
                                                                <div
                                                                    class="selectize-control selectize prevent-creation multi plugin-remove_button">
                                                                    <div class="selectize-input items not-full has-options">
                                                                        <input type="select-multiple" autocomplete="off"
                                                                            tabindex="" id="sms_order_statuses[]-selectized"
                                                                            style="width: 4px;"></div>
                                                                    <div class="selectize-dropdown multi selectize prevent-creation plugin-remove_button"
                                                                        style="display: none;">
                                                                        <div class="selectize-dropdown-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="mail">
                                            <h3 class="tab-content-title">Mail</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="box-content clearfix">
                                                        <div class="form-group"><label for="mail_from_address"
                                                                class="col-md-3 control-label text-left">Mail From
                                                                Address</label>
                                                            <div class="col-md-9"><input name="mail_from_address"
                                                                    class="form-control " id="mail_from_address" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_from_name"
                                                                class="col-md-3 control-label text-left">Mail From
                                                                Name</label>
                                                            <div class="col-md-9"><input name="mail_from_name"
                                                                    class="form-control " id="mail_from_name" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_host"
                                                                class="col-md-3 control-label text-left">Mail Host</label>
                                                            <div class="col-md-9"><input name="mail_host"
                                                                    class="form-control " id="mail_host" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_port"
                                                                class="col-md-3 control-label text-left">Mail Port</label>
                                                            <div class="col-md-9"><input name="mail_port"
                                                                    class="form-control " id="mail_port" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_username"
                                                                class="col-md-3 control-label text-left">Mail
                                                                Username</label>
                                                            <div class="col-md-9"><input name="mail_username"
                                                                    class="form-control " id="mail_username" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_password"
                                                                class="col-md-3 control-label text-left">Mail
                                                                Password</label>
                                                            <div class="col-md-9"><input name="mail_password"
                                                                    class="form-control " id="mail_password" value=""
                                                                    type="password"></div>
                                                        </div>
                                                        <div class="form-group"><label for="mail_encryption"
                                                                class="col-md-3 control-label text-left">Mail
                                                                Encryption</label>
                                                            <div class="col-md-9"><select name="mail_encryption"
                                                                    class="form-control custom-select-black "
                                                                    id="mail_encryption">
                                                                    <option value="">Please Select</option>
                                                                    <option value="ssl">SSL</option>
                                                                    <option value="tls">Tls</option>
                                                                </select></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="box-content clearfix">
                                                        <h4 class="section-title">Customer Notification Settings</h4>
    
                                                        <div class="form-group"><label for="welcome_email"
                                                                class="col-md-3 control-label text-left">Welcome
                                                                Email</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="welcome_email"><input type="checkbox"
                                                                        name="welcome_email" class="" id="welcome_email"
                                                                        value="1"><label for="welcome_email">Send welcome
                                                                        email after registration</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="box-content clearfix">
                                                        <h4 class="section-title">Order Notification Settings</h4>
    
                                                        <div class="form-group"><label for="admin_order_email"
                                                                class="col-md-3 control-label text-left">New Order Admin
                                                                Email</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="admin_order_email"><input type="checkbox"
                                                                        name="admin_order_email" class=""
                                                                        id="admin_order_email" value="1"><label
                                                                        for="admin_order_email">Send new order notification
                                                                        to the admin</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="invoice_email"
                                                                class="col-md-3 control-label text-left">Invoice
                                                                Email</label>
                                                            <div class="col-md-9">
                                                                <div class="checkbox"><input type="hidden" value="0"
                                                                        name="invoice_email"><input type="checkbox"
                                                                        name="invoice_email" class="" id="invoice_email"
                                                                        value="1"><label for="invoice_email">Send invoice
                                                                        email to the customer after checkout</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label
                                                                for="email_order_statuses[]-selectized"
                                                                class="col-md-3 control-label text-left">Email Order
                                                                Statuses</label>
                                                            <div class="col-md-9"><select name="email_order_statuses[]"
                                                                    class="selectize prevent-creation selectized"
                                                                    id="email_order_statuses[]" multiple="multiple"
                                                                    tabindex="-1" style="display: none;"></select>
                                                                <div
                                                                    class="selectize-control selectize prevent-creation multi plugin-remove_button">
                                                                    <div class="selectize-input items not-full has-options">
                                                                        <input type="select-multiple" autocomplete="off"
                                                                            tabindex=""
                                                                            id="email_order_statuses[]-selectized"
                                                                            style="width: 4px;"></div>
                                                                    <div class="selectize-dropdown multi selectize prevent-creation plugin-remove_button"
                                                                        style="display: none;">
                                                                        <div class="selectize-dropdown-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="newsletter">
                                            <h3 class="tab-content-title">Newsletter</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="newsletter_enabled"
                                                            class="col-md-3 control-label text-left">Newsletter</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="newsletter_enabled"><input type="checkbox"
                                                                    name="newsletter_enabled" class=""
                                                                    id="newsletter_enabled" value="1"><label
                                                                    for="newsletter_enabled">Allow customers to subscribe to
                                                                    your newsletter</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="mailchimp_api_key"
                                                            class="col-md-3 control-label text-left">Mailchimp API
                                                            Key</label>
                                                        <div class="col-md-9"><input name="mailchimp_api_key"
                                                                class="form-control " id="mailchimp_api_key" value=""
                                                                type="password"></div>
                                                    </div>
                                                    <div class="form-group"><label for="mailchimp_list_id"
                                                            class="col-md-3 control-label text-left">Mailchimp List
                                                            ID</label>
                                                        <div class="col-md-9"><input name="mailchimp_list_id"
                                                                class="form-control " id="mailchimp_list_id" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="custom_css_js">
                                            <h3 class="tab-content-title">Custom CSS/JS</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="custom_header_assets"
                                                            class="col-md-3 control-label text-left">Header</label>
                                                        <div class="col-md-9"><textarea name="custom_header_assets"
                                                                class="form-control " id="custom_header_assets" rows="10"
                                                                cols="10"></textarea></div>
                                                    </div>
                                                    <div class="form-group"><label for="custom_footer_assets"
                                                            class="col-md-3 control-label text-left">Footer</label>
                                                        <div class="col-md-9"><textarea name="custom_footer_assets"
                                                                class="form-control " id="custom_footer_assets" rows="10"
                                                                cols="10"></textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="facebook">
                                            <h3 class="tab-content-title">Facebook</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="facebook_login_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="facebook_login_enabled"><input type="checkbox"
                                                                    name="facebook_login_enabled" class=""
                                                                    id="facebook_login_enabled" value="1"><label
                                                                    for="facebook_login_enabled">Enable Facebook
                                                                    Login</label></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="facebook-login-fields">
                                                        <div class="form-group"><label for="facebook_login_app_id"
                                                                class="col-md-3 control-label text-left">App ID<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="facebook_login_app_id"
                                                                    class="form-control " id="facebook_login_app_id"
                                                                    value="" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="facebook_login_app_secret"
                                                                class="col-md-3 control-label text-left">App Secret<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="facebook_login_app_secret"
                                                                    class="form-control " id="facebook_login_app_secret"
                                                                    value="" type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="google">
                                            <h3 class="tab-content-title">Google</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="google_login_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="google_login_enabled"><input type="checkbox"
                                                                    name="google_login_enabled" class=""
                                                                    id="google_login_enabled" value="1"><label
                                                                    for="google_login_enabled">Enable Google Login</label>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="google-login-fields">
                                                        <div class="form-group"><label for="google_login_client_id"
                                                                class="col-md-3 control-label text-left">Client ID<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="google_login_client_id"
                                                                    class="form-control " id="google_login_client_id"
                                                                    value="" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="google_login_client_secret"
                                                                class="col-md-3 control-label text-left">Client Secret<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="google_login_client_secret"
                                                                    class="form-control " id="google_login_client_secret"
                                                                    value="" type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="free_shipping">
                                            <h3 class="tab-content-title">Free Shipping</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="free_shipping_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="free_shipping_enabled"><input type="checkbox"
                                                                    name="free_shipping_enabled" class=""
                                                                    id="free_shipping_enabled" value="1"><label
                                                                    for="free_shipping_enabled">Enable Free Shipping</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[free_shipping_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input
                                                                name="translatable[free_shipping_label]"
                                                                class="form-control " id="translatable[free_shipping_label]"
                                                                value="Free Shipping" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="free_shipping_min_amount"
                                                            class="col-md-3 control-label text-left">Minimum Amount</label>
                                                        <div class="col-md-9"><input name="free_shipping_min_amount"
                                                                class="form-control " id="free_shipping_min_amount" value=""
                                                                type="number"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="local_pickup">
                                            <h3 class="tab-content-title">Local Pickup</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="local_pickup_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="local_pickup_enabled"><input type="checkbox"
                                                                    name="local_pickup_enabled" class=""
                                                                    id="local_pickup_enabled" value="1"><label
                                                                    for="local_pickup_enabled">Enable Local Pickup</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[local_pickup_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[local_pickup_label]"
                                                                class="form-control " id="translatable[local_pickup_label]"
                                                                value="Local Pickup" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="local_pickup_cost"
                                                            class="col-md-3 control-label text-left">Cost<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="local_pickup_cost"
                                                                class="form-control " id="local_pickup_cost" value="0"
                                                                min="0" type="number"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="flat_rate">
                                            <h3 class="tab-content-title">Flat Rate</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="flat_rate_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="flat_rate_enabled"><input type="checkbox"
                                                                    name="flat_rate_enabled" class="" id="flat_rate_enabled"
                                                                    value="1"><label for="flat_rate_enabled">Enable Flat
                                                                    Rate</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[flat_rate_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[flat_rate_label]"
                                                                class="form-control " id="translatable[flat_rate_label]"
                                                                value="Flat Rate" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="flat_rate_cost"
                                                            class="col-md-3 control-label text-left">Cost<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="flat_rate_cost"
                                                                class="form-control " id="flat_rate_cost" value="0" min="0"
                                                                type="number"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="paypal">
                                            <h3 class="tab-content-title">PayPal</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="paypal_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="paypal_enabled"><input type="checkbox"
                                                                    name="paypal_enabled" class="" id="paypal_enabled"
                                                                    value="1"><label for="paypal_enabled">Enable
                                                                    PayPal</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[paypal_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[paypal_label]"
                                                                class="form-control " id="translatable[paypal_label]"
                                                                value="PayPal" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[paypal_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[paypal_description]"
                                                                class="form-control " id="translatable[paypal_description]"
                                                                rows="3" cols="10">Pay via your PayPal account.</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="paypal_test_mode"
                                                            class="col-md-3 control-label text-left">Sandbox</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="paypal_test_mode"><input type="checkbox"
                                                                    name="paypal_test_mode" class="" id="paypal_test_mode"
                                                                    value="1"><label for="paypal_test_mode">Use sandbox for
                                                                    test payments</label></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="paypal-fields">
                                                        <div class="form-group"><label for="paypal_client_id"
                                                                class="col-md-3 control-label text-left">Client ID<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="paypal_client_id"
                                                                    class="form-control " id="paypal_client_id" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="paypal_secret"
                                                                class="col-md-3 control-label text-left">Secret<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="paypal_secret"
                                                                    class="form-control " id="paypal_secret" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="stripe">
                                            <h3 class="tab-content-title">Stripe</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="stripe_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="stripe_enabled"><input type="checkbox"
                                                                    name="stripe_enabled" class="" id="stripe_enabled"
                                                                    value="1"><label for="stripe_enabled">Enable
                                                                    Stripe</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[stripe_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[stripe_label]"
                                                                class="form-control " id="translatable[stripe_label]"
                                                                value="Stripe" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[stripe_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[stripe_description]"
                                                                class="form-control " id="translatable[stripe_description]"
                                                                rows="3" cols="10">Pay via credit or debit card.</textarea>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="stripe-fields">
                                                        <div class="form-group"><label for="stripe_publishable_key"
                                                                class="col-md-3 control-label text-left">Publishable
                                                                Key<span class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="stripe_publishable_key"
                                                                    class="form-control " id="stripe_publishable_key"
                                                                    value="" type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="stripe_secret_key"
                                                                class="col-md-3 control-label text-left">Secret Key<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="stripe_secret_key"
                                                                    class="form-control " id="stripe_secret_key" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="paytm">
                                            <h3 class="tab-content-title">Paytm</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="paytm_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="paytm_enabled"><input type="checkbox"
                                                                    name="paytm_enabled" class="" id="paytm_enabled"
                                                                    value="1"><label for="paytm_enabled">Enable
                                                                    Paytm</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[paytm_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[paytm_label]"
                                                                class="form-control " id="translatable[paytm_label]"
                                                                value="Paytm" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[paytm_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[paytm_description]" class="form-control "
                                                                id="translatable[paytm_description]" rows="3"
                                                                cols="10">The best payment gateway provider in India for e-payment through credit card, debit card &amp; net banking.</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="paytm_test_mode"
                                                            class="col-md-3 control-label text-left">Sandbox</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="paytm_test_mode"><input type="checkbox"
                                                                    name="paytm_test_mode" class="" id="paytm_test_mode"
                                                                    value="1"><label for="paytm_test_mode">Use sandbox for
                                                                    test payments</label></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="paytm-fields">
                                                        <div class="form-group"><label for="paytm_merchant_id"
                                                                class="col-md-3 control-label text-left">Merchant ID<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="paytm_merchant_id"
                                                                    class="form-control " id="paytm_merchant_id" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="paytm_merchant_key"
                                                                class="col-md-3 control-label text-left">Merchant Key<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="paytm_merchant_key"
                                                                    class="form-control " id="paytm_merchant_key" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="razorpay">
                                            <h3 class="tab-content-title">Razorpay</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="razorpay_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="razorpay_enabled"><input type="checkbox"
                                                                    name="razorpay_enabled" class="" id="razorpay_enabled"
                                                                    value="1"><label for="razorpay_enabled">Enable
                                                                    Razorpay</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[razorpay_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[razorpay_label]"
                                                                class="form-control " id="translatable[razorpay_label]"
                                                                value="Razorpay" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[razorpay_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[razorpay_description]"
                                                                class="form-control "
                                                                id="translatable[razorpay_description]" rows="3"
                                                                cols="10">Pay securely by Credit or Debit card or Internet Banking through Razorpay.</textarea>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="razorpay-fields">
                                                        <div class="form-group"><label for="razorpay_key_id"
                                                                class="col-md-3 control-label text-left">Key Id<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="razorpay_key_id"
                                                                    class="form-control " id="razorpay_key_id" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="razorpay_key_secret"
                                                                class="col-md-3 control-label text-left">Key Secret<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="razorpay_key_secret"
                                                                    class="form-control " id="razorpay_key_secret" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="instamojo">
                                            <h3 class="tab-content-title">Instamojo</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="instamojo_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="instamojo_enabled"><input type="checkbox"
                                                                    name="instamojo_enabled" class="" id="instamojo_enabled"
                                                                    value="1"><label for="instamojo_enabled">Enable
                                                                    Instamojo</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[instamojo_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[instamojo_label]"
                                                                class="form-control " id="translatable[instamojo_label]"
                                                                value="Instamojo" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[instamojo_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[instamojo_description]"
                                                                class="form-control "
                                                                id="translatable[instamojo_description]" rows="3"
                                                                cols="10">CC/DB/NB/Wallets</textarea></div>
                                                    </div>
                                                    <div class="form-group"><label for="instamojo_test_mode"
                                                            class="col-md-3 control-label text-left">Sandbox</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="instamojo_test_mode"><input type="checkbox"
                                                                    name="instamojo_test_mode" class=""
                                                                    id="instamojo_test_mode" value="1"><label
                                                                    for="instamojo_test_mode">Use sandbox for test
                                                                    payments</label></div>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="instamojo-fields">
                                                        <div class="form-group"><label for="instamojo_api_key"
                                                                class="col-md-3 control-label text-left">API Key<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="instamojo_api_key"
                                                                    class="form-control " id="instamojo_api_key" value=""
                                                                    type="text"></div>
                                                        </div>
                                                        <div class="form-group"><label for="instamojo_auth_token"
                                                                class="col-md-3 control-label text-left">Auth Token<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><input name="instamojo_auth_token"
                                                                    class="form-control " id="instamojo_auth_token" value=""
                                                                    type="password"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="cod">
                                            <h3 class="tab-content-title">Cash On Delivery</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="cod_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="cod_enabled"><input type="checkbox"
                                                                    name="cod_enabled" class="" id="cod_enabled"
                                                                    value="1"><label for="cod_enabled">Enable Cash On
                                                                    Delivery</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[cod_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input name="translatable[cod_label]"
                                                                class="form-control " id="translatable[cod_label]"
                                                                value="Cash On Delivery" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[cod_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea name="translatable[cod_description]"
                                                                class="form-control " id="translatable[cod_description]"
                                                                rows="3" cols="10">Pay with cash upon delivery.</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="bank_transfer">
                                            <h3 class="tab-content-title">Bank Transfer</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="bank_transfer_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="bank_transfer_enabled"><input type="checkbox"
                                                                    name="bank_transfer_enabled" class=""
                                                                    id="bank_transfer_enabled" value="1"><label
                                                                    for="bank_transfer_enabled">Enable Bank Transfer</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[bank_transfer_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input
                                                                name="translatable[bank_transfer_label]"
                                                                class="form-control " id="translatable[bank_transfer_label]"
                                                                value="Bank Transfer" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label
                                                            for="translatable[bank_transfer_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[bank_transfer_description]"
                                                                class="form-control "
                                                                id="translatable[bank_transfer_description]" rows="3"
                                                                cols="10">Make your payment directly into our bank account. Please use your Order ID as the payment reference.</textarea>
                                                        </div>
                                                    </div>
    
                                                    <div class="hide" id="bank-transfer-fields">
                                                        <div class="form-group"><label
                                                                for="translatable[bank_transfer_instructions]"
                                                                class="col-md-3 control-label text-left">Instructions<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><textarea
                                                                    name="translatable[bank_transfer_instructions]"
                                                                    class="form-control "
                                                                    id="translatable[bank_transfer_instructions]" rows="3"
                                                                    cols="10"></textarea></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in " id="check_payment">
                                            <h3 class="tab-content-title">Check / Money Order</h3>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label for="check_payment_enabled"
                                                            class="col-md-3 control-label text-left">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox"><input type="hidden" value="0"
                                                                    name="check_payment_enabled"><input type="checkbox"
                                                                    name="check_payment_enabled" class=""
                                                                    id="check_payment_enabled" value="1"><label
                                                                    for="check_payment_enabled">Enable Check / Money
                                                                    Order</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="translatable[check_payment_label]"
                                                            class="col-md-3 control-label text-left">Label<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><input
                                                                name="translatable[check_payment_label]"
                                                                class="form-control " id="translatable[check_payment_label]"
                                                                value="Check / Money Order" type="text"></div>
                                                    </div>
                                                    <div class="form-group"><label
                                                            for="translatable[check_payment_description]"
                                                            class="col-md-3 control-label text-left">Description<span
                                                                class="m-l-5 text-red">*</span></label>
                                                        <div class="col-md-9"><textarea
                                                                name="translatable[check_payment_description]"
                                                                class="form-control "
                                                                id="translatable[check_payment_description]" rows="3"
                                                                cols="10">Please send a check to our store.</textarea></div>
                                                    </div>
    
                                                    <div class="hide" id="check-payment-fields">
                                                        <div class="form-group"><label
                                                                for="translatable[check_payment_instructions]"
                                                                class="col-md-3 control-label text-left">Instructions<span
                                                                    class="m-l-5 text-red">*</span></label>
                                                            <div class="col-md-9"><textarea
                                                                    name="translatable[check_payment_instructions]"
                                                                    class="form-control "
                                                                    id="translatable[check_payment_instructions]" rows="3"
                                                                    cols="10"></textarea></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="submit" class="btn btn-primary" data-loading="">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

<?php 
  include("layouts/footer.php")
?>